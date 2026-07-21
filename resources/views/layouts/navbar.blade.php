<div class="top-accent-line"></div>

<header class="sticky-header py-2">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            
            <!-- Logo -->
            <div class="logo-area">
                <a href="{{ url('/') }}" class="d-inline-block">
                    <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub" style="height: 52px; object-fit: contain;">
                </a>
            </div>

            <!-- Center Navigation Links -->
            <nav class="d-none d-lg-block">
                <ul class="d-flex align-items-center gap-3 list-unstyled mb-0">
                    <li><a href="{{ url('/') }}" class="nav-link-item {{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}" class="nav-link-item {{ request()->routeIs('about-us') ? 'active' : '' }}">About Us</a></li>
                    
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
                                                <li class="mb-2">
                                                    <a href="{{ route('service', Str::slug($service->title)) }}" class="d-flex align-items-center gap-2 text-dark text-decoration-none hover-red fs-6">
                                                        <img src="{{ asset($service->icon_image) }}" 
                                                             alt="{{ $service->title }}" 
                                                             style="width: 18px; height: 18px; object-fit: contain;">
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

                    <li><a href="{{ route('book-video-trailer') }}" class="nav-link-item {{ request()->routeIs('book-video-trailer') ? 'active' : '' }}">Video Trailer</a></li>
                    <li><a href="{{ route('blogss') }}" class="nav-link-item {{ request()->routeIs('blogss') ? 'active' : '' }}">Blog</a></li>
                    <li><a href="{{ route('faqs') }}" class="nav-link-item {{ request()->routeIs('faqs') ? 'active' : '' }}">FAQs</a></li>
                    <li><a href="{{ route('contact-us') }}" class="nav-link-item {{ request()->routeIs('contact-us') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>

            <!-- Right CTA Button -->
            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('contact-us') }}" class="btn-red-pill">
                    <i class="fa-solid fa-paper-plane me-1"></i> Get In Touch
                </a>
            </div>

        </div>
    </div>
</header>
