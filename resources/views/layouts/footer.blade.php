<footer>
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="footer-box-1">
                    <h1 style="font-size: 70px;">
                        <img src="{{ asset('assets/imgs/logo.png') }}" alt=""
                            style="width: 150px; margin-bottom: -60px;">
                    </h1>
                    <p>
                        American Author Hub is a content agency that offers you the best of writing, design,
                        publishing, and marketing. We have an expert team of dedicated and committed
                        professionals to take on any project with our instant solutions for your books
                        with worldwide marketing channels!
                    </p>
                    <!--<ul class="clock-box-links">-->
                    <!--    <li><a href="tel:+13463476046">-->
                    <!--                +1 (346) 347-6046-->
                    <!--            </a></li>-->
                    <!--    <li><a href="mailto:info@americanauthorhub.com" target="_blank"><span>info@americanauthorhub.com</span></a></li>-->
                    <!--</ul>-->
                    <h6>
                        <i class="fa-solid fa-location" aria-hidden="true"></i>
                        <a href="https://www.google.com/maps/search/?api=1&query=15155+Richmond+Ave+Houston+TX+77082" 
                           target="_blank">
                           15155 Richmond Ave, Houston, TX 77082
                        </a>
                    </h6>
                    <div class="social-links">
                        <h5>Social Links</h5>
                        <ul class="social-links-list">
                            <li>
                                <a href="https://www.facebook.com/profile.php?id=61583690636910" target="_blank">
                                    <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!--<li>-->
                            <!--    <a href="https://www.linkedin.com/" target="_blank">-->
                            <!--        <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>-->
                            <!--    </a>-->
                            <!--</li>-->
                            <li>
                                <a href="https://www.instagram.com/americanauthorhub/" target="_blank">
                                    <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@Americanauthorhub" target="_blank">
                                    <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="col-md-6">
                <div class="footer-box-2">
                    <h4>Services</h4>
                    <ul class="services-links">
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
