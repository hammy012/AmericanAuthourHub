<div class="top-accent-line"></div>

<header class="sticky-header py-2">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">

            <!-- Logo -->
            <div class="logo-area">
                <a href="{{ url('/') }}" class="d-inline-block">
                    <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub"
                        style="height: 60px; object-fit: contain;">
                </a>
            </div>

            <!-- Center Navigation Links -->
            <nav class="d-none d-lg-block">
                <ul class="d-flex align-items-center gap-3 list-unstyled mb-0">
                    <li><a href="{{ route('about-us') }}"
                            class="nav-link-item {{ request()->routeIs('about-us') ? 'active' : '' }}">About Us</a></li>

                    <li class="dd-link-wrapper">
                        <a href="javascript:;" class="nav-link-item d-flex align-items-center gap-1">
                            Services <i class="fa-solid fa-chevron-down small opacity-75"></i>
                        </a>
                        <div class="custom-dropdown-panel">
                            <div class="row g-3">
                                @php
                                    use App\Models\Service;
                                    use Illuminate\Support\Str;
                                    $services = Service::all();
                                    $chunks = $services->chunk(ceil($services->count() / 3));
                                @endphp

                                @foreach ($chunks as $chunk)
                                    <div class="col-4">
                                        <ul class="list-unstyled mb-0">
                                            @foreach ($chunk as $service)
                                                <li class="mb-1">
                                                    <a href="{{ route('service', Str::slug($service->title)) }}"
                                                        class="dropdown-item-link">
                                                        <img src="{{ asset($service->icon_image) }}"
                                                            alt="{{ $service->title }}">
                                                        <span>{{ $service->title }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>

                    <li><a href="{{ route('our-work') }}"
                            class="nav-link-item {{ (request()->routeIs('our-work') || request()->routeIs('book-video-trailer')) ? 'active' : '' }}">Our
                            Work</a></li>
                    <li><a href="{{ route('blogss') }}"
                            class="nav-link-item {{ request()->routeIs('blogss') ? 'active' : '' }}">Blog</a></li>
                    <li><a href="{{ route('faqs') }}"
                            class="nav-link-item {{ request()->routeIs('faqs') ? 'active' : '' }}">FAQs</a></li>
                </ul>
            </nav>

            <!-- Right CTA Button & Hamburger toggle -->
            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('contact-us') }}" class="btn-red-pill d-none d-lg-inline-flex">
                    <i class="fa-solid fa-paper-plane me-1"></i> Get In Touch
                </a>
                
                <!-- Hamburger Menu Button -->
                <div class="menu-Bar d-block d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="menuWrap d-lg-none">
    <div class="mobile-menu-container">
        <!-- Logo inside menu -->
        <div class="mb-4 pb-3 border-bottom" style="border-color: rgba(255, 255, 255, 0.1) !important;">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub" style="height: 50px; object-fit: contain; filter: brightness(0) invert(1);">
            </a>
        </div>
        
        <!-- Menu links -->
        <div class="mobile-menu-item">
            <a href="{{ route('about-us') }}" class="mobile-menu-link {{ request()->routeIs('about-us') ? 'active' : '' }}">About Us</a>
        </div>
        
        <div class="mobile-menu-item">
            <a href="javascript:;" class="mobile-menu-link mobile-service-toggle">
                Services <i class="fa-solid fa-chevron-down small opacity-75"></i>
            </a>
            <ul class="mobile-submenu">
                @foreach ($services as $service)
                    <li>
                        <a href="{{ route('service', Str::slug($service->title)) }}" class="mobile-submenu-link">
                            {{ $service->title }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        
        <div class="mobile-menu-item">
            <a href="{{ route('our-work') }}" class="mobile-menu-link {{ (request()->routeIs('our-work') || request()->routeIs('book-video-trailer')) ? 'active' : '' }}">Our Work</a>
        </div>
        
        <div class="mobile-menu-item">
            <a href="{{ route('blogss') }}" class="mobile-menu-link {{ request()->routeIs('blogss') ? 'active' : '' }}">Blog</a>
        </div>
        
        <div class="mobile-menu-item">
            <a href="{{ route('faqs') }}" class="mobile-menu-link {{ request()->routeIs('faqs') ? 'active' : '' }}">FAQs</a>
        </div>
        
        <!-- CTA inside mobile menu -->
        <div class="mobile-menu-cta">
            <a href="{{ route('contact-us') }}" class="btn-red-pill">
                <i class="fa-solid fa-paper-plane me-1"></i> Get In Touch
            </a>
        </div>
    </div>
</div>