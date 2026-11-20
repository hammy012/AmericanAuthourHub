@extends('layouts.app')

@section('title', 'Terms and Conditions | American Author Hub')
@section('meta_title', 'Terms and Conditions | American Author Hub')
@section('meta_description', 'Read the American Author Hub Terms and Conditions covering manuscript ownership, royalties, payments, revisions, cancellations, and publishing platforms.')
@section('meta_keywords', 'terms and conditions, American Author Hub terms, manuscript ownership, publishing royalties, revision policy, refund policy')

@section('content')
    <style>
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
            gap: 6px;
            padding: 5px 16px;
            border: 1px solid rgba(159, 11, 7, 0.12);
            border-radius: 20px;
            background: rgba(159, 11, 7, 0.08);
            color: #9F0B07;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
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
        }

        .legal-content h2:first-of-type {
            margin-top: 0;
        }

        .legal-content h3 {
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 16px;
            color: #001529;
            margin: 20px 0 8px;
        }

        .legal-content p {
            margin-bottom: 16px;
        }

        .legal-content ul,
        .legal-content ol {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .legal-content li {
            margin-bottom: 8px;
        }

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

        @media (min-width: 992px) {
            .toc-sticky {
                max-height: calc(100vh - 130px);
                overflow-y: auto;
            }
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

    <section class="legal-banner">
        <div class="container" data-aos="fade-up" data-aos-duration="900">
            <span class="banner-badge mb-3">
                <i class="fa-solid fa-scale-balanced" aria-hidden="true"></i>
                Legal &amp; Compliance
            </span>

            <h1 class="text-navy fw-extrabold display-5 mb-2">
                Terms and <span class="gradient-text">Conditions</span>
            </h1>

            <p class="text-muted fs-5 mb-0" style="max-width: 650px; line-height: 1.6;">
                Review the terms that apply when you use our website, submit a manuscript,
                or purchase publishing support from American Author Hub.
            </p>
        </div>
    </section>

    <section class="legal-sec">
        <div class="container">
            <div class="row">

                <!-- Table of Contents -->
                <div class="col-lg-3" data-aos="fade-right" data-aos-duration="900">
                    <nav class="toc-sticky" aria-label="Terms and Conditions table of contents">
                        <h2 class="toc-title">Table of Contents</h2>

                        <ul class="toc-list">
                            <li><a href="#scope" class="toc-link">1. Scope of Services</a></li>
                            <li><a href="#ownership" class="toc-link">2. Intellectual Property &amp; Ownership</a></li>
                            <li><a href="#warranties" class="toc-link">3. Client Representations &amp; Warranties</a></li>
                            <li><a href="#payment" class="toc-link">4. Payments &amp; Invoicing</a></li>
                            <li><a href="#revisions" class="toc-link">5. Revisions &amp; Acceptance</a></li>
                            <li><a href="#refund" class="toc-link">6. Refunds &amp; Cancellation</a></li>
                            <li><a href="#platforms" class="toc-link">7. Publishing &amp; Distribution Platforms</a></li>
                            <li><a href="#confidentiality" class="toc-link">8. Confidentiality &amp; Non-Disclosure</a></li>
                            <li><a href="#liability" class="toc-link">9. Limitation of Liability</a></li>
                            <li><a href="#governing-law" class="toc-link">10. Governing Law &amp; Disputes</a></li>
                            <li><a href="#termination" class="toc-link">11. Termination</a></li>
                            <li><a href="#changes" class="toc-link">12. Modifications to Terms</a></li>
                            <li><a href="#contact" class="toc-link">13. Contact Information</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Terms and Conditions -->
                <div class="col-lg-9" data-aos="fade-left" data-aos-duration="900">
                    <div class="legal-card">
                        <div class="legal-content">

                            <div class="legal-intro-box">
                                <p>
                                    <strong>Effective Date:</strong> October 8, 2026<br>
                                    <strong>Last Updated:</strong> October 8, 2026
                                </p>

                                <p>
                                    Welcome to <strong>American Author Hub</strong>, a trade name and DBA of
                                    Digital Core Services LLC ("Company," "we," "us," or "our"). These Terms and
                                    Conditions ("Terms", "Agreement") govern your access to and use of our website
                                    located at <strong>americanauthorhub.com</strong> (the "Site") and all related
                                    editing, ghostwriting, formatting, cover design, printing, distribution, and
                                    publishing services (collectively, the "Services").
                                </p>

                                <p class="mb-0">
                                    By requesting a quote, executing a Service Agreement, submitting a manuscript,
                                    or purchasing any Service from American Author Hub, you ("Client," "Author," or
                                    "you") agree to be bound by these Terms. If you do not agree to all of these
                                    Terms, you may not access or use our Services.
                                </p>
                            </div>

                            <h2 id="scope">1. Scope of Services</h2>

                            <p>
                                American Author Hub provides independent self-publishing assistance, professional
                                editing, ghostwriting, book cover design, interior layout formatting, printing
                                coordination, audiobooks, and marketing consulting services.
                            </p>

                            <ul>
                                <li>
                                    <strong>Service Agreements:</strong> Specific deliverables, timelines,
                                    formatting specifications, and package pricing will be outlined in an individual
                                    Scope of Work ("SOW"), proposal, or invoice provided to you prior to project
                                    commencement.
                                </li>
                                <li>
                                    <strong>Independent Self-Publishing:</strong> Unless explicitly agreed upon in
                                    writing, American Author Hub acts as a service provider assisting with
                                    self-publishing. The Author remains the publisher of record on third-party
                                    distribution platforms (e.g., Amazon KDP, IngramSpark, Barnes &amp; Noble Press).
                                </li>
                            </ul>

                            <h2 id="ownership">2. Intellectual Property &amp; Manuscript Ownership</h2>

                            <h3>A. Client Retains 100% Ownership</h3>
                            <p>
                                You retain full ownership, copyright, and all associated intellectual property
                                rights in and to your raw manuscripts, creative concepts, outlines, notes,
                                characters, and underlying work submitted to us. Submitting a manuscript to
                                American Author Hub does not transfer copyright or ownership to the Company.
                            </p>

                            <h3>B. Work-for-Hire Deliverables</h3>
                            <p>
                                All custom deliverables created by American Author Hub specifically for your
                                project including custom ghostwritten content, developmental editing revisions,
                                original book cover art, and interior page layout designs are treated as
                                <strong>"Work-for-Hire."</strong> Upon full and final payment of all agreed-upon
                                project fees, American Author Hub assigns and transfers all rights, title, and
                                intellectual property in the completed deliverables to the Client.
                            </p>

                            <h3>C. Royalties &amp; Revenues</h3>
                            <p>
                                <strong>American Author Hub takes 0% of your book royalties.</strong>
                                You retain 100% of all sales revenues, royalties, and rights generated from the
                                commercial distribution of your completed book.
                            </p>

                            <h2 id="warranties">3. Client Representations &amp; Warranties</h2>

                            <p>
                                By submitting any text, image, manuscript, or material ("Client Content") to
                                American Author Hub, you represent and warrant that:
                            </p>

                            <ol>
                                <li>
                                    You are the sole creator and copyright owner of the Client Content, or possess
                                    all necessary legal permissions, licenses, and releases to utilize and publish
                                    the material.
                                </li>
                                <li>
                                    The Client Content does not infringe upon any third-party copyright, trademark,
                                    patent, trade secret, or privacy right.
                                </li>
                                <li>
                                    The Client Content is not illegal, defamatory, libelous, or in violation of
                                    any applicable federal, state, or international laws.
                                </li>
                                <li>
                                    You will indemnify and hold harmless American Author Hub, its officers,
                                    employees, and contracted specialists against any claims, damages, liabilities,
                                    or legal fees arising from a breach of these warranties.
                                </li>
                            </ol>

                            <h2 id="payment">4. Payment Terms, Milestones, and Invoicing</h2>

                            <ul>
                                <li>
                                    <strong>Pricing &amp; Quotes:</strong> Prices for publishing packages and
                                    individual services are set forth in your invoice, Scope of Work ("SOW"), or
                                    project proposal. All fees are in US Dollars (USD).
                                </li>
                                <li>
                                    <strong>Upfront Payment Required:</strong> Unless explicitly agreed upon in
                                    writing through a custom written agreement,
                                    <strong>100% advance payment of all total project fees is required prior to
                                    project commencement and the start of any editorial, design, writing, or
                                    publishing work</strong>.
                                </li>
                                <li>
                                    <strong>Deliverable &amp; Account Access Release:</strong> Final print-ready
                                    PDFs, ePub files, original cover vector source files, or completed distribution
                                    account transfers will only be released upon complete verification of cleared funds.
                                </li>
                            </ul>

                            <h2 id="revisions">5. Revisions and Acceptance Criteria</h2>

                            <p>
                                To ensure clarity and steady progress, all editorial, design, and formatting services
                                include specific revision thresholds:
                            </p>

                            <h3>A. Editorial &amp; Writing Services</h3>
                            <ul>
                                <li>
                                    Proofreading and editing deliverables include up to
                                    <strong>two (2) rounds of revisions</strong> focused on corrections based on
                                    original project scope. Major structural rewrites or scope additions after
                                    initial manuscript approval will incur additional service fees.
                                </li>
                                <li>
                                    Ghostwriting projects require section-by-section approval (e.g., chapter by
                                    chapter). Once a chapter or section is reviewed and approved by the Client,
                                    subsequent structural changes to that section will be billed as additional work.
                                </li>
                            </ul>

                            <h3>B. Cover &amp; Interior Design</h3>
                            <ul>
                                <li>
                                    Cover designs include up to <strong>three (3) rounds of design revisions</strong>
                                    based on the initial design brief provided by the Client. Requesting a completely
                                    new design concept outside the original brief after mockups have been presented
                                    will be treated as a new design contract.
                                </li>
                            </ul>

                            <h3>C. Final Review Period</h3>
                            <p>
                                Upon receipt of completed draft files, the Client has
                                <strong>fourteen (14) calendar days</strong> to review the work and submit written
                                feedback or revision requests. If no feedback or approval is received within 14 days,
                                the project will be deemed accepted and complete.
                            </p>

                            <h2 id="refund">6. Refunds and Cancellation Policy</h2>

                            <div class="legal-alert-box">
                                <ul class="mb-0">
                                    <li>
                                        <strong>Cancellation Before Work Begins:</strong> If you cancel a project
                                        before any editorial, writing, or design work has commenced, you are eligible
                                        for a refund minus a 5% administrative and transaction processing fee.
                                    </li>
                                    <li>
                                        <strong>In-Progress Work:</strong> Because our services involve customized
                                        creative labor, refunds for active or in-progress projects are calculated
                                        based on the percentage of work completed at the time written cancellation
                                        is received.
                                    </li>
                                    <li>
                                        <strong>Completed Services:</strong> Once a milestone, draft, or final project
                                        deliverable has been reviewed, approved, or delivered, fees associated with
                                        that portion of work are strictly non-refundable.
                                    </li>
                                    <li>
                                        <strong>Third-Party &amp; Administrative Setup Fees:</strong> American Author
                                        Hub assists authors with the setup, account configuration, administrative
                                        submissions, and formatting required for ISBN applications, copyright
                                        registrations, and third-party platform publishing. Any third-party fees paid
                                        directly to external registries (e.g., Bowker, US Copyright Office,
                                        distribution platforms), as well as dedicated administrative setup fees for
                                        these assistance services, are <strong>strictly non-refundable</strong> once
                                        processing or application setup has been initiated.
                                    </li>
                                </ul>
                            </div>

                            <h2 id="platforms">7. Third-Party Publishing &amp; Distribution Platforms</h2>

                            <ul>
                                <li>
                                    <strong>Platform Compliance:</strong> While American Author Hub assists with
                                    formatting, uploading, and setup on third-party distribution platforms (such as
                                    Amazon KDP, IngramSpark, Google Play Books, or Apple Books), each platform
                                    operates independently under its own Terms of Service and content policies.
                                </li>
                                <li>
                                    <strong>Platform Account Ownership:</strong> The Client is solely responsible
                                    for creating and maintaining their author/publisher accounts on third-party
                                    platforms. American Author Hub is not responsible for platform account
                                    suspensions, algorithm changes, pricing policy adjustments, or distribution
                                    delays caused by third-party retailers.
                                </li>
                                <li>
                                    <strong>Physical Print Proofing:</strong> The Client is strongly advised to
                                    order and physically review an author print proof before making books available
                                    for public distribution. American Author Hub is not liable for print defects
                                    resulting from platform-side printing variations.
                                </li>
                            </ul>

                            <h2 id="confidentiality">8. Confidentiality and Non-Disclosure</h2>

                            <p>
                                American Author Hub agrees that all manuscripts, outlines, correspondence, and
                                creative materials shared during consultations or project execution are strictly
                                confidential. We will not share, sell, distribute, or publicly display any part of
                                your unpublished manuscript without your prior written authorization.
                                (For details on data privacy and cookie usage, please review our
                                <a href="{{ url('/privacy-policy') }}" class="text-danger fw-bold">Privacy Policy</a>).
                            </p>

                            <h2 id="liability">9. Limitation of Liability</h2>

                            <p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW:</p>

                            <ul>
                                <li>
                                    IN NO EVENT SHALL AMERICAN AUTHOR HUB, ITS DIRECTORS, EMPLOYEES, CONTRACTORS,
                                    OR PARTNERS BE LIABLE FOR ANY INDIRECT, INCIDENTAL, CONSEQUENTIAL, SPECIAL,
                                    OR PUNITIVE DAMAGES INCLUDING LOSS OF PROFITS, REVENUE, BOOK SALES, DATA, OR
                                    GOODWILL ARISING OUT OF OR RELATED TO YOUR USE OF OUR SERVICES.
                                </li>
                                <li>
                                    THE TOTAL AGGREGATE LIABILITY OF AMERICAN AUTHOR HUB FOR ANY CLAIMS ARISING
                                    UNDER THESE TERMS SHALL NOT EXCEED THE TOTAL AMOUNT OF FEES ACTUALLY PAID BY
                                    THE CLIENT TO THE COMPANY FOR THE SPECIFIC SERVICE GIVING RISE TO THE CLAIM
                                    DURING THE SIX (6) MONTH PERIOD PRECEDING THE CLAIM.
                                </li>
                            </ul>

                            <h2 id="governing-law">10. Governing Law and Dispute Resolution</h2>

                            <ul>
                                <li>
                                    <strong>Governing Law:</strong> These Terms and any disputes arising out of or
                                    related to our Services shall be governed by and construed in accordance with
                                    the laws of the <strong>State of Texas</strong>, without regard to its conflict
                                    of law principles.
                                </li>
                                <li>
                                    <strong>Informal Resolution:</strong> Before initiating legal proceedings, both
                                    parties agree to attempt in good faith to resolve any dispute, claim, or
                                    controversy informally through direct communication.
                                </li>
                                <li>
                                    <strong>Jurisdiction:</strong> Any legal suit, action, or proceeding arising out
                                    of or related to these Terms shall be instituted exclusively in the state or
                                    federal courts located in <strong>Harris County, Texas</strong>. Both parties
                                    irrevocably consent to the personal jurisdiction of such courts.
                                </li>
                            </ul>

                            <h2 id="termination">11. Termination</h2>

                            <p>
                                Either party may terminate a Service Agreement at any time by providing written
                                notice. Upon termination, the Client shall pay American Author Hub for all work
                                completed up to the date of termination, and American Author Hub will release all
                                completed or in-progress work product corresponding to paid fees.
                            </p>

                            <h2 id="changes">12. Modifications to Terms</h2>

                            <p>
                                We reserve the right to modify these Terms and Conditions at any time. Any changes
                                will be posted directly to this page with an updated "Last Updated" date.
                                Continued use of our website or services following the posting of revised Terms
                                constitutes your acceptance of the changes.
                            </p>

                            <h2 id="contact">13. Contact Information</h2>

                            <p>
                                If you have questions, concerns, or notices regarding these Terms and Conditions,
                                please contact us at:
                            </p>

                            <address class="mb-0" style="font-style: normal;">
                                <strong>American Author Hub</strong><br>
                                <strong>Website:</strong>
                                <a href="https://americanauthorhub.com" class="text-danger fw-bold text-decoration-none">americanauthorhub.com</a><br>
                                <strong>Email:</strong>
                                <a href="mailto:info@americanauthorhub.com" class="text-danger fw-bold text-decoration-none">info@americanauthorhub.com</a><br>
                                <strong>Mailing Address:</strong> 15155 Richmond Ave., Houston, Texas 77082, United States
                            </address>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection