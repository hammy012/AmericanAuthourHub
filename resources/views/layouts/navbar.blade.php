<style>
    .top-bar-gradient {
        height: 4px;
        background: linear-gradient(90deg, #002768 0%, #9F0B07 100%);
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
    }
    
    header.sticky {
        position: sticky;
        top: 4px;
        z-index: 1040;
        background: rgba(255, 255, 255, 0.98) !important;
        backdrop-filter: blur(16px) !important;
        -webkit-backdrop-filter: blur(16px) !important;
        box-shadow: 0 4px 25px rgba(0, 39, 104, 0.06) !important;
        border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        transition: all 0.3s ease;
    }

    .logo img {
        margin-top: -15px; 
        margin-bottom: -15px;
        height: 65px;
        width: auto;
        object-fit: contain;
    }
    
    @media (max-width: 991px) {
        .logo img {
            margin-top: -5px !important;
            margin-bottom: -5px !important;
            height: 50px;
        }
    }
</style>

<div class="top-bar-gradient"></div>

<header class="sticky">
    <div class="main-header py-2">
        <div class="container">
            <div class="menu-Bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row align-items-center">
                <div class="col-md-3 col-6 logo-box">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-12 desktop-menu">
                    <div class="menuWrap">
                        <ul class="main-menu d-flex justify-content-center align-items-center gap-4 list-unstyled mb-0">
                            <li><a href="{{ route('about-us') }}" class="fw-semibold">About Us</a></li>
                            
                            <li class="dd-link position-relative">
                                <a href="javascript:;" class="fw-semibold">Services <i class="fa-solid fa-chevron-down ms-1 small"></i></a>
                                <div class="drop-down-box">
                                    <div class="container">
                                        <div class="row">
                                            @php
                                                use App\Models\Service;
                                                use Illuminate\Support\Str;
                                                $services = Service::all();
                                                $chunks = $services->chunk(ceil($services->count() / 3));
                                            @endphp
                            
                                            @foreach ($chunks as $chunk)
                                                <div class="col-sm-4">
                                                    <div class="menu_box_list">
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach ($chunk as $service)
                                                                <li class="d-flex gap-2 align-items-center my-2">
                                                                    <img src="{{ asset($service->icon_image) }}" 
                                                                         alt="{{ $service->title }}" 
                                                                         style="width: 18px; height: 18px; object-fit: contain;">
                                                                    <a href="{{ route('service', Str::slug($service->title)) }}" class="text-dark hover-blue">
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

                            <li><a href="{{ route('book-video-trailer') }}" class="fw-semibold">Video Trailer</a></li>
                            <li><a href="{{ route('blogss') }}" class="fw-semibold">Blogs</a></li>
                            <li><a href="{{ route('faqs') }}" class="fw-semibold">FAQs</a></li>
                            <li><a href="{{ route('contact-us') }}" class="fw-semibold">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-6 text-end">
                    <a href="{{ route('contact-us') }}" class="btn-brand-gradient">
                        <i class="fa-solid fa-paper-plane me-1"></i> Get In Touch
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>
