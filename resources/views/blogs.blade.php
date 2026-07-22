@extends('layouts.app')

@section('title', 'Expert Book Writing & Publishing Insights | American Author Hub')
@section('meta_title', 'Expert Book Writing & Publishing Insights | American Author Hub')
@section('meta_description', 'Discover self-publishing guides, ghostwriting tips, book marketing strategies, and editing advice to turn your manuscript into a bestseller.')
@section('meta_keywords', 'self publishing tips, book marketing guide, book editing tips, ghostwriting guide, publishing blogs')

@section('content')

<style>
    /* Premium Blog Styling */
    .blog-banner {
        position: relative;
        padding: 90px 0;
        background: radial-gradient(100% 100% at 50% 0%, #ffffff 0%, #f6f8fb 100%);
        overflow: hidden;
        border-bottom: 1px solid rgba(226, 232, 240, 0.8);
    }
    
    .text-navy {
        color: #001529 !important;
    }

    .fw-extrabold {
        font-weight: 800;
    }

    .gradient-text {
        background: linear-gradient(135deg, #9F0B07 0%, #002768 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    .banner-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(159, 11, 7, 0.08);
        color: #9F0B07;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.5px;
        padding: 5px 16px;
        border-radius: 20px;
        border: 1px solid rgba(159, 11, 7, 0.12);
        text-transform: uppercase;
        gap: 6px;
    }

    .about-image-wrapper {
        border-radius: 20px;
        overflow: hidden;
        border: 4px solid #ffffff;
        box-shadow: 0 15px 40px rgba(0, 21, 41, 0.08);
        background: #fff;
        padding: 10px;
        display: inline-block;
    }

    .blog-sec {
        background-color: #f8fafc;
        padding: 80px 0;
    }

    /* Modern Card Layout */
    .blog-card-modern {
        background: #ffffff;
        border: 1px solid rgba(226, 232, 240, 0.8);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 39, 104, 0.015);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .blog-card-modern:hover {
        transform: translateY(-8px);
        border-color: rgba(159, 11, 7, 0.2);
        box-shadow: 0 20px 45px rgba(159, 11, 7, 0.06);
    }

    .blog-card-img-wrap {
        position: relative;
        overflow: hidden;
        height: 230px;
        background-color: #001529;
    }

    .blog-card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .blog-card-modern:hover .blog-card-img-wrap img {
        transform: scale(1.08);
    }

    .blog-card-overlay-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: var(--brand-red, #9F0B07);
        color: #ffffff;
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 5px 12px;
        border-radius: 6px;
        box-shadow: 0 4px 10px rgba(159, 11, 7, 0.3);
        z-index: 2;
    }

    .blog-card-body {
        padding: 26px;
        flex: 1 1 auto;
        display: flex;
        flex-direction: column;
    }

    .blog-card-meta {
        font-family: var(--font-body);
        font-size: 13px;
        color: #64748b;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .blog-card-meta span {
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .blog-card-title {
        font-family: var(--font-heading);
        font-weight: 800;
        font-size: 19px;
        line-height: 1.45;
        color: var(--brand-navy, #001529);
        margin-bottom: 12px;
        transition: color 0.3s ease;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-decoration: none;
    }

    .blog-card-title:hover {
        color: var(--brand-red, #9F0B07);
    }

    .blog-card-modern:hover .blog-card-title {
        color: var(--brand-red, #9F0B07);
    }

    .blog-card-excerpt {
        font-family: var(--font-body);
        font-size: 14px;
        color: #475569;
        line-height: 1.6;
        margin-bottom: 20px;
        flex: 1 1 auto;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-read-more {
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 14px;
        color: var(--brand-red, #9F0B07);
        text-decoration: none !important;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.3s ease;
        padding-top: 15px;
        border-top: 1px solid rgba(226, 232, 240, 0.6);
        width: 100%;
    }

    .blog-read-more i {
        transition: transform 0.3s ease;
    }

    .blog-card-modern:hover .blog-read-more {
        color: var(--brand-red-dark, #820805);
    }

    .blog-card-modern:hover .blog-read-more i {
        transform: translateX(5px);
    }

    /* Popular Tags Visual Filter Block */
    .filter-tags-block {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 30px;
    }

    .filter-tag-pill {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        color: #475569;
        padding: 8px 18px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none !important;
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
    }

    .filter-tag-pill:hover, .filter-tag-pill.active {
        background: var(--brand-red, #9F0B07);
        border-color: var(--brand-red, #9F0B07);
        color: #ffffff;
        box-shadow: 0 4px 12px rgba(159, 11, 7, 0.25);
        transform: translateY(-1px);
    }

    /* Pagination Redesign styling */
    .pagination {
        gap: 6px;
    }
    .pagination .page-item .page-link {
        border-radius: 8px !important;
        color: var(--brand-navy, #001529);
        border: 1px solid #e2e8f0;
        padding: 10px 16px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .pagination .page-item.active .page-link, 
    .pagination .page-item .page-link:hover {
        background-color: var(--brand-red, #9F0B07) !important;
        border-color: var(--brand-red, #9F0B07) !important;
        color: #fff !important;
        box-shadow: 0 4px 12px rgba(159, 11, 7, 0.25);
    }

</style>

<!-- Banner -->
<section class="blog-banner d-flex align-items-center">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="900">
                <span class="banner-badge">
                    <i class="fa-solid fa-newspaper"></i> American Author Hub Blog
                </span>
                <h1 class="text-navy fw-extrabold display-5 mt-3 mb-3">
                    Inspiration, Insights & <br><span class="gradient-text">Expert Publishing Tips</span>
                </h1>
                <p class="text-muted fs-5 mb-4" style="max-width: 600px; line-height: 1.6;">
                    Discover expert guides, publishing industry secrets, book marketing strategies, and ghostwriting tips crafted by USA's leading book coaches.
                </p>
                <div class="filter-tags-block">
                    <a href="javascript:;" class="filter-tag-pill active">All Topics</a>
                    <a href="javascript:;" class="filter-tag-pill">Self-Publishing</a>
                    <a href="javascript:;" class="filter-tag-pill">Ghostwriting</a>
                    <a href="javascript:;" class="filter-tag-pill">Book Marketing</a>
                    <a href="javascript:;" class="filter-tag-pill">Book Editing</a>
                </div>
            </div>
            <div class="col-lg-5 text-center d-none d-lg-block" data-aos="zoom-in" data-aos-duration="900">
                <div class="about-image-wrapper">
                    <img src="{{ asset('assets/imgs/main2.png') }}" alt="Expert Publishing Tips" class="img-fluid" style="max-height: 340px; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section class="blog-sec" id="posts">
    <div class="container">
        
        <!-- Header -->
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-md-8">
                <span class="text-uppercase text-danger fw-bold small tracking-wider">— LATEST ARTICLES —</span>
                <h2 class="fw-bold display-6 mt-2 mb-2 text-dark">Discover Our <span class="text-danger">Latest Posts</span></h2>
                <p class="text-muted fs-6">Stay up-to-date with our expert insights on book writing, editing, cover design, and Amazon marketing.</p>
            </div>
        </div>

        <!-- Grid -->
        <div class="row g-4">
            @foreach ($blogs as $index => $b)
                @php
                    $thumb = $b->thumbnail 
                             ?? (is_array($b->images) && count($b->images) ? $b->images[0] : null)
                             ?? 'assets/imgs/default-blog.jpg';
                             
                    // Read time calculation
                    $wordCount = str_word_count(strip_tags($b->description));
                    $readTime = max(1, ceil($wordCount / 200));
                    
                    // Display category
                    $category = count($b->tags) ? $b->tags[0] : 'Publishing';
                @endphp
                <div class="col-lg-4 col-md-6 mb-2" data-aos="fade-up" data-aos-delay="{{ 100 * (($index % 3) + 1) }}">
                    <article class="blog-card-modern">
                        <div class="blog-card-img-wrap">
                            <span class="blog-card-overlay-badge">{{ $category }}</span>
                            <a href="{{ route('blog', $b->slug) }}">
                                <img src="{{ asset($thumb) }}" alt="{{ $b->title }}" loading="lazy">
                            </a>
                        </div>
                        <div class="blog-card-body">
                            <div class="blog-card-meta">
                                <span><i class="fa-regular fa-calendar"></i> {{ $b->date ? $b->date->format('M d, Y') : $b->created_at->format('M d, Y') }}</span>
                                <span><i class="fa-regular fa-clock"></i> {{ $readTime }} Min Read</span>
                            </div>
                            <a href="{{ route('blog', $b->slug) }}" class="blog-card-title">{{ $b->title }}</a>
                            <p class="blog-card-excerpt">{{ strip_tags($b->description) }}</p>
                            <a href="{{ route('blog', $b->slug) }}" class="blog-read-more">
                                Read Full Article <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">
            {{ $blogs->links('pagination::bootstrap-4') }}
        </div>
    </div>
</section>

@include('layouts.contact')

@endsection
