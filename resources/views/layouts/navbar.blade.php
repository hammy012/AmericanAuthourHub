<div class="top-bar-gradient"></div>

<header class="sticky">
    <div class="main-header">
        <div class="container">
            <div class="header-container">
                
                <!-- Logo -->
                <div class="header-logo-box">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub">
                    </a>
                </div>

                <!-- Desktop Menu -->
                <nav class="d-none d-lg-block">
                    <ul class="header-nav-menu">
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        
                        <li class="dd-link">
                            <a href="javascript:;">Services <i class="fa-solid fa-chevron-down ms-1" style="font-size: 11px;"></i></a>
                            <div class="drop-down-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        @php
                                            use App\Models\Service;
                                            use Illuminate\Support\Str;
                                            $services = Service::all();
                                            $chunks = $services->chunk(ceil($services->count() / 3));
                                        @endphp

                                        @foreach ($chunks as $chunk)
                                            <div class="col-4">
                                                <div class="menu_box_list">
                                                    <ul>
                                                        @foreach ($chunk as $service)
                                                            <li class="d-flex align-items-center gap-2">
                                                                <img src="{{ asset($service->icon_image) }}" 
                                                                     alt="{{ $service->title }}" 
                                                                     style="width: 18px; height: 18px; object-fit: contain;">
                                                                <a href="{{ route('service', Str::slug($service->title)) }}">
                                                                    {{ $service->title }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li><a href="{{ route('book-video-trailer') }}">Video Trailer</a></li>
                        <li><a href="{{ route('blogss') }}">Blogs</a></li>
                        <li><a href="{{ route('faqs') }}">FAQs</a></li>
                        <li><a href="{{ route('contact-us') }}">Contact</a></li>
                    </ul>
                </nav>

                <!-- CTA Button -->
                <div class="header-cta d-none d-sm-block">
                    <a href="{{ route('contact-us') }}" class="btn-brand-gradient py-2 px-4">
                        <i class="fa-solid fa-paper-plane me-1"></i> Get In Touch
                    </a>
                </div>

                <!-- Mobile Menu Hamburger Button -->
                <div class="menu-Bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </div>
    </div>
</header>
