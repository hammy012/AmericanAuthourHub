@extends('layouts.app')

@section('title', 'American Author Hub | Our Featured Work & Published Masterpieces')

@section('meta_title', 'Featured Published Books & Interactive 3D Portfolio | American Author Hub')
@section('meta_description', 'Explore American Author Hub\'s published masterpieces. Experience our interactive 3D bookshelf with realistic turning pages, chapter excerpts, and bestseller highlights.')

@section('content')

    <!-- Custom Styling for Interactive 3D Bookshelf & Reader Modal -->
    <style>
        :root {
            --brand-crimson: #880808;
            --brand-scarlet: #c21c1c;
            --brand-dark: #0a0405;
            --brand-gold: #c5a880;
        }

        /* Hero Subtitle Badge */
        .portfolio-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 18px;
            border-radius: 50px;
            background: rgba(136, 8, 8, 0.08);
            border: 1px solid rgba(136, 8, 8, 0.25);
            color: #880808;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }

        /* 3D Bookshelf Section */
        .shelf-section {
            background: linear-gradient(180deg, #ffffff 0%, #faf6f6 50%, #f4eded 100%);
            position: relative;
            padding: 40px 0 80px;
        }

        /* 3D Book Showcase Item */
        .aah-book-showcase-item {
            cursor: pointer;
            max-width: 320px;
            margin: 0 auto;
            text-align: center;
            perspective: 1200px;
            transition: all 0.4s ease;
        }

        /* Realistic Book Cover Frame with 1:1.5 Aspect Ratio */
        .aah-book-cover-wrap {
            position: relative;
            width: 100%;
            max-width: 295px;
            height: 440px;
            margin: 0 auto 16px;
            border-radius: 4px 14px 14px 4px;
            overflow: hidden;
            transform-style: preserve-3d;
            box-shadow: -10px 14px 28px -5px rgba(0, 0, 0, 0.4), 0 2px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.5s cubic-bezier(0.2, 0.8, 0.2, 1);
            background: #0f1117;
        }

        .aah-book-showcase-item:hover .aah-book-cover-wrap {
            transform: translateY(-10px) rotateY(-14deg) rotateX(4deg) scale(1.02);
            box-shadow: -22px 28px 40px -8px rgba(0, 0, 0, 0.55), 0 0 35px var(--glow-color, rgba(136, 8, 8, 0.35));
        }

        /* Spine Accent on Left */
        .aah-book-3d-spine {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 14px;
            background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, rgba(255,255,255,0.25) 45%, rgba(0,0,0,0.4) 100%);
            border-right: 1px solid rgba(255,255,255,0.12);
            z-index: 5;
            pointer-events: none;
        }

        /* Book Image - Fully Visible without Distortion */
        .aah-book-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 4px 14px 14px 4px;
            transition: transform 0.6s ease;
        }

        .aah-book-showcase-item:hover .aah-book-img {
            transform: scale(1.03);
        }

        .aah-book-sheen {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.12) 0%, transparent 40%, rgba(0,0,0,0.2) 100%);
            pointer-events: none;
            z-index: 3;
        }

        /* Details */
        .aah-book-details {
            padding: 0 6px;
        }

        .aah-book-badge-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .aah-badge {
            padding: 3px 12px;
            border-radius: 50px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        .aah-badge.scifi { background: rgba(14, 165, 233, 0.12); color: #0284c7; border: 1px solid rgba(14, 165, 233, 0.3); }
        .aah-badge.solar { background: rgba(249, 115, 22, 0.12); color: #ea580c; border: 1px solid rgba(249, 115, 22, 0.3); }
        .aah-badge.memoir { background: rgba(16, 185, 129, 0.12); color: #059669; border: 1px solid rgba(16, 185, 129, 0.3); }
        .aah-badge.romance { background: rgba(217, 119, 6, 0.12); color: #d97706; border: 1px solid rgba(217, 119, 6, 0.3); }
        .aah-badge.fantasy { background: rgba(168, 85, 247, 0.12); color: #9333ea; border: 1px solid rgba(168, 85, 247, 0.3); }

        .aah-rating {
            font-size: 11px;
            font-weight: 700;
            color: #475569;
        }

        .aah-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 18.5px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 3px;
            line-height: 1.25;
        }

        .aah-subtitle {
            font-size: 12.5px;
            color: #64748b;
            margin-bottom: 12px;
            font-weight: 500;
        }

        .aah-flip-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 9px 18px;
            border-radius: 50px;
            background: #880808;
            color: #ffffff;
            border: none;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(136, 8, 8, 0.25);
        }

        .aah-flip-btn:hover {
            background: #c21c1c;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(194, 28, 28, 0.4);
            color: #ffffff;
        }

        /* Shelf Decorative Ledge */
        .shelf-ledge {
            height: 18px;
            background: linear-gradient(180deg, #2b130e 0%, #150805 100%);
            border-radius: 4px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.35), inset 0 2px 3px rgba(255,255,255,0.15);
            margin: 25px 0 10px;
            position: relative;
        }

        .shelf-ledge::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #880808 0%, #c5a880 50%, #880808 100%);
            opacity: 0.6;
        }

        /* Fullscreen Interactive Reader Modal */
        .reader-modal-overlay {
            position: fixed;
            inset: 0;
            z-index: 999999;
            background: rgba(4, 2, 3, 0.96);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            display: none;
            flex-direction: column;
            animation: readerFadeIn 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes readerFadeIn {
            from { opacity: 0; transform: scale(0.98); }
            to { opacity: 1; transform: scale(1); }
        }

        .reader-top-bar {
            padding: 12px 28px;
            background: #0d0305;
            border-bottom: 1px solid rgba(194, 28, 28, 0.4);
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #ffffff;
            box-shadow: 0 4px 20px rgba(0,0,0,0.6);
        }

        .status-pulse-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #e04040;
            box-shadow: 0 0 10px #e04040;
            display: inline-block;
            margin-right: 12px;
            animation: statusPulse 2s infinite;
        }

        @keyframes statusPulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
        }

        .reader-book-title {
            font-size: 16px;
            font-weight: 700;
            color: #ffffff;
            font-family: 'Playfair Display', Georgia, serif;
            letter-spacing: 0.02em;
        }

        .reader-close-btn {
            background: rgba(136, 8, 8, 0.35);
            border: 1px solid rgba(224, 64, 64, 0.6);
            color: #ffffff;
            padding: 7px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 600;
            transition: all 0.25s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .reader-close-btn:hover {
            background: #c21c1c;
            color: #ffffff;
            box-shadow: 0 0 12px rgba(194, 28, 28, 0.5);
        }

        .reader-iframe-container {
            flex: 1;
            width: 100%;
            height: calc(100% - 56px);
            position: relative;
        }

        .reader-iframe {
            width: 100%;
            height: 100%;
            border: none;
            background: transparent;
        }

        /* Interactive Hint Pill */
        .reader-hint-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            border-radius: 50px;
            background: #ffffff;
            border: 1px solid rgba(136, 8, 8, 0.2);
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            font-size: 12px;
            color: #334155;
            margin-bottom: 25px;
        }

        .testi-header-divider {
            color: #880808;
            font-weight: bold;
            margin: 15px auto;
        }
    </style>

    <!-- Hero Header -->
    <section class="position-relative hero-bg-ref overflow-hidden d-flex align-items-center"
        style="padding-top: 65px !important; padding-bottom: 60px !important; min-height: 380px; background: #ffffff;">
        <div class="container py-lg-3 text-center" data-aos="fade-up" data-aos-duration="900">
            <span class="portfolio-badge mb-3">
                <i class="fa-solid fa-feather-pointed me-1"></i> INTERACTIVE 3D PORTFOLIO &amp; SHOWCASE
            </span>
            <h1 class="hero-title mb-3" style="font-size: 2.9rem !important; line-height: 1.25 !important; font-weight: 800;">
                Discover Our Featured <span class="text-brand-red" style="color: #880808 !important;">Published Masterpieces</span>
            </h1>
            <p class="hero-paragraph mb-4 mx-auto" style="max-width: 720px; font-size: 16px !important; color: #475569;">
                Step inside our published works. Click any book cover below to launch an <strong>interactive 3D reading experience</strong> with realistic turning pages, authentic excerpts, and full double-sided book spreads.
            </p>
            <div class="d-flex justify-content-center flex-wrap" style="gap: 15px !important;">
                <a href="{{ route('home') }}#pricing" class="btn-red-pill" style="margin-right: 12px !important;">
                    <i class="fa-solid fa-paper-plane me-1"></i> Start Your Book Project
                </a>
                <a href="#interactive-bookshelf" class="btn-brand-outline">
                    Explore 3D Bookshelf <i class="fa-solid fa-chevron-down ms-1 small"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Interactive 3D Bookshelf Section (3 in Row 1, 2 in Row 2 Centered) -->
    <section class="shelf-section" id="interactive-bookshelf">
        <div class="container py-4">

            <!-- Centered Header -->
            <div class="banner-head text-center mb-4" data-aos="fade-up">
                <h2 style="font-size: 2.4rem; font-weight: 800; color: #0f172a; margin-top: 8px;">
                    Interactive 3D <span style="color: #880808;">Book Showcase</span>
                </h2>
                <p class="testi-sub text-muted mx-auto" style="max-width: 680px; font-size: 14.5px;">
                    Every book shown here was written, edited, designed, and published for global reach. <strong>Click on any book</strong> to open its 3D covers and flip through its pages in real-time.
                </p>
            </div>

            <!-- ROW 1: 3 BOOKS -->
            <div class="row g-4 justify-content-center mb-4">

                <!-- Book 1: Survival of the Species - The Journey -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="aah-book-showcase-item" onclick="openBook('journey', 'Survival of the Species: The Journey • Suresh Gupta')">
                        <div class="aah-book-cover-wrap" style="--glow-color: rgba(56, 189, 248, 0.45);">
                            <div class="aah-book-3d-spine"></div>
                            <img src="{{ asset('assets/covers/journey.png') }}" alt="Survival of the Species: The Journey" class="aah-book-img">
                            <div class="aah-book-sheen"></div>
                        </div>
                        <div class="aah-book-details">
                            <div class="aah-book-badge-row">
                                <span class="aah-badge scifi">Cosmic Sci-Fi</span>
                                <span class="aah-rating"><i class="fa-solid fa-star text-warning"></i> 5.0</span>
                            </div>
                            <h3 class="aah-title">Survival of the Species</h3>
                            <p class="aah-subtitle">The Journey &bull; Suresh Gupta</p>
                            <button class="aah-flip-btn" type="button">
                                <i class="fa-solid fa-book-open"></i> Read &amp; Flip Pages
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book 2: Survival of the Species - Our Sun -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="aah-book-showcase-item" onclick="openBook('our_sun', 'Survival of the Species: Our Sun • Suresh Gupta')">
                        <div class="aah-book-cover-wrap" style="--glow-color: rgba(249, 115, 22, 0.45);">
                            <div class="aah-book-3d-spine"></div>
                            <img src="{{ asset('assets/covers/our-sun.jpg') }}" alt="Survival of the Species: Our Sun" class="aah-book-img">
                            <div class="aah-book-sheen"></div>
                        </div>
                        <div class="aah-book-details">
                            <div class="aah-book-badge-row">
                                <span class="aah-badge solar">Trilogy Book I</span>
                                <span class="aah-rating"><i class="fa-solid fa-star text-warning"></i> 5.0</span>
                            </div>
                            <h3 class="aah-title">Survival of the Species</h3>
                            <p class="aah-subtitle">Our Sun &bull; Suresh Gupta</p>
                            <button class="aah-flip-btn" type="button">
                                <i class="fa-solid fa-book-open"></i> Read &amp; Flip Pages
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book 3: Silent Words: What the Poems Didn't Say -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="aah-book-showcase-item" onclick="openBook('saved_words', 'Silent Words: What the Poems Didn\'t Say • Crystal Rauch')">
                        <div class="aah-book-cover-wrap" style="--glow-color: rgba(52, 211, 153, 0.45);">
                            <div class="aah-book-3d-spine"></div>
                            <img src="{{ asset('assets/covers/silent-words.png') }}" alt="Silent Words: What the Poems Didn't Say" class="aah-book-img">
                            <div class="aah-book-sheen"></div>
                        </div>
                        <div class="aah-book-details">
                            <div class="aah-book-badge-row">
                                <span class="aah-badge memoir">Poetry &amp; Memoir</span>
                                <span class="aah-rating"><i class="fa-solid fa-star text-warning"></i> 4.9</span>
                            </div>
                            <h3 class="aah-title">Silent Words</h3>
                            <p class="aah-subtitle">What the Poems Didn't Say &bull; Crystal Rauch</p>
                            <button class="aah-flip-btn" type="button">
                                <i class="fa-solid fa-book-open"></i> Read &amp; Flip Pages
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Shelf Ledge Divider -->
            <div class="shelf-ledge d-none d-md-block" data-aos="fade-up"></div>

            <!-- ROW 2: 2 BOOKS CENTERED -->
            <div class="row g-4 justify-content-center mt-3">

                <!-- Book 4: Fog of Steam -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="aah-book-showcase-item" onclick="openBook('fog_steam', 'Fog of Steam • Written by Suresh Gupta')">
                        <div class="aah-book-cover-wrap" style="--glow-color: rgba(217, 119, 6, 0.45);">
                            <div class="aah-book-3d-spine"></div>
                            <img src="{{ asset('assets/covers/fog-of-steam.jpg') }}" alt="Fog of Steam" class="aah-book-img">
                            <div class="aah-book-sheen"></div>
                        </div>
                        <div class="aah-book-details">
                            <div class="aah-book-badge-row">
                                <span class="aah-badge romance">Edwardian Mystery</span>
                                <span class="aah-rating"><i class="fa-solid fa-star text-warning"></i> 5.0</span>
                            </div>
                            <h3 class="aah-title">Fog of Steam</h3>
                            <p class="aah-subtitle">Written by Suresh Gupta</p>
                            <button class="aah-flip-btn" type="button">
                                <i class="fa-solid fa-book-open"></i> Read &amp; Flip Pages
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book 5: Call of Shadow -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="aah-book-showcase-item" onclick="openBook('shadow', 'Call of Shadow: Talira • Lucas Hanley')">
                        <div class="aah-book-cover-wrap" style="--glow-color: rgba(168, 85, 247, 0.45);">
                            <div class="aah-book-3d-spine"></div>
                            <img src="{{ asset('assets/covers/call-of-shadow.png') }}" alt="Call of Shadow: Talira" class="aah-book-img">
                            <div class="aah-book-sheen"></div>
                        </div>
                        <div class="aah-book-details">
                            <div class="aah-book-badge-row">
                                <span class="aah-badge fantasy">Dark Fantasy YA</span>
                                <span class="aah-rating"><i class="fa-solid fa-star text-warning"></i> 5.0</span>
                            </div>
                            <h3 class="aah-title">Call of Shadow</h3>
                            <p class="aah-subtitle">Talira &bull; Lucas Hanley</p>
                            <button class="aah-flip-btn" type="button">
                                <i class="fa-solid fa-book-open"></i> Read &amp; Flip Pages
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Shelf Bottom Ledge -->
            <div class="shelf-ledge d-none d-md-block" data-aos="fade-up"></div>

            <!-- Bottom Action Row -->
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="{{ route('contact-us') }}" class="btn-red-pill me-3" style="padding: 12px 32px; font-size: 15px;">
                    <i class="fa-solid fa-pen-nib me-2"></i> Have an Idea? Let's Publish Your Book
                </a>
            </div>

        </div>
    </section>

    <!-- Interactive Reader Modal / Fullscreen 3D Viewer (NO REDIRECT - INLINE VIEWER) -->
    <div id="readerModal" class="reader-modal-overlay">
        <!-- Reader Top Bar -->
        <div class="reader-top-bar">
            <div class="d-flex align-items-center">
                <span class="status-pulse-dot"></span>
                <span id="modalBookTitle" class="reader-book-title">Book Title</span>
            </div>

            <div class="d-flex align-items-center" style="gap: 12px;">
                <a href="{{ route('contact-us') }}" class="btn-red-pill d-none d-md-inline-flex" style="padding: 6px 16px; font-size: 12.5px;">
                    <i class="fa-solid fa-feather-pointed me-1"></i> Start Your Book Project
                </a>
                <button onclick="closeBook()" class="reader-close-btn" title="Close Reader">
                    <i class="fa-solid fa-xmark"></i> <span>Close Reader</span>
                </button>
            </div>
        </div>

        <!-- Iframe Container with direct inline document loading via srcdoc -->
        <div class="reader-iframe-container">
            <iframe id="bookFrame" class="reader-iframe" sandbox="allow-scripts allow-same-origin allow-modals"></iframe>
        </div>
    </div>

    <!-- EMBEDDED BOOK TEMPLATES -->
    @include('components.book-templates')

    <!-- Interactive Reader Script -->
    <script>
        function openBook(bookKey, title) {
            var modal = document.getElementById('readerModal');
            var iframe = document.getElementById('bookFrame');
            var titleEl = document.getElementById('modalBookTitle');
            var tpl = document.getElementById('template-' + bookKey);

            if (!tpl && (bookKey === 'silent_words' || bookKey === 'silent-words')) {
                tpl = document.getElementById('template-saved_words') || document.getElementById('template-silent_words');
            }
            if (!tpl && bookKey === 'saved_words') {
                tpl = document.getElementById('template-silent_words') || document.getElementById('template-saved_words');
            }

            if (tpl) {
                titleEl.textContent = title;
                // Directly write HTML into iframe via srcdoc - Instant, zero latency, zero redirect!
                iframe.srcdoc = tpl.innerHTML;
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            } else {
                alert('Book content not found for: ' + bookKey);
            }
        }

        function closeBook() {
            var modal = document.getElementById('readerModal');
            var iframe = document.getElementById('bookFrame');
            modal.style.display = 'none';
            iframe.srcdoc = '';
            document.body.style.overflow = '';
        }

        // Close on Escape key
        window.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeBook();
            }
        });

        // Listen for close message from inside iframe
        window.addEventListener('message', function(e) {
            if (e.data && e.data.action === 'closeBook') {
                closeBook();
            }
        });
    </script>

    <!-- Meta Creatives Section -->
    @include('layouts.creative')

    <!-- Author Testimonials -->
    @include('layouts.reviews')

    <!-- Call To Action Banner -->
    @include('layouts.cta')
    
    <!-- Contact Section -->
    @include('layouts.contact')

@endsection
