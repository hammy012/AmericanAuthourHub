@extends('layouts.app')

@section('title', 'American Author Hub | Contact')

@section('content')


    <section class="contact-banner" style="background: url('{{ asset('assets/imgs/main-back.png') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner-head">
                        <h1 class="text-light">We’re Here to Bring Your Vision to Life</h1>
                        <p>
                            Looking for expert writers to craft your story? Connect with us today. 
                            Share your project details, and our professional team will deliver exceptional 
                            writing that captures your ideas with creativity, precision, and excellence.
                        </p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/imgs/about.webp') }}" alt="Contact Us">
                </div>
            </div>
        </div>
    </section>


    @include('layouts.contact')

    @include('layouts.reviews')
    <!--  -->
    <section class="cta-se-2">
        <div class="container">
            <div class="cta-head-2">
                <span>100% Original, Authentic, & Genuine</span>
                <h3>Become a celebrated author of best-seller <br> books with
                    Authors Time Services.
                </h3>
                <ul class="cta-btn">
                    <!--<li>-->
                    <!--    <a href="tel:+13463476046">-->
                    <!--                +1 (346) 347-6046-->
                    <!--            </a>-->
                    <!--</li>-->
                    <li><a href="mailto:info@americanauthorhub.com"><span class="">
                                info@americanauthorhub.com </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @include('layouts.contact')

@endsection
