@extends('layouts.app')

@section('title', 'American Author Hub | Book Writing & Publishing Services')

@section('content')

    <!-- ==========================================================================
         HERO SECTION (WHITE THEME - NO BACKGROUND IMAGE)
         ========================================================================== -->
    <section class="hero-v2 py-5 position-relative bg-white overflow-hidden">
        <!-- Ambient Radial Glow Blobs -->
        <div class="hero-blob-blue"></div>
        <div class="hero-blob-red"></div>

        <div class="container py-lg-5 py-3 position-relative" style="z-index: 2;">
            <div class="row align-items-center g-5">
                
                <!-- Left Column: Content & Calls to Action -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <div class="hero-content">
                        <div class="gradient-badge mb-3">
                            <i class="fa-solid fa-crown"></i> USA's #1 Book Writing & Publishing Agency
                        </div>
                        <h1 class="display-4 fw-bold text-dark mb-3 leading-tight">
                            Transform Your Ideas Into <span class="gradient-text">Captivating Bestsellers</span>
                        </h1>
                        <p class="text-muted fs-5 mb-4 leading-relaxed">
                            From ghostwriting and professional editing to cover design and global publishing — our expert team turns your story into a literary masterpiece.
                        </p>
                        
                        <div class="d-flex gap-3 flex-wrap align-items-center mb-4">
                            <a href="{{ route('contact-us') }}" class="btn-brand-gradient btn-lg">
                                <i class="fa-solid fa-rocket"></i> Start Your Project
                            </a>
                            <a href="{{ route('about-us') }}" class="btn-brand-outline btn-lg">
                                <i class="fa-solid fa-circle-info"></i> Discover More
                            </a>
                        </div>

                        <!-- Trust Badges -->
                        <div class="d-flex align-items-center gap-4 pt-3 border-top border-light">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-star text-warning fs-5"></i>
                                <span class="fw-bold text-dark">4.9/5 Rating</span>
                            </div>
                            <div class="text-muted">|</div>
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-book-open text-primary fs-5"></i>
                                <span class="fw-bold text-dark">10,000+ Books Published</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Swiper Interactive Showcase -->
                <div class="col-lg-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="hero-glass-container position-relative floating-element">
                        <div class="swiper myBannerSwiper">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/imgs/main.webp') }}" alt="Book Writing Services" class="img-fluid rounded-3 shadow-md mb-3" style="max-height: 380px; object-fit: contain;">
                                        <h4 class="fw-bold text-dark mb-1">Book Writing & Ghostwriting</h4>
                                        <p class="text-muted small mb-0">Custom storytelling tailored to your unique voice.</p>
                                    </div>
                                </div>

                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/imgs/booknew1.png') }}" alt="eBook Publishing" class="img-fluid rounded-3 shadow-md mb-3" style="max-height: 380px; object-fit: contain;">
                                        <h4 class="fw-bold text-dark mb-1">Editing & Proofreading</h4>
                                        <p class="text-muted small mb-0">Meticulous polishing for grammar, flow, and impact.</p>
                                    </div>
                                </div>

                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/imgs/booknew3.png') }}" alt="Amazon KDP Publishing" class="img-fluid rounded-3 shadow-md mb-3" style="max-height: 380px; object-fit: contain;">
                                        <h4 class="fw-bold text-dark mb-1">Global Book Distribution</h4>
                                        <p class="text-muted small mb-0">Publish seamlessly across Amazon KDP, Barnes & Noble & more.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination mt-3 position-relative"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================================================
         WHAT WE DO SECTION
         ========================================================================== -->
    <section class="py-5 bg-light position-relative">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="pe-lg-3">
                        <span class="gradient-badge mb-2">
                            <i class="fa-solid fa-layer-group"></i> What We Do
                        </span>
                        <h2 class="display-6 fw-bold text-dark mt-2 mb-3">
                            Turning Your Ideas Into <span class="gradient-text">Published Masterpieces</span>
                        </h2>
                        <p class="text-muted leading-relaxed mb-4">
                            No matter what genre or concept you have in mind, our expert writers and editors bring your story
                            to life with creativity, structure, and precision. From fiction to non-fiction, autobiographies
                            to business guides — we write, edit, design, and publish your book with complete professionalism.
                        </p>
                        <a href="{{ route('contact-us') }}" class="btn-brand-gradient">
                            <i class="fa-solid fa-comments me-1"></i> Let’s Discuss Your Project
                        </a>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                    <div class="row g-4">
                        
                        <div class="col-md-6">
                            <div class="v2-card p-4 h-100">
                                <div class="v2-icon-box mb-3">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">Author Website</h4>
                                <p class="text-muted small mb-0">Professional author websites that showcase your books, highlight your journey, and build your reader fanbase.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="v2-card p-4 h-100">
                                <div class="v2-icon-box mb-3">
                                    <i class="fa-solid fa-feather-pointed"></i>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">Book Writing</h4>
                                <p class="text-muted small mb-0">Our professional writers transform your ideas into compelling narratives with strong character arcs and flow.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="v2-card p-4 h-100">
                                <div class="v2-icon-box mb-3">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">eBook Publishing</h4>
                                <p class="text-muted small mb-0">Complete formatting, design, and distribution setup across major digital platforms worldwide.</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="v2-card p-4 h-100">
                                <div class="v2-icon-box mb-3">
                                    <i class="fa-solid fa-palette"></i>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">Book Cover Design</h4>
                                <p class="text-muted small mb-0">Stunning, original, and story-aligned book covers that command attention on Amazon KDP shelves.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
         WHY CHOOSE US & STATS SECTION
         ========================================================================== -->
    <section class="py-5 bg-white position-relative">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="gradient-badge mb-2">
                    <i class="fa-solid fa-award"></i> Why Choose Us
                </span>
                <h2 class="display-6 fw-bold text-dark mt-2">
                    Step Into a World of <span class="gradient-text">Literary Excellence</span>
                </h2>
                <p class="text-muted mx-auto fs-6" style="max-width: 750px;">
                    With over 10,000 satisfied clients across the United States, American Author Hub delivers premium, affordable, and creative book writing services.
                </p>
            </div>

            <!-- Stats Counter Row -->
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="v2-card p-4 text-center h-100">
                        <span class="gradient-text display-4 fw-bold">10,000+</span>
                        <h4 class="fw-bold text-dark mt-2">Satisfied Authors</h4>
                        <p class="text-muted small mb-0">Trusted by aspiring writers and seasoned authors across the USA.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="v2-card p-4 text-center h-100">
                        <span class="gradient-text display-4 fw-bold">500+</span>
                        <h4 class="fw-bold text-dark mt-2">Top US Writers</h4>
                        <p class="text-muted small mb-0">Selected through rigorous evaluation to deliver elite quality storytelling.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="v2-card p-4 text-center h-100">
                        <span class="gradient-text display-4 fw-bold">40+</span>
                        <h4 class="fw-bold text-dark mt-2">Distribution Channels</h4>
                        <p class="text-muted small mb-0">Global reach across Amazon, Apple Books, Google Play & IngramSpark.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Meta Creatives Showcase -->
    @include('layouts.creative')

    <!-- Author Reviews -->
    @include('layouts.reviews')

    <!-- ==========================================================================
         CALL TO ACTION BANNER (BRAND GRADIENT #002768 TO #9F0B07)
         ========================================================================== -->
    <section class="py-5 text-white position-relative" style="background: var(--gradient-brand);" data-aos="zoom-in">
        <div class="container py-4 text-center position-relative" style="z-index: 2;">
            <span class="badge bg-white text-dark px-3 py-2 rounded-pill fw-bold text-uppercase mb-3 shadow-sm">
                <i class="fa-solid fa-shield-halved text-danger me-1"></i> 100% Original • Authentic • Professionally Written
            </span>
            <h3 class="display-5 fw-bold text-white mb-4">
                Turn Your Dream Into a Bestseller <br>
                with American Author Hub’s Expert Team
            </h3>
            <div class="d-flex justify-content-center gap-3 flex-wrap mt-3">
                <a href="{{ route('contact-us') }}" class="btn btn-light btn-lg rounded-pill fw-bold text-dark px-4 py-3 shadow-lg">
                    <i class="fa-solid fa-paper-plane text-danger me-2"></i> Get Started Today
                </a>
                <a href="mailto:info@americanauthorhub.com" class="btn btn-outline-light btn-lg rounded-pill fw-bold px-4 py-3">
                    <i class="fa-solid fa-envelope me-2"></i> info@americanauthorhub.com
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    @include('layouts.contact')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.myBannerSwiper', {
              loop: true,
              effect: 'fade',
              speed: 700,
              autoplay: { delay: 4000, disableOnInteraction: false },
              pagination: { el: '.swiper-pagination', clickable: true },
              fadeEffect: { crossFade: true },
            });
        }
      });
    </script>

@endsection
