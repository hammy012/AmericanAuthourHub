@extends('layouts.app')

@section('title', 'American Author Hub | Book Writing & Publishing Company')

@section('content')

    <!-- ==========================================================================
         HERO SECTION (MATCHING BLUEPRINT LAYOUT)
         ========================================================================== -->
    <section class="py-5 position-relative bg-white overflow-hidden" style="padding-top: 60px !important; padding-bottom: 60px !important;">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                
                <!-- Left Content -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <span class="text-uppercase text-danger fw-bold small tracking-wider mb-2 d-inline-block">
                        USA'S #1 BOOK WRITING & PUBLISHING AGENCY
                    </span>
                    <h1 class="display-4 fw-bold text-dark mb-3 leading-tight" style="font-size: 2.8rem;">
                        Transform Your Ideas Into <br>
                        <span class="text-danger">Captivating Bestsellers</span>
                    </h1>
                    <p class="text-muted fs-6 mb-4 leading-relaxed" style="max-width: 540px;">
                        From ghostwriting and professional editing to cover design and global publishing — our expert team turns your story into a literary masterpiece.
                    </p>

                    <!-- Buttons -->
                    <div class="d-flex gap-3 flex-wrap align-items-center mb-5">
                        <a href="{{ route('contact-us') }}" class="btn-red-pill">
                            <i class="fa-solid fa-paper-plane me-1"></i> Start Your Project
                        </a>
                        <a href="#what-we-do" class="btn-white-pill">
                            Explore Services <i class="fa-solid fa-chevron-right ms-1 small"></i>
                        </a>
                    </div>

                    <!-- Trust Stats Row -->
                    <div class="d-flex align-items-center gap-4 pt-3 border-top border-light">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-star text-warning fs-5"></i>
                            <div>
                                <div class="fw-bold text-dark small leading-none">4.9/5 Rating</div>
                                <div class="text-muted extra-small">Based on Client Reviews</div>
                            </div>
                        </div>
                        <div class="text-slate-300">|</div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-book-open text-danger fs-5"></i>
                            <div>
                                <div class="fw-bold text-dark small leading-none">10,000+</div>
                                <div class="text-muted extra-small">Books Published</div>
                            </div>
                        </div>
                        <div class="text-slate-300">|</div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-globe text-primary fs-5"></i>
                            <div>
                                <div class="fw-bold text-dark small leading-none">Global</div>
                                <div class="text-muted extra-small">Publishing Network</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual Display -->
                <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('assets/imgs/main.webp') }}" alt="Book Writing & Publishing" class="img-fluid rounded-4 shadow-lg" style="max-height: 440px; object-fit: contain;">
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
            <div class="row align-items-center g-5">
                
                <!-- Left Content -->
                <div class="col-lg-5" data-aos="fade-right">
                    <span class="text-uppercase text-danger fw-bold small tracking-wider">WHAT WE DO</span>
                    <h2 class="display-6 fw-bold text-dark mt-2 mb-3">
                        Complete Book Solutions <br>Under One Roof
                    </h2>
                    <p class="text-muted fs-6 leading-relaxed mb-4">
                        No matter what genre or concept you have in mind, our expert writers and editors bring your story to life with creativity, structure, and precision. From fiction to non-fiction, autobiography to business guides — we write, edit, design, and publish your book with complete professionalism.
                    </p>
                    <a href="{{ route('contact-us') }}" class="btn-red-pill">
                        Let’s Discuss Your Project <i class="fa-solid fa-chevron-right ms-1 small"></i>
                    </a>
                </div>

                <!-- Right 6 Feature Cards Grid -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                    <div class="row g-4">
                        
                        <div class="col-md-6 col-sm-6">
                            <div class="feature-box-card">
                                <div class="feature-icon-red">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Author Website</h5>
                                <p class="text-muted small mb-0">Professional author websites that showcase your books, highlight your journey, and build your reader fanbase.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="feature-box-card">
                                <div class="feature-icon-red">
                                    <i class="fa-solid fa-feather-pointed"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Book Writing</h5>
                                <p class="text-muted small mb-0">Our professional writers transform your ideas into compelling narratives with strong characters and flow.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="feature-box-card">
                                <div class="feature-icon-red">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">eBook Publishing</h5>
                                <p class="text-muted small mb-0">Complete formatting, design, and distribution setup across major digital platforms worldwide.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="feature-box-card">
                                <div class="feature-icon-red">
                                    <i class="fa-solid fa-palette"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Book Cover Design</h5>
                                <p class="text-muted small mb-0">Stunning, original, and story-aligned book covers that command attention on Amazon KDP shelves.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="feature-box-card">
                                <div class="feature-icon-red">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Editing & Proofreading</h5>
                                <p class="text-muted small mb-0">Polish your manuscript to perfection with our expert editing and proofreading services.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="feature-box-card">
                                <div class="feature-icon-red">
                                    <i class="fa-solid fa-bullhorn"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Book Promotion</h5>
                                <p class="text-muted small mb-0">Strategic marketing and promotion to help your book reach the right readers globally.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================================================
         WHY CHOOSE US BANNER (FULL RED BANNER)
         ========================================================================== -->
    <section class="bg-red-banner py-5 text-center text-white position-relative" data-aos="fade-up">
        <div class="container py-4 position-relative" style="z-index: 2;">
            <span class="text-uppercase fw-bold small tracking-wider opacity-75">WHY CHOOSE US</span>
            <h2 class="display-6 fw-bold text-white mt-1 mb-3">
                Step Into a World of Literary Excellence
            </h2>
            <p class="text-white opacity-90 mx-auto fs-6 mb-5" style="max-width: 750px;">
                With over 10,000 satisfied clients across the United States, American Author Hub delivers premium, affordable, and creative book writing services.
            </p>

            <!-- 5 Stats Row -->
            <div class="row g-4 justify-content-center">
                <div class="col-md-2 col-6">
                    <div class="p-3">
                        <i class="fa-solid fa-users fs-3 text-white opacity-75 mb-2"></i>
                        <h3 class="fw-bold text-white mb-1">10,000+</h3>
                        <p class="small text-white opacity-75 mb-0">Satisfied Authors</p>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3">
                        <i class="fa-solid fa-pen-nib fs-3 text-white opacity-75 mb-2"></i>
                        <h3 class="fw-bold text-white mb-1">500+</h3>
                        <p class="small text-white opacity-75 mb-0">Top Writers</p>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3">
                        <i class="fa-solid fa-layer-group fs-3 text-white opacity-75 mb-2"></i>
                        <h3 class="fw-bold text-white mb-1">40+</h3>
                        <p class="small text-white opacity-75 mb-0">Distribution Channels</p>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3">
                        <i class="fa-solid fa-thumbs-up fs-3 text-white opacity-75 mb-2"></i>
                        <h3 class="fw-bold text-white mb-1">98%</h3>
                        <p class="small text-white opacity-75 mb-0">Client Satisfaction</p>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="p-3">
                        <i class="fa-solid fa-headset fs-3 text-white opacity-75 mb-2"></i>
                        <h3 class="fw-bold text-white mb-1">24/7</h3>
                        <p class="small text-white opacity-75 mb-0">Expert Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Books Carousel -->
    @include('layouts.creative')

    <!-- Author Testimonials -->
    @include('layouts.reviews')

    <!-- ==========================================================================
         CALL TO ACTION BANNER (RED BANNER)
         ========================================================================== -->
    <section class="bg-red-banner py-5 text-center text-white position-relative" data-aos="zoom-in">
        <div class="container py-4 position-relative" style="z-index: 2;">
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 shadow-sm">
                100% ORIGINAL • CONFIDENTIAL • RESULT DRIVEN
            </span>
            <h3 class="display-5 fw-bold text-white mb-4">
                Turn Your Dream Into a Bestseller <br>
                with American Author Hub’s Expert Team
            </h3>
            <div class="d-flex justify-content-center gap-3 flex-wrap mt-3">
                <a href="{{ route('contact-us') }}" class="btn-red-pill py-3 px-4 fs-6">
                    <i class="fa-solid fa-rocket me-1"></i> Get Started Today
                </a>
                <a href="mailto:info@americanauthorhub.com" class="btn-white-pill py-3 px-4 fs-6">
                    <i class="fa-solid fa-envelope me-1 text-danger"></i> info@americanauthorhub.com
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    @include('layouts.contact')

@endsection
