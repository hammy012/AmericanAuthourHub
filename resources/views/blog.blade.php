@extends('layouts.app')

@section('title', ($blog->meta_title ?? $blog->title) . ' | American Author Hub')
@section('meta_title', $blog->meta_title ?? $blog->title)
@section('meta_description', $blog->meta_description ?? strip_tags(\Illuminate\Support\Str::limit($blog->description, 160)))
@section('meta_keywords', is_array($blog->tags) && count($blog->tags) ? implode(', ', $blog->tags) : 'publishing blog, american author hub')

@section('content')

@php
    // Images extraction
    $images = $blog->images ?? [];
    if (!is_array($images)) {
        $images = $images ? (json_decode($images, true) ?: []) : [];
    }
    if (empty($images) && !empty($blog->thumbnail)) {
        $images[] = $blog->thumbnail;
    }
    if (empty($images)) {
        $images[] = 'assets/imgs/default-blog.jpg';
    }
    
    $mainImage = $images[0];
    $category = is_array($blog->tags) && count($blog->tags) ? $blog->tags[0] : 'Publishing';
    
    // Read time
    $wordCount = str_word_count(strip_tags($blog->description));
    $readTime = max(1, ceil($wordCount / 200));
@endphp

<style>
    /* Single Blog Styles */
    .blog-detail-banner {
        padding: 70px 0 50px;
        background: radial-gradient(100% 100% at 50% 0%, #ffffff 0%, #f6f8fb 100%);
        border-bottom: 1px solid rgba(226, 232, 240, 0.8);
    }

    .text-navy {
        color: #001529 !important;
    }

    .detail-category-badge {
        display: inline-block;
        background: rgba(159, 11, 7, 0.08);
        color: #9F0B07;
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        padding: 5px 16px;
        border-radius: 20px;
        border: 1px solid rgba(159, 11, 7, 0.12);
        margin-top: 15px;
    }

    .detail-hero-title {
        font-family: var(--font-heading);
        font-weight: 800;
        font-size: 34px;
        line-height: 1.35;
        color: #001529;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    @media (max-width: 767px) {
        .detail-hero-title {
            font-size: 25px;
        }
    }

    .detail-hero-meta {
        font-family: var(--font-body);
        font-size: 13.5px;
        color: #64748b;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 20px;
    }

    .detail-hero-meta span {
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .blog-detail-sec {
        background-color: #f8fafc;
        padding: 60px 0;
    }

    .detail-card {
        background: #ffffff;
        border: 1px solid rgba(226, 232, 240, 0.8);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 39, 104, 0.015);
        overflow: hidden;
        margin-bottom: 30px;
    }

    .detail-img-wrap {
        width: 100%;
        max-height: 480px;
        overflow: hidden;
        position: relative;
    }

    .detail-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .detail-body {
        padding: 40px;
    }

    @media (max-width: 767px) {
        .detail-body {
            padding: 24px;
        }
    }

    /* Content Typography overrides */
    .detail-content {
        font-family: var(--font-body);
        font-size: 16px;
        line-height: 1.85;
        color: #334155;
    }

    .detail-content h3 {
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 22px;
        color: var(--brand-navy, #001529);
        margin-top: 35px;
        margin-bottom: 15px;
    }

    .detail-content p {
        margin-bottom: 20px;
    }

    .detail-content blockquote {
        margin: 30px 0;
        padding: 20px 25px;
        background: #f8fafc;
        border-left: 4px solid var(--brand-red, #9F0B07);
        border-radius: 0 12px 12px 0;
        font-size: 17px;
        font-style: italic;
        color: #475569;
        line-height: 1.7;
    }

    .detail-content ul, .detail-content ol {
        margin-bottom: 25px;
        padding-left: 20px;
    }

    .detail-content li {
        margin-bottom: 10px;
    }

    /* Tag pills at the bottom */
    .detail-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid #f1f5f9;
    }

    .tag-badge {
        background: #f1f5f9;
        color: #475569;
        border: 1px solid #e2e8f0;
        font-size: 13px;
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 50px;
        transition: all 0.3s ease;
        text-decoration: none !important;
    }

    .tag-badge:hover {
        background: var(--brand-navy, #001529);
        color: #ffffff;
        border-color: var(--brand-navy, #001529);
    }

    /* Share block */
    .share-block {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 30px;
    }
    .share-btn {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff !important;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    .share-btn.fb { background-color: #3b5998; }
    .share-btn.tw { background-color: #1da1f2; }
    .share-btn.ln { background-color: #0077b5; }
    .share-btn:hover {
        transform: translateY(-2px);
        opacity: 0.9;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    /* Sidebar styles */
    .sidebar-widget {
        background: #ffffff;
        border: 1px solid rgba(226, 232, 240, 0.8);
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 39, 104, 0.015);
        margin-bottom: 30px;
    }

    .widget-title {
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 18px;
        color: var(--brand-navy, #001529);
        margin-bottom: 22px;
        padding-bottom: 12px;
        border-bottom: 2px solid var(--brand-red, #9F0B07);
        display: inline-block;
    }

    .recent-post-item {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f1f5f9;
    }

    .recent-post-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .recent-post-img {
        width: 75px;
        height: 60px;
        border-radius: 8px;
        overflow: hidden;
        flex-shrink: 0;
        background-color: #001529;
    }

    .recent-post-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .recent-post-item:hover .recent-post-img img {
        transform: scale(1.08);
    }

    .recent-post-info {
        flex-grow: 1;
    }

    .recent-post-title {
        font-family: var(--font-heading);
        font-weight: 700;
        font-size: 14.5px;
        line-height: 1.4;
        color: var(--brand-navy, #001529);
        text-decoration: none !important;
        transition: color 0.3s ease;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 4px;
    }

    .recent-post-title:hover {
        color: var(--brand-red, #9F0B07);
    }

    .recent-post-date {
        font-family: var(--font-body);
        font-size: 12px;
        color: #64748b;
    }

    /* Sidebar CTA Card */
    .sidebar-cta-widget {
        background: radial-gradient(circle at top right, rgba(0, 21, 41, 0.98), rgba(0, 10, 20, 0.99)),
                    url('{{ asset('assets/imgs/main-back.png') }}') no-repeat center center/cover;
        background-blend-mode: overlay;
        border: none;
        border-radius: 20px;
        padding: 35px 30px;
        color: #fff;
        text-align: center;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        position: relative;
        overflow: hidden;
    }

    .sidebar-cta-widget::before {
        content: '';
        position: absolute;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(159, 11, 7, 0.25) 0%, transparent 70%);
        bottom: -50px;
        right: -50px;
        pointer-events: none;
    }

    .sidebar-cta-title {
        font-family: var(--font-heading);
        font-weight: 800;
        font-size: 22px;
        color: #fff;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .sidebar-cta-text {
        font-family: var(--font-body);
        font-size: 13.5px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 25px;
    }
</style>

<!-- Banner -->
<section class="blog-detail-banner">
    <div class="container" data-aos="fade-right" data-aos-duration="900">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-3">
                    <a href="{{ route('blogss') }}" class="text-navy opacity-75 text-decoration-none small hover-opacity-100 fw-bold">
                        <i class="fa-solid fa-arrow-left-long me-1 text-danger"></i> Back to All Articles
                    </a>
                </div>
                <span class="detail-category-badge">{{ $category }}</span>
                <h1 class="detail-hero-title">{{ $blog->title }}</h1>
                <div class="detail-hero-meta">
                    <span><i class="fa-regular fa-calendar text-danger"></i> {{ $blog->date ? $blog->date->format('F d, Y') : $blog->created_at->format('F d, Y') }}</span>
                    <span><i class="fa-solid fa-user-nib text-danger"></i> American Author Hub</span>
                    <span><i class="fa-regular fa-clock text-danger"></i> {{ $readTime }} Min Read</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Details Section -->
<section class="blog-detail-sec">
    <div class="container">
        <div class="row g-4">
            
            <!-- Main Content -->
            <div class="col-lg-8">
                <article class="detail-card" data-aos="fade-up" data-aos-duration="900">
                    
                    <!-- Image Header -->
                    <div class="detail-img-wrap">
                        <img src="{{ (\Illuminate\Support\Str::startsWith($mainImage, ['http://','https://']) ? $mainImage : asset($mainImage)) }}" alt="{{ $blog->title }}">
                    </div>

                    <div class="detail-body">
                        <!-- Content Description -->
                        <div class="detail-content">
                            {!! $blog->description !!}
                        </div>

                        <!-- Tags and Share block -->
                        @if(is_array($blog->tags) && count($blog->tags))
                            <div class="detail-tags">
                                @foreach($blog->tags as $tag)
                                    <a href="javascript:;" class="tag-badge">#{{ $tag }}</a>
                                @endforeach
                            </div>
                        @endif

                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mt-4 pt-3 border-top border-light">
                            <div class="share-block">
                                <span class="small text-muted fw-bold text-uppercase">Share This Post:</span>
                                <a href="https://facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="share-btn fb"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}" target="_blank" class="share-btn tw"><i class="fa-brands fa-twitter"></i></a>
                                <a href="https://linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}" target="_blank" class="share-btn ln"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>

                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                
                <!-- Recent Posts widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="widget-title">Recent Posts</h5>
                    <div class="recent-posts-list">
                        @foreach ($recentPosts as $rp)
                            @php
                                $rthumb = $rp->thumbnail ?? (is_array($rp->images) && count($rp->images) ? $rp->images[0] : 'assets/imgs/default-blog.jpg');
                            @endphp
                            <div class="recent-post-item">
                                <div class="recent-post-img">
                                    <a href="{{ route('blog', $rp->slug) }}">
                                        <img src="{{ (\Illuminate\Support\Str::startsWith($rthumb, ['http://','https://']) ? $rthumb : asset($rthumb)) }}" alt="{{ $rp->title }}" loading="lazy">
                                    </a>
                                </div>
                                <div class="recent-post-info">
                                    <a href="{{ route('blog', $rp->slug) }}" class="recent-post-title">{{ $rp->title }}</a>
                                    <div class="recent-post-date">{{ $rp->date ? $rp->date->format('M d, Y') : $rp->created_at->format('M d, Y') }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Call to Action widget -->
                <div class="sidebar-cta-widget text-center" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="sidebar-cta-title">Ready to Become a Bestselling Author?</h4>
                    <p class="sidebar-cta-text">
                        Partner with USA's premier ghostwriting and publishing specialists. Let’s bring your story to life.
                    </p>
                    <a href="{{ route('contact-us') }}" class="btn-red-pill btn-sm w-100 py-3">
                        <i class="fa-solid fa-paper-plane me-1"></i> Start Your Project
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

@endsection
