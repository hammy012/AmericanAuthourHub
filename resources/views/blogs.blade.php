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
                <span style="font-weight:700;">Our Blog</span>
                <h1>Insights, Tips & Stories</h1>
                <p style="color:#fff;">
                    Read the latest from our team — marketing tips for authors, case studies, book publishing guides,
                    and more. Stay inspired and informed.
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
                    <p style="color:#333;" class="mt-3">Discover articles on book promotion, writing tips, publishing and
                        author-career
                        advice.</p>
                </div>
            </div>

            <div class="blog-grid">

                <!-- Blog Card 1 -->
                <article class="blog-card">
                    <img src="{{ asset('assets/imgs/blog1.avif') }}" alt="Blog 1" class="card-img">
                    <div class="card-body">
                        <div class="meta">November 06, 2025 • American Author Hub Team</div>
                        <h3>How to Market Your Book Effectively</h3>
                        <p class="excerpt">Discover practical book marketing tips that help authors reach a wider audience
                            and boost sales.</p>
                        <a href="{{ route('blog', ['slug' => 'blog']) }}" class="read-more">Read More</a>
                    </div>
                </article>Our Blog

                <!-- Blog Card 2 -->
                <article class="blog-card">
                    <img src="{{ asset('assets/imgs/blog2.avif') }}" alt="Blog 2" class="card-img">
                    <div class="card-body">
                        <div class="meta">November 04, 2025 • American Author Hub Team</div>
                        <h3>The Art of Writing Engaging Fiction</h3>
                        <p class="excerpt">Learn key techniques to make your story compelling, with strong characters and
                            emotional depth.</p>
                        <a href="{{ route('blog', ['slug' => 'blog']) }}" class="read-more">Read More</a>
                    </div>
                </article>

                <!-- Blog Card 3 -->
                <article class="blog-card">
                    <img src="{{ asset('assets/imgs/blog3.webp') }}" alt="Blog 3" class="card-img">
                    <div class="card-body">
                        <div class="meta">November 02, 2025 • American Author Hub Team</div>
                        <h3>Why Professional Editing Matters</h3>
                        <p class="excerpt">Editing turns a good manuscript into a great one. Here why you should never
                            skip it.</p>
                        <a href="{{ route('blog', ['slug' => 'blog']) }}" class="read-more">Read More</a>
                    </div>
                </article>

                <!-- Blog Card 4 -->
                <article class="blog-card">
                    <img src="{{ asset('assets/imgs/blog4.jpg') }}" alt="Blog 4" class="card-img">
                    <div class="card-body">
                        <div class="meta">October 30, 2025 • American Author Hub Team</div>
                        <h3>Self-Publishing vs Traditional Publishing</h3>
                        <p class="excerpt">Explore the pros and cons of both approaches to decide which suits your author
                            journey best.</p>
                        <a href="{{ route('blog', ['slug' => 'blog']) }}" class="read-more">Read More</a>
                    </div>
                </article>

            </div>
        </div>
    </section>
@include('layouts.contact')

@endsection
