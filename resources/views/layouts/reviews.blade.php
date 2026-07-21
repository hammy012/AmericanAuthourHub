 <!-- Testimonials (REPLACEMENT) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
    /* Testimonials: modern card carousel */
    .testi-sec {
        padding: 80px 0;
        background: #ffffff;
        position: relative;
        overflow: hidden;
        border-top: 1px solid #f1f5f9;
        border-bottom: 1px solid #f1f5f9;
    }

    /* Huge decorative quote marks in the background */
    .testi-sec::before {
        content: '“';
        position: absolute;
        top: 8%;
        left: 4%;
        font-size: 200px;
        font-family: "Georgia", serif;
        color: rgba(159, 11, 7, 0.035);
        line-height: 1;
        pointer-events: none;
        font-weight: 900;
    }

    .testi-sec::after {
        content: '”';
        position: absolute;
        bottom: 8%;
        right: 4%;
        font-size: 200px;
        font-family: "Georgia", serif;
        color: rgba(159, 11, 7, 0.035);
        line-height: 1;
        pointer-events: none;
        font-weight: 900;
    }

    .testi-sec .banner-head {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        z-index: 2;
    }

    .testi-sec .banner-head span {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--brand-red);
        font-weight: 700;
        font-size: 13.5px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .testi-sec .banner-head h2 {
        color: var(--brand-navy);
        font-size: 42px;
        font-weight: 800;
        margin-top: 8px;
        line-height: 1.2;
        font-family: var(--font-heading);
    }

    .testi-sec .testi-sub {
        color: #64748b;
        max-width: 700px;
        margin: 12px auto 0;
        font-size: 15.5px;
        line-height: 1.6;
    }

    .testi-header-divider {
        margin-top: 15px;
        color: var(--brand-red);
        font-size: 14px;
        letter-spacing: 4px;
    }

    .testi-swiper {
        position: relative;
        z-index: 2;
        padding: 10px 10px 40px;
    }

    .testi-swiper .swiper-slide {
        display: flex;
        align-items: stretch;
        height: auto;
    }

    .testi-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 35px 30px;
        border-bottom: 4px solid var(--brand-red);
        box-shadow: 0 10px 30px rgba(0, 39, 104, 0.04);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 250px;
        width: 100%;
        position: relative;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border-top: 1px solid rgba(0, 39, 104, 0.02);
        border-left: 1px solid rgba(0, 39, 104, 0.02);
        border-right: 1px solid rgba(0, 39, 104, 0.02);
    }

    .testi-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 45px rgba(159, 11, 7, 0.08);
    }

    /* Small decorative quote mark inside card */
    .testi-card-quote {
        position: absolute;
        top: 15px;
        right: 25px;
        font-size: 70px;
        font-family: "Georgia", serif;
        color: rgba(159, 11, 7, 0.06);
        line-height: 1;
        pointer-events: none;
    }

    .testi-stars {
        color: var(--brand-red);
        font-size: 15px;
        margin-bottom: 18px;
        display: flex;
        gap: 4px;
    }

    .testi-quote {
        font-family: var(--font-body);
        font-size: 14.5px;
        color: #334155;
        line-height: 1.6;
        flex: 1;
        margin-bottom: 24px;
        font-weight: 500;
    }

    .testi-author {
        display: flex;
        gap: 14px;
        align-items: center;
        border-top: 1px solid #f1f5f9;
        padding-top: 18px;
    }

    .testi-avatar-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 4px 10px rgba(0, 39, 104, 0.1);
        border: 2px solid #ffffff;
    }

    .testi-meta {
        font-family: var(--font-heading);
        font-size: 15px;
        color: var(--brand-navy);
        font-weight: 700;
        line-height: 1.2;
    }

    .testi-role {
        font-family: var(--font-body);
        font-size: 12.5px;
        color: #64748b;
        font-weight: 500;
        margin-top: 2px;
    }

    /* pagination style override */
    .testi-swiper .swiper-pagination-bullet {
        background: rgba(0, 39, 104, 0.15);
        opacity: 1;
        width: 10px;
        height: 10px;
        transition: all 0.3s ease;
    }

    .testi-swiper .swiper-pagination-bullet-active {
        background: var(--brand-red);
        width: 22px;
        border-radius: 5px;
    }

    @media (max-width: 991px) {
        .testi-sec .banner-head h2 {
            font-size: 34px;
        }
        .testi-sec {
            padding: 60px 0;
        }
    }
</style>

<section class="testi-sec py-5 section-white">
    <div class="container">
        
        <!-- Header -->
        <div class="banner-head">
            <span>
                <i class="fa-solid fa-feather-pointed"></i> WHAT OUR AUTHORS SAY <i class="fa-solid fa-feather-pointed"></i>
            </span>
            <h2>Trusted by Authors. <span class="text-danger">Proven by Results.</span></h2>
            <p class="testi-sub text-muted">
                See how we've helped writers turn their ideas into bestselling books and reach readers around the world.
            </p>
            <div class="testi-header-divider">
                — <i class="fa-solid fa-star"></i> —
            </div>
        </div>

        @php
            $testimonials = [
                [
                    'name' => 'Camila Scott',
                    'role' => 'Author & Motivational Speaker',
                    'text' => 'American Author Hub transformed my manuscript into a beautifully published book. Their team was professional, supportive, and delivered beyond my expectations.',
                    'avatar' => 'assets/imgs/r5.jpg'
                ],
                [
                    'name' => 'Aiden Clark',
                    'role' => 'First-Time Author',
                    'text' => 'From editing to publishing and marketing, everything was handled with excellence. Thanks to their global distribution, my book is now reaching readers worldwide.',
                    'avatar' => 'assets/imgs/r4.jpg'
                ],
                [
                    'name' => 'Noah Martinez',
                    'role' => 'Children\'s Book Author',
                    'text' => 'The team\'s attention to detail, creativity, and commitment to quality truly set them apart. I couldn\'t have asked for a better publishing partner.',
                    'avatar' => 'assets/imgs/r3.jpg'
                ],
                [
                    'name' => 'Carole Jett',
                    'role' => 'Author & Memoirist',
                    'text' => 'American Author Hub turned my ideas into a polished, professional manuscript. Their editors refined my work while keeping my original tone intact.',
                    'avatar' => 'assets/imgs/r1.jpg'
                ],
                [
                    'name' => 'Ethan Mitchell',
                    'role' => 'Independent Author',
                    'text' => 'From concept to launch, their team guided me with expertise and care. My book release was smoother and more successful than I could have imagined.',
                    'avatar' => 'assets/imgs/r2.webp'
                ],
                [
                    'name' => 'Sophia Martinez',
                    'role' => 'Fiction Writer',
                    'text' => 'The formatting was flawless, and the attention to design detail made my story shine. My readers love how professional the final version looks.',
                    'avatar' => 'assets/imgs/r6.png'
                ],
            ];
        @endphp

        <div class="testi-swiper">
            <div class="swiper swiper-container testi-swiper-container">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $t)
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card-quote">“</div>
                                
                                <div class="testi-stars">
                                    @for($i=0; $i<5; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div>

                                <div class="testi-quote">"{{ $t['text'] }}"</div>

                                <div class="testi-author">
                                    <img src="{{ asset($t['avatar']) }}" alt="{{ $t['name'] }}" class="testi-avatar-img">
                                    <div>
                                        <div class="testi-meta">{{ $t['name'] }}</div>
                                        <div class="testi-role">{{ $t['role'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination mt-4"></div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        try {
            if (typeof Swiper !== 'undefined') {
                new Swiper('.testi-swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    speed: 600,
                    pagination: { el: '.swiper-pagination', clickable: true },
                    keyboard: { enabled: true },
                    breakpoints: {
                        576: { slidesPerView: 1 },
                        768: { slidesPerView: 2 },
                        992: { slidesPerView: 3 }
                    },
                    autoplay: { delay: 5000, disableOnInteraction: true }
                });
            }
        } catch (e) {
            console.error('Swiper init error (testimonials):', e);
        }
    });
</script>