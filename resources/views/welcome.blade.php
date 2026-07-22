@extends('layouts.app')

@section('title', 'American Author Hub | Book Writing & Publishing Company')

@section('content')

    <!-- ==========================================================================
                                                         HERO SECTION (MATCHING BLUEPRINT LAYOUT)
                                                         ========================================================================== -->
    <section class="position-relative hero-bg-ref overflow-hidden d-flex align-items-center"
        style="padding-top: 20px !important; padding-bottom: 20px !important; min-height: calc(100vh - 88px);">
        <div class="container py-lg-2">
            <div class="row align-items-center g-5">

                <!-- Left Content -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <span class="hero-subtitle text-uppercase d-inline-block mb-3">
                        USA'S #1 BOOK WRITING & PUBLISHING AGENCY
                    </span>
                    <h1 class="hero-title mb-3">
                        Transform Your Ideas<br>
                        Into<br>
                        <span class="text-brand-red">Captivating Bestsellers</span>
                    </h1>
                    <p class="hero-paragraph mb-3" style="max-width: 540px;">
                        From ghostwriting and professional editing to cover design and global publishing — our expert team
                        turns your story into a literary masterpiece.
                    </p>

                    <!-- Buttons -->
                    <div class="d-flex flex-wrap align-items-center mb-3">
                        <a href="{{ route('contact-us') }}" class="btn-red-pill" style="margin-right: 12px !important;">
                            <i class="fa-solid fa-paper-plane me-1"></i> Start Your Project
                        </a>
                        <a href="#what-we-do" class="btn-brand-outline">
                            Explore Services <i class="fa-solid fa-chevron-right ms-1 small"></i>
                        </a>
                    </div>

                    <!-- Trust Stats Row -->
                    <div class="hero-stats-row">
                        <!-- Stat 1 -->
                        <div class="stat-item">
                            <div class="stat-icon-wrapper text-warning">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div>
                                <div class="stat-value">4.9/5 Rating</div>
                                <div class="stat-label">Based on Client Reviews</div>
                            </div>
                        </div>

                        <div class="stat-divider"></div>

                        <!-- Stat 2 -->
                        <div class="stat-item">
                            <div class="stat-icon-wrapper">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <div>
                                <div class="stat-value">10,000+</div>
                                <div class="stat-label">Books Published</div>
                            </div>
                        </div>

                        <div class="stat-divider"></div>

                        <!-- Stat 3 -->
                        <div class="stat-item">
                            <div class="stat-icon-wrapper">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <div>
                                <div class="stat-value text-brand-red">Global</div>
                                <div class="stat-label">Publishing Network</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Display -->
                <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('assets/imgs/main.png') }}" alt="Book Writing & Publishing"
                            class="img-fluid hero-floating-image" style="max-height: 425px; object-fit: contain;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================================================
                                                         ABOUT US SECTION (SEO OPTIMIZED & PROFESSIONAL)
                                                         ========================================================================== -->
    <section class="py-5 bg-white position-relative" id="home-about"
        style="border-top: 1px solid rgba(226, 232, 240, 0.4);">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">

                <!-- Left Visual Image -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <div class="position-relative d-inline-block text-center w-100">
                        <img src="{{ asset('assets/imgs/about.png') }}" alt="About American Author Hub" class="img-fluid"
                            style="max-height: 530px; object-fit: contain;">
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
                    <span class="hero-subtitle text-uppercase d-inline-block mb-2">
                        WHO WE ARE
                    </span>
                    <h2 class="hero-title mb-3" style="font-size: 2.3rem !important; line-height: 1.25 !important;">
                        Empowering Voices, <br>
                        Creating <span class="text-brand-red">Bestselling Authors</span>
                    </h2>
                    <p class="hero-paragraph mb-3">
                        At American Author Hub, we believe every story deserves to be told with excellence. We are a premier
                        team of book writing, editing, and publishing professionals committed to transforming your ideas
                        into market-ready books.
                    </p>
                    <p class="hero-paragraph mb-4" style="font-size: 15px !important;">
                        Our collaborative process pairs you with elite industry specialists who capture your unique voice,
                        refine your manuscript, design eye-catching covers, and navigate the entire publishing process on
                        Amazon KDP and global platforms.
                    </p>

                    <!-- Core Strengths Cards -->
                    <div class="row mb-4">
                        <div class="col-md-6 col-6 mb-3">
                            <div class="about-strength-card">
                                <div class="card-icon-circle">
                                    <i class="fa-solid fa-circle-check"></i>
                                </div>
                                <span class="strength-title">100% Original Content</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 mb-3">
                            <div class="about-strength-card">
                                <div class="card-icon-circle">
                                    <i class="fa-solid fa-circle-check"></i>
                                </div>
                                <span class="strength-title">100% Royalties Ownership</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 mb-3">
                            <div class="about-strength-card">
                                <div class="card-icon-circle">
                                    <i class="fa-solid fa-circle-check"></i>
                                </div>
                                <span class="strength-title">Elite Ghostwriters</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-6 mb-3">
                            <div class="about-strength-card">
                                <div class="card-icon-circle">
                                    <i class="fa-solid fa-circle-check"></i>
                                </div>
                                <span class="strength-title">Global KDP Distribution</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="{{ route('about-us') }}" class="btn-red-pill mr-3 mb-2">
                            Read Our Story <i class="fa-solid fa-arrow-right ms-1 small"></i>
                        </a>
                        <a href="{{ route('contact-us') }}" class="btn-brand-outline mb-2"
                            style="border: 1px solid #001529 !important;">
                            Let's Talk Project
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================================================
                                                         WHAT WE DO SECTION (MATCHING BLUEPRINT GRID)
                                                         ========================================================================== -->
    <section class="py-5 bg-light position-relative" id="what-we-do">
        <div class="container py-4">

            <!-- Centered Heading Content -->
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-uppercase text-danger fw-bold small tracking-wider">WHAT WE DO</span>
                <h2 class="display-6 fw-bold text-dark mt-2 mb-3">
                    Complete Book Solutions <br>Under One Roof
                </h2>
                <p class="text-muted mx-auto" style="max-width: 800px; font-size: 16px; line-height: 1.6;">
                    No matter what genre or concept you have in mind, our expert writers and editors bring your story to
                    life with creativity, structure, and precision. From fiction to non-fiction, autobiography to
                    business guides — we write, edit, design, and publish your book with complete professionalism.
                </p>
                <a href="{{ route('contact-us') }}" class="btn-red-pill mt-2">
                    Let’s Discuss Your Project <i class="fa-solid fa-chevron-right ms-1 small"></i>
                </a>
            </div>

            <!-- Dynamic Services Slick Slider -->
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12">
                    <div class="what-we-slider">
                        @foreach ($services as $service)
                            <div class="px-2 pb-2">
                                <div class="feature-box-card">
                                    <div>
                                        <div class="feature-icon-red">
                                            @if ($service->icon_image)
                                                <img src="{{ asset($service->icon_image) }}" alt="{{ $service->title }}">
                                            @else
                                                <i class="fa-solid fa-laptop-code"></i>
                                            @endif
                                        </div>
                                        <h5 class="fw-bold text-dark mb-2">{{ $service->title }}</h5>
                                        <p class="text-muted small mb-0">{{ $service->short_desc }}</p>
                                    </div>
                                    <div class="mt-3">
                                        <a href="{{ route('service', \Illuminate\Support\Str::slug($service->title)) }}"
                                            class="learn-more-link">
                                            Learn More <i class="fa-solid fa-arrow-right small"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="why-choose-us-sec py-5 position-relative">
        <div class="container py-4 position-relative" style="z-index: 2;">

            <!-- Centered Header -->
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="text-uppercase fw-bold small text-danger" style="letter-spacing: 2px;">— WHY CHOOSE US —</span>
                <h2 class="display-6 fw-bold text-dark mt-2 mb-3">
                    Why Thousands of Authors <span class="text-danger">Trust Us</span>
                </h2>
                <p class="text-muted mx-auto fs-6" style="max-width: 750px; line-height: 1.6;">
                    We combine creativity, expertise, and dedication to deliver exceptional results that set your book
                    apart.
                </p>
            </div>

            <!-- Two Columns content (Left Cards, Right Image) -->
            <div class="row align-items-center g-5">

                <!-- Left Column: 4 Grid Cards -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <div class="row g-4 g-md-5">

                        <!-- Card 1 -->
                        <div class="col-md-6">
                            <div class="why-card-modern">
                                <div class="why-card-icon">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <h4 class="why-card-title">Expert Team</h4>
                                <p class="why-card-text">
                                    Skilled writers, editors and designers with years of industry experience.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-6">
                            <div class="why-card-modern">
                                <div class="why-card-icon">
                                    <i class="fa-solid fa-book-open"></i>
                                </div>
                                <h4 class="why-card-title">End-to-End Services</h4>
                                <p class="why-card-text">
                                    From writing and editing to publishing and marketing - we handle everything.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-md-6 mt-3">
                            <div class="why-card-modern">
                                <div class="why-card-icon">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <h4 class="why-card-title">Quality Assurance</h4>
                                <p class="why-card-text">
                                    We follow industry best practices to deliver high-quality, error-free books.
                                </p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-md-6 mt-3">
                            <div class="why-card-modern">
                                <div class="why-card-icon">
                                    <i class="fa-solid fa-chart-line"></i>
                                </div>
                                <h4 class="why-card-title">Proven Results</h4>
                                <p class="why-card-text">
                                    Thousands of books published and authors empowered to achieve their dreams.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right Column: Visual Mockup -->
                <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="900">
                    <div class="why-visual-wrapper">
                        <img src="{{ asset('assets/imgs/why_choose_us_books.png') }}" alt="Why Authors Trust Us"
                            class="img-fluid why-mockup-img">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Featured Books Carousel -->
    @include('layouts.creative')

    <!-- PRICING -->
    @include('layouts.pricing')

    <!-- Author Testimonials -->
    @include('layouts.reviews')

    <!-- Call To Action Banner -->
    @include('layouts.cta')

    <!-- Contact Form Section -->
    @include('layouts.contact')

@endsection