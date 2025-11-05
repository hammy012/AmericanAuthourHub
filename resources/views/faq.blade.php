@extends('layouts.app')

@section('title', 'Ebook | FAQs')

@section('content')

    <style>
        .faq-sec {
            padding: 70px 0;
        }

        .faq-box {
            background: #fff;
            border-radius: 12px;
            padding: 22px;
            box-shadow: 0 6px 20px rgba(159, 11, 7, 0.06);
        }

        .faq-accordion {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .accordion-item+.accordion-item {
            margin-top: 12px;
        }

        .accordion-btn {
            width: 100%;
            text-align: left;
            padding: 18px 20px;
            border-radius: 10px;
            background: linear-gradient(180deg, #fff, #fbfdff);
            border: 2px solid rgba(159, 11, 7, 0.06);
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-size: 16px;
            color: #9F0B07;
            transition: all .25s ease;
            position: relative;
        }

        .accordion-btn:focus {
            outline: 3px solid rgba(228, 87, 61, 0.12);
            outline-offset: 2px;
        }

        .accordion-btn .q {
            font-weight: 700;
        }

        .accordion-btn .toggle {
            width: 42px;
            height: 42px;
            border-radius: 8px;
            display: inline-block;
            flex-shrink: 0;
            border-left: 4px solid #002768;
            margin-left: 12px;
            position: relative;
        }

        /* plus/minus lines */
        .accordion-btn .toggle::before,
        .accordion-btn .toggle::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: #002768;
            transition: transform .25s ease, opacity .25s ease;
            border-radius: 2px;
        }

        .accordion-btn .toggle::before {
            width: 18px;
            height: 3px;
        }

        .accordion-btn .toggle::after {
            width: 3px;
            height: 18px;
        }

        .accordion-item.open .accordion-btn {
            background: linear-gradient(180deg, #eaf3ff, #fff);
            border-color: rgba(228, 87, 61, 0.13);
            box-shadow: 0 8px 26px rgba(159, 11, 7, 0.06);
        }

        .accordion-item.open .accordion-btn .toggle::after {
            transform: translate(-50%, -50%) scaleY(0);
            opacity: 0;
        }

        .accordion-content {
            overflow: hidden;
            max-height: 0;
            transition: max-height .35s ease, padding .25s ease;
            padding: 0 18px;
            color: #444;
        }

        .accordion-content p {
            margin: 15px 0 18px;
            line-height: 1.6;
        }

        /* responsive tweaks */
        @media (max-width:767px) {
            .faq-sec {
                padding: 40px 0;
            }

            .banner-head h1 {
                font-size: 22px;
            }

            .accordion-btn {
                padding: 14px;
                font-size: 15px;
            }
        }
    </style>


    <section class="service-banner"
        style="background: url('{{ asset('assets/imgs/main-back.png') }}') no-repeat center center/cover;">
        <div class="container">
            <div class="banner-head">
                <span>Have Questions About Our eBook Services?</span>
                <h1>Everything You Need to Know About Our Book Promotion</h1>
                <p>Get answers to the most common questions authors ask before starting their book marketing journey.
                    <br>
                    From pricing to publishing support — we’ve covered it all to help you make confident decisions.
                </p>

                <a href="javascript:;" class="project-btn popup-btn">Explore FAQs</a>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION — paste this right AFTER the first </section> -->
    <section class="faq-sec" style="background: #f7f9fc;">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-5">
                    <div class="banner-head">
                        <span style="color:#002768;font-weight:700;">FAQs</span>
                        <h1 style="color:#9F0B07;">Frequently Asked Questions</h1>
                        <p style="color:#333;">
                            Here you will find answers to common questions about our services, processes, and delivery.
                            If your question is not listed, please get in touch via the “Let’s Discuss your Project” button.
                        </p>
                        <a href="{{ route('contact-us') }}" class="project-btn popup-btn"
                            style="background:#9F0B07;border-color:#9F0B07;color:#fff;">Let’s Discuss your Project</a>
                    </div>

                </div>

                <div class="col-md-7">
                    <div class="faq-box">
                        <ul class="faq-accordion">

                            <li class="accordion-item">
                                <button class="accordion-btn" aria-expanded="false" aria-controls="faq1">
                                    <span class="q">What services do you offer?</span>
                                    <span class="toggle"></span>
                                </button>
                                <div id="faq1" class="accordion-content" role="region" aria-labelledby="">
                                    <p>Hum content writing, editing, publishing, SEO content, blog writing, book editing aur
                                        web copywriting jese tamam services provide karte hain.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <button class="accordion-btn" aria-expanded="false" aria-controls="faq2">
                                    <span class="q">How long does a project usually take?</span>
                                    <span class="toggle"></span>
                                </button>
                                <div id="faq2" class="accordion-content">
                                    <p>Project ki complexity aur scope par mabni hota hai — choti assignments kuch dino mein
                                        aur novels/book projects kai hafton tak le sakte hain. Specific ETA hum project
                                        brief lene ke baad batate hain.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <button class="accordion-btn" aria-expanded="false" aria-controls="faq3">
                                    <span class="q">Do you do revisions?</span>
                                    <span class="toggle"></span>
                                </button>
                                <div id="faq3" class="accordion-content">
                                    <p>Ji haan — har package mein revisions diye jate hain. Revision policy package ke
                                        mutabiq vary kar sakti hai.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <button class="accordion-btn" aria-expanded="false" aria-controls="faq4">
                                    <span class="q">How do I start?</span>
                                    <span class="toggle"></span>
                                </button>
                                <div id="faq4" class="accordion-content">
                                    <p>Contact form bhar dein, ya "Let’s Discuss your Project" click karain — hum aapse
                                        project details aur next steps share karenge.</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
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



    <script>
        (function() {
            const items = document.querySelectorAll('.accordion-item');
            items.forEach(item => {
                const btn = item.querySelector('.accordion-btn');
                const content = item.querySelector('.accordion-content');

                // initialize aria-controls id already set in markup
                btn.addEventListener('click', function() {
                    const isOpen = item.classList.contains('open');

                    // close all
                    items.forEach(i => {
                        i.classList.remove('open');
                        i.querySelector('.accordion-btn').setAttribute('aria-expanded',
                            'false');
                        i.querySelector('.accordion-content').style.maxHeight = null;
                    });

                    // if it was closed, open it
                    if (!isOpen) {
                        item.classList.add('open');
                        btn.setAttribute('aria-expanded', 'true');
                        content.style.maxHeight = content.scrollHeight + 'px';
                    }
                });

                // allow keyboard Enter/Space activation
                btn.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        btn.click();
                    }
                });
            });
        })();
    </script>
@endsection
