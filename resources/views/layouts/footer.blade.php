<style>
    footer.footer-v2 {
        background: #ffffff !important;
        border-top: 1px solid rgba(226, 232, 240, 0.9);
        position: relative;
        color: #475569;
    }

    footer.footer-v2::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #002768 0%, #9F0B07 100%);
    }

    .footer-v2 h5 {
        color: #0f172a;
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 1.25rem;
    }

    .footer-v2 ul li a {
        color: #475569;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-v2 ul li a:hover {
        color: #002768;
        transform: translateX(4px);
    }
</style>

<footer class="footer-v2 pt-5 pb-4">
    <div class="container" data-aos="fade-up">
        <div class="row g-4 mb-5">
            <!-- Column 1: Brand & Bio -->
            <div class="col-lg-4 col-md-6">
                <div class="pe-lg-3">
                    <a href="{{ url('/') }}" class="d-inline-block mb-3">
                        <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub" style="height: 60px; object-fit: contain;">
                    </a>
                    <p class="text-muted small leading-relaxed">
                        American Author Hub is a premier book writing, publishing, and marketing agency. 
                        We empower authors and visionaries across the United States to bring their stories to life with literary excellence.
                    </p>
                    <div class="d-flex align-items-center gap-2 mt-3 text-dark small fw-semibold">
                        <i class="fa-solid fa-location-dot text-danger"></i>
                        <span>15155 Richmond Ave, Houston, TX 77082</span>
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5>Quick Links</h5>
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    <li><a href="{{ route('about-us') }}"><i class="fa-solid fa-chevron-right text-danger me-1 small"></i> About Us</a></li>
                    <li><a href="{{ route('book-video-trailer') }}"><i class="fa-solid fa-chevron-right text-danger me-1 small"></i> Video Trailer</a></li>
                    <li><a href="{{ route('blogss') }}"><i class="fa-solid fa-chevron-right text-danger me-1 small"></i> Blogs</a></li>
                    <li><a href="{{ route('faqs') }}"><i class="fa-solid fa-chevron-right text-danger me-1 small"></i> FAQs</a></li>
                    <li><a href="{{ route('contact-us') }}"><i class="fa-solid fa-chevron-right text-danger me-1 small"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Featured Services -->
            <div class="col-lg-3 col-md-6">
                <h5>Our Services</h5>
                @php
                    use App\Models\Service;
                    use Illuminate\Support\Str;
                    $footerServices = Service::take(5)->get();
                @endphp
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    @foreach($footerServices as $fs)
                        <li>
                            <a href="{{ route('service', Str::slug($fs->title)) }}">
                                <i class="fa-solid fa-check text-primary me-1 small"></i> {{ $fs->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Column 4: Connect & Social -->
            <div class="col-lg-3 col-md-6">
                <h5>Connect With Us</h5>
                <p class="small text-muted mb-3">Have questions or ready to launch your book? Contact our team today.</p>
                <a href="mailto:info@americanauthorhub.com" class="btn btn-sm btn-outline-dark rounded-pill fw-semibold mb-3">
                    <i class="fa-solid fa-envelope me-1 text-danger"></i> info@americanauthorhub.com
                </a>
                <div>
                    <h6 class="fw-bold text-dark small mb-2">Follow Our Channels</h6>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/profile.php?id=61583690636910" target="_blank" class="social-pill-btn" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/americanauthorhub/" target="_blank" class="social-pill-btn" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@Americanauthorhub" target="_blank" class="social-pill-btn" aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4 opacity-25">

        <div class="row align-items-center justify-content-between small text-muted">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <p class="mb-0">© {{ date('Y') }} <strong class="text-dark">American Author Hub</strong>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="{{ url('terms-conditions') }}" class="text-muted text-decoration-none me-3 hover-blue">Terms & Conditions</a>
                <a href="{{ url('privacy-policy') }}" class="text-muted text-decoration-none hover-blue">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>
