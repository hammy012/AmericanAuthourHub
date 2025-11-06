<footer>
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-5">
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
                    <ul class="clock-box-links">
                        <li><a href="tel:+123456789">(123) 456-789</a></li>
                        <li><a href="mailto:info@ebook.com"><span>info@ebook.com</span></a></li>
                    </ul>
                    <h6>ABC City 10th Street New York United States</h6>
                    <div class="social-links">
                        <h5>Social Links</h5>
                        <ul class="social-links-list">
                            <li>
                                <a href="https://www.facebook.com" target="_blank">
                                    <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/" target="_blank">
                                    <i class="fa-brands fa-pinterest" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="col-md-5">
                <div class="footer-box-2">
                    <h4>Services</h4>
                    <ul class="services-links">
                        <li><i class="fa-solid fa-bullhorn text-pink"></i> <a href="book-promotions">Book
                                Promotions</a></li>

                        <li><i class="fa-solid fa-book-open text-pink"></i> <a href="ebook-writing">E-book
                                Writing</a></li>

                        <li><i class="fa-solid fa-pen-to-square text-pink"></i> <a href="book-editing">Editing</a>
                        </li>

                        <li><i class="fa-solid fa-spell-check text-pink"></i> <a href="proofreading">Proofreading</a>
                        </li>

                        <li><i class="fa-solid fa-headphones text-pink"></i> <a href="audio-book">Audio Book</a></li>

                        <li><i class="fa-solid fa-globe text-purple"></i> <a href="author-website">Author Website</a>
                        </li>

                        <li><i class="fa-solid fa-image text-pink"></i> <a href="book-cover">Book Cover</a></li>

                        <li><i class="fa-solid fa-print text-pink"></i> <a href="book-printing">Book Printing</a>
                        </li>

                        <li><i class="fa-solid fa-align-left text-pink"></i> <a href="formatting">Formatting</a></li>

                        <li><i class="fa-solid fa-feather text-pink"></i> <a href="ghost-writing">Ghostwriting</a>
                        </li>

                        <li><i class="fa-solid fa-video text-pink"></i> <a href="book-video-trailer">Video Book
                                Trailer</a></li>

                        <li><i class="fa-solid fa-book text-pink"></i> <a href="book-publishing">Publishing</a></li>
                    </ul>

                </div>
            </div>

            <div class="col-md-2">
                <div class="feather-img">
                    <img src="https://authorstime.com/assets/images/feather.png" alt="Feather">
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
