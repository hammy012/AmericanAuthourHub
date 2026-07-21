<footer class="dark-footer pt-5 pb-4">
    <div class="container" data-aos="fade-up">
        <div class="row g-4 mb-5">
            
            <!-- Column 1: Brand & Socials -->
            <div class="col-lg-4 col-md-6">
                <div class="pe-lg-4">
                    <a href="{{ url('/') }}" class="d-inline-block mb-3">
                        <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub" style="height: 55px; object-fit: contain; filter: brightness(0) invert(1);">
                    </a>
                    <p class="small text-slate-400 mb-4 leading-relaxed">
                        A premier book writing, publishing, and marketing agency helping authors turn their stories into bestselling books.
                    </p>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/profile.php?id=61583690636910" target="_blank" class="social-circle-icon" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com" target="_blank" class="social-circle-icon" aria-label="X Twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/americanauthorhub/" target="_blank" class="social-circle-icon" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@Americanauthorhub" target="_blank" class="social-circle-icon" aria-label="YouTube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h5>Quick Links</h5>
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    <li><a href="{{ route('about-us') }}">› About Us</a></li>
                    <li><a href="{{ route('book-video-trailer') }}">› Video Trailer</a></li>
                    <li><a href="{{ route('blogss') }}">› Blog</a></li>
                    <li><a href="{{ route('faqs') }}">› FAQs</a></li>
                    <li><a href="{{ route('contact-us') }}">› Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Our Services -->
            <div class="col-lg-3 col-md-6">
                <h5>Our Services</h5>
                @php
                    use App\Models\Service;
                    use Illuminate\Support\Str;
                    $footerServices = Service::take(6)->get();
                @endphp
                <ul class="list-unstyled d-flex flex-column gap-2 small">
                    @foreach($footerServices as $fs)
                        <li>
                            <a href="{{ route('service', Str::slug($fs->title)) }}">
                                › {{ $fs->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Column 4: Contact Us -->
            <div class="col-lg-3 col-md-6">
                <h5>Contact Us</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 small">
                    <li class="d-flex align-items-start gap-2">
                        <i class="fa-solid fa-envelope text-danger mt-1"></i>
                        <a href="mailto:info@americanauthorhub.com">info@americanauthorhub.com</a>
                    </li>
                    <li class="d-flex align-items-start gap-2">
                        <i class="fa-solid fa-phone text-danger mt-1"></i>
                        <a href="tel:+13465269544">+1 (346) 526-9544</a>
                    </li>
                    <li class="d-flex align-items-start gap-2">
                        <i class="fa-solid fa-location-dot text-danger mt-1"></i>
                        <span>15155 Richmond Ave, Houston, TX 77082, USA</span>
                    </li>
                </ul>
            </div>

        </div>

        <hr class="my-4 border-secondary opacity-25">

        <div class="row align-items-center justify-content-between small">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <p class="mb-0">© {{ date('Y') }} <strong>American Author Hub</strong>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="{{ url('terms-conditions') }}" class="me-3">Terms & Conditions</a>
                <a href="{{ url('privacy-policy') }}">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>
