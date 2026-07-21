<!-- Meta Creatives Section -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<style>

.meta-creative-sec{
    padding:90px 0;
    background: var(--gradient-fusion);
    position:relative;
    overflow:hidden;
}

/* glowing effects */

.meta-creative-sec::before{
    content:'';
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(255,255,255,0.06);
    border-radius:50%;
    top:-180px;
    right:-120px;
    filter:blur(90px);
}

.meta-creative-sec::after{
    content:'';
    position:absolute;
    width:400px;
    height:400px;
    background:rgba(255,255,255,0.04);
    border-radius:50%;
    bottom:-180px;
    left:-120px;
    filter:blur(80px);
}

.meta-creative-sec .banner-head{
    text-align:center;
    margin-bottom:60px;
    position:relative;
    z-index:2;
}

.meta-creative-sec .banner-head span{
    color:#ffd6d5;
    font-weight:600;
    letter-spacing:2px;
    text-transform:uppercase;
    font-size:14px;
}

.meta-creative-sec .banner-head h2{
    color:#fff;
    font-size:48px;
    margin-top:12px;
    font-weight:800;
    line-height:1.2;
}

.meta-creative-sec .banner-head p{
    color:#f3dede;
    max-width:720px;
    margin:18px auto 0;
    font-size:16px;
    line-height:1.8;
}

/* Card */

.creative-card{
    position:relative;
    overflow:hidden;
    border-radius:24px;
    transition:all 0.45s ease;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(10px);
    border:1px solid rgba(255,255,255,0.12);
    box-shadow:0 18px 45px rgba(0,0,0,0.25);
    aspect-ratio:1/1;
}

.creative-card img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:0.6s ease;
    border-radius:24px;
}

.creative-card:hover{
    transform:translateY(-10px);
    box-shadow:0 25px 60px rgba(0,0,0,0.35);
}

.creative-card:hover img{
    transform:scale(1.08);
}

/* overlay */

.creative-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(to top,
    rgba(0,0,0,0.85),
    rgba(0,0,0,0.15));
    opacity:0;
    transition:0.4s ease;
    display:flex;
    align-items:flex-end;
    padding:30px;
}

.creative-card:hover .creative-overlay{
    opacity:1;
}

.creative-overlay h4{
    color:#fff;
    font-size:22px;
    margin:0;
    font-weight:700;
    transform:translateY(20px);
    transition:0.4s ease;
}

.creative-card:hover .creative-overlay h4{
    transform:translateY(0);
}

/* swiper */

.creativeSwiper{
    padding-bottom:70px;
}

.creativeSwiper .swiper-pagination-bullet{
    background:#fff;
    opacity:0.4;
    width:12px;
    height:12px;
}

.creativeSwiper .swiper-pagination-bullet-active{
    background:#fff;
    opacity:1;
    width:30px;
    border-radius:20px;
}

/* arrows */

.creativeSwiper .swiper-button-next,
.creativeSwiper .swiper-button-prev{
    color:#fff;
    width:50px;
    height:50px;
    background:rgba(255,255,255,0.1);
    backdrop-filter:blur(8px);
    border-radius:50%;
    transition:0.3s ease;
}

.creativeSwiper .swiper-button-next:hover,
.creativeSwiper .swiper-button-prev:hover{
    background:#fff;
    color:#9F0B07;
}

.creativeSwiper .swiper-button-next::after,
.creativeSwiper .swiper-button-prev::after{
    font-size:18px;
    font-weight:700;
}

/* mobile */

@media(max-width:768px){

    .meta-creative-sec{
        padding:65px 0;
    }

    .meta-creative-sec .banner-head h2{
        font-size:34px;
    }

    .meta-creative-sec .banner-head p{
        font-size:15px;
    }

    .creative-card,
    .creative-card img{
        border-radius:18px;
    }

    .creative-card img{
        height:340px;
    }

    .creativeSwiper .swiper-button-next,
    .creativeSwiper .swiper-button-prev{
        display:none;
    }
}

</style>

<section class="meta-creative-sec" data-aos="fade-up">
    <div class="container">

        <div class="banner-head">
            <h2 style="margin-top: -65px;">Meta Creatives</h2>
            <p style="margin-top: -10px;">
                Explore our high-converting, professionally designed creatives crafted
                to capture attention, increase engagement, and elevate brand identity.
            </p>
        </div>

        <div class="swiper creativeSwiper" style="margin-top: -65px;">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative.jpeg') }}" alt="Creative 1">
                        <div class="creative-overlay">
                            <h4>40+ Platforms Publishing</h4>
                        </div>
                    </div>
                </div>
            
                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative2.jpeg') }}" alt="Creative 2">
                        <div class="creative-overlay">
                            <h4>50% OFF Book Publishing</h4>
                        </div>
                    </div>
                </div>
            
                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative3.jpeg') }}" alt="Creative 3">
                        <div class="creative-overlay">
                            <h4>Global Book Publishing</h4>
                        </div>
                    </div>
                </div>
            
                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative4.jpeg') }}" alt="Creative 4">
                        <div class="creative-overlay">
                            <h4>Amazon Book Publishing</h4>
                        </div>
                    </div>
                </div>
            
                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative5.png') }}" alt="Creative 5">
                        <div class="creative-overlay">
                            <h4>Children’s Book Publishing</h4>
                        </div>
                    </div>
                </div>
            
                <div class="swiper-slide">
                    <div class="creative-card">
                        <img src="{{ asset('userfiles/assets/creative6.jpeg') }}" alt="Creative 6">
                        <div class="creative-overlay">
                            <h4>Self Publishing on Amazon</h4>
                        </div>
                    </div>
                </div>
            
            </div>

            <!-- pagination -->
            <div class="swiper-pagination"></div>

            <!-- arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    new Swiper('.creativeSwiper', {
        loop: true,
        speed: 900,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
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

});
</script>