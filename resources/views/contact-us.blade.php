@extends('layouts.app')

@section('title', 'American Author Hub | Contact')

@section('content')


    <section class="contact-banner" style="background: url('{{ asset('assets/imgs/main-back.png') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="banner-head">
                        <h1>We Are Here To Help
                        </h1>
                        <p>Do you want us to write on your behalf? Get in touch with us. Provide all the details regarding
                            your
                            project, and we will provide you with exceptional writing services – par excellence - to ensure
                            total
                            satisfaction.</p>
                        <a href="javascript:;" class="project-btn popup-btn">Let’s Discuss your Project</a>
                    </div>
                </div>
                <div class="col-md-6">
                    {{--  <div class="contact-img">
                    </div>  --}}
                    <img src="{{ asset('assets/imgs/about.webp') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="contact-us-form">
                        <span>Contact Us</span>
                        <h3>We Would Like To Hear From You</h3>
                        <p>Feel free to give us a call, write to us, or complete the contact form at the bottom of this
                            page. Call
                            (Toll Free): <a href="tel:+123456789">
                                (123) 456-789 </a> Email: <a href="mailto:info@ebook.com"><span class="">
                                    info@ebook.com </span></a>
                        </p>
                    </div>
                    <div class="contact-us-form-header">

                        <form method="Post">
                            <input type="hidden" name="ip_address" value="103.244.176.58" />
                            <input type="hidden" name="city" value="Karachi" />
                            <input type="hidden" name="country" value="Pakistan" />
                            <input type="hidden" name="internet_connection" value="Cyber Internet Services Pakistan" />
                            <input type="hidden" name="zipcode" value="74600" />
                            <input type="hidden" name="region" value="Sindh" />
                            <input type="hidden" name="url" value="https://ebook.com/contact-us" />
                            <input type="hidden" name="form_name" value="CONTACT US FORM" />
                            <input type="hidden" name="bot_detector" value="" />
                            <input type="hidden" name="privacy_policy"
                                value="I have read the Terms & Conditions and Privacy Policy." />
                            <input type="hidden" name="policy"
                                value="By providing my contact information, I agree to receive text messages, calls, and emails from Authors Time." />
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" maxlength="30"required required=""
                                        placeholder="Enter Your Name*">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" required required=""
                                        placeholder="Enter Your Email*">
                                </div>
                                <div class="col-md-12">
                                    <input type="tel" name="phone" required required="" placeholder="Phone Number*"
                                        minlength="10" maxlength="10">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Enter Message Here"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-dark pt-3">
                                <input type="checkbox" class="required" name="policy_check" id="policy_check" required
                                    style="width: fit-content !important;height: auto !important;">
                                By providing my contact information, I agree to receive text messages, calls, and emails
                                from Authors Time.
                            </div>
                            <div class="form-group text-dark">
                                <input type="checkbox" class="required" name="terms_policy" id="terms_policy" required
                                    style="width: fit-content !important;height: auto !important;">
                                I have read the <a href="terms-conditions" class="text-danger">Terms & Conditions</a> and <a
                                    href="privacy-policy" class="text-danger">Privacy Policy</a>.
                            </div>
                            <button type="submit" name="sendmail">Let’s Get Started
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-us-form-dtl">
                        <img src="https://ebook.com/assets/images/contact-statue.png">
                        <ul class="contact-us-form-dtl-links">
                            <li>
                                <div class="contact-us-form-dtl-inner">
                                   <i class="fa-solid fa-phone"></i>
                                    <div class="contact-us-form-dtl-inner-2">
                                        <span>Call Us:</span>
                                        <a href="tel:+1123456789">
                                            (123) 456-789 </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-us-form-dtl-inner">
                                    <i class="fa-solid fa-envelope"></i>
                                    <div class="contact-us-form-dtl-inner-2">
                                        <span>Email Us:</span>
                                        <a href="mailto:info@ebook.com"><span class="">
                                                info@ebook.com </span></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testi-sec">
        <div class="container">
            <div class="banner-head">
                <span>Testimonials</span>
                <h2>Trust Authors Time Company For All
                    Your Business Writing Needs
                </h2>
            </div>
            <div class="row testi-slider">
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="https://ebook.com/assets/images/coma.png">
                        <h4>Highly experienced team of editors & writers.
                        </h4>
                        <p>"I must say that my experience with Zach the project manager and his team was terrific. They
                            guided me along in the editing and process and were not only helpful but patient. Zach was a
                            personal pleasure to deal with. I also learned along the way and was able to even improve upon
                            my own writing and punctuation. He was always responsive to my questions and problems." </p>

                        <h6>Carole Jett</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="https://ebook.com/assets/images/coma.png">
                        <h4>Completely satisfied with their publishing service & support.
                        </h4>
                        <p>“Kudos to the amazing team and for sure the people behind it. I've been struggling to publish for
                            years and on a fine October morning I call Authors Time and get connected to Eddie Williams.
                            Since then they have made my dream possible and thank you Zach for being available throughout
                            the entire process, and whatever of an issue I'd, he responded me with patience and dedication.
                            I felt heard and I'm glad my book "An Art of Love" is out there and seeking your love for the
                            same!” </p>

                        <h6>Ethan Mitchell</h6>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="https://ebook.com/assets/images/coma.png">
                        <h4>Excellent understanding of what works for formatting & publishing.
                        </h4>
                        <p>"I created a children's book and considered it to publish as self-publishing by KDP. But it's a
                            debut book, and I worried it doesn't look professional because of poor formatting, so contact
                            Authors Time. Most of all, Mr. Walton Pierce is an excellent manager. He helped to publish them
                            one by one as if he is a personal coach. Thank you so much!"</p>

                        <h6>Noah Martinez</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testi-box">
                        <img src="https://ebook.com/assets/images/coma.png">
                        <h4>First-Time Publishing Success!
                        </h4>
                        <p>"Eddie Williams has been very available and helpful in publishing my childrens book. We had a
                            few miss communications and some editing problems but in the end the book is just as I had
                            hoped. Eddie was always courteous, patient and ready to help with all the issues this first time
                            publisher had. Thanks!" </p>

                        <h6>Aiden Clark</h6>
                    </div>
                </div>

            </div>
        </div>
    </section><!--  -->
    <!--  -->
    <section class="cta-se-2">
        <div class="container">
            <div class="cta-head-2">
                <span>100% Original, Authentic, & Genuine</span>
                <h3>Become a celebrated author of best-seller <br> books with
                    Authors Time Services.
                </h3>
                <ul class="cta-btn">
                    <li><a href="tel:+1123456789">
                            (123) 456-789 </a></li>
                    <li><a href="mailto:info@ebook.com"><span class="">
                                info@ebook.com </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @include('layouts.contact')

@endsection
