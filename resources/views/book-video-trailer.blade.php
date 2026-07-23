@extends('layouts.app')

@section('title', 'American Author Hub | Our Featured Work & Bestsellers')

@section('content')

    <!-- Hero Header -->
    <section class="position-relative hero-bg-ref overflow-hidden d-flex align-items-center"
        style="padding-top: 60px !important; padding-bottom: 60px !important; min-height: 380px; background: #ffffff;">
        <div class="container py-lg-3 text-center" data-aos="fade-up" data-aos-duration="900">
            <span class="hero-subtitle text-uppercase d-inline-block mb-3">
                <i class="fa-solid fa-feather-pointed me-1"></i> PORTFOLIO & PUBLISHED MASTERPIECES
            </span>
            <h1 class="hero-title mb-3" style="font-size: 2.8rem !important; line-height: 1.25 !important;">
                Discover Our Featured <span class="text-brand-red">Published Works</span>
            </h1>
            <p class="hero-paragraph mb-4 mx-auto" style="max-width: 680px; font-size: 16px !important;">
                From KDP #1 Bestsellers to award-nominated memoirs and corporate leadership guides — explore how our team of expert writers, editors, and designers turn author visions into published success.
            </p>
            <div class="d-flex justify-content-center flex-wrap" style="gap: 15px !important;">
                <a href="{{ route('home') }}#pricing" class="btn-red-pill" style="margin-right: 12px !important;">
                    <i class="fa-solid fa-paper-plane me-1"></i> Start Your Book Project
                </a>
                <a href="#our-work-grid" class="btn-brand-outline">
                    Browse Portfolio <i class="fa-solid fa-chevron-down ms-1 small"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Our Work Showcase Grid Section -->
    <section class="our-work-sec" id="our-work-grid">
        <div class="container py-4">

            <!-- Centered Header -->
            <div class="banner-head text-center mb-5" data-aos="fade-up">
                <span>
                    <i class="fa-solid fa-feather-pointed"></i> OUR SUCCESSFUL PROJECTS <i class="fa-solid fa-feather-pointed"></i>
                </span>
                <h2>Featured Books & <span class="text-danger">Author Masterpieces</span></h2>
                <p class="testi-sub text-muted mx-auto" style="max-width: 700px;">
                    Take a look at some of our recent bestselling books, professionally ghostwritten, edited, designed, and published for global reach.
                </p>
                <div class="testi-header-divider">
                    — <i class="fa-solid fa-star"></i> —
                </div>
            </div>

            <!-- Portfolio Grid Row -->
            <div class="row g-4 justify-content-center">

                <!-- Work 1 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="our-work-card">
                        <div class="our-work-img-wrapper">
                            <span class="our-work-badge">FICTION NOVEL</span>
                            <img src="{{ asset('assets/imgs/our_work_book1.png') }}" alt="Echoes of Eternity">
                        </div>
                        <div class="our-work-body">
                            <h4 class="our-work-title">Echoes of Eternity</h4>
                            <p class="our-work-desc">
                                A gripping mystery & fantasy novel that achieved #1 New Release status on Amazon KDP.
                            </p>
                            <div class="our-work-meta">
                                <span class="our-work-rating">
                                    <i class="fa-solid fa-star"></i> 5.0 (KDP Bestseller)
                                </span>
                                <a href="{{ route('contact-us') }}" class="our-work-btn">
                                    Order Similar <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Work 2 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="our-work-card">
                        <div class="our-work-img-wrapper">
                            <span class="our-work-badge">BUSINESS</span>
                            <img src="{{ asset('assets/imgs/our_work_book2.png') }}" alt="The Visionary Leader">
                        </div>
                        <div class="our-work-body">
                            <h4 class="our-work-title">The Visionary Leader</h4>
                            <p class="our-work-desc">
                                Executive leadership guide written for C-suite leaders and business pioneers worldwide.
                            </p>
                            <div class="our-work-meta">
                                <span class="our-work-rating">
                                    <i class="fa-solid fa-star"></i> 4.9 (50k+ Copies)
                                </span>
                                <a href="{{ route('contact-us') }}" class="our-work-btn">
                                    Order Similar <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Work 3 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="our-work-card">
                        <div class="our-work-img-wrapper">
                            <span class="our-work-badge">MEMOIR</span>
                            <img src="{{ asset('assets/imgs/our_work_book3.png') }}" alt="Beyond The Horizon">
                        </div>
                        <div class="our-work-body">
                            <h4 class="our-work-title">Beyond The Horizon</h4>
                            <p class="our-work-desc">
                                A deeply moving autobiography ghostwritten to capture authentic personal memoirs.
                            </p>
                            <div class="our-work-meta">
                                <span class="our-work-rating">
                                    <i class="fa-solid fa-star"></i> 5.0 (Award Nominated)
                                </span>
                                <a href="{{ route('contact-us') }}" class="our-work-btn">
                                    Order Similar <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Work 4 -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="our-work-card">
                        <div class="our-work-img-wrapper">
                            <span class="our-work-badge">CHILDREN STORY</span>
                            <img src="{{ asset('assets/imgs/our_work_book4.png') }}" alt="The Magic Forest">
                        </div>
                        <div class="our-work-body">
                            <h4 class="our-work-title">The Magic Forest</h4>
                            <p class="our-work-desc">
                                Beautifully illustrated children's storybook with full color artwork and formatting.
                            </p>
                            <div class="our-work-meta">
                                <span class="our-work-rating">
                                    <i class="fa-solid fa-star"></i> 4.9 (Full Color KDP)
                                </span>
                                <a href="{{ route('contact-us') }}" class="our-work-btn">
                                    Order Similar <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Meta Creatives Section -->
    @include('layouts.creative')

    <!-- Author Testimonials -->
    @include('layouts.reviews')

    <!-- Call To Action Banner -->
    @include('layouts.cta')
    
    <!-- Contact Section -->
    @include('layouts.contact')

@endsection
