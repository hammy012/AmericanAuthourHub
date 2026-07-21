@extends('layouts.app')

@section('title', 'American Author Hub | Blog')

@section('content')

    <style>
        .blog-banner {
            padding: 60px 0;
            background: url('{{ asset('assets/imgs/main-back.png') }}') no-repeat center center/cover;
            color: #fff;
        }

        .blog-head h1 {
            color: #9F0B07;
        }

        .blog-sec {
            padding: 60px 0;
            background: #f7f9fc;
        }

        .blog-card {
            background: #fff;
            border-radius: 12px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(159, 11, 7, 0.06);
            transition: transform .20s ease, box-shadow .20s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(159, 11, 7, 0.08);
        }

        .blog-card .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .blog-card .card-body {
            padding: 20px;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }

        .blog-card .meta {
            font-size: 13px;
            color: #666;
            margin-bottom: 8px;
        }

        .blog-card h3 {
            margin: 0 0 10px 0;
            color: #002768;
            font-size: 20px;
        }

        .blog-card p.excerpt {
            color: #444;
            line-height: 1.6;
            margin-bottom: 16px;
            flex: 1 1 auto;
        }

        .read-more {
            align-self: flex-start;
            background: #9F0B07;
            color: #fff;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        @media (max-width:991px) {
            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width:767px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }

            .blog-card .card-img {
                height: 180px;
            }

            .blog-banner {
                padding: 40px 0;
            }
        }
    </style>


    <section class="service-banner py-5 section-white"
        style="background: url('{{ asset('assets/imgs/main-back.png') }}') no-repeat center center/cover;">
        <div class="container py-5">
            <div class="banner-head" data-aos="fade-right">
                <span class="gradient-badge mb-3"><i class="fa-solid fa-newspaper me-1"></i> Our Blogs</span>
                <h1 class="text-light fw-bold display-4">Inspiration, Insights & <span class="gradient-text-red">Expert Tips</span></h1>
                <p class="text-light opacity-90 fs-5 mt-3">
                    Discover the latest from our team — expert marketing advice, success stories, publishing insights, 
                    and creative ideas to help authors thrive. Stay informed and motivated.
                </p>
                <a href="#posts" class="btn-gradient-primary btn-lg mt-3"><i class="fa-solid fa-book-open me-2"></i> Explore Blogs</a>
            </div>
        </div>
    </section>



    <section class="blog-sec py-5 section-white" id="posts">
        <div class="container py-4">
    
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-md-8">
                    <span class="gradient-badge mb-2"><i class="fa-solid fa-rss text-danger me-1"></i> Latest Articles</span>
                    <h2 class="fw-bold display-6 mt-2">Discover Our <span class="gradient-text">Latest Posts</span></h2>
                    <p class="text-muted fs-6">Discover articles on book promotion, writing tips, publishing and author-career advice.</p>
                </div>
            </div>
    
            <div class="blog-grid">
                @foreach ($blogs as $index => $b)
                    <article class="blog-card custom-card" data-aos="fade-up" data-aos-delay="{{ 100 * (($index % 3) + 1) }}">
                        @php
                            // thumbnail fallback
                            $thumb = $b->thumbnail 
                                     ?? (is_array($b->images) && count($b->images) ? $b->images[0] : null)
                                     ?? 'assets/imgs/default-blog.jpg';
                        @endphp
    
                        <img src="{{ asset($thumb) }}" alt="{{ $b->title }}" class="card-img">
                        <div class="card-body">
                            <div class="meta text-muted small mb-2"><i class="fa-regular fa-calendar me-1"></i> {{ $b->date ? $b->date->format('F d, Y') : ($b->created_at->format('F d, Y')) }}</div>
    
                            <h3 class="fw-bold text-dark fs-5 mb-2">{{ $b->title }}</h3>
                            <p class="excerpt text-muted small mb-3">{{ \Illuminate\Support\Str::limit(strip_tags($b->description), 120) }}</p>
                            <a href="{{ route('blog', $b->slug) }}" class="btn-gradient-primary btn-sm"><i class="fa-solid fa-arrow-right me-1"></i> Read More</a>
                        </div>
                    </article>
                @endforeach
            </div>
    
            <div class="d-flex justify-content-center mt-5">
                {{ $blogs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
@include('layouts.contact')

@endsection
