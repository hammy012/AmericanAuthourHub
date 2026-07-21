@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->title . ' | Ebook')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<style>
    /* slider + page styles */
    .post-carousel { border-radius: 12px; overflow: hidden; box-shadow: 0 6px 20px rgba(159,11,7,0.06); background:#fff; }
    .post-carousel .swiper-slide img { width:100%; height:420px; object-fit:cover; display:block; }
    @media (max-width:991px) { .post-carousel .swiper-slide img { height:260px; } }
    .post-carousel .swiper-thumb img { width:100%; height:64px; object-fit:cover; border-radius:6px; opacity:.8; }
    .swiper-thumb .swiper-slide-thumb-active img { opacity:1; box-shadow:0 6px 18px rgba(0,0,0,0.12); }
    .swiper-button-next, .swiper-button-prev { color:#9F0B07; }
    .swiper-pagination-bullet { background: rgba(0,0,0,0.3); }

    .single-banner { padding: 40px 0; background: #f7f9fc; }
    .single-article { padding: 60px 0; }
    .post-card { background: #fff; border-radius: 12px; box-shadow: 0 6px 20px rgba(159, 11, 7, 0.06); overflow: hidden; }
    .post-body { padding: 28px; color: #333; line-height: 1.8; }
    .post-title { color: #002768; margin-bottom: 8px; }
    .post-meta { color: #666; font-size: 14px; margin-bottom: 16px; }
    .post-content img { max-width: 100%; height: auto; }
    .sidebar .recent-card { background: #fff; border-radius: 10px; padding: 12px; margin-bottom: 12px; box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03); }
    @media (max-width:767px) { .single-article { padding: 30px 0; } }
</style>

<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-head">
                    <span style="color:#002768;font-weight:700;">Article</span>
                    <h1 style="color:#9F0B07;">{{ $blog->title }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="single-article">
<div class="container">
    <div class="row">

        <div class="col-lg-8">

            <article class="post-card">

                @php
                    // normalize images: support array, json string, single thumbnail, or absolute URLs
                    $images = $blog->images ?? [];
                    if (!is_array($images)) {
                        $images = $images ? (json_decode($images, true) ?: []) : [];
                    }
                    // if thumbnail exists and images empty, push it
                    if (empty($images) && !empty($blog->thumbnail)) {
                        $images[] = $blog->thumbnail;
                    }
                    // final fallback
                    if (empty($images)) {
                        $images[] = 'assets/imgs/default-blog.jpg';
                    }
                    // helper closure to get proper src (absolute or asset)
                    $getSrc = function($path) {
                        if (!$path) return asset('assets/imgs/default-blog.jpg');
                        return (Str::startsWith($path, ['http://','https://'])) ? $path : asset($path);
                    };
                @endphp

                <div class="post-carousel">
                    <!-- Main slider -->
                    <div class="swiper main-swiper">
                        <div class="swiper-wrapper">
                            @foreach($images as $idx => $img)
                                <div class="swiper-slide" data-index="{{ $idx }}">
                                    <img src="{{ (Str::startsWith($img, ['http://','https://']) ? $img : asset($img)) }}" alt="{{ $blog->title }} - {{ $idx+1 }}" loading="lazy">
                                </div>
                            @endforeach
                        </div>

                        <!-- navigation -->
                        <div class="swiper-button-prev" aria-label="Previous slide"></div>
                        <div class="swiper-button-next" aria-label="Next slide"></div>

                        <!-- pagination (dots) -->
                        <div class="swiper-pagination"></div>
                    </div>

                    @if(count($images) > 1)
                        <!-- Thumbs -->
                        <div class="swiper swiper-thumb mt-3" style="padding: 0 14px 14px;">
                            <div class="swiper-wrapper">
                                @foreach($images as $idx => $img)
                                    <div class="swiper-slide" style="width:80px;">
                                        <img src="{{ (Str::startsWith($img, ['http://','https://']) ? $img : asset($img)) }}" alt="Thumb {{ $idx+1 }}" loading="lazy">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>

                <div class="post-body">
                    <div class="post-meta">{{ $blog->date ? $blog->date->format('F d, Y') : $blog->created_at->format('F d, Y') }} • {{ config('app.name') }}</div>

                    <h2 class="post-title">{{ $blog->title }}</h2>

                    <div class="post-content">
                        {!! $blog->description !!}
                    </div>

                </div>

            </article>

        </div>

        <div class="col-lg-4 sidebar">
            <div class="mb-3">
                <h5 style="color:#002768;">Recent Posts</h5>
            </div>

            @foreach ($recentPosts as $rp)
                @php
                    $rthumb = $rp->thumbnail ?? (is_array($rp->images) && count($rp->images) ? $rp->images[0] : 'assets/imgs/default-blog.jpg');
                @endphp
                <div class="recent-card">
                    <div class="d-flex">
                        <div style="flex:0 0 76px; margin-right:10px;">
                            <img src="{{ (Str::startsWith($rthumb, ['http://','https://']) ? $rthumb : asset($rthumb)) }}" alt="{{ $rp->title }}" style="width:76px;height:54px;object-fit:cover;border-radius:6px;">
                        </div>
                        <div>
                            <a href="{{ route('blog', $rp->slug) }}" style="color:#002768;font-weight:700;">{{ \Illuminate\Support\Str::limit($rp->title, 60) }}</a>
                            <div style="font-size:13px;color:#666;">{{ $rp->date ? $rp->date->format('M d, Y') : $rp->created_at->format('M d, Y') }}</div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    try {
        const mainEl = document.querySelector('.main-swiper');
        if (!mainEl) {
            console.warn('Swiper: .main-swiper not found');
            return;
        }

        const slideCount = mainEl.querySelectorAll('.swiper-slide').length;
        const shouldLoop = slideCount > 1;

        // init thumbs first (if present)
        let thumbSwiper = null;
        const thumbEl = document.querySelector('.swiper-thumb');
        if (thumbEl) {
            thumbSwiper = new Swiper(thumbEl, {
                spaceBetween: 8,
                slidesPerView: Math.min(5, thumbEl.querySelectorAll('.swiper-slide').length),
                freeMode: true,
                watchSlidesProgress: true,
                breakpoints: {
                    0: { slidesPerView: 3 },
                    576: { slidesPerView: 4 },
                    768: { slidesPerView: 5 }
                }
            });
        }

        // init main swiper with thumbs option (if thumbSwiper exists, pass it)
        const mainSwiper = new Swiper(mainEl, {
            loop: shouldLoop,
            spaceBetween: 10,
            slidesPerView: 1,
            centeredSlides: false,
            preloadImages: false,
            lazy: { loadPrevNext: true },
            pagination: {
                el: mainEl.querySelector('.swiper-pagination'),
                clickable: true,
            },
            navigation: {
                nextEl: mainEl.querySelector('.swiper-button-next'),
                prevEl: mainEl.querySelector('.swiper-button-prev'),
            },
            keyboard: { enabled: true, onlyInViewport: true },
            effect: 'slide',
            speed: 500,
            thumbs: thumbSwiper ? { swiper: thumbSwiper } : undefined
        });

        // if no thumbs but multiple slides, add basic click behavior to go next on click
        if (!thumbSwiper && shouldLoop) {
            mainEl.querySelectorAll('.swiper-slide').forEach((slide, i) => {
                slide.addEventListener('click', () => {
                    mainSwiper.slideNext();
                });
            });
        }
    } catch (err) {
        console.error('Swiper init error:', err);
    }
});
</script>

@endsection
