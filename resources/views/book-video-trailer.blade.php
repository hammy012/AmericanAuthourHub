@extends('layouts.app')

@section('title', 'American Author Hub | Book Video Trailor')

@section('content')

    <section class="service-banner" style="background: url('{{ asset('assets/imgs/main-back.png') }}');">
        <div class="container">
            <div class="banner-head">
                <span>Bring Your Book to Life Visually</span>
                <h1>Professional Book Trailers That Captivate</h1>
                <p>
                    Work with American Author Hub to create visually stunning book trailers that showcase your masterpiece. 
                    A compelling trailer is the most effective way to highlight your achievement and ignite curiosity 
                    among your audience before your book even hits the shelves.
                </p>
                <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Discuss Your Project</a>
            </div>
        </div>
    </section>
    
    <section class="spotlight-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="spotlight-sec-head">
                        <h3>Text Alone Can’t Capture Attention</h3>
                        <p>
                            A static advertisement often fails to engage, but a visually striking trailer can grab attention 
                            in the first three seconds. You only have a brief moment to turn a viewer into a reader. 
                            Partner with our creative team to design your book trailer and let your audience experience your story 
                            in a whole new dimension.
                        </p>
                        <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                        <ul class="cta-btn">
                            <!--<li><a href="tel:+13463476046">-->
                            <!--        +1 (346) 347-6046-->
                            <!--    </a></li>-->
                            <li><a href="mailto:info@americanauthorhub.com"><span>info@americanauthorhub.com</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="spotlight-sec-img">
                        <img src="{{ asset('assets/imgs/video.png') }}" alt="Book Trailer">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="why-choose-service">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="why-choose-service-head">
                        <h3>Why Choose American Author Hub?</h3>
                        <h6>Advanced Digital Marketing</h6>
                        <p>
                            Our marketing strategies are designed to drive traffic, generate leads, and maximize visibility, 
                            giving your book the exposure it deserves.
                        </p>
                        <h6>Impactful Book Promotions</h6>
                        <p>
                            We identify your target audience, analyze market trends, and execute campaigns that deliver 
                            exceptional results efficiently.
                        </p>
                        <h6>Expand Your Reach</h6>
                        <p>
                            Our professional team crafts comprehensive marketing plans to promote your book and expand 
                            your readership globally.
                        </p>
                        <h6>Proactive & Author-Centric Approach</h6>
                        <p>
                            American Author Hub’s marketing experts understand authors’ needs and implement proactive 
                            strategies to ensure your book gets noticed by the right audience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="words-ghost">
        <div class="container">
            <h3>Over 250 Million Words Ghostwritten</h3>
            <p>
                Our team of elite writers is passionate about storytelling and helping authors share their vision with 
                the world through expertly crafted content.
            </p>
        </div>
    </section>


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
