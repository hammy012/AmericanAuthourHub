<footer class="dark-footer pt-5 pb-4 position-relative">
    <!-- Faint book stack and quill watermark sketch -->
    <svg class="footer-bg-watermark" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
        style="position: absolute; right: 0; bottom: 0; width: 350px; height: 350px; opacity: 0.03; color: #ffffff; pointer-events: none; z-index: 0;">
        <path d="M 20 150 Q 80 130 180 150 M 20 155 Q 80 135 180 155 M 20 160 Q 80 140 180 160" stroke="currentColor"
            stroke-width="1.5" fill="none" />
        <path d="M 30 130 Q 90 110 170 130 M 30 135 Q 90 115 170 135" stroke="currentColor" stroke-width="1.5"
            fill="none" />
        <path d="M 40 110 Q 100 90 160 110 M 40 115 Q 100 95 160 115" stroke="currentColor" stroke-width="1.5"
            fill="none" />
        <path d="M 120 40 C 130 60 140 90 150 120 M 120 40 C 115 50 110 70 125 90 M 120 40 L 118 35 L 115 40"
            stroke="currentColor" stroke-width="1.5" fill="none" />
        <path d="M 140 120 L 160 120 L 165 135 L 135 135 Z" stroke="currentColor" stroke-width="1.5" fill="none" />
    </svg>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row g-4 mb-5">

            <!-- Column 1: Brand & Socials -->
            <div class="col-lg-3 col-md-6">
                <div class="pe-lg-3">
                    <a href="{{ url('/') }}" class="d-inline-block mb-3">
                        <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub"
                            style="height: 55px; object-fit: contain; filter: brightness(0) invert(1);">
                    </a>
                    <p class="small mb-4 leading-relaxed" style="color: #94a3b8; font-size: 13.5px; line-height: 1.6;">
                        A premier book writing, publishing, and marketing agency helping authors turn their stories into
                        bestselling books.
                    </p>

                    <h6 class="text-white fw-bold mb-3" style="font-size: 15px;">Follow Us</h6>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/profile.php?id=61583690636910" target="_blank"
                            class="social-circle-icon" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/americanauthorhub/" target="_blank"
                            class="social-circle-icon" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@Americanauthorhub" target="_blank" class="social-circle-icon"
                            aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5>Quick Links</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 small">
                    <li><a href="{{ route('about-us') }}"><span class="text-danger me-2">›</span> About Us</a></li>
                    <li><a href="{{ route('book-video-trailer') }}"><span class="text-danger me-2">›</span>Video
                            Trailer</a></li>
                    <li><a href="{{ route('blogss') }}"><span class="text-danger me-2">›</span> Blog</a></li>
                    <li><a href="{{ route('faqs') }}"><span class="text-danger me-2">›</span> FAQs</a></li>
                    <li><a href="{{ url('/#our-work') }}"><span class="text-danger me-2">›</span> Our Work</a></li>
                    <li><a href="{{ route('contact-us') }}"><span class="text-danger me-2">›</span> Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Our Services -->
            <div class="col-lg-3 col-md-6">
                <h5>Our Services</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 small">
                    <li><a href="{{ url('service/book-promotion') }}"><span class="text-danger me-2">›</span> Book
                            Promotion</a></li>
                    <li><a href="{{ url('service/audio-book') }}"><span class="text-danger me-2">›</span> Audio Book</a>
                    </li>
                    <li><a href="{{ url('service/book-formatting') }}"><span class="text-danger me-2">›</span> Book
                            Formatting</a></li>
                    <li><a href="{{ url('service/e-book-writing') }}"><span class="text-danger me-2">›</span> E-book
                            Writing</a></li>
                    <li><a href="{{ url('service/author-website') }}"><span class="text-danger me-2">›</span> Author
                            Website</a></li>
                    <li><a href="{{ url('service/ghostwriting') }}"><span
                                class="text-danger me-2">›</span>Ghostwriting</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Us -->
            <div class="col-lg-3 col-md-6">
                <h5>Contact Us</h5>
                <div class="d-flex flex-column gap-3">

                    <!-- Email -->
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon-box">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <a href="mailto:info@americanauthorhub.com" class="footer-contact-value">
                            info@americanauthorhub.com
                        </a>
                    </div>

                    <!-- Phone -->
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <a href="tel:+13463476046" class="footer-contact-value">
                            +1 (346) 347-6046
                        </a>
                    </div>

                    <!-- Address -->
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <span class="footer-contact-value">
                            15155 Richmond Ave, Houston, TX 77082, USA
                        </span>
                    </div>

                </div>
            </div>

        </div>

        <hr class="my-4 border-secondary opacity-25">

        <!-- Footer Bottom Bar -->
        <div class="row align-items-center justify-content-between small">

            <!-- Left Side: Terms and Conditions Links -->
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <a href="{{ url('terms-conditions') }}" class="me-4"
                    style="color: #cbd5e1; text-decoration: none;">Terms & Conditions</a>
                <a href="{{ url('privacy-policy') }}"
                    style="color: #cbd5e1; text-decoration: none; margin-left: 30px;">Privacy Policy</a>
            </div>

            <!-- Right Side: Copyright -->
            <div class="col-md-6 text-center text-md-end" style="color: #94a3b8;">
                <span>© 2026 American Author Hub. All Rights Reserved.</span>
            </div>

        </div>
    </div>
</footer>