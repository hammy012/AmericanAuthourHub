@extends('layouts.app')

@section('title', 'American Author Hub | About us')

@section('content')


    <section class="about-us py-5 section-white" style="background: url('{{ asset('assets/imgs/main-back.png') }}') center/cover no-repeat;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="banner-head">
                        <span class="gradient-badge mb-3"><i class="fa-solid fa-building me-1"></i> About American Author Hub</span>
                        <h1 class="text-light fw-bold display-5">Discover the Power of <span class="gradient-text-red">Exceptional Writing</span></h1>
                        <p class="text-light opacity-90 fs-5 mt-3">
                            American Author Hub was founded to give writers and publishers a seamless, collaborative platform 
                            where creativity meets professionalism. Our mission is simple: to provide high-quality content creation 
                            services that connect authors with their readers and bring their ideas to life effortlessly.
                        </p>
                        <a href="{{ route('contact-us') }}" class="btn-gradient-primary btn-lg mt-3"><i class="fa-solid fa-paper-plane me-2"></i> Let’s Discuss Your Project</a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/imgs/about.webp') }}" alt="About American Author Hub" class="shadow-lg rounded-4 w-100">
                </div>
            </div>
        </div>
    </section>


    <section class="what-we-do-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="what-we-do-about-box">
                        <ul class="what-we-do-about-slider">
                            <li>
                                <div class="what-we-do-about-inner-about">
                                    <span>01</span>
                                    <h3>Expert & Experienced Writers</h3>
                                    <p>
                                        Our team of writers has years of experience crafting engaging, high-quality content that 
                                        resonates with audiences. Each project is treated with creativity, skill, and attention to detail.
                                    </p>
                                    <a href="{{ route('contact-us') }}" class="popup-btn">Get Started</a>
                                </div>
                            </li>
                            <li>
                                <div class="what-we-do-about-inner-about">
                                    <span>02</span>
                                    <h3>Serving Multiple Industries</h3>
                                    <p>
                                        From startups to established enterprises, our writers have delivered exceptional content 
                                        across diverse industries. We understand the unique voice of every brand and help them stand out.
                                    </p>
                                    <a href="{{ route('contact-us') }}" class="popup-btn">Get Started</a>
                                </div>
                            </li>
                            <li>
                                <div class="what-we-do-about-inner-about">
                                    <span>03</span>
                                    <h3>SEO & Digital Content Experts</h3>
                                    <p>
                                        Our content is optimized for search engines and designed to drive engagement. With a deep 
                                        understanding of SEO and digital strategy, we ensure your work reaches the right audience.
                                    </p>
                                    <a href="{{ route('contact-us') }}" class="popup-btn">Get Started</a>
                                </div>
                            </li>
                            <li>
                                <div class="what-we-do-about-inner-about">
                                    <span>04</span>
                                    <h3>Passionate & Dedicated Team</h3>
                                    <p>
                                        We believe passion drives perfection. Our team is dedicated to every project, ensuring that 
                                        your vision is translated into compelling, polished content that exceeds expectations.
                                    </p>
                                    <a href="{{ route('contact-us') }}" class="popup-btn">Get Started</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-head">
                        <span>Who We Are</span>
                        <h1>We Craft Content That Empowers Authors to Succeed</h1>
                        <p>
                            Not everyone can find the right words to express their ideas perfectly. At American Author Hub, 
                            we specialize in turning your concepts into professionally written, captivating content. 
                            Our team combines creativity, expertise, and precision to ensure your book, article, or manuscript 
                            not only tells your story but leaves a lasting impression on your readers.
                        </p>
                        <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                    </div>
                </div>
            </div>
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
                        <h4>Top-Rated, US-Based Writers</h4>
                        <p>
                            Each of our writers undergoes a thorough selection, testing, and training process before joining 
                            our professional book writing team. We take pride in having some of the most skilled and 
                            celebrated authors from across the United States.
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
