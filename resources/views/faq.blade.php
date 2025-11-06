@extends('layouts.app')

@section('title', 'American Author Hub | FAQs')

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
                                    <p>We offer a complete range of ebook and author-related services including Book
                                        Promotions,
                                        E-book Writing, Editing, Proofreading, Audio Books, Author Websites, Book Covers,
                                        Book Printing,
                                        Formatting, Ghostwriting, Video Book Trailers, and Publishing.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <button class="accordion-btn" aria-expanded="false" aria-controls="faq2">
                                    <span class="q">How long does it take to complete a project?</span>
                                    <span class="toggle"></span>
                                </button>
                                <div id="faq2" class="accordion-content">
                                    <p>The timeline depends on the type and scope of your project. For example, writing and
                                        editing
                                        may take a few days, while full-scale book publishing or promotions can take several
                                        weeks.
                                        We’ll provide an estimated timeline after reviewing your project details.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <button class="accordion-btn" aria-expanded="false" aria-controls="faq3">
                                    <span class="q">Do you provide revisions?</span>
                                    <span class="toggle"></span>
                                </button>
                                <div id="faq3" class="accordion-content">
                                    <p>Yes, we do! Every package includes a certain number of revisions to ensure you’re
                                        completely
                                        satisfied with the final result. The number of revisions depends on the package you
                                        choose.</p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <button class="accordion-btn" aria-expanded="false" aria-controls="faq4">
                                    <span class="q">How can I get started?</span>
                                    <span class="toggle"></span>
                                </button>
                                <div id="faq4" class="accordion-content">
                                    <p>Getting started is simple! Fill out our contact form or click on “Let’s Discuss Your
                                        Project”
                                        to share your requirements. Our team will reach out to you to discuss your project
                                        details
                                        and the next steps.</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>


    </section>

@include('layouts.contact')


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
