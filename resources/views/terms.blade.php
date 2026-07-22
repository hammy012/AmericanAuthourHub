@extends('layouts.app')

@section('title', 'Terms & Conditions | American Author Hub')
@section('meta_title', 'Terms & Conditions | American Author Hub')
@section('meta_description', 'Review the Terms and Conditions of American Author Hub. Learn about our project requirements, payment guidelines, revision terms, and refund policy.')
@section('meta_keywords', 'terms and conditions, american author hub terms, refund policy, revision terms, book publishing agreement')

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

        .legal-alert-box {
            background: rgba(159, 11, 7, 0.02);
            border: 1px dashed rgba(159, 11, 7, 0.2);
            border-radius: 12px;
            padding: 20px;
            margin: 25px 0;
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
                <i class="fa-solid fa-scale-balanced"></i> Service Agreement
            </span>
            <h1 class="text-navy fw-extrabold display-5 mb-2">
                Terms & <span class="gradient-text">Conditions</span>
            </h1>
            <p class="text-muted fs-5 mb-0" style="max-width: 650px; line-height: 1.6;">
                Review the rules, payment details, revisions schedules, and general policies governing our writing and
                publishing solutions.
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
                            <li><a href="#ownership" class="toc-link">1. Content Ownership</a></li>
                            <li><a href="#payment" class="toc-link">2. Payment Terms</a></li>
                            <li><a href="#revisions" class="toc-link">3. Revision Policy</a></li>
                            <li><a href="#requirements" class="toc-link">4. Project Requirements</a></li>
                            <li><a href="#refund" class="toc-link">5. Refund Policy</a></li>
                            <li><a href="#website-use" class="toc-link">6. Website Terms of Use</a></li>
                            <li><a href="#indemnification" class="toc-link">7. Indemnification</a></li>
                            <li><a href="#relationship" class="toc-link">8. Business Relationship</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Right Content Card -->
                <div class="col-lg-9" data-aos="fade-left" data-aos-duration="900">
                    <div class="legal-card">
                        <div class="legal-content">

                            <div class="legal-intro-box">
                                <strong>Effective Date: July 2026</strong><br>
                                Welcome to American Author Hub. By using this website or engaging our services, you agree to
                                comply with and be bound by the following terms, conditions, and service guidelines. Please
                                read them carefully.
                            </div>

                            <h2 id="ownership">1. Content Ownership & Intellectual Property</h2>
                            <p>You will hold 100% full, exclusive ownership of the content that we develop for you and
                                deliver as per the agreed terms. American Author Hub will hold no claim whatsoever on the
                                final manuscripts, designs, or marketing assets created. You are completely free to publish,
                                modify, license, and distribute the work under your own name or brand, with full royalties
                                ownership.</p>

                            <h2 id="payment">2. Payment Guidelines</h2>
                            <p>We charge 100% advance payment for all services listed on the website unless otherwise
                                negotiated and documented in a separate client contract. All payment gateway fees,
                                transaction charges, and applicable local taxes are to be borne by the client at the time of
                                purchase.</p>

                            <h2 id="revisions">3. Revision Policy</h2>
                            <p>To ensure your complete satisfaction, we offer revisions on delivered drafts. The revision
                                requests must be submitted within the following parameters:</p>
                            <ul>
                                <li><strong>Standard Window:</strong> Revision requests must be submitted within 7 days of
                                    delivery (extended to 14 days under specific packages).</li>
                                <li><strong>Minimum Turnaround:</strong> The minimum standard turnaround time for revision
                                    edits is 24 hours.</li>
                                <li><strong>Urgency Tier Schedule:</strong>
                                    <ul>
                                        <li>For projects with an initial deadline up to 24 hours: Revision turnaround is 24
                                            hours.</li>
                                        <li>For projects with an initial deadline between 24-48 hours: Revision turnaround
                                            is 48 hours.</li>
                                        <li>For projects with an initial deadline of 48 hours and above: Revision turnaround
                                            is 72 hours.</li>
                                    </ul>
                                </li>
                            </ul>

                            <h2 id="requirements">4. Project Requirements</h2>
                            <p>All core requirements, milestones, outlines, and reference documents must be discussed and
                                finalized with our project management team before work officially begins. Service level
                                disputes will be resolved strictly based on the requirements agreed upon at the project
                                start, these Terms and Conditions, and standard reasonable business practices.</p>

                            <h2 id="refund">5. Refund Policy</h2>
                            <p>We stand behind the quality of our book writing and publishing support. Our refund structure
                                operates as follows:</p>
                            <div class="legal-alert-box">
                                <h4 class="text-danger fw-bold mb-2"><i class="fa-solid fa-circle-exclamation me-1"></i>
                                    Refund Conditions:</h4>
                                <ul class="mb-0">
                                    <li>You may claim a <strong>full refund</strong> before we begin working on your project
                                        details.</li>
                                    <li>Once the creative work has initiated, any approved refund will be processed after
                                        deducting transactional fees and proportional costs for the work already completed.
                                    </li>
                                    <li>All refund requests must be submitted within <strong>5 days</strong> of order
                                        delivery. If no claims are received within this period, it constitutes absolute
                                        client satisfaction with the order.</li>
                                    <li>Simply changing your mind about a service after purchase does not warrant or justify
                                        a refund.</li>
                                </ul>
                            </div>

                            <h2 id="website-use">6. Website Terms of Use</h2>
                            <p>The information and materials provided on www.americanauthorhub.com are designed to outline
                                our services and processes. They do not constitute formal business certifications or
                                guaranteed legal outcomes. We strive for accuracy but are not liable for accidental website
                                errors or performance issues.</p>
                            <p>We are not liable for any service interruptions, server downtimes, transmission errors,
                                computer viruses, or unauthorized database access outside our immediate technological
                                control.</p>

                            <h2 id="indemnification">7. Indemnification</h2>
                            <p>You agree to defend, indemnify, and hold American Author Hub, its parents, subsidiaries,
                                affiliates, officers, agents, and employees harmless from any liability, legal claims,
                                damages, losses, and legal costs arising from: (i) your access to or use of the platform;
                                (ii) your violation of these terms; or (iii) your violation of third-party copyrights,
                                intellectual properties, or privacy rights.</p>

                            <h2 id="relationship">8. Business Relationship</h2>
                            <p>Nothing in this agreement or your use of this site constitutes any joint venture, legal
                                partnership, direct employment, or legal agency relationship between you and American Author
                                Hub.</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection