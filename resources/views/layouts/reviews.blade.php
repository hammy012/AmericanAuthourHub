 <!-- Testimonials (REPLACEMENT) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        /* Testimonials: modern card carousel */
        .testi-sec { padding: 60px 0; background: #f9fbfd; }
        .testi-sec .banner-head { text-align: center; margin-bottom: 36px; }
        .testi-sec .banner-head span { display:block; color:#6b7280; font-weight:600; }
        .testi-sec .banner-head h2 { color:#002768; font-size:28px; margin-top:8px; line-height:1.2; }
        .testi-sec .testi-sub { color:#374151; max-width:800px; margin:10px auto 0; font-size:15px; }
    
        .testi-swiper .swiper-slide { display:flex; align-items:stretch; }
        .testi-card {
            background: #fff;
            border-radius: 14px;
            padding: 22px;
            box-shadow: 0 10px 30px rgba(2, 39, 104, 0.06);
            display:flex;
            flex-direction:column;
            gap:14px;
            min-height: 220px;
        }
        .testi-quote { font-size:15px; color:#374151; line-height:1.6; flex:1; }
        .testi-stars { color:#f59e0b; } /* amber */
        .testi-author { display:flex; gap:12px; align-items:center; margin-top:8px; }
        .testi-avatar {
            width:56px; height:56px; border-radius:50%;
            display:inline-flex; align-items:center; justify-content:center;
            background: linear-gradient(135deg, #9F0B07 0%, #002768 100%);
            color:#fff; font-weight:700; font-size:16px;
            box-shadow: 0 6px 18px rgba(2,39,104,0.08);
        }
        .testi-meta { font-size:14px; color:#0f172a; font-weight:600; }
        .testi-role { font-size:13px; color:#6b7280; font-weight:500; }
    
        /* swiper nav/pagination tweaks */
        .testi-swiper .swiper-button-next,
        .testi-swiper .swiper-button-prev { color:#9F0B07; }
        .testi-swiper .swiper-pagination-bullet { background: rgba(2,39,104,0.15); }
        .testi-swiper .swiper-pagination-bullet-active { background: #9F0B07; }
    
        @media (min-width: 992px) {
            .testi-sec .container { max-width:1100px; }
        }
    </style>
    
    <section class="testi-sec py-5 section-white" data-aos="fade-up">
        <div class="container">
            <div class="banner-head text-center">
                <span class="gradient-badge mb-2"><i class="fa-solid fa-heart text-danger me-1"></i> Author Testimonials</span>
                <h2 class="fw-bold display-6 mt-2">Why Writers Choose <span class="gradient-text">American Author Hub</span></h2>
                <p class="testi-sub text-muted">Hear from real authors and publishers who trusted us with their writing, editing, and publishing journeys.</p>
            </div>
    
            @php
                $testimonials = [
                    [
                        'name' => 'Carole Jett',
                        'role' => 'Author & Memoirist',
                        'text' => 'American Author Hub turned my ideas into a polished, professional manuscript. Their editors refined my work while keeping my original tone intact.',
                        'rating' => 5
                    ],
                    [
                        'name' => 'Ethan Mitchell',
                        'role' => 'Independent Author',
                        'text' => 'From concept to launch, their team guided me with expertise and care. My book release was smoother and more successful than I could have imagined.',
                        'rating' => 5
                    ],
                    [
                        'name' => 'Noah Martinez',
                        'role' => 'Children’s Book Author',
                        'text' => 'The formatting was flawless, and the attention to design detail made my story shine. My readers love how professional the final version looks.',
                        'rating' => 4
                    ],
                    [
                        'name' => 'Aiden Clark',
                        'role' => 'First-Time Publisher',
                        'text' => 'They made the publishing process easy to understand and stress-free. Every step was handled with patience, clarity, and professionalism.',
                        'rating' => 5
                    ],
                ];
    
                $initial = function($name) {
                    $parts = preg_split('/\s+/', trim($name));
                    $letters = array_map(fn($p) => mb_substr($p, 0, 1), $parts);
                    return strtoupper(implode('', array_slice($letters, 0, 2)));
                };
            @endphp
    
            <div class="testi-swiper">
                <div class="swiper swiper-container testi-swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $t)
                            <div class="swiper-slide">
                                <div class="testi-card">
                                    <div class="testi-stars" aria-hidden="true">
                                        @for($i=0; $i<5; $i++)
                                            @if($i < $t['rating'])
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="vertical-align:middle;margin-right:2px;"><path d="M12 .587l3.668 7.431L23.4 9.75l-5.7 5.552L19.335 24 12 19.897 4.665 24l1.635-8.698L.6 9.75l7.732-1.732z"/></svg>
                                            @else
                                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" style="vertical-align:middle;margin-right:2px;opacity:.28;"><path d="M12 .587l3.668 7.431L23.4 9.75l-5.7 5.552L19.335 24 12 19.897 4.665 24l1.635-8.698L.6 9.75l7.732-1.732z" stroke-width="1.2"/></svg>
                                            @endif
                                        @endfor
                                    </div>
    
                                    <div class="testi-quote">“{{ $t['text'] }}”</div>
    
                                    <div class="testi-author">
                                        <div class="testi-avatar" aria-hidden="true">{{ $initial($t['name']) }}</div>
                                        <div>
                                            <div class="testi-meta">{{ $t['name'] }}</div>
                                            <div class="testi-role">{{ $t['role'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
    
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            try {
                const sw = new Swiper('.testi-swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    speed: 600,
                    pagination: { el: '.swiper-pagination', clickable: true },
                    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                    keyboard: { enabled: true },
                    breakpoints: {
                        576: { slidesPerView: 1 },
                        768: { slidesPerView: 2 },
                        992: { slidesPerView: 3 }
                    },
                    autoplay: { delay: 5000, disableOnInteraction: true }
                });
            } catch (e) {
                console.error('Swiper init error (testimonials):', e);
            }
        });
    </script>