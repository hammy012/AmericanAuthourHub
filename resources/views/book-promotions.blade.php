@extends('layouts.app')

@section('title', 'American Author Hub | ' . ($service->title ?? 'Professional Book Service'))

@section('content')

    <!-- ==========================================================================
                                             HERO BANNER
                                             ========================================================================== -->
    <section class="position-relative hero-bg-ref overflow-hidden d-flex align-items-center"
        style="padding-top: 60px !important; padding-bottom: 60px !important; min-height: 380px; background: #ffffff;">
        <div class="container py-lg-4 text-center" data-aos="fade-up" data-aos-duration="900">
            <span class="hero-subtitle text-uppercase d-inline-block mb-3">
                <i class="fa-solid fa-feather-pointed me-1"></i> {{ $service->sub_title ?? 'PREMIUM AUTHOR SERVICES' }}
            </span>
            <h1 class="hero-title mb-3" style="font-size: 2.8rem !important; line-height: 1.25 !important;">
                {{ $service->title }}
            </h1>
            <p class="hero-paragraph mb-4 mx-auto" style="max-width: 720px; font-size: 16px !important;">
                @if(!empty($service->short_desc))
                    {!! nl2br(e($service->short_desc)) !!}
                @elseif(!empty($service->description))
                    {{ \Illuminate\Support\Str::limit(strip_tags($service->description), 180) }}
                @else
                    Transform your manuscript into a bestseller with our professional, end-to-end publishing and writing services.
                @endif
            </p>
            <div class="d-flex justify-content-center flex-wrap mb-4" style="gap: 15px !important;">
                <a href="{{ route('home') }}#pricing" class="btn-red-pill" style="margin-right: 12px !important;">
                    <i class="fa-solid fa-paper-plane me-1"></i> Get Started Now
                </a>
                <a href="#service-details" class="btn-brand-outline">
                    Explore Details <i class="fa-solid fa-chevron-down ms-1 small"></i>
                </a>
            </div>

            <!-- Trust Badges Bar -->
            <div class="d-flex justify-content-center align-items-center flex-wrap text-muted small fw-semibold pt-3 border-top mx-auto" style="max-width: 650px; gap: 24px !important;">
                <span class="mx-2"><i class="fa-solid fa-circle-check text-danger me-1"></i> 100% Original Writing</span>
                <span class="mx-2"><i class="fa-solid fa-circle-check text-danger me-1"></i> 100% Royalties Ownership</span>
                <span class="mx-2"><i class="fa-solid fa-circle-check text-danger me-1"></i> Native US Editors</span>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
                                             SERVICE SPOTLIGHT DETAILS SECTION
                                             ========================================================================== -->
    <section class="py-5 bg-light position-relative" id="service-details">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">

                <!-- Left Content -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <span class="text-uppercase text-danger fw-bold small tracking-wider mb-2 d-inline-block">
                        — SERVICE EXCELLENCE —
                    </span>
                    <h2 class="display-6 fw-bold text-dark mb-4" style="font-size: 2.2rem !important; line-height: 1.3 !important;">
                        {{ $service->sec_title ?: 'Comprehensive Solutions Tailored for Authors' }}
                    </h2>
                    
                    <div class="hero-paragraph text-secondary mb-4" style="font-size: 15px; line-height: 1.7;">
                        @if(!empty($service->description))
                            {!! $service->description !!}
                        @else
                            <p>Our expert team delivers world-class solutions tailored to bring your book concept to life with utmost precision, creativity, and market readiness.</p>
                        @endif
                    </div>

                    <!-- Highlight Bullets -->
                    <div class="mb-4">
                        <div class="service-highlight-bullet">
                            <div class="service-highlight-icon"><i class="fa-solid fa-check"></i></div>
                            <div class="service-highlight-text">Customized strategy aligned with your book genre & target readers.</div>
                        </div>
                        <div class="service-highlight-bullet">
                            <div class="service-highlight-icon"><i class="fa-solid fa-check"></i></div>
                            <div class="service-highlight-text">Vetted US-based professional ghostwriters and senior editors.</div>
                        </div>
                        <div class="service-highlight-bullet">
                            <div class="service-highlight-icon"><i class="fa-solid fa-check"></i></div>
                            <div class="service-highlight-text">Complete formatting and design ready for Amazon KDP & global distribution.</div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="{{ route('contact-us') }}" class="btn-red-pill">
                            Discuss Your Project <i class="fa-solid fa-chevron-right ms-1 small"></i>
                        </a>
                        <a href="mailto:info@americanauthorhub.com" class="btn-brand-outline" style="border: 1px solid #001529 !important;">
                            <i class="fa-solid fa-envelope me-1"></i> Email Support
                        </a>
                    </div>
                </div>

                <!-- Right Visual Display Image -->
                <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="900">
                    <div class="service-spotlight-img-frame">
                        @php
                            $img = $service->image ?? $service->thumbnail ?? 'assets/imgs/about.png';
                            $imgSrc = \Illuminate\Support\Str::startsWith($img, ['http://','https://']) ? $img : asset($img);
                        @endphp
                        <img src="{{ $imgSrc }}" alt="{{ $service->title }}">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================================================
                                             WHY CHOOSE US FOR THIS SERVICE
                                             ========================================================================== -->
    <section class="py-5 bg-white position-relative">
        <div class="container py-4">
            <!-- Header -->
            <div class="banner-head text-center mb-5" data-aos="fade-up">
                <span>
                    <i class="fa-solid fa-feather-pointed"></i> WHY CHOOSE US <i class="fa-solid fa-feather-pointed"></i>
                </span>
                <h2>Why Authors Trust Our {{ $service->title }}</h2>
                <p class="testi-sub text-muted mx-auto" style="max-width: 700px;">
                    We blend literary craftsmanship with data-driven publishing strategies to ensure your book stands out in a crowded market.
                </p>
                <div class="testi-header-divider">
                    — <i class="fa-solid fa-star"></i> —
                </div>
            </div>

            <!-- 4 Grid Feature Cards -->
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-card-modern h-100">
                        <div class="why-card-icon"><i class="fa-solid fa-users-gear"></i></div>
                        <h4 class="why-card-title">Tailored Strategy</h4>
                        <p class="why-card-text">Every project gets a customized roadmap designed specifically for your genre and publishing goals.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="why-card-modern h-100">
                        <div class="why-card-icon"><i class="fa-solid fa-feather-pointed"></i></div>
                        <h4 class="why-card-title">Vetted Professionals</h4>
                        <p class="why-card-text">Work directly with native US ghostwriters, senior editors, and top book formatting specialists.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="why-card-modern h-100">
                        <div class="why-card-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <h4 class="why-card-title">100% Rights & Royalties</h4>
                        <p class="why-card-text">You retain full ownership, copyrights, and 100% of royalties earned across all sales channels.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="why-card-modern h-100">
                        <div class="why-card-icon"><i class="fa-solid fa-globe"></i></div>
                        <h4 class="why-card-title">Global Distribution</h4>
                        <p class="why-card-text">Seamless publication on Amazon KDP, IngramSpark, Barnes & Noble, Apple Books, and 40+ platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================================================
                                             EXPLORE OTHER SERVICES
                                             ========================================================================== -->
    @if(isset($otherServices) && $otherServices->count())
    <section class="py-5 bg-light position-relative">
        <div class="container py-4">
            <div class="banner-head text-center mb-5" data-aos="fade-up">
                <span>
                    <i class="fa-solid fa-feather-pointed"></i> EXPAND YOUR REACH <i class="fa-solid fa-feather-pointed"></i>
                </span>
                <h2>Explore Other Author Services</h2>
                <p class="testi-sub text-muted mx-auto" style="max-width: 650px;">
                    Combine our writing, editing, and promotion services for maximum publishing impact.
                </p>
                <div class="testi-header-divider">
                    — <i class="fa-solid fa-star"></i> —
                </div>
            </div>

            <div class="row g-4">
                @foreach($otherServices as $os)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 * ($loop->index % 3 + 1) }}">
                        <div class="feature-box-card h-100 d-flex flex-column justify-content-between">
                            <div>
                                <div class="feature-icon-red">
                                    @if($os->icon_image)
                                        <img src="{{ \Illuminate\Support\Str::startsWith($os->icon_image, ['http://','https://']) ? $os->icon_image : asset($os->icon_image) }}" alt="{{ $os->title }}">
                                    @else
                                        <i class="fa-solid fa-book-open"></i>
                                    @endif
                                </div>
                                <h5 class="fw-bold text-dark mb-2">{{ $os->title }}</h5>
                                <p class="text-muted small mb-0">{{ \Illuminate\Support\Str::limit($os->short_desc ?: strip_tags($os->description), 110) }}</p>
                            </div>
                            <div class="mt-3 pt-2">
                                <a href="{{ route('service', \Illuminate\Support\Str::slug($os->title)) }}" class="learn-more-link">
                                    Learn More <i class="fa-solid fa-arrow-right small"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Author Testimonials -->
    @include('layouts.reviews')

    <!-- Call To Action Banner -->
    @include('layouts.cta')
    
    <!-- Contact Section -->
    @include('layouts.contact')

@endsection
