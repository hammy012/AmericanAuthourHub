@extends('layouts.app')

@section('title', 'American Author Hub | Book Video Trailor')

@section('content')

    <section class="service-banner" style="background: url('{{ asset('assets/imgs/main-back.png') }}');">

        <div class="container">
            <div class="banner-head">
                <span>Make Your Audience Visualize What You're Talking</span>
                <h1>About With The Best Book Trailers

                </h1>
                <p>Let's work together to produce the most appealing trailer for your book. The best technique to highlight
                    your achievement is to show your masterpiece to the audience. Let's spark your audience's interest ahead
                    of
                    time.
                </p>
                <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss your Project</a>
            </div>
        </div>
    </section>


    <!--  -->
    <section class="spotlight-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="spotlight-sec-head">
                        <h3>Reading An Advertisement Can Be Boring
                        </h3>
                        <p>But a visual representation can capture attention in the first three seconds. You have just three
                            seconds
                            to sell a book and turn a visitor into your potential customer. Connect with us today to have
                            your book’s
                            trailer designed by our creative team and let the audience experience the out-of-the-world
                            representation
                            of your book.


                        </p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss your Project</a>
                        <ul class="cta-btn">
                            <li><a href="tel:+123456789">(123) 456-789</a></li>
                            <li><a href="mailto:info@ebook.com"><span class="">info@ebook.com</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="spotlight-sec-img">
                        <img src="{{ asset('assets/imgs/video.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <!--  -->
    <section class="why-choose-service">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="why-choose-service-head">
                        <h3>Why Choose Us?</h3>
                        <h6>Exceptional Digital Marketing</h6>
                        <p>Our digital marketing solutions are designed to bring more traffic, leads, and customers,
                            unleashing more
                            opportunities for you to reach out to the masses.</p>
                        <h6>Compelling Book Advertisement</h6>
                        <p>We discover the target audience, conduct a market survey, and execute campaigns that bring
                            remarkable
                            outcomes in a quick time.</p>
                        <h6>Reach a Wider Audience</h6>
                        <p>We curate solid marketing plans assisted by a team of professionals to promote your book and
                            expand your
                            outreach to the masses.

                        </p>
                        <h6>A Proactive Approach</h6>
                        <p>Authors Time has a team of dedicated book marketers who comprehend the authors’ needs and follow
                            a
                            proactive approach to market your book effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <!--  -->

    <section class="words-ghost">
        <div class="container">
            <h3>Over 250 Million Words Ghostwritten</h3>
            <p>Our industry-best writers are passionate about preserving stories and promoting thought leadership</p>
        </div>
    </section>

    <section class="tier-sec">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="tier-sec-img">
                        <img loading="lazy" src="{{ asset('assets/imgs/ban1.webp') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tier-box active">
                        <img loading="lazy" src="{{ asset('assets/imgs/tier.png') }}" class="tier-circle">
                        <span>3,000</span>
                        <h4>Top-Tier, US-Based
                            Content Writers
                        </h4>
                        <p>Our authors go through extensive and rigorous testing and training procedures before being
                            hired by
                            our professional book writing agency. We have got some of the most celebrated writers
                            onboard from
                            across the United States.


                        </p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="tier-box">
                        <img loading="lazy" src="{{ asset('assets/imgs/tier.png') }}" class="tier-circle">
                        <span>10,000</span>
                        <h4>Our Customers <br>
                            Love Us
                        </h4>
                        <p>Having served more than 10,000 satisfied clients, we take pride in our professional book
                            writing
                            services that have helped us stand out from our competitors.


                        </p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss Your Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="testi-sec">
        <div class="container">
            <div class="banner-head">
                <span>Testimonials</span>
                <h2>Trust American Author Hub Company For All
                    Your Business Writing Needs
                </h2>
            </div>
            <div class="row testi-slider">
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="{{ asset('assets/imgs/coma.png') }}">
                        <h4>Highly experienced team of editors & writers.
                        </h4>
                        <p>"I must say that my experience with Zach the project manager and his team was terrific. They
                            guided me along in the editing and process and were not only helpful but patient. Zach was a
                            personal pleasure to deal with. I also learned along the way and was able to even improve
                            upon my own writing and punctuation. He was always responsive to my questions and problems."
                        </p>

                        <h6>Carole Jett</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="{{ asset('assets/imgs/coma.png') }}">
                        <h4>Completely satisfied with their publishing service & support.
                        </h4>
                        <p>“Kudos to the amazing team and for sure the people behind it. I've been struggling to publish
                            for years and on a fine October morning I call American Author Hub and get connected to Eddie
                            Williams. Since then they have made my dream possible and thank you Zach for being available
                            throughout the entire process, and whatever of an issue I'd, he responded me with patience
                            and dedication. I felt heard and I'm glad my book "An Art of Love" is out there and seeking
                            your love for the same!” </p>

                        <h6>Ethan Mitchell</h6>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="{{ asset('assets/imgs/coma.png') }}">
                        <h4>Excellent understanding of what works for formatting & publishing.
                        </h4>
                        <p>"I created a children's book and considered it to publish as self-publishing by KDP. But it's
                            a debut book, and I worried it doesn't look professional because of poor formatting, so
                            contact American Author Hub . Most of all, Mr. Walton Pierce is an excellent manager. He helped to
                            publish them one by one as if he is a personal coach. Thank you so much!"</p>

                        <h6>Noah Martinez</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="{{ asset('assets/imgs/coma.png') }}">
                        <h4>First-Time Publishing Success!
                        </h4>
                        <p>"Eddie Williams has been very available and helpful in publishing my children's book. We had
                            a few miss communications and some editing problems but in the end the book is just as I had
                            hoped. Eddie was always courteous, patient and ready to help with all the issues this first
                            time publisher had. Thanks!" </p>

                        <h6>Aiden Clark</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--  -->
    <section class="cta-se-2">
        <div class="container">
            <div class="cta-head-2">
                <span>100% Original, Authentic, & Genuine</span>
                <h3>Become a celebrated author of best-seller <br> books with American Author Hub Services.</h3>
                <ul class="cta-btn">
                    <li><a href="tel:+123456789">123 456-789</a> &nbsp; <a href="javascript:;" class="chat">Chat
                            Now</a></li>
                    <li><a href="mailto:info@ebook.com"><span>info@ebook.com</span></a></li>
                </ul>
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
                                value="By providing my contact information, I agree to receive text messages, calls, and emails from American Author Hub ." />
                            <input type="text" name="name" maxlength="30" required=""
                                placeholder="Enter Name">
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
                                from American Author Hub .
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
