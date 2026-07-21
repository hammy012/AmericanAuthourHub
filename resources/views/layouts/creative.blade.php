<!-- Meta Creatives Section -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
    .meta-creative-sec {
        padding: 90px 0;
        background: radial-gradient(circle at 80% 20%, rgba(159, 11, 7, 0.12) 0%, transparent 50%),
            radial-gradient(circle at 20% 80%, rgba(0, 39, 104, 0.25) 0%, transparent 60%),
            #001529;
        position: relative;
        overflow: hidden;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* Cosmic ambient glows */
    .meta-creative-sec::before {
        content: '';
        position: absolute;
        width: 500px;
        height: 500px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 50%;
        top: -180px;
        right: -120px;
        filter: blur(90px);
        pointer-events: none;
    }

    .meta-creative-sec::after {
        content: '';
        position: absolute;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 50%;
        bottom: -180px;
        left: -120px;
        filter: blur(80px);
        pointer-events: none;
    }

    .meta-creative-sec .banner-head {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        z-index: 2;
    }

    .meta-creative-sec .banner-head span {
        color: var(--brand-red);
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-size: 13px;
        font-family: var(--font-heading);
    }

    .meta-creative-sec .banner-head h2 {
        color: #fff;
        font-size: 42px;
        margin-top: 10px;
        font-weight: 800;
        line-height: 1.2;
        font-family: var(--font-heading);
    }

    .meta-creative-sec .banner-head p {
        color: rgba(255, 255, 255, 0.75);
        max-width: 720px;
        margin: 14px auto 0;
        font-size: 16px;
        line-height: 1.7;
        font-family: var(--font-body);
    }

    /* Swiper Slider Wrapper */
    .creativeSwiper {
        padding-bottom: 60px;
        position: relative;
        z-index: 2;
    }

    /* Card layout */
    .creative-card {
        position: relative;
        overflow: hidden;
        border-radius: 20px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        aspect-ratio: 1 / 1;
    }

    .creative-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 20px;
    }

    .creative-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(159, 11, 7, 0.25);
        border-color: rgba(159, 11, 7, 0.35);
    }

    .creative-card:hover img {
        transform: scale(1.08);
    }

    /* Info Bar at Bottom - Always Visible & Highly Premium */
    .creative-info-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 21, 41, 0.95) 0%, rgba(0, 21, 41, 0.3) 100%);
        backdrop-filter: blur(8px);
        padding: 20px 24px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        z-index: 2;
        text-align: left;
    }

    .creative-card:hover .creative-info-bar {
        background: linear-gradient(to top, rgba(159, 11, 7, 0.98) 0%, rgba(159, 11, 7, 0.65) 100%);
        border-top-color: rgba(255, 255, 255, 0.15);
    }

    .creative-info-bar span {
        color: var(--brand-red);
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        display: block;
        margin-bottom: 4px;
        transition: color 0.3s ease;
        font-family: var(--font-heading);
    }

    .creative-card:hover .creative-info-bar span {
        color: #ffd6d5;
    }

    .creative-info-bar h4 {
        color: #fff;
        font-size: 18px;
        margin: 0;
        font-weight: 700;
        font-family: var(--font-heading);
        line-height: 1.3;
    }

    /* Swiper Pagination */
    .creativeSwiper .swiper-pagination-bullet {
        background: #fff;
        opacity: 0.3;
        width: 10px;
        height: 10px;
        transition: all 0.3s ease;
    }

    .creativeSwiper .swiper-pagination-bullet-active {
        background: var(--brand-red);
        opacity: 1;
        width: 26px;
        border-radius: 10px;
        box-shadow: 0 0 8px rgba(159, 11, 7, 0.6);
    }

    /* Navigation Arrows */
    .creativeSwiper .swiper-button-next,
    .creativeSwiper .swiper-button-prev {
        color: #fff;
        width: 48px;
        height: 48px;
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(8px);
        border-radius: 50%;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.05);
    }

    .creativeSwiper .swiper-button-next:hover,
    .creativeSwiper .swiper-button-prev:hover {
        background: var(--brand-red);
        color: #fff;
        border-color: var(--brand-red);
        box-shadow: 0 0 15px rgba(159, 11, 7, 0.4);
    }

    .creativeSwiper .swiper-button-next::after,
    .creativeSwiper .swiper-button-prev::after {
        font-size: 16px;
        font-weight: 800;
    }

    /* Responsive Tweaks */
    @media (max-width: 991px) {
        .meta-creative-sec .banner-head h2 {
            font-size: 34px;
        }

        .meta-creative-sec .banner-head p {
            font-size: 15px;
        }
    }

    @media (max-width: 768px) {
        .meta-creative-sec {
            padding: 60px 0;
        }

        .creative-card {
            border-radius: 16px;
        }

        .creative-card img {
            border-radius: 16px;
        }

        .creativeSwiper .swiper-button-next,
        .creativeSwiper .swiper-button-prev {
            display: none;
        }

        .creative-info-bar {
            padding: 15px 18px;
        }

        .creative-info-bar h4 {
            font-size: 15px;
        }
    }
</style>

<section class="meta-creative-sec">
    <div class="container">

        <!-- Heading -->
        <div class="banner-head" data-aos="fade-up">
            <h2>Meta Creatives</h2>
            <p>
                Explore our high-converting, professionally designed creatives crafted
                to capture attention, increase engagement, and elevate brand identity.
            </p>
        </div>

        <!-- Slider -->
        <div class="swiper creativeSwiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative.jpeg') }}" alt="Creative 1">
                        <div class="creative-info-bar">
                            <span>CAMPAIGN</span>
                            <h4>40+ Platforms Publishing</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative2.jpeg') }}" alt="Creative 2">
                        <div class="creative-info-bar">
                            <span>PROMOTION</span>
                            <h4>50% OFF Book Publishing</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative3.jpeg') }}" alt="Creative 3">
                        <div class="creative-info-bar">
                            <span>GLOBAL REACH</span>
                            <h4>Global Book Publishing</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative4.jpeg') }}" alt="Creative 4">
                        <div class="creative-info-bar">
                            <span>DISTRIBUTION</span>
                            <h4>Amazon Book Publishing</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative5.png') }}" alt="Creative 5">
                        <div class="creative-info-bar">
                            <span>ILLUSTRATION</span>
                            <h4>Children’s Book Publishing</h4>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative6.jpeg') }}" alt="Creative 6">
                        <div class="creative-info-bar">
                            <span>SELF PUBLISHING</span>
                            <h4>Self Publishing on Amazon</h4>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof Swiper !== 'undefined') {
            new Swiper('.creativeSwiper', {
                loop: true,
                speed: 900,
                centeredSlides: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                grabCursor: true,
                spaceBetween: 25,
                pagination: {
                    el: '.creativeSwiper .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.creativeSwiper .swiper-button-next',
                    prevEl: '.creativeSwiper .swiper-button-prev',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1200: {
                        slidesPerView: 3,
                    }
                }
            });
        }
    });
</script>