<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <title>@yield('title', 'American Author Hub | Book Writing Company')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/imgs/logo.png') }}">
    <!-- Font Awesome (CDN or local) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    {{-- ✅ Primary SEO --}}
    <title>@yield('meta_title', 'Professional Book Writing & Ghostwriting Services | American Author Hub')</title>

    <meta name="description" content="@yield('meta_description', 'American Author Hub is a professional book writing and ghostwriting company offering expert editing, publishing, book marketing and Amazon KDP services. Turn your idea into a bestselling book today.')">
    
    <meta name="keywords" content="@yield('meta_keywords', 'book writing company, ghostwriting services, professional book writers, hire a ghostwriter, book publishing services, Amazon KDP publishing, book editing services, ebook writing services, book marketing agency, American Author Hub')">
    
    <meta name="author" content="American Author Hub">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    
    <link rel="canonical" href="{{ url()->current() }}" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="American Author Hub">
    <meta property="og:title" content="@yield('meta_title', 'Professional Book Writing & Ghostwriting Services | American Author Hub')">
    <meta property="og:description" content="@yield('meta_description', 'Hire professional ghostwriters, editors and publishing experts to bring your book to life.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-cover.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('meta_title', 'Professional Book Writing & Ghostwriting Services | American Author Hub')">
    <meta name="twitter:description" content="@yield('meta_description', 'Expert ghostwriting, editing and publishing services to help you become a published author.')">
    <meta name="twitter:image" content="{{ asset('assets/images/og-cover.jpg') }}">
    <meta name="twitter:site" content="@AmericanAuthorHub">
    
    <!-- Geo Target (USA Focus) -->
    <meta name="geo.region" content="US">
    <meta name="geo.placename" content="United States">
    <meta name="language" content="English">
    
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "American Author Hub",
          "url": "{{ url('/') }}",
          "logo": "{{ asset('assets/images/logo.png') }}",
          "sameAs": [
            "https://www.facebook.com/profile.php?id=61583690636910",
            "https://www.instagram.com/americanauthorhub/",
            "https://www.youtube.com/@Americanauthorhub"
          ],
          "description": "Professional book writing, ghostwriting, editing, publishing and book marketing services in the USA.",
          "areaServed": {
            "@type": "Country",
            "name": "United States"
          }
        }
    </script>


    
    {{-- ✅ Favicon --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    
    {{-- ✅ Theme Color --}}
    <meta name="theme-color" content="#0f172a">
    
    {{-- ✅ CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- SweetAlert2 CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS from public/assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/christmas.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-theme.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('assets/imgs/fav.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Chat widget inline CSS -->
    <style>
        :root {
            --accent-red: #9F0B07;
            --accent-blue: #002768;
            --widget-bg: #ffffff;
            --widget-shadow: 0 12px 30px rgba(2, 39, 104, 0.08);
        }

        /* container anchored bottom-right */
        #chat-widget {
            position: fixed;
            right: 15px;
            bottom: 15px;
            z-index: 1100;
            font-family: inherit;
        }

        /* panel positioned above the toggle (keeps toggle visible) */
        #chat-panel {
            position: absolute;
            right: 0;
            bottom: 65px;
            /* leave space for toggle */
            width: 360px;
            max-width: calc(100vw - 48px);
            background: var(--widget-bg);
            border-radius: 12px;
            box-shadow: var(--widget-shadow);
            overflow: hidden;
            transform-origin: bottom right;
            transition: transform .22s cubic-bezier(.2, .9, .3, 1), opacity .18s ease;
            opacity: 0;
            transform: translateY(12px) scale(.99);
            display: none;
            /* shown via script */
            max-height: 460px;
            /* user asked: keep inside 470px */
        }

        /* header */
        #chat-panel .panel-head {
            background: linear-gradient(90deg, var(--accent-blue), var(--accent-red));
            color: #fff;
            padding: 12px 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #chat-panel .panel-head .title {
            font-weight: 700;
            font-size: 14px;
        }

        #chat-panel .panel-head .sub {
            font-size: 12px;
            opacity: 0.95;
        }

        #chat-panel .panel-head .close-btn {
            margin-left: auto;
            background: rgba(255, 255, 255, 0.12);
            border: none;
            color: #fff;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        /* body area is scrollable if content exceeds height */
        #chat-panel .panel-body {
            padding: 12px 14px;
            background: #fff;
            max-height: calc(470px - 64px);
            /* header ~64px; ensure total <=470 */
            overflow-y: auto;
        }

        /* smaller fonts */
        #chat-panel label {
            display: block;
            font-size: 12px;
            color: #333;
            margin-bottom: 6px;
            font-weight: 600;
        }

        #chat-panel input[type="text"],
        #chat-panel input[type="email"],
        #chat-panel input[type="tel"],
        #chat-panel textarea {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #e6e6e9;
            margin-bottom: 10px;
            box-sizing: border-box;
            font-size: 13px;
        }

        #chat-panel textarea {
            min-height: 90px;
            resize: vertical;
            max-height: 160px;
        }

        #chat-panel .note {
            font-size: 12px;
            color: #666;
            margin-bottom: 10px;
            line-height: 17px;
        }

        /* submit */
        #chat-panel .btn-submit {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 10px 14px;
            border-radius: 8px;
            background: linear-gradient(90deg, var(--accent-red), var(--accent-blue));
            color: #fff;
            border: none;
            cursor: pointer;
            font-weight: 700;
            font-size: 14px;
        }

        /* success box */
        #chat-panel .success {
            display: none;
            padding: 12px 14px;
            text-align: center;
        }

        #chat-panel .success h4 {
            margin: 0 0 8px;
            color: var(--accent-blue);
            font-size: 14px;
        }

        #chat-panel .success p {
            margin: 0;
            color: #444;
            font-size: 13px;
        }

        /* floating toggle button */
        #chat-toggle {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-blue), var(--accent-red));
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            box-shadow: 0 8px 26px rgba(0, 0, 0, 0.18);
            cursor: pointer;
            border: none;
            overflow: hidden;
            transition: transform .14s ease, box-shadow .14s ease;
        }

        #chat-toggle:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.2);
        }

        #chat-toggle .fa-comments {
            font-size: 18px;
        }

        /* responsive adjustments */
        @media (max-width:420px) {
            #chat-panel {
                width: 94vw;
                right: 12px;
                left: 12px;
                bottom: 82px;
                border-radius: 10px;
            }

            #chat-toggle {
                right: 14px;
                bottom: 14px;
                width: 52px;
                height: 52px;
            }
        }
    </style>
    
    <!-- Head: add Swiper CSS (place in <head>) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>



    @include('layouts.footer')

    <!-- Scripts: load from public/assets (defer optional) -->
    <script src="{{ asset('assets/js/jquery.js') }}" defer></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/clock.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom.js') }}" defer></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" defer></script>

    <!-- Chat Widget HTML -->
    <div id="chat-widget" aria-live="polite">
        <!-- Panel -->
        <div id="chat-panel" role="dialog" aria-modal="false" aria-hidden="true" aria-labelledby="chat-title">
            <div class="panel-head">
                <div>
                    <div class="title" id="chat-title">Lets talk about your project</div>
                    <div class="sub mt-2">Quick message — we will reply soon</div>
                </div>
                <button class="close-btn" aria-label="Close chat" id="chat-close"><i
                        class="fa-solid fa-times"></i></button>
            </div>

            <div class="panel-body">
                <form id="chat-form" autocomplete="off" novalidate>
                    <div class="form-group">
                        <label for="cw-name">Name</label>
                        <input id="cw-name" name="name" type="text" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <label for="cw-email">Email</label>
                        <input id="cw-email" name="email" type="email" placeholder="you@example.com" required>
                    </div>
                    <div class="form-group">
                        <label for="cw-phone">Phone</label>
                        <input id="cw-phone" name="phone" type="tel" placeholder="Phone Number" minlength="10" required>
                    </div>
            
                    <div class="form-group">
                        <label for="cw-message">Message</label>
                        <textarea id="cw-message" name="message" placeholder="Tell us briefly about your project or question (optional)"></textarea>
                    </div>
            
                    <div class="note">By sending, you agree we may contact you regarding your enquiry.</div>
            
                    <button type="submit" class="btn-submit" id="chat-send">
                        <i class="fa-solid fa-paper-plane"></i> Send Message
                    </button>
                </form>
            
                <div class="success" id="chat-success" role="status" aria-live="polite" style="display:none;">
                    <h4>Thanks — message sent!</h4>
                    <p>We'll get back to you shortly. If you'd like, call us at <strong>123 456-789</strong>.</p>
                </div>
            </div>
        </div>

        <!-- Toggle Button -->
        <button id="chat-toggle" aria-controls="chat-panel" aria-expanded="false" aria-label="Open chat">
            <i class="fa-solid fa-comments"></i>
        </button>
    </div>
    
    
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: true,
                confirmButtonColor: '#3085d6',
            });
        </script>
    @endif
    
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            });
        </script>
    @endif


    <!-- Chat Widget Script (vanilla JS) -->
    <script>
    (function() {
        // Elements (may not exist in some pages — guard for null)
        const toggle = document.getElementById('chat-toggle');
        const panel = document.getElementById('chat-panel');
        const closeBtn = document.getElementById('chat-close');
        const form = document.getElementById('chat-form');
        const successBox = document.getElementById('chat-success');
        const sendBtn = document.getElementById('chat-send');
    
        // Safe no-op if form not present
        if (!form) return;
    
        // Small helpers for panel safety
        function safeOpenPanel() {
            if (!panel) return;
            panel.style.display = 'block';
            panel.setAttribute('aria-hidden', 'false');
            requestAnimationFrame(() => {
                panel.style.opacity = '1';
                panel.style.transform = 'translateY(0) scale(1)';
            });
            if (toggle) toggle.setAttribute('aria-expanded', 'true');
            form.style.display = '';
            if (successBox) successBox.style.display = 'none';
            const nameInput = document.getElementById('cw-name');
            if (nameInput) nameInput.focus();
        }
        function safeClosePanel() {
            if (!panel) return;
            panel.style.opacity = '0';
            panel.style.transform = 'translateY(12px) scale(.99)';
            if (toggle) toggle.setAttribute('aria-expanded', 'false');
            setTimeout(() => {
                panel.style.display = 'none';
                panel.setAttribute('aria-hidden', 'true');
            }, 240);
        }
    
        // attach toggle listeners only if toggle exists
        if (toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                if (panel && panel.style.display === 'block') safeClosePanel();
                else safeOpenPanel();
            });
        }
    
        if (closeBtn) closeBtn.addEventListener('click', safeClosePanel);
    
        // click outside to close (if panel exists)
        if (panel) {
            document.addEventListener('click', function(e) {
                if (panel.style.display === 'block' && !e.target.closest('#chat-panel') && !e.target.closest('#chat-toggle')) {
                    safeClosePanel();
                }
            });
            document.addEventListener('keyup', function(e) {
                if (e.key === 'Escape' && panel.style.display === 'block') safeClosePanel();
            });
        }
    
        // Form submit handler (AJAX to contact.quick)
        form.addEventListener('submit', function(e) {
            e.preventDefault();
    
            const name = (document.getElementById('cw-name') || {}).value?.trim() || '';
            const email = (document.getElementById('cw-email') || {}).value?.trim() || '';
            const phone = (document.getElementById('cw-phone') || {}).value?.trim() || '';
            const message = (document.getElementById('cw-message') || {}).value?.trim() || '';
    
            if (!name) {
                Swal.fire({ icon: 'warning', title: 'Please enter your name' });
                document.getElementById('cw-name')?.focus();
                return;
            }
            if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
                Swal.fire({ icon: 'warning', title: 'Please enter a valid email' });
                document.getElementById('cw-email')?.focus();
                return;
            }
            if (!phone || phone.replace(/\D/g, '').length < 10) {
                Swal.fire({ icon: 'warning', title: 'Please enter a valid phone number' });
                document.getElementById('cw-phone')?.focus();
                return;
            }
    
            // sending state
            if (sendBtn) {
                sendBtn.disabled = true;
                sendBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
            }
    
            const fd = new FormData();
            fd.append('name', name);
            fd.append('email', email);
            fd.append('phone', phone);
            fd.append('message', message);
    
            const url = "{{ route('contact.quick') }}"; // Blade route
            const tokenMeta = document.querySelector('meta[name="csrf-token"]');
            const token = tokenMeta ? tokenMeta.getAttribute('content') : '';
    
            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json'
                },
                body: fd
            })
            .then(async res => {
                if (res.status === 422) {
                    const data = await res.json();
                    const first = Object.values(data.errors || {}).flat()[0] || 'Please fix the errors and try again.';
                    throw { type: 'validation', message: first };
                }
                if (!res.ok) {
                    const text = await res.text();
                    throw { type: 'network', message: 'Server error. Please try again later.' , details: text};
                }
                return res.json();
            })
            .then(data => {
                // success behavior
                if (successBox) {
                    form.reset();
                    form.style.display = 'none';
                    successBox.style.display = 'block';
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message sent',
                        text: data.message || 'Thanks — we will get back to you soon.',
                        timer: 3000,
                        showConfirmButton: false
                    });
                }
    
                // close panel after a short delay (if exists)
                setTimeout(() => safeClosePanel(), 1400);
            })
            .catch(err => {
                if (err && err.type === 'validation') {
                    Swal.fire({ icon: 'warning', title: 'Validation', text: err.message });
                } else {
                    console.error(err);
                    Swal.fire({ icon: 'error', title: 'Error', text: err.message || 'There was an error. Please try again later.' });
                }
            })
            .finally(() => {
                if (sendBtn) {
                    sendBtn.disabled = false;
                    sendBtn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Send Message';
                }
            });
        });
    
    })();
    </script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 50,
                    easing: 'ease-out-cubic'
                });
            }
        });
    </script>

    @stack('scripts')
</body>

</html>
