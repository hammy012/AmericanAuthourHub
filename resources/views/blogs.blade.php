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


    <section class="service-banner"
        style="background: url('{{ asset('assets/imgs/main-back.png') }}') no-repeat center center/cover;">
        <div class="container">
            <div class="banner-head">
                <span style="font-weight:700;">Our Blogs</span>
                <h1>Inspiration, Insights & Expert Tips</h1>
                <p style="color:#fff;">
                    Discover the latest from our team — expert marketing advice, success stories, publishing insights, 
                    and creative ideas to help authors thrive. Stay informed and motivated.
                </p>
                <a href="javascript:;" class="project-btn popup-btn">Explore Blogs</a>
            </div>
        </div>
    </section>



    <section class="blog-sec">
        <div class="container">
    
            <div class="row mb-4">
                <div class="col-md-8">
                    <h2 style="color:#9F0B07; font-size: 36px;">Latest Posts</h2>
                    <p style="color:#333;" class="mt-3">Discover articles on book promotion, writing tips, publishing and author-career advice.</p>
                </div>
            </div>
    
            <div class="blog-grid">
                @foreach ($blogs as $b)
                    <article class="blog-card">
                        @php
                            // thumbnail fallback
                            $thumb = $b->thumbnail 
                                     ?? (is_array($b->images) && count($b->images) ? $b->images[0] : null)
                                     ?? 'assets/imgs/default-blog.jpg';
                        @endphp
    
                        <img src="{{ asset($thumb) }}" alt="{{ $b->title }}" class="card-img">
                        <div class="card-body">
                            <div class="meta">{{ $b->date ? $b->date->format('F d, Y') : ($b->created_at->format('F d, Y')) }} • {{ config('app.name') }} Team</div>
    
                            <h3>{{ $b->title }}</h3>
                            <p class="excerpt">{{ \Illuminate\Support\Str::limit(strip_tags($b->description), 120) }}</p>
                            <a href="{{ route('blog', $b->slug) }}" class="read-more">Read More</a>
                        </div>
                    </article>
                @endforeach
            </div>
    
            <div class="d-flex justify-content-center mt-4">
                {{ $blogs->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
@include('layouts.contact')

@endsection
