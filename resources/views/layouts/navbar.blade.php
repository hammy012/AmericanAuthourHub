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
                            <h2 style="font-size: 30px; color: #E4573D;">LOGO</h2>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menuWrap">
                        <ul class="main-menu">
                            <li><a href="about-us">About Us </a></li>
                            <li class="dd-link">
                                <a href="javascript:;">Services<i class="fa-solid fa-chevron-down"></i>
                                </a>
                                <div class="drop-down-box">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="menu_box_list">
                                                    <ul>
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i1.png') }}"><a
                                                                href="book-promotions">Book
                                                                Promotions</a></li>
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i2.png') }}"><a
                                                                href="book-promotions">E-book
                                                                Writing</a></li>
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i3.png') }}"><a
                                                                href="book-promotions">Editing</a></li>
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i4.png') }}"><a
                                                                href="book-promotions">Proofreading</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="menu_box_list">
                                                    <ul>
                                                        <!--<li><img src="assets/images/menu-icons-1.png"><a href="article-writing">Article Writing</a></li>-->
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i5.png') }}"><a
                                                                href="book-promotions">Audio
                                                                Book</a></li>
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i6.png') }}"><a
                                                                href="book-promotions">Author
                                                                Website</a></li>
                                                        <!--<li><img src="assets/images/menu-icons-4.png"><a href="blog-writing">Blog Writng</a></li>-->
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i7.png') }}"><a
                                                                href="book-promotions">Book
                                                                Cover</a></li>
                                                        <li>
                                                            <img
                                                                src="{{ asset('assets/imgs/i8.png') }}">
                                                            <a href="book-promotions">
                                                                Book Printing
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="menu_box_list">
                                                    <ul>
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i9.png') }}"><a
                                                                href="book-promotions">Formating</a></li>
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i10.png') }}"><a
                                                                href="book-promotions">Ghostwriting</a></li>
                                                        <li>
                                                            <img
                                                                src="{{ asset('assets/imgs/i11.png') }}">
                                                            <a href="book-promotions">
                                                                Video Book Trailer
                                                            </a>
                                                        </li>
                                                        <li><img
                                                                src="{{ asset('assets/imgs/i12.png') }}"><a
                                                                href="book-promotions">Publishing</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="book-video-trailer">
                                    Video Book Trailer
                                </a>
                            </li>
                            {{--  <li><a href="/blogs">Blogs </a></li>  --}}
                            <li><a href="faqs">FAQs</a></li>
                            <li><a href="contact-us">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="cta-menu-links">
                        <li><a href="tel:+123456789">
                                (123) 456-789 </a></li>
                        <li><a href="{{ route('contact-us') }}" class="project-btn h-start">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>
