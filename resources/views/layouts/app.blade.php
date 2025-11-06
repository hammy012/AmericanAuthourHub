<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <title>@yield('title', 'American Author Hub | Book Writing Company')</title>

    <!-- Font Awesome (CDN or local) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <meta name="title" content="@yield('meta_title', 'American Author Hub  | Book Writing Company')">
    <meta name="description" content="@yield('meta_description', 'Become a published author with American Author Hub . Our professional writers offer exceptional book writing services.')">
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS from public/assets -->
    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/christmas.css') }}">

    <link rel="shortcut icon" href="{{ asset('fav.png') }}" type="image/x-icon">

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

</head>

<body>

    @include('layouts.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.contact')

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
                        <input id="cw-phone" name="phone" type="tel" placeholder="Phone Number" minlength="10"
                            required>
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

                <div class="success" id="chat-success" role="status" aria-live="polite">
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

    <!-- Chat Widget Script (vanilla JS) -->
    <script>
        (function() {
            // elements
            const toggle = document.getElementById('chat-toggle');
            const panel = document.getElementById('chat-panel');
            const closeBtn = document.getElementById('chat-close');
            const form = document.getElementById('chat-form');
            const successBox = document.getElementById('chat-success');
            const sendBtn = document.getElementById('chat-send');

            function openPanel() {
                panel.style.display = 'block';
                panel.setAttribute('aria-hidden', 'false');
                // allow CSS transition to run
                requestAnimationFrame(() => {
                    panel.style.opacity = '1';
                    panel.style.transform = 'translateY(0) scale(1)';
                });
                toggle.setAttribute('aria-expanded', 'true');
                form.style.display = '';
                successBox.style.display = 'none';
                document.getElementById('cw-name').focus();
            }

            function closePanel() {
                panel.style.opacity = '0';
                panel.style.transform = 'translateY(12px) scale(.99)';
                toggle.setAttribute('aria-expanded', 'false');
                setTimeout(() => {
                    panel.style.display = 'none';
                    panel.setAttribute('aria-hidden', 'true');
                }, 240);
            }

            // toggle
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                if (panel.style.display === 'block') closePanel();
                else openPanel();
            });

            closeBtn.addEventListener('click', closePanel);

            // click outside to close (keeps toggle visible)
            document.addEventListener('click', function(e) {
                if (panel.style.display === 'block' && !e.target.closest('#chat-panel') && !e.target.closest(
                        '#chat-toggle')) {
                    closePanel();
                }
            });

            // escape key to close
            document.addEventListener('keyup', function(e) {
                if (e.key === 'Escape' && panel.style.display === 'block') closePanel();
            });

            // form submit
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const name = document.getElementById('cw-name').value.trim();
                const email = document.getElementById('cw-email').value.trim();
                const phone = document.getElementById('cw-phone').value.trim();
                const message = document.getElementById('cw-message').value.trim();

                if (!name) {
                    alert('Please enter your name');
                    document.getElementById('cw-name').focus();
                    return;
                }
                if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
                    alert('Please enter a valid email');
                    document.getElementById('cw-email').focus();
                    return;
                }
                if (!phone || phone.replace(/\D/g, '').length < 10) {
                    alert('Please enter a valid phone number');
                    document.getElementById('cw-phone').focus();
                    return;
                }

                // sending state
                sendBtn.disabled = true;
                sendBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';

                // Example fetch POST to backend - change URL to your route and enable CSRF header
                /*
                fetch('/contact/quick', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                  },
                  body: JSON.stringify({ name, email, phone, message })
                })
                .then(r => {
                  if (!r.ok) throw new Error('Network error');
                  return r.json();
                })
                .then(data => {
                  form.reset();
                  form.style.display = 'none';
                  successBox.style.display = 'block';
                })
                .catch(err => {
                  alert('There was an error. Please try again later.');
                })
                .finally(() => {
                  sendBtn.disabled = false;
                  sendBtn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Send Message';
                });
                */

                // Demo fake success
                setTimeout(function() {
                    form.reset();
                    form.style.display = 'none';
                    successBox.style.display = 'block';
                    sendBtn.disabled = false;
                    sendBtn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Send Message';
                }, 900);

            });

        })();
    </script>

    @stack('scripts')
</body>

</html>
