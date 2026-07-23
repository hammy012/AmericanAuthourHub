@extends('layouts.app')

@section('title', 'American Author Hub | About us')

@section('content')

    <!-- Hero Section -->
    <section class="about-hero-section py-5 d-flex align-items-center position-relative overflow-hidden">
        <div class="container py-lg-4 position-relative" style="z-index: 2;">
            <div class="row align-items-center g-5">
                <!-- Left Content -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <span class="about-top-badge mb-3">
                        <i class="fa-solid fa-users me-1 text-brand-red"></i> ABOUT AMERICAN AUTHOR HUB
                    </span>
                    <h1 class="display-5 fw-extrabold text-navy mb-3">
                        Discover the Power of <span class="gradient-text">Exceptional Writing</span>
                    </h1>
                    <p class="about-hero-paragraph text-muted mb-4" style="max-width: 540px;">
                        American Author Hub was founded to give writers and publishers a seamless, collaborative platform
                        where creativity meets professionalism. Our mission is simple: to provide high-quality content
                        creation
                        services that connect authors with their readers and bring their ideas to life effortlessly.
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="{{ route('home') }}#pricing" class="btn-red-pill">
                            <i class="fa-solid fa-paper-plane me-1"></i> Start Your Project
                        </a>
                        <a href="#who-we-are" class="btn-brand-outline">
                            Explore Who We Are <i class="fa-solid fa-chevron-down ms-1 small"></i>
                        </a>
                    </div>
                </div>
                <!-- Right Visual -->
                <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="about-image-wrapper">
                        <img src="{{ asset('assets/imgs/main.png') }}" alt="About American Author Hub"
                            class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Are / Values Section -->
    <section id="who-we-are" class="who-we-are-sec py-5 bg-light-gradient">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                <!-- Left: 4 Grid Cards -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-sm-6">
                            <div class="about-value-card">
                                <div class="value-icon bg-red-soft">
                                    <i class="fa-solid fa-pen-nib text-brand-red"></i>
                                </div>
                                <h4 class="value-title text-navy">Expert Writers</h4>
                                <p class="value-text text-muted mb-0">
                                    Our writers possess years of experience crafting high-quality content that resonates
                                    with audiences.
                                </p>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-sm-6">
                            <div class="about-value-card">
                                <div class="value-icon bg-navy-soft">
                                    <i class="fa-solid fa-briefcase text-navy"></i>
                                </div>
                                <h4 class="value-title text-navy">Industry Diversity</h4>
                                <p class="value-text text-muted mb-0">
                                    Exceptional book writing and digital content solutions across diverse global niches and
                                    industries.
                                </p>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-sm-6">
                            <div class="about-value-card">
                                <div class="value-icon bg-navy-soft">
                                    <i class="fa-solid fa-chart-line text-navy"></i>
                                </div>
                                <h4 class="value-title text-navy">SEO & Strategy</h4>
                                <p class="value-text text-muted mb-0">
                                    Content optimized for search engines to reach the right audience and climb online
                                    charts.
                                </p>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col-sm-6">
                            <div class="about-value-card">
                                <div class="value-icon bg-red-soft">
                                    <i class="fa-solid fa-user-gear text-brand-red"></i>
                                </div>
                                <h4 class="value-title text-navy">Dedicated Team</h4>
                                <p class="value-text text-muted mb-0">
                                    Passionate project managers guiding you from manuscript development to global storefront
                                    launch.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right: Text Content -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900">
                    <span class="pricing-top-badge mb-3">WHO WE ARE</span>
                    <h2 class="display-6 fw-extrabold text-navy mb-3">
                        We Craft Content That Empowers Authors to Succeed
                    </h2>
                    <p class="text-muted fs-6 mb-4" style="line-height: 1.7;">
                        Not everyone can find the right words to express their ideas perfectly. At American Author Hub,
                        we specialize in turning your concepts into professionally written, captivating content.
                        Our team combines creativity, expertise, and precision to ensure your book, article, or manuscript
                        not only tells your story but leaves a lasting impression on your readers.
                    </p>
                    <a href="{{ route('contact-us') }}" class="btn-red-pill">
                        <i class="fa-solid fa-paper-plane me-1"></i> Let's Discuss Your Project
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Milestone Section -->
    <section class="about-stats-sec py-5 bg-white border-top border-bottom">
        <div class="container py-lg-3">
            <div class="row g-4 text-center justify-content-center">
                <!-- Stat 1 -->
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-stat-box">
                        <div class="stat-icon-circle bg-red-soft text-brand-red">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h3 class="stat-number text-brand-red fw-black mt-2 mb-1">500+</h3>
                        <strong class="d-block text-navy mb-1 text-sm">Top US Writers</strong>
                        <p class="text-muted small-text mb-0">Rigorous screening process for quality assurance.</p>
                    </div>
                </div>
                <!-- Stat 2 -->
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-stat-box">
                        <div class="stat-icon-circle bg-navy-soft text-navy">
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <h3 class="stat-number text-navy fw-black mt-2 mb-1">10,000+</h3>
                        <strong class="d-block text-navy mb-1 text-sm">Books Published</strong>
                        <p class="text-muted small-text mb-0">Successfully formatted, formatted & distributed.</p>
                    </div>
                </div>
                <!-- Stat 3 -->
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-stat-box">
                        <div class="stat-icon-circle bg-navy-soft text-navy">
                            <i class="fa-solid fa-face-smile"></i>
                        </div>
                        <h3 class="stat-number text-navy fw-black mt-2 mb-1">2,000+</h3>
                        <strong class="d-block text-navy mb-1 text-sm">Happy Clients</strong>
                        <p class="text-muted small-text mb-0">Long-term relationships founded on excellence.</p>
                    </div>
                </div>
                <!-- Stat 4 -->
                <div class="col-lg-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="about-stat-box">
                        <div class="stat-icon-circle bg-red-soft text-brand-red">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h3 class="stat-number text-brand-red fw-black mt-2 mb-1">4.9/5</h3>
                        <strong class="d-block text-navy mb-1 text-sm">Review Rating</strong>
                        <p class="text-muted small-text mb-0">Top-rated across independent review sites.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Cards Section -->
    <section class="mission-vision-sec py-5 bg-light-gradient">
        <div class="container py-lg-3">
            <div class="row g-4 justify-content-center">
                <!-- Mission Card -->
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="900">
                    <div class="mission-vision-card">
                        <div class="mission-accent"></div>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="card-icon-round bg-red-soft text-brand-red">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <h3 class="mb-0 fw-extrabold text-navy">Our Mission</h3>
                        </div>
                        <p class="text-muted fs-6 mb-0" style="line-height: 1.7;">
                            To empower authors and publishers by providing elite-tier writing, meticulous editing, custom
                            formatting, and global distribution setup. We strive to make self-publishing accessible,
                            high-yielding, and hassle-free for everyone.
                        </p>
                    </div>
                </div>
                <!-- Vision Card -->
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="900">
                    <div class="mission-vision-card">
                        <div class="vision-accent"></div>
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="card-icon-round bg-navy-soft text-navy">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <h3 class="mb-0 fw-extrabold text-navy">Our Vision</h3>
                        </div>
                        <p class="text-muted fs-6 mb-0" style="line-height: 1.7;">
                            To build a premier world-class ecosystem where creative ideas translate effortlessly into
                            top-selling assets, setting independent authors up for long-term commercial success and literary
                            acclaim.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integrated Layouts -->
    @include('layouts.cta')
    @include('layouts.contact')

@endsection

<style>
    .about-hero-section {
        padding: 70px 0;
        background: radial-gradient(100% 100% at 50% 0%, #ffffff 0%, #f6f8fb 100%);
    }

    .about-top-badge {
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
    }

    .text-navy {
        color: #001529 !important;
    }

    .fw-extrabold {
        font-weight: 800;
    }

    .fw-black {
        font-weight: 900;
    }

    .gradient-text {
        background: linear-gradient(135deg, #9F0B07 0%, #002768 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about-hero-paragraph {
        font-size: 15.5px;
        line-height: 1.7;
    }

    .about-image-wrapper {
        border-radius: 20px;
        overflow: hidden;
        border: 4px solid #ffffff;
        box-shadow: 0 15px 40px rgba(0, 21, 41, 0.08);
    }

    .bg-light-gradient {
        background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 100%);
    }

    /* Value Cards */
    .about-value-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid rgba(0, 39, 104, 0.06);
        padding: 22px 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
        height: 100%;
    }

    .about-value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 39, 104, 0.06);
        border-color: rgba(0, 39, 104, 0.12);
    }

    .value-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-bottom: 14px;
    }

    .bg-red-soft {
        background: rgba(159, 11, 7, 0.08);
    }

    .bg-navy-soft {
        background: rgba(0, 39, 104, 0.08);
    }

    .text-brand-red {
        color: #9F0B07 !important;
    }

    .value-title {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .value-text {
        font-size: 12.5px;
        line-height: 1.45;
    }

    /* Stats Box */
    .about-stat-box {
        padding: 16px;
        transition: all 0.3s ease;
    }

    .about-stat-box:hover {
        transform: translateY(-4px);
    }

    .stat-icon-circle {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        margin: 0 auto 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
    }

    .stat-number {
        font-size: 34px;
        line-height: 1.1;
    }

    .small-text {
        font-size: 11.5px;
    }

    /* Mission / Vision Cards */
    .mission-vision-card {
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid rgba(0, 39, 104, 0.06);
        padding: 30px;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.02);
        position: relative;
        overflow: hidden;
        height: 100%;
        transition: all 0.3s ease;
    }

    .mission-vision-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 35px rgba(0, 39, 104, 0.06);
    }

    .mission-accent {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 6px;
        background: #9F0B07;
    }

    .vision-accent {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 6px;
        background: #002768;
    }

    .card-icon-round {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    @media (max-width: 991px) {
        .about-hero-section {
            padding: 40px 0;
        }

        .about-image-wrapper {
            max-width: 450px;
            margin: 0 auto;
        }
    }
</style>