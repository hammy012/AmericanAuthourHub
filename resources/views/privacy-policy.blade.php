@extends('layouts.app')

@section('title', 'Privacy Policy | American Author Hub')
@section('meta_title', 'Privacy Policy | American Author Hub')
@section('meta_description', 'Read the Privacy Policy of American Author Hub to understand how we collect, manage, and protect your personal information and project data.')
@section('meta_keywords', 'privacy policy, american author hub privacy, data protection, secure book writing services')

@section('content')

    <style>
        /* Legal Page Styling */
        .legal-banner {
            position: relative;
            padding: 80px 0 50px;
            background: radial-gradient(100% 100% at 50% 0%, #ffffff 0%, #f6f8fb 100%);
            overflow: hidden;
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
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

        .legal-sec {
            background-color: #f8fafc;
            padding: 70px 0;
        }

        .legal-card {
            background: #ffffff;
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 39, 104, 0.01);
        }

        /* Sidebar Navigation Links */
        .toc-sticky {
            position: sticky;
            top: 110px;
            background: #ffffff;
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(0, 39, 104, 0.01);
        }

        .toc-title {
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 16px;
            color: #001529;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .toc-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .toc-link {
            font-family: var(--font-body);
            font-size: 14px;
            color: #64748b;
            text-decoration: none !important;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .toc-link:hover {
            color: #9F0B07;
            transform: translateX(3px);
        }

        /* Content Typography */
        .legal-content {
            font-family: var(--font-body);
            font-size: 15px;
            line-height: 1.8;
            color: #334155;
        }

        .legal-content h2 {
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 20px;
            color: #001529;
            margin-top: 35px;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid #f1f5f9;
            scroll-margin-top: 130px;
            /* Offset for smooth scroll */
        }

        .legal-content h2:first-of-type {
            margin-top: 0;
        }

        .legal-content p {
            margin-bottom: 16px;
        }

        .legal-content ul {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .legal-content li {
            margin-bottom: 8px;
        }

        /* Alert highlight block */
        .legal-intro-box {
            background: #f8fafc;
            border-left: 4px solid var(--brand-red, #9F0B07);
            border-radius: 0 12px 12px 0;
            padding: 20px;
            margin-bottom: 30px;
            font-size: 15px;
            color: #475569;
        }

        @media (max-width: 991px) {
            .toc-sticky {
                margin-bottom: 30px;
                position: relative;
                top: 0;
            }

            .legal-card {
                padding: 24px;
            }
        }
    </style>

    <!-- Banner -->
    <section class="legal-banner">
        <div class="container" data-aos="fade-up" data-aos-duration="900">
            <span class="banner-badge mb-3">
                <i class="fa-solid fa-shield-halved"></i> Legal & Compliance
            </span>
            <h1 class="text-navy fw-extrabold display-5 mb-2">
                Privacy <span class="gradient-text">Policy</span>
            </h1>
            <p class="text-muted fs-5 mb-0" style="max-width: 650px; line-height: 1.6;">
                Learn how we collect, manage, use, and safeguard your personal information and manuscript data at American
                Author Hub.
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="legal-sec">
        <div class="container">
            <div class="row">

                <!-- Left Navigation Sidebar -->
                <div class="col-lg-3" data-aos="fade-right" data-aos-duration="900">
                    <nav class="toc-sticky">
                        <h5 class="toc-title">Table of Contents</h5>
                        <ul class="toc-list">
                            <li><a href="#collect" class="toc-link">1. Information We Collect</a></li>
                            <li><a href="#use" class="toc-link">2. Use of Information</a></li>
                            <li><a href="#disclosure" class="toc-link">3. Disclosure of Information</a></li>
                            <li><a href="#choices" class="toc-link">4. Your Choices</a></li>
                            <li><a href="#security" class="toc-link">5. Data Security</a></li>
                            <li><a href="#changes" class="toc-link">6. Policy Changes</a></li>
                            <li><a href="#opt-in" class="toc-link">7. Opting In to Messages</a></li>
                            <li><a href="#contact" class="toc-link">8. Contact Us</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Right Content Card -->
                <div class="col-lg-9" data-aos="fade-left" data-aos-duration="900">
                    <div class="legal-card">
                        <div class="legal-content">

                            <div class="legal-intro-box">
                                <strong>Last Updated: July 2026</strong><br>
                                American Author Hub is committed to protecting the privacy and security of your personal and
                                manuscript information. This Privacy Policy details our practices concerning data protection
                                for all visitors, authors, and clients using our website and services.
                            </div>

                            <h2 id="collect">1. Information We Collect</h2>
                            <p>We collect various types of personal and project-related information when you interact with
                                our platform to ensure a seamless book creation and publishing journey:</p>
                            <ul>
                                <li><strong>Contact Information:</strong> Full name, primary email address, active phone
                                    number, and physical mailing address.</li>
                                <li><strong>Project and Manuscript Data:</strong> Text documents, outlines, concepts, cover
                                    graphics, and files submitted for writing, editing, or publishing purposes.</li>
                                <li><strong>Account Credentials:</strong> Secure usernames, passwords, and profile elements
                                    for accessing client dashboards.</li>
                                <li><strong>Usage & Analytic Data:</strong> Details of your interactions with our website
                                    (IP address, pages viewed, browser types, and links clicked).</li>
                                <li><strong>Cookies:</strong> Standard tracking tokens utilized to enhance browsing
                                    performance, save layout preferences, and personalize your experience.</li>
                            </ul>

                            <h2 id="use">2. Use of Information</h2>
                            <p>We process your data strictly to perform our contractual duties and improve our publishing
                                deliverables. The collected information is used to:</p>
                            <ul>
                                <li>Provide, manage, and customize our writing, editing, and book marketing services.</li>
                                <li>Facilitate direct collaboration between you and your assigned project managers,
                                    ghostwriters, or editors.</li>
                                <li>Deliver project milestones, invoice confirmations, and service update notifications.
                                </li>
                                <li>Improve website performance, evaluate service trends, and optimize user experience.</li>
                                <li>Comply with federal regulatory demands and defend our terms of use.</li>
                            </ul>

                            <h2 id="disclosure">3. Disclosure of Information</h2>
                            <p>We prioritize your confidentiality. We do not sell or trade your personal information.
                                Disclosures are only made under the following conditions:</p>
                            <ul>
                                <li><strong>Authorized Service Providers:</strong> Trusted third parties (such as cloud
                                    storage providers, payment processors, and KDP distribution partners) who assist us
                                    under strict NDA conditions.</li>
                                <li><strong>Consent-based Marketing:</strong> We will never share your personal information
                                    with affiliates or business partners for promotional campaigns without your explicit,
                                    opt-in consent.</li>
                                <li><strong>Legal Obligations:</strong> Compliance with subpoena demands, law enforcement
                                    orders, or regulatory actions when required by law to protect rights and client safety.
                                </li>
                            </ul>

                            <h2 id="choices">4. Your Choices</h2>
                            <p>You have full control over your personal information. You can choose not to submit optional
                                data, although this might restrict access to specific custom dashboard features. You may
                                also request deletion or modification of your contact parameters, or unsubscribe from
                                promotional newsletters at any time using the links provided in our emails.</p>

                            <h2 id="security">5. Data Security</h2>
                            <p>We deploy modern encryption standards (SSL/TLS) and secure database architectures to
                                safeguard your manuscripts and personal details against unauthorized access, disclosure, or
                                altering. Please note that while we employ industry best practices, no digital storage or
                                transmission is 100% immune, and absolute security cannot be guaranteed.</p>

                            <h2 id="changes">6. Changes to This Privacy Policy</h2>
                            <p>We may periodically update this policy to reflect changes in our operational procedures or
                                compliance rules. We will post updates on this page and revise the last updated date. We
                                encourage you to check this policy occasionally to stay informed.</p>

                            <h2 id="opt-in">7. Opting In to Messages</h2>
                            <p>Users may explicitly opt in to receive updates, SMS alerts, or newsletters from us (for
                                example, by checking confirmation boxes on contact forms). When you opt in, you authorize us
                                to send progress alerts via the provided contact parameters. You can revoke this
                                authorization at any time by replying STOP to messages or contacting us directly.</p>
                            <p>All opt-in procedures align strictly with legal requirements, including providing clear
                                descriptions of how your parameters will be managed.</p>

                            <h2 id="contact">8. Contact Us</h2>
                            <p>If you have any questions, compliance requests, or data privacy concerns regarding this
                                policy, please reach out to our legal support desk at:</p>
                            <p>
                                <a href="mailto:info@americanauthorhub.com"
                                    class="text-danger fw-bold text-decoration-none">
                                    <i class="fa-solid fa-envelope me-1"></i> info@americanauthorhub.com
                                </a>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>@endsection