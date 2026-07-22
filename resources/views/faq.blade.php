@extends('layouts.app')

@section('title', 'Frequently Asked Questions | American Author Hub')

@section('content')

    <style>
        /* Premium FAQ Styling */
        .faq-banner {
            position: relative;
            padding: 90px 0 0;
            /* 0 bottom padding for overlapping visual */
            background: radial-gradient(100% 100% at 50% 0%, #ffffff 0%, #f6f8fb 100%);
            overflow: visible;
            /* Allowed to show overlapping image */
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            z-index: 5;
        }

        .text-navy {
            color: #001529 !important;
        }

        .fw-extrabold {
            font-weight: 800;
        }

        .gradient-text {
            background: linear-gradient(135deg, #9F0B07 0%, #002768 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .banner-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(159, 11, 7, 0.08);
            color: #9F0B07;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            padding: 5px 16px;
            border-radius: 20px;
            border: 1px solid rgba(159, 11, 7, 0.12);
            text-transform: uppercase;
            gap: 6px;
        }

        /* FAQ Hero Centered Overlapping Image wrapper */
        .faq-hero-img-wrap {
            max-width: 460px;
            margin: 35px auto -60px;
            /* Negative margin to float on boundary */
            border-radius: 24px;
            overflow: hidden;
            border: 6px solid #ffffff;
            box-shadow: 0 20px 45px rgba(0, 21, 41, 0.08);
            background: #ffffff;
            position: relative;
            z-index: 10;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .faq-hero-img-wrap:hover {
            transform: translateY(-4px);
            box-shadow: 0 25px 55px rgba(159, 11, 7, 0.12);
        }

        .faq-hero-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
        }

        .faq-sec {
            background-color: #f8fafc;
            padding: 130px 0 85px;
            /* Large top padding to clear the overlapping hero image */
            position: relative;
            z-index: 1;
        }

        /* Modern Accordion */
        .faq-accordion-box {
            background: #ffffff;
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 24px;
            padding: 15px;
            box-shadow: 0 10px 30px rgba(0, 39, 104, 0.015);
        }

        .faq-accordion {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .accordion-item {
            border: 1px solid #e2e8f0;
            border-radius: 16px !important;
            margin-bottom: 12px;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: #ffffff;
        }

        .accordion-item:last-child {
            margin-bottom: 0;
        }

        .accordion-btn {
            width: 100%;
            text-align: left;
            padding: 20px 24px;
            background: #ffffff;
            border: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .accordion-btn:focus {
            outline: none;
        }

        .accordion-btn .q {
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 16.5px;
            color: var(--brand-navy, #001529);
            transition: color 0.3s ease;
            padding-right: 15px;
        }

        .faq-toggle {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(159, 11, 7, 0.05);
            color: var(--brand-red, #9F0B07);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            flex-shrink: 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(159, 11, 7, 0.08);
        }

        /* plus/minus lines */
        .faq-toggle::before,
        .faq-toggle::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: currentColor;
            transition: transform 0.3s ease, opacity 0.3s ease;
            border-radius: 2px;
        }

        .faq-toggle::before {
            width: 12px;
            height: 2px;
        }

        .faq-toggle::after {
            width: 2px;
            height: 12px;
        }

        /* Open item states */
        .accordion-item.open {
            border-color: rgba(159, 11, 7, 0.2);
            box-shadow: 0 10px 25px rgba(159, 11, 7, 0.04);
            border-left: 4px solid var(--brand-red, #9F0B07);
        }

        .accordion-item.open .accordion-btn {
            background: rgba(159, 11, 7, 0.01);
        }

        .accordion-item.open .accordion-btn .q {
            color: var(--brand-red, #9F0B07);
        }

        .accordion-item.open .faq-toggle {
            background: var(--brand-red, #9F0B07);
            color: #ffffff;
            transform: rotate(90deg);
            border-color: var(--brand-red, #9F0B07);
        }

        .accordion-item.open .faq-toggle::after {
            transform: translate(-50%, -50%) scaleY(0);
            opacity: 0;
        }

        .accordion-content {
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            padding: 0 24px;
            background: #ffffff;
        }

        .accordion-content p {
            margin: 0;
            padding-bottom: 22px;
            color: #64748b;
            font-family: var(--font-body);
            font-size: 14.5px;
            line-height: 1.7;
        }

        /* Left Sidebar sticky CTA box */
        .sticky-support-card {
            position: sticky;
            top: 110px;
        }

        /* responsive tweaks */
        @media (max-width: 767px) {
            .faq-sec {
                padding: 100px 0 50px;
            }

            .accordion-btn {
                padding: 16px;
            }

            .accordion-btn .q {
                font-size: 15px;
            }

            .accordion-content {
                padding: 0 16px;
            }

            .sticky-support-card {
                margin-bottom: 40px;
            }

            .faq-hero-img-wrap {
                max-width: 320px;
                margin: 25px auto -50px;
            }
        }
    </style>

    <!-- Banner -->
    <section class="faq-banner text-center">
        <div class="container" data-aos="fade-up" data-aos-duration="900">
            <span class="banner-badge mb-3">
                <i class="fa-solid fa-circle-question"></i> FAQ Help Center
            </span>
            <h1 class="text-navy fw-extrabold display-5 mb-3">
                Got Questions? We Have <span class="gradient-text">The Answers</span>
            </h1>
            <p class="text-muted fs-5 mx-auto mb-4" style="max-width: 650px; line-height: 1.6;">
                Find quick answers to common queries about our ghostwriting process, editing standards, book formatting,
                cover design, KDP distribution, and royalties.
            </p>
            <div class="faq-hero-img-wrap">
                <img src="{{ asset('assets/imgs/faq-hero.png') }}" alt="FAQ Help Center Visual" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="faq-sec" id="faqs">
        <div class="container">
            <div class="row align-items-start">

                <!-- Left sticky card -->
                <div class="col-lg-5 col-md-12">
                    <div class="sticky-support-card" data-aos="fade-right" data-aos-duration="900">
                        <span class="text-uppercase text-danger fw-bold small tracking-wider">— HAVE QUESTIONS? —</span>
                        <h2 class="fw-bold display-6 mt-2 mb-3 text-navy">Still Confused? <br><span
                                class="text-danger">We're Here to Help</span></h2>
                        <p class="text-muted fs-6 mb-4" style="line-height: 1.7; max-width: 440px;">
                            Here you will find answers to the most common questions about our ghostwriting process, editing
                            packages, custom book covers, KDP distribution, and royalties.
                        </p>
                        <p class="text-muted fs-6 mb-4" style="line-height: 1.7; max-width: 440px;">
                            Can't find the answers you're looking for? Reach out to our customer support or click the
                            button below to schedule a call with our team.
                        </p>
                        <a href="{{ route('contact-us') }}" class="btn-red-pill"><i
                                class="fa-solid fa-paper-plane me-1"></i> Let's Discuss Your Project</a>
                    </div>
                </div>

                <!-- Right FAQ items -->
                <div class="col-lg-7 col-md-12" data-aos="fade-left" data-aos-duration="900">
                    <div class="faq-accordion-box">
                        <ul class="faq-accordion">
                            @foreach ($faqs as $index => $faq)
                                <li class="accordion-item">
                                    <button class="accordion-btn" aria-expanded="false" aria-controls="faq{{ $index + 1 }}">
                                        <span class="q">{{ $faq['question'] }}</span>
                                        <span class="faq-toggle"></span>
                                    </button>
                                    <div id="faq{{ $index + 1 }}" class="accordion-content">
                                        <p>{!! $faq['answer'] !!}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.accordion-item');
            items.forEach(item => {
                const btn = item.querySelector('.accordion-btn');
                const content = item.querySelector('.accordion-content');

                btn.addEventListener('click', function () {
                    const isOpen = item.classList.contains('open');

                    // close all
                    items.forEach(i => {
                        i.classList.remove('open');
                        i.querySelector('.accordion-btn').setAttribute('aria-expanded', 'false');
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
                btn.addEventListener('keydown', function (e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        btn.click();
                    }
                });
            });
        });
    </script>

@endsection