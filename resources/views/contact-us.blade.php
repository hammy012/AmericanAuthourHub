@extends('layouts.app')

@section('title', 'American Author Hub | Contact')

@section('content')


    <section class="position-relative hero-bg-ref overflow-hidden d-flex align-items-center"
        style="padding-top: 60px !important; padding-bottom: 60px !important; min-height: 420px;">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="900">
                    <span class="hero-subtitle text-uppercase d-inline-block mb-3">
                        <i class="fa-solid fa-headset me-1 text-brand-red"></i> GET IN TOUCH
                    </span>
                    <h1 class="hero-title mb-3">
                        We’re Here to Bring Your<br>
                        <span class="gradient-text">Vision to Life</span>
                    </h1>
                    <p class="hero-paragraph mb-4" style="max-width: 540px;">
                        Looking for expert writers to craft your story? Connect with us today.
                        Share your project details, and our professional team will deliver exceptional
                        writing that captures your ideas with creativity, precision, and excellence.
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="#contact" class="btn-red-pill">
                            <i class="fa-solid fa-comments me-1"></i> Start Conversation
                        </a>
                        <a href="tel:+13463476046" class="btn-brand-outline">
                            <i class="fa-solid fa-phone me-1"></i> Call Us Now
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="about-image-wrapper">
                        <img src="{{ asset('assets/imgs/contact-hero.png') }}" alt="Contact American Author Hub" class="img-fluid rounded-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.cta')
    @include('layouts.contact')

@endsection