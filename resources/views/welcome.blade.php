@extends('layouts.app')

@section('title', 'American Author Hub | Home')

@section('content')

    
    <!-- Styles (put in your css file or inside <head>) -->
    <style>
        /* keep the background for whole section */
        .main-banner {
          position: relative;
          padding: 80px 0;
          overflow: hidden;
          background-attachment: fixed; /* optional parallax feel */
        }
        
        /* subtle dark overlay so white text reads well */
        .main-banner .overlay {
          position: absolute;
          inset: 0;
          background: rgba(0,0,0,0.45);
          z-index: 0;
        }
        
        /* swiper slides should be transparent so section bg stays visible */
        .myBannerSwiper, .swiper-wrapper, .swiper-slide {
          background: transparent !important;
        }
        
        /* content above overlay */
        .banner-head, .banner-img {
          position: relative;
          z-index: 2;
        }
        
        /* typography */
        .banner-head h1 {
          color: #fff;
          font-size: 2.2rem;
          margin-bottom: 15px;
        }
        .banner-head p { color: #e6e6e6; margin-bottom: 20px; }
        
        /* image */
        .banner-img img {
          width: 100%;
          max-width: 420px;
          border-radius: 12px;
          display: block;
          position: relative;
          z-index: 2;
        }
        
        /* swiper controls color */
        .swiper-button-next, .swiper-button-prev {
          color: #fff;
        }
        .swiper-pagination-bullet { background: rgba(255,255,255,0.7); }
        
        /* responsive tweaks */
        @media (max-width: 767px) {
          .main-banner { padding: 40px 0; }
          .banner-head h1 { font-size: 1.4rem; }
          .banner-img img { max-width: 290px; margin: 20px auto 0; }
        }
        
        /* Default: mobile (no margin-top) */
        .desktop-margin {
            margin-top: 0 !important;
        }
        
        /* Desktop only (min-width 992px or any breakpoint you want) */
        @media (min-width: 992px) {
            .desktop-margin {
                margin-top: -80px !important;
            }
        }
        </style>
    
    <section class="main-banner" style="background: url('{{ asset('assets/imgs/main-back.png') }}') center/cover no-repeat;">
        <div class="overlay"></div>
    
        <!-- Swiper container -->
        <div class="swiper myBannerSwiper">
            <div class="swiper-wrapper">
    
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="banner-head">
                                    <h1 class="text-light">Transform Your Ideas Into Captivating Books</h1>
                                    <p>Let our professional writers craft your story with creativity and precision — where every word reflects your unique vision.</p>
                                    <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Start Your Project</a>
                                    <!--<a href="tel:+13463476046" class="project-btn phone-btn h-phone">+1 (346) 347-6046</a>-->
                                    
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="banner-img">
                                    <img src="{{ asset('assets/imgs/main.webp') }}" alt="Book Writing" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Slide 2 -->
                <div class="swiper-slide" style="margin-top: -80px !important;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="banner-head">
                                    <h1 class="text-light">Ghostwriting That Brings Your Imagination To Life</h1>
                                    <p>From concept to creation — our ghostwriters breathe life into your stories with passion, emotion, and clarity.</p>
                                    <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Bring Your Story Alive</a>
                                    <!--<a href="tel:+13463476046" class="project-btn phone-btn h-phone">+1 (346) 347-6046</a>-->
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="banner-img mt-5">
                                    <img src="{{ asset('assets/imgs/booknew1.png') }}" alt="Ghostwriting" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="banner-head">
                                    <h1 class="text-light">Refine. Publish. Inspire — Your Book Awaits</h1>
                                    <p>Collaborate with our editorial experts to polish your manuscript and transform it into a published success story.</p>
                                    <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Get Started</a>
                                    <!--<a href="tel:+13463476046" class="project-btn phone-btn h-phone">+1 (346) 347-6046</a>-->
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="banner-img mt-5">
                                    <img src="{{ asset('assets/imgs/booknew3.png') }}" style="width: 80% !important;" alt="Publishing" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
            <!-- Controls -->
            <!--<div class="swiper-button-next"></div>-->
            <!--<div class="swiper-button-prev"></div>-->
            <div class="swiper-pagination"></div>
        </div>
    </section>


    <section class="what-we-do-sec mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-head">
                        <span>What We Do</span>
                        <h2>Turning Your Ideas Into Published Masterpieces</h2>
                        <p>No matter what genre or concept you have in mind, our expert writers and editors bring your story
                            to life with creativity, structure, and precision. From fiction to non-fiction, autobiographies
                            to business guides — we write, edit, design, and publish your book with complete professionalism
                            at an affordable price. Let our team of skilled book writers turn your dreams into reality.
                        </p>
                        <a href="{{ route('contact-us') }}" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                        <!--<a href="tel:+13463476046" class="project-btn phone-btn h-phone-2">+1 (346) 347-6046</a>-->
                    </div>
                </div>
    
                <div class="col-md-6">
                    <ul class="what-we-slider">
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r2.webp') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Author Website</h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Author Website</h5>
                                    <p>Your online presence matters. Our creative web writers and designers build
                                        professional author websites that showcase your books, highlight your journey, and
                                        help you connect with your readers effectively.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
    
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r3.jpg') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Book Writing <br> Services</h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Book Writing Services</h5>
                                    <p>Our professional book writers transform your ideas into captivating stories. With
                                        creative storytelling, well-built characters, and a strong narrative flow, we ensure
                                        every page keeps your readers fully engaged.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
    
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r4.jpg') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>eBook Writing & <br> Publishing</h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>eBook Writing & Publishing</h5>
                                    <p>Looking to launch your eBook? Our team handles everything from writing and editing
                                        to formatting and publishing across top digital platforms — ensuring a flawless
                                        reading experience for your audience.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
    
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r5.jpg') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Book Cover <br> Design</h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Book Cover Design</h5>
                                    <p>They say “don’t judge a book by its cover” — but everyone does. Our designers create
                                        stunning, original, and story-aligned book covers that grab attention and perfectly
                                        represent your book’s theme.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
    
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r6.png') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Proofreading & <br> Editing</h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Proofreading & Editing</h5>
                                    <p>We polish your manuscript to perfection. Our editors and proofreaders refine your
                                        content for grammar, flow, tone, and structure — ensuring it’s clear, compelling,
                                        and publication-ready.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
    
                        <li>
                            <div class="what-we-do-main-box">
                                <img loading="lazy" src="{{ asset('assets/imgs/r7.png') }}" class="ser-what-img">
                                <div class="what-we-do-main-box-head">
                                    <h4>Book Publishing <br> Services</h4>
                                </div>
                                <div class="what-we-do-main-inner-box">
                                    <img loading="lazy" src="{{ asset('assets/imgs/what.png') }}">
                                    <h5>Book Publishing Services</h5>
                                    <p>From ISBN registration to distribution, we take care of the entire publishing
                                        process. Our experts help you publish across multiple platforms and genres — from
                                        fiction and biographies to self-help and educational books.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="choose-sec">
        <div class="container-fluid">
            <div class="row desktop-margin">
                <div class="col-md-2 offset-1">
                    <div class="choose-sec-img">
                        <img loading="lazy" src="{{ asset('assets/imgs/b1.webp') }}" alt="Book Writer 1">
                    </div>
                </div>
    
                <div class="col-md-2">
                    <div class="choose-sec-img">
                        <img loading="lazy" src="{{ asset('assets/imgs/b2.webp') }}" alt="Book Writer 2">
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="banner-head">
                        <span>Why Choose American Author Hub</span>
                        <h2>Step Into a World of Literary Excellence</h2>
                        <p>
                            With over 10,000 satisfied clients across the United States, American Author Hub has earned a reputation
                            for delivering premium-quality, affordable, and creative book writing services.  
                            We take pride in understanding every author’s unique voice and vision — crafting stories that
                            connect, inspire, and captivate readers.  
                            Our professional writers, editors, and publishing experts are passionate about helping you
                            achieve your literary dreams and make your mark in the world of publishing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="services-sec">
        <div class="banner-head">
            <h2>Explore Our Wide Range of Writing Services</h2>
            <p>
                At American Author Hub, diversity defines our strength. We house a team of specialized writers across
                every literary and professional genre — ensuring you always find the right expert for your story or project.
                Whether you’re an aspiring novelist, a speaker, or a business visionary, our tailored writing services are
                designed to help your ideas grow, connect, and leave a lasting impact.
            </p>
        </div>
    
        <!-- Left to Right Slider -->
        <div class="services-sec-slider-ltr">
            <ul class="service-ltr">
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t1.webp') }}" style="width:190px;" alt="Novel Writing">
                        <div class="services-sec-box-inner">
                            <h4>Novel Writing</h4>
                            <p>
                                Our skilled novelists bring your imagination to life — crafting captivating stories that reflect
                                your voice and vision. From concept to completion, we handle it all with creative precision,
                                helping you publish a book that resonates with readers and stands the test of time.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t2.webp') }}" style="width:190px;" alt="Speech Writing">
                        <div class="services-sec-box-inner">
                            <h4>Speech Writing</h4>
                            <p>
                                Let your words inspire and influence. Our professional speechwriters craft powerful,
                                emotion-driven speeches that captivate audiences and communicate your message with clarity,
                                confidence, and charisma — no matter the stage or occasion.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t3.webp') }}" style="width:190px;" alt="Wiki Writing">
                        <div class="services-sec-box-inner">
                            <h4>Wiki Writing</h4>
                            <p>
                                Enhance your digital presence with our expert Wikipedia writing and publishing services.
                                We ensure accuracy, credibility, and notability — creating well-researched, professionally
                                formatted Wiki pages that meet platform standards and boost your online authority.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t4.webp') }}" style="width:190px;" alt="Movie Writing">
                        <div class="services-sec-box-inner">
                            <h4>Movie Script Writing</h4>
                            <p>
                                From screenplays to cinematic storytelling, our scriptwriters collaborate with
                                directors and producers to craft engaging, award-worthy movie scripts. Expect creativity,
                                depth, and storytelling that keeps your audience hooked from the opening scene to the credits.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t5.webp') }}" style="width:190px;" alt="Poetry Writing">
                        <div class="services-sec-box-inner">
                            <h4>Poetry & Creative Writing</h4>
                            <p>
                                Words that move hearts — our creative writers and poets craft emotionally rich and
                                thought-provoking verses, tailored to your message, emotions, and artistic style. Let us
                                help you express your story through poetic perfection.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t6.webp') }}" style="width:190px;" alt="Speech Writing">
                        <div class="services-sec-box-inner">
                            <h4>Professional Speeches</h4>
                            <p>
                                Whether it’s a business conference, wedding toast, or political event — we craft speeches
                                that leave a lasting impression. Our expert writers ensure your message connects
                                authentically and inspires every listener.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    
        <!-- Right to Left Slider -->
        <div class="services-sec-slider-rtl">
            <ul class="service-rtl">
    
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t5.webp') }}" style="width:190px;" alt="Song Writing">
                        <div class="services-sec-box-inner">
                            <h4>Song Writing</h4>
                            <p>
                                Every great song begins with meaningful lyrics. Our songwriters turn your thoughts into
                                powerful words that blend rhythm and emotion — helping artists express their stories
                                through melodies that touch hearts and inspire listeners.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t4.webp') }}" style="width:190px;" alt="Memoir Writing">
                        <div class="services-sec-box-inner">
                            <h4>Memoir Writing</h4>
                            <p>
                                Share your life story with the world. Our memoir writers specialize in transforming personal
                                experiences into beautifully written narratives that inspire, connect, and resonate deeply
                                with readers for generations to come.
                            </p>
                        </div>
                    </div>
                </li>
    
                <li>
                    <div class="services-sec-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/t3.webp') }}" style="width:190px;" alt="Nonfiction Writing">
                        <div class="services-sec-box-inner">
                            <h4>Non-Fiction Writing</h4>
                            <p>
                                We provide professional non-fiction writing services for authors, educators, and
                                entrepreneurs. From biographies to business guides, our writers deliver compelling,
                                research-based manuscripts tailored to your unique voice and expertise.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
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
    
    
    
    

    @include('layouts.creative')

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
                    <!--    <a href="tel:+13463476046">+1 (346) 347-6046</a>-->
                    <!--    &nbsp;-->
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
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.myBannerSwiper', {
          loop: true,
          effect: 'fade',
          speed: 700,
          autoplay: { delay: 4500, disableOnInteraction: false },
          pagination: { el: '.swiper-pagination', clickable: true },
          navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
          fadeEffect: { crossFade: true },
        });
      });
    </script>

@endsection
