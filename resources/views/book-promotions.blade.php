@extends('layouts.app')

@section('title', 'American Author Hub | Book Service')

@section('content')

    <section class="service-banner" style="background: url('{{ asset('assets/imgs/main-back.png') }}');">
        <div class="container">
            <div class="banner-head">
                @if(!empty($service->sub_title))
                    <span>{{ $service->sub_title }}</span>
                @endif
                <h1>{{ $service->title }}</h1>
                @if(!empty($service->short_desc))
                    <p>{!! nl2br(e($service->short_desc)) !!}</p>
                @elseif(!empty($service->description))
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($service->description), 160) }}</p>
                @endif
                <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Discuss your Project</a>
            </div>
        </div>
    </section>
    
    <section class="spotlight-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="spotlight-sec-head">
                        <h3>{{ $service->sec_title }}</h3>
    
                        @if(!empty($service->description))
                            <p>{!! $service->description !!}</p>
                        @else
                            <p>Our team delivers professional solutions to make your book stand out.</p>
                        @endif
    
                        <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Discuss your Project</a>
    
                        <ul class="cta-btn">
                            <!--<li><a href="tel:+13463476046">-->
                            <!--        +1 (346) 347-6046-->
                            <!--    </a></li>-->
                            <li><a href="mailto:info@americanauthorhub.com">info@americanauthorhub.com</a></li>
                        </ul>
                    </div>
                </div>
    
                <div class="col-md-5">
                    <div class="spotlight-sec-img">
                        @php
                            $img = $service->image ?? $service->thumbnail ?? 'assets/imgs/ser1.png';
                            $imgSrc = \Illuminate\Support\Str::startsWith($img, ['http://','https://']) ? $img : asset($img);
                        @endphp
                        <img src="{{ $imgSrc }}" alt="{{ $service->title }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!--@if($otherServices && $otherServices->count())-->
    <!--    <section class="more-services py-5">-->
    <!--    <div class="container">-->
    <!--        <h4>Other Services</h4>-->
    <!--        <div class="row">-->
    <!--            @foreach($otherServices as $os)-->
    <!--                <div class="col-md-4 mb-3">-->
    <!--                    <div class="card p-3 h-100">-->
    <!--                        <div class="d-flex align-items-start gap-2">-->
    <!--                            @if($os->icon_image)-->
    <!--                                <img src="{{ \Illuminate\Support\Str::startsWith($os->icon_image, ['http://','https://']) ? $os->icon_image : asset($os->icon_image) }}" style="width:36px;height:36px;object-fit:contain;">-->
    <!--                            @endif-->
    <!--                            <div>-->
    <!--                                <a href="{{ route('service', \Illuminate\Support\Str::slug($os->title)) }}" style="font-weight:600;color:#002768;">{{ $os->title }}</a>-->
    <!--                                @if($os->short_desc)-->
    <!--                                    <div style="font-size:13px;color:#666;">{{ \Illuminate\Support\Str::limit($os->short_desc, 80) }}</div>-->
    <!--                                @endif-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endforeach-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--@endif-->

    <section class="tier-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="tier-sec-img">
                        <img loading="lazy" src="{{ asset('assets/imgs/ban1.webp') }}" alt="Professional Writers">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tier-box active">
                        <img loading="lazy" src="{{ asset('assets/imgs/tier.png') }}" class="tier-circle" alt="Tier Icon">
                        <span>500</span>
                        <h4>Top-Rated, US-Based Content Writers</h4>
                        <p>
                            Each of our writers undergoes a thorough selection, testing, and training process before joining 
                            our professional book writing team. We take pride in having some of the most skilled and 
                            celebrated authors from across the United States, ready to bring your ideas to life with 
                            creativity and precision.
                        </p>
                        <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tier-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/tier.png') }}" class="tier-circle" alt="Tier Icon">
                        <span>2,000</span>
                        <h4>Thousands of Happy Clients</h4>
                        <p>
                            With over 2,000 satisfied customers, our track record speaks for itself. 
                            Our exceptional writing quality, customer support, and dedication to excellence 
                            have earned us lasting relationships and an outstanding reputation in the industry.
                        </p>
                        <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    @include('layouts.reviews')


    <section class="cta-se-2">
        <div class="container">
            <div class="cta-head-2">
                <span>100% Original • Authentic • Professionally Written</span>
                <h3>
                    Turn Your Dream Into a Bestseller <br>
                    with American Author Hub’s Expert Writing Services
                </h3>
                <ul class="cta-btn">
                    <!--<li>-->
                    <!--    <a href="tel:+13463476046">-->
                    <!--                +1 (346) 347-6046-->
                    <!--            </a>-->
                    <!--    &nbsp;-->
                    <!--    <a href="javascript:;" class="chat">Chat Now</a>-->
                    <!--</li>-->
                    <li>
                        <a href="mailto:info@americanauthorhub.com">
                            <span>info@americanauthorhub.com</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    @include('layouts.contact')

@endsection
