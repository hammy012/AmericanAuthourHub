@extends('layouts.app')

@section('title', 'Ebook | Blog')

@section('content')

    <style>
        .blog-banner {
            padding: 60px 0;
            background: url('{{ asset('assets/imgs/main-back.png') }}') no-repeat center center/cover;
            color: #fff;
        }

        .blog-head h1 {
            color: #9F0B07;
        }

        .blog-sec {
            padding: 60px 0;
            background: #f7f9fc;
        }

        .blog-card {
            background: #fff;
            border-radius: 12px;
            padding: 0;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(159, 11, 7, 0.06);
            transition: transform .20s ease, box-shadow .20s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(159, 11, 7, 0.08);
        }

        .blog-card .card-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }

        .blog-card .card-body {
            padding: 20px;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }

        .blog-card .meta {
            font-size: 13px;
            color: #666;
            margin-bottom: 8px;
        }

        .blog-card h3 {
            margin: 0 0 10px 0;
            color: #002768;
            font-size: 20px;
        }

        .blog-card p.excerpt {
            color: #444;
            line-height: 1.6;
            margin-bottom: 16px;
            flex: 1 1 auto;
        }

        .read-more {
            align-self: flex-start;
            background: #9F0B07;
            color: #fff;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        @media (max-width:991px) {
            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width:767px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }

            .blog-card .card-img {
                height: 180px;
            }

            .blog-banner {
                padding: 40px 0;
            }
        }
    </style>


    <section class="service-banner"
        style="background: url('{{ asset('assets/imgs/main-back.png') }}') no-repeat center center/cover;">
        <div class="container">
            <div class="banner-head">
                <span style="color:#002768;font-weight:700;">Our Blog</span>
                <h1 style="color:#9F0B07;">Insights, Tips & Stories</h1>
                <p style="color:#fff;">
                    Read the latest from our team — marketing tips for authors, case studies, book publishing guides,
                    and more. Stay inspired and informed.
                </p>

                <a href="javascript:;" class="project-btn popup-btn">Explore Blogs</a>
            </div>
        </div>
    </section>


    <section class="blog-sec">
        <div class="container">

            <div class="row mb-4">
                <div class="col-md-8">
                    <h2 style="color:#9F0B07; font-size: 36px;">Latest Posts</h2>
                    <p style="color:#333;" class="mt-3">Discover articles on book promotion, writing tips, publishing and
                        author-career
                        advice.</p>
                </div>
            </div>

            <div class="blog-grid">

                <!-- Blog Card 1 -->
                <article class="blog-card">
                    <img src="{{ asset('assets/imgs/blog1.avif') }}" alt="Blog 1" class="card-img">
                    <div class="card-body">
                        <div class="meta">November 06, 2025 • Ebook Team</div>
                        <h3>How to Market Your Book Effectively</h3>
                        <p class="excerpt">Discover practical book marketing tips that help authors reach a wider audience
                            and boost sales.</p>
                        <a href="{{ route('blog', ['slug' => 'blog']) }}" class="read-more">Read More</a>
                    </div>
                </article>

                <!-- Blog Card 2 -->
                <article class="blog-card">
                    <img src="{{ asset('assets/imgs/blog2.avif') }}" alt="Blog 2" class="card-img">
                    <div class="card-body">
                        <div class="meta">November 04, 2025 • Ebook Team</div>
                        <h3>The Art of Writing Engaging Fiction</h3>
                        <p class="excerpt">Learn key techniques to make your story compelling, with strong characters and
                            emotional depth.</p>
                        <a href="{{ route('blog', ['slug' => 'blog']) }}" class="read-more">Read More</a>
                    </div>
                </article>

                <!-- Blog Card 3 -->
                <article class="blog-card">
                    <img src="{{ asset('assets/imgs/blog3.webp') }}" alt="Blog 3" class="card-img">
                    <div class="card-body">
                        <div class="meta">November 02, 2025 • Ebook Team</div>
                        <h3>Why Professional Editing Matters</h3>
                        <p class="excerpt">Editing turns a good manuscript into a great one. Here why you should never
                            skip it.</p>
                        <a href="{{ route('blog', ['slug' => 'blog']) }}" class="read-more">Read More</a>
                    </div>
                </article>

                <!-- Blog Card 4 -->
                <article class="blog-card">
                    <img src="{{ asset('assets/imgs/blog4.jpg') }}" alt="Blog 4" class="card-img">
                    <div class="card-body">
                        <div class="meta">October 30, 2025 • Ebook Team</div>
                        <h3>Self-Publishing vs Traditional Publishing</h3>
                        <p class="excerpt">Explore the pros and cons of both approaches to decide which suits your author
                            journey best.</p>
                        <a href="{{ route('blog', ['slug' => 'blog']) }}" class="read-more">Read More</a>
                    </div>
                </article>

            </div>
        </div>
    </section>



    <section class="touch-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-head">
                        <span>Get in touch
                        </span>
                        <h2>We Are Here To Help</h2>
                        <p>Do you want us to write on your behalf? Get in touch with us. Provide all the details
                            regarding
                            your project, and we will provide you with exceptional writing services – par excellence -
                            to
                            ensure total satisfaction.
                        </p>
                    </div>
                    {{--  <div class="clock-box">
                        <div class="row">
                            <div class="col-md-6">
                                <p>It’s easy to reach us via chat.
                                    We’re online from <span>9:00</span> to <span>23:00</span>
                                </p>
                                <ul class="watch-box  ">
                                    <li>
                                        <div class="demo">
                                            <div class="clock ui-small" data-timezone="Asia/Dubai">
                                                <div class="needle">
                                                    <span class="minutes"></span>
                                                    <span class="hours"></span>
                                                    <span class="seconds"></span>
                                                </div>
                                                <ul class="time-number">
                                                    <li><span>1</span></li>
                                                    <li><span>2</span></li>
                                                    <li><span>3</span></li>
                                                    <li><span>4</span></li>
                                                    <li><span>5</span></li>
                                                    <li><span>6</span></li>
                                                    <li><span>7</span></li>
                                                    <li><span>8</span></li>
                                                    <li><span>9</span></li>
                                                    <li><span>10</span></li>
                                                    <li><span>11</span></li>
                                                    <li><span>12</span></li>
                                                </ul>
                                                <div class="apm"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="clock-box-links">
                                    <li><a href="tel:+1233456789">
                                            123 456-789 </a></li>
                                    <li>
                                        <a href="mailto:info@ebook.com">
                                            <span class=" 92e1f3fef7e1d2f7fefbe6f7f0fdfdf9e5e0fbe6fbfcf5bcf1fdff">
                                                info@ebook.com </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="statue-img">
                                    <img src="https://authorstime.com/assets/images/statue.webp" style="padding: 30px;">
                                </div>
                            </div>
                        </div>
                    </div>  --}}
                </div>
                <div class="col-md-5 offset-1">
                    <div class="touc-sec-form">
                        <form method="Post">
                            <input type="hidden" name="ip_address" value="103.244.176.58" />
                            <input type="hidden" name="city" value="Karachi" />
                            <input type="hidden" name="country" value="Pakistan" />
                            <input type="hidden" name="internet_connection" value="Cyber Internet Services Pakistan" />
                            <input type="hidden" name="zipcode" value="74600" />
                            <input type="hidden" name="region" value="Sindh" />
                            <input type="hidden" name="url" value="https://authorstime.com/" />
                            <input type="hidden" name="form_name" value="GET IN TOUCH FORM" />
                            <input type="hidden" name="bot_detector" value="" />
                            <input type="hidden" name="privacy_policy"
                                value="I have read the Terms & Conditions and Privacy Policy." />
                            <input type="hidden" name="policy"
                                value="By providing my contact information, I agree to receive text messages, calls, and emails from Ebook ." />
                            <input type="text" name="name" maxlength="30" required="" placeholder="Enter Name">
                            <input type="tel" name="phone" required="" placeholder="Enter Number"
                                minlength="10" maxlength="10">
                            <input type="email" name="email" required="" placeholder="Enter Email">

                            <select name="service">
                                <option value="">Select Service</option>
                                <option value="Book Promotions">Book Promotions</option>
                                <option value="E-book Writing">E-book Writing</option>
                                <option value="Editing">Editing</option>
                                <option value="Proofreading">Proofreading</option>
                                <option value="Audio Book">Audio Book</option>
                                <option value="Author Website">Author Website</option>
                                <option value="Book Cover">Book Cover</option>
                                <option value="Book Printing">Book Printing</option>
                                <option value="Formatting">Formatting</option>
                                <option value="Ghostwriting">Ghostwriting</option>
                                <option value="Video Book Trailer">Video Book Trailer</option>
                                <option value="Publishing">Publishing</option>
                            </select>


                            <textarea name="message" placeholder="Additional Comments"></textarea>

                            <div class="form-group text-dark pt-3">
                                <input type="checkbox" class="required" name="policy_check" id="policy_check" required
                                    style="width: fit-content !important;height: auto !important;">
                                By providing my contact information, I agree to receive text messages, calls, and emails
                                from Ebook .
                            </div>
                            <div class="form-group text-dark">
                                <input type="checkbox" class="required" name="terms_policy" id="terms_policy" required
                                    style="width: fit-content !important;height: auto !important;">
                                I have read the <a href="terms-conditions" class="text-danger">Terms & Conditions</a>
                                and <a href="privacy-policy" class="text-danger">Privacy Policy</a>.
                            </div>
                            <button type="submit" class="btn-submit" name="sendmail">Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
