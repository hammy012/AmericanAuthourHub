@extends('layouts.app')

@section('title', 'American Author Hub | Contact')

@section('content')


    <section class="contact-banner py-5 section-white"
        style="background: url('{{ asset('assets/imgs/main-back.png') }}') center/cover no-repeat;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="banner-head">
                        <span class="gradient-badge mb-3"><i class="fa-solid fa-headset me-1"></i> Get In Touch</span>
                        <h1 class="text-light fw-bold display-5">We’re Here to Bring Your <span
                                class="gradient-text-red">Vision to Life</span></h1>
                        <p class="text-light opacity-90 fs-5 mt-3">
                            Looking for expert writers to craft your story? Connect with us today.
                            Share your project details, and our professional team will deliver exceptional
                            writing that captures your ideas with creativity, precision, and excellence.
                        </p>
                        <a href="#contact" class="btn-gradient-primary btn-lg mt-3"><i
                                class="fa-solid fa-comments me-2"></i> Start Conversation</a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/imgs/about.webp') }}" alt="Contact Us" class="shadow-lg rounded-4 w-100">
                </div>
            </div>
        </div>
    </section>
    @include('layouts.cta')
    @include('layouts.contact')

@endsection