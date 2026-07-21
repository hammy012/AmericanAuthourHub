<footer>
    <div class="container py-5">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="footer-box-1">
                    <h1 style="font-size: 70px;">
                        <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub"
                            style="width: 160px; margin-bottom: -40px;">
                    </h1>
                    <p class="mt-3 text-muted">
                        American Author Hub is a premium content agency offering expert writing, design,
                        publishing, and marketing solutions with worldwide distribution channels.
                    </p>
                    <h6 class="mt-3">
                        <i class="fa-solid fa-location-dot me-2 text-danger" aria-hidden="true"></i>
                        <a href="https://www.google.com/maps/search/?api=1&query=15155+Richmond+Ave+Houston+TX+77082" 
                           target="_blank" class="fw-semibold">
                           15155 Richmond Ave, Houston, TX 77082
                        </a>
                    </h6>
                    <div class="social-links mt-4">
                        <h5 class="fw-bold gradient-text">Follow Us</h5>
                        <ul class="social-links-list d-flex gap-3 list-unstyled mt-2">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61583690636910" target="_blank" class="social-btn">
                                    <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/americanauthorhub/" target="_blank" class="social-btn">
                                    <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@Americanauthorhub" target="_blank" class="social-btn">
                                    <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="footer-box-2">
                    <h4 class="fw-bold gradient-text mb-4">Our Services</h4>
                    <ul class="services-links list-unstyled">
                        @php
                            use App\Models\Service;
                            use Illuminate\Support\Str;
                            $services = Service::all();
                        @endphp
            
                        @foreach ($services as $service)
                            <li class="d-flex align-items-center mb-2">
                                <img src="{{ asset($service->icon_image) }}" 
                                     alt="{{ $service->title }}" 
                                     style="width: 18px; height: 18px; object-fit: contain; margin-right: 12px; margin-top: -13px">
                                <a href="{{ route('service', Str::slug($service->title)) }}">
                                    {{ $service->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <hr>
        <hr>

        <div class="footer-bottom mt-4 pt-3">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <ul class="footer-legal-links">
                        <li><a href="{{ url('terms-conditions') }}">Terms & Conditions</a></li>
                        <li><a href="{{ url('privacy-policy') }}" class="mt-3">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-md-end text-center">
                    <p class="footer-copy mb-0">© {{ date('Y') }} <strong>American Author Hub</strong>. All Rights
                        Reserved.</p>
                </div>
            </div>
        </div>

    </div>
</footer>
