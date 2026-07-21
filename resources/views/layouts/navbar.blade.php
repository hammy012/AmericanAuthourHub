<style>
    .logo img {
        margin-top: -30px; 
        margin-bottom: -30px;
      }
    @media (max-width: 991px) {
      .logo img {
        margin-top: -10px !important;
        margin-bottom: -10px !important;
        width: 200px;
      }
    }
</style>

<div class="top-bar-gradient"></div>
<header class="sticky">
    <div class="main-header">
        <div class="container">
            <div class="menu-Bar">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="row align-items-center">
                <div class="col-md-2 logo-box">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/imgs/logo.png') }}" alt="American Author Hub">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menuWrap">
                        <ul class="main-menu">
                            <li><a href="{{ route('about-us') }}">About Us </a></li>
                            
                            <li class="dd-link">
                                <a href="javascript:;">Services<i class="fa-solid fa-chevron-down"></i></a>
                                <div class="drop-down-box">
                                    <div class="container">
                                        <div class="row">
                            
                                            @php
                                                use App\Models\Service;
                                                use Illuminate\Support\Str;
                            
                                                // sab services le lo aur 3 columns me divide karo
                                                $services = Service::all();
                                                $chunks = $services->chunk(ceil($services->count() / 3));
                                            @endphp
                            
                                            @foreach ($chunks as $chunk)
                                                <div class="col-sm-4">
                                                    <div class="menu_box_list">
                                                        <ul>
                                                            @foreach ($chunk as $service)
                                                                <li class="d-flex gap-2 align-items-center" style="margin-top: -10px;">
                                                                    <img src="{{ asset($service->icon_image) }}" 
                                                                         alt="{{ $service->title }}" 
                                                                         style="width: 20px; height: 20px; object-fit: contain; display: block;">
                                                                    <a href="{{ route('service', Str::slug($service->title)) }}" style="margin-top: 18px;">
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


                            <li>
                                <a href="{{ route('book-video-trailer') }}">
                                    Video Book Trailer
                                </a>
                            </li>
                            <li><a href="{{ route('blogss') }}">Blogs </a></li>
                            <li><a href="{{ route('faqs') }}">FAQs</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="cta-menu-links d-flex justify-content-end align-items-center">
                        <li><a href="{{ route('contact-us') }}" class="btn-gradient-primary"><i class="fa-solid fa-paper-plane"></i> Get In Touch</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>
