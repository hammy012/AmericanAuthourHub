@extends('layouts.app')

@section('title', 'Ebook | About us')

@section('content')


    <section class="about-us" style="background: url('{{ asset('assets/imgs/main-back.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-head">
                        <span>Something About Authors Time</span>
                        <h1>About Authors Time </h1>
                        <p>Giving customers what they have been searching for - a truly collaborative and seamless content
                            creation
                            platform where customers can form real connections – is the sole purpose for the inception of
                            Authors Time!</p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss your Project</a>
                    </div>
                </div>
                <div class="col-md-6">
                    {{--  <div class="about-img">
                        <img src="{{ asset('assets/imgs/about.webp') }}">
                    </div>  --}}
                    <img src="{{ asset('assets/imgs/about.webp') }}">
                </div>
            </div>
        </div>
    </section>




    <section class="what-we-do-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="what-we-do-about-box">
                        <ul class="what-we-do-about-slider">
                            <li>
                                <div class="what-we-do-about-inner-about">
                                    <span>01</span>
                                    <h3>Experienced <br> Writers</h3>
                                    <p>Our writers know how to artfully share your unique story in a way that motivates your
                                        audience to
                                        take action. No other platform offers such an exclusive combination of expertise,
                                        experience and
                                        passion.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </li>
                            <li>
                                <div class="what-we-do-about-inner-about">
                                    <span>02</span>
                                    <h3>Multiple Industries Served</h3>
                                    <p>Our expert writers have helped craft content for everyone, from small startups to
                                        major industry
                                        leaders. Businesses that work with us appreciate that developing a refined content
                                        strategy is
                                        essential in order to get ahead of the competition.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </li>
                            <li>
                                <div class="what-we-do-about-inner-about">
                                    <span>03</span>
                                    <h3>SEO <br> Experts</h3>
                                    <p>We’re a trusted source for businesses that require highly technical content to take
                                        Google’s top
                                        organic positions for competitive SEO keywords. In fact, we are recognized as a top
                                        company on
                                        multiple different SEO platforms.</p>
                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </li>
                            <li>
                                <div class="what-we-do-about-inner-about">
                                    <span>04</span>
                                    <h3>Passionate <br> Team</h3>
                                    <p>Great things cannot be built without passion. We’re deeply passionate about the
                                        clients we serve,
                                        the company we’ve built and the people who power it.</p>

                                    <a href="javascript:;" class="popup-btn">Get Started</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-head">
                        <span>Who We Are</span>
                        <h1>We are a content creation company that is proven to craft content that helps you
                            Become a Success.
                        </h1>
                        <p>We often find that not everyone is as gifted with words as much as they would like to be, and
                            there are
                            times when you have a phenomenal idea to share with the world but a lack of words doesn’t let
                            you do so.
                            The best solution to this problem is to hire someone who is capable of putting your ideas into a
                            professional piece. Your project requires exceptional writing prowess involving carefully
                            crafted words
                            that complement the subject as well as the writer. At Authors Time, we are dedicated to creating
                            writings
                            for you that are out of the world.</p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss your Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  --><!--  -->
    <!--  -->
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
    </section><!--  -->

    <section class="testi-sec">
        <div class="container">
            <div class="banner-head">
                <span>Testimonials</span>
                <h2>Trust Ebook Company For All
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
                            for years and on a fine October morning I call Ebook and get connected to Eddie
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
                            contact Ebook . Most of all, Mr. Walton Pierce is an excellent manager. He helped to
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
    </section><!--  -->
    <section class="cta-se-2">
        <div class="container">
            <div class="cta-head-2">
                <span>100% Original, Authentic, & Genuine</span>
                <h3>Become a celebrated author of best-seller <br> books with Ebook Services.</h3>
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
                            <input type="hidden" name="url" value="https://ebook.com/" />
                            <input type="hidden" name="form_name" value="GET IN TOUCH FORM" />
                            <input type="hidden" name="bot_detector" value="" />
                            <input type="hidden" name="privacy_policy"
                                value="I have read the Terms & Conditions and Privacy Policy." />
                            <input type="hidden" name="policy"
                                value="By providing my contact information, I agree to receive text messages, calls, and emails from Ebook ." />
                            <input type="text" name="name" maxlength="30" required=""
                                placeholder="Enter Name">
                            <input type="tel" name="phone" required="" placeholder="Enter Number"
                                minlength="10" maxlength="10">
                            <input type="email" name="email" required="" placeholder="Enter Email">

                            <select name="service">
                                <option value="">Select Service</option>
                                <option value="Branded Content">
                                    Branded Content </option>
                                <option value="Book Printing">
                                    Book Printing </option>
                                <option value="Web Copywriting">
                                    Web Copywriting </option>
                                <option value="SEO Content Writing">
                                    SEO Content Writing </option>
                                <option value="Creative Writing">
                                    Creative Writing </option>
                                <option value="Blog Writing">
                                    Blog Writing </option>
                                <option value="Speech Writing">
                                    Speech Writing </option>
                                <option value="Editing & Proofreading">
                                    Editing & Proofreading </option>
                                <option value="Guest Post Writing">
                                    Guest Post Writing </option>
                                <option value="Marketing Content">
                                    Marketing Content </option>
                                <option value="Email Marketing">
                                    Email Marketing </option>
                                <option value="Brochures">
                                    Brochures </option>
                                <option value="Ad Copywriting">
                                    Ad Copywriting </option>
                                <option value="News Letters">
                                    News Letters </option>
                                <option value="Social Media Content">
                                    Social Media Content </option>
                                <option value="Infographics">
                                    Infographics </option>
                                <option value="Professional Content">
                                    Professional Content </option>
                                <option value="Professional Content">
                                    Professional Content </option>
                                <option value="Wikipedia Writing">
                                    Wikipedia Writing </option>
                                <option value="Book Editing">
                                    Book Editing </option>
                                <option value="Publications">
                                    Publications </option>
                                <option value="Data Analysis">
                                    Data Analysis </option>
                                <option value="Dissertation & Thesis">
                                    Dissertation & Thesis </option>
                                <option value="Web Design and Development">
                                    Web Design and Development </option>
                                <option value="Business Content">
                                    Business Content </option>
                                <option value="Email Writing">
                                    Email Writing </option>
                                <option value="Press Release Writing">
                                    Press Release Writing </option>
                                <option value="Business Proposals Writing">
                                    Business Proposals Writing </option>
                                <option value="White Papers Writing">
                                    White Papers Writing </option>
                                <option value="Product Descriptions Writing">
                                    Product Descriptions Writing </option>
                                <option value="Case Study Writing">
                                    Case Study Writing </option>
                                <option value="Letter Writing">
                                    Letter Writing </option>
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
