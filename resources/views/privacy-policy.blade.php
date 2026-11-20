@extends('layouts.app')

@section('title', 'Privacy Policy | American Author Hub')
@section('meta_title', 'Privacy Policy | American Author Hub')
@section('meta_description', 'Read the Privacy Policy of American Author Hub to understand how we collect, manage, and protect your personal information and project data.')
@section('meta_keywords', 'privacy policy, american author hub privacy, data protection, secure book writing services')

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

    <!-- Banner -->
    <section class="legal-banner">
        <div class="container" data-aos="fade-up" data-aos-duration="900">
            <span class="banner-badge mb-3">
                <i class="fa-solid fa-shield-halved"></i> Legal &amp; Compliance
            </span>

            <h1 class="text-navy fw-extrabold display-5 mb-2">
                Privacy <span class="gradient-text">Policy</span>
            </h1>

            <p class="text-muted fs-5 mb-0" style="max-width: 650px; line-height: 1.6;">
                Learn how we collect, manage, use, and safeguard your personal information and manuscript data at American Author Hub.
            </p>
        </div>
    </section>

    <section class="legal-sec">
        <div class="container">
            <div class="row">

                <!-- Left Navigation Sidebar -->
                <div class="col-lg-3" data-aos="fade-right" data-aos-duration="900">
                    <nav class="toc-sticky" aria-label="Privacy policy table of contents">
                        <h5 class="toc-title">Table of Contents</h5>
                        <ul class="toc-list">
                            <li><a href="#collect" class="toc-link">1. Information We Collect</a></li>
                            <li><a href="#use" class="toc-link">2. How We Use Your Information</a></li>
                            <li><a href="#manuscripts" class="toc-link">3. Manuscript Confidentiality &amp; Ownership</a></li>
                            <li><a href="#cookies" class="toc-link">4. Cookies &amp; Tracking Technologies</a></li>
                            <li><a href="#disclosure" class="toc-link">5. Information Sharing &amp; Disclosures</a></li>
                            <li><a href="#security" class="toc-link">6. Payment Information &amp; Security</a></li>
                            <li><a href="#opt-in" class="toc-link">7. Email, SMS &amp; Marketing</a></li>
                            <li><a href="#retention" class="toc-link">8. Data Retention</a></li>
                            <li><a href="#choices" class="toc-link">9. State-Specific Privacy Rights</a></li>
                            <li><a href="#external-links" class="toc-link">10. Third-Party Websites &amp; Links</a></li>
                            <li><a href="#children" class="toc-link">11. Children's Privacy</a></li>
                            <li><a href="#changes" class="toc-link">12. Changes to This Privacy Policy</a></li>
                            <li><a href="#contact" class="toc-link">13. Contact Us</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- Right Content Card -->
                <div class="col-lg-9" data-aos="fade-left" data-aos-duration="900">
                    <div class="legal-card">
                        <div class="legal-content">

                            <div class="legal-intro-box">
                                <p>
                                    <strong>Effective Date:</strong> October 8, 2026<br>
                                    <strong>Last Updated:</strong> October 8, 2026
                                </p>
                                <p>
                                    <strong>American Author Hub</strong> values your privacy and is committed to protecting the personal information you share with us. This Privacy Policy explains how we collect, use, store, disclose, and safeguard your information when you visit our website, americanauthorhub.com, or use our publishing and author services.
                                </p>
                                <p class="mb-0">
                                    By using our website or submitting information to us, you acknowledge the practices described in this Privacy Policy.
                                </p>
                            </div>

                            <h2 id="collect">1. Information We Collect</h2>
                            <p>
                                We may collect personal and non-personal information when you interact with our website, request a consultation, purchase services, or communicate with our representatives.
                            </p>

                            <h3>Personal Information</h3>
                            <p>Depending on your interactions with us, we may collect:</p>
                            <ul>
                                <li>Full name</li>
                                <li>Email address and phone number</li>
                                <li>Billing address and relevant payment information</li>
                                <li>Book titles, manuscripts, outlines, and publishing requirements</li>
                                <li>Project details, preferences, and communication history</li>
                                <li>Information voluntarily submitted through website forms, email, or consultations</li>
                            </ul>

                            <h3>Automatically Collected Information</h3>
                            <p>When you access our website, certain information may be collected automatically, including:</p>
                            <ul>
                                <li>IP address and device identifiers</li>
                                <li>Browser type and operating system</li>
                                <li>Pages visited, time spent on the website, and referring URLs</li>
                                <li>Cookies, web beacons, and similar tracking technologies</li>
                            </ul>
                            <p>
                                We collect information only where relevant to our business operations, customer communications, service delivery, or other disclosed purposes.
                            </p>

                            <h2 id="use">2. How We Use Your Information</h2>
                            <p>We may use collected information to:</p>
                            <ul>
                                <li>Provide ghostwriting, editing, proofreading, formatting, cover design, publishing, printing, and marketing services.</li>
                                <li>Respond to inquiries and consultation requests.</li>
                                <li>Process orders, payments, and service agreements.</li>
                                <li>Communicate project updates, delivery timelines, and customer support.</li>
                                <li>Improve website performance, service delivery, and user experience.</li>
                                <li>Send promotional offers, newsletters, and service announcements where permitted by law.</li>
                                <li>Detect fraudulent activities and protect our systems.</li>
                                <li>Comply with applicable legal, accounting, and regulatory obligations.</li>
                            </ul>
                            <p>
                                We do not use unpublished manuscripts or confidential project materials for unrelated commercial purposes without appropriate authorization.
                            </p>

                            <h2 id="manuscripts">3. Manuscript Confidentiality and Intellectual Property</h2>
                            <p>
                                We understand that manuscripts, creative ideas, drafts, and publishing materials contain confidential and commercially valuable information.
                            </p>
                            <ul>
                                <li><strong>Protective Measures:</strong> We take reasonable administrative, technical, and physical measures to protect materials submitted by our clients.</li>
                                <li><strong>Restricted Access:</strong> Client manuscripts and project materials are accessible only to authorized personnel and contracted service providers who require access to perform their responsibilities.</li>
                                <li><strong>No Unauthorized Use:</strong> We do not publish, distribute, or commercially exploit unpublished client manuscripts without appropriate written authorization.</li>
                                <li><strong>Vendor Confidentiality:</strong> We may share project materials with assigned editors, writers, designers, or publishing partners when necessary to deliver contracted services, subject to appropriate confidentiality obligations.</li>
                                <li><strong>Ownership:</strong> Ownership and intellectual property rights relating to manuscripts, commissioned work, and final deliverables are governed by the applicable service agreement. Submitting a manuscript for evaluation or consultation does not, by itself, transfer ownership of that manuscript to American Author Hub.</li>
                            </ul>

                            <h2 id="cookies">4. Cookies and Tracking Technologies</h2>
                            <p>
                                Our website uses cookies and similar tracking technologies (such as web beacons and pixels) to improve functionality, understand visitor behavior, and support advertising activities.
                            </p>
                            <p>These technologies include:</p>
                            <ul>
                                <li><strong>Essential Cookies:</strong> Necessary for basic website functionality, navigation, and security.</li>
                                <li><strong>Analytics Cookies:</strong> Help us understand website traffic, visitor interaction, and service performance.</li>
                                <li><strong>Marketing &amp; Advertising Cookies:</strong> Used by third-party advertising partners (such as Meta and Google) to measure campaign performance and deliver relevant promotional content across other websites.</li>
                                <li><strong>Preference Cookies:</strong> Remember selected website settings and choices.</li>
                            </ul>
                            <p>
                                You may manage your cookie preferences through your web browser settings or through our website's cookie preference controls. Where required by applicable law, we obtain consent before deploying non-essential cookies.
                            </p>

                            <h2 id="disclosure">5. Information Sharing, Disclosure, and "Sale/Share" Disclosures</h2>

                            <h3>No Monetary Sale of Personal Information</h3>
                            <p>We do not sell personal information to third parties in exchange for monetary payment.</p>

                            <h3>Targeted Advertising and State Law Disclosures</h3>
                            <p>
                                Like many online businesses, we use analytics and advertising tools (such as Meta Pixel and Google Ads) that automatically collect device identifiers, IP addresses, and browsing activity. Under certain US state privacy laws—including the <strong>Texas Data Privacy and Security Act (TDPSA)</strong> and the <strong>California Consumer Privacy Act (CCPA/CPRA)</strong>—disclosing this data to third-party ad networks for targeted marketing or cross-context behavioral advertising may be defined as a <strong>"sale," "sharing,"</strong> or processing for <strong>"targeted advertising."</strong>
                            </p>

                            <h3>Categories Disclosed in the Preceding 12 Months:</h3>
                            <p>
                                We may disclose the following categories of information to trusted third parties for operational business purposes or targeted advertising:
                            </p>
                            <ul>
                                <li><strong>Identifiers:</strong> Name, email address, phone number, IP address, device ID, and cookie identifiers.</li>
                                <li><strong>Internet &amp; Network Activity:</strong> Browsing history, pages viewed, referring URLs, and website interaction data.</li>
                                <li><strong>Commercial Information:</strong> Inquiries regarding publishing packages, service selections, and transaction history.</li>
                            </ul>

                            <h3>Categories of Third Parties We Share Information With:</h3>
                            <ul>
                                <li>Payment processing networks</li>
                                <li>Website hosting, IT infrastructure, and security providers</li>
                                <li>Customer Relationship Management (CRM) and communication tools</li>
                                <li>Email marketing and SMS service platforms</li>
                                <li>Advertising and analytics networks (to measure ad performance and display relevant ads)</li>
                                <li>Contracted writers, editors, book designers, and production specialists performing requested services</li>
                                <li>Professional advisers (lawyers, accountants) and legal authorities when required by law</li>
                            </ul>
                            <p>
                                Service providers are bound by contract to handle personal information securely and use it solely for authorized business operations.
                            </p>

                            <h2 id="security">6. Payment Information and Security</h2>
                            <p>
                                Payments for publishing services are processed through secure third-party payment providers. When payments are handled by external processors, their collection, storage, and processing of payment data are governed by their respective privacy policies and PCI-DSS security standards.
                            </p>
                            <p>
                                We implement reasonable technical, physical, and administrative safeguards designed to protect personal information against unauthorized access, loss, or misuse. However, no electronic transmission or digital storage system can be guaranteed to be 100% secure.
                            </p>

                            <h2 id="opt-in">7. Email, SMS, and Marketing Communications</h2>

                            <h3>Email Marketing</h3>
                            <p>
                                When you submit an inquiry, request a quote, or purchase a service, we may contact you regarding your request or project. With your consent (where required by law), we may also send promotional emails regarding service packages and special offers. You can opt out of marketing emails at any time by clicking the "unsubscribe" link included in those messages or contacting us directly.
                            </p>

                            <h3>SMS and Text Messaging Compliance</h3>
                            <p>
                                If you opt-in to receive promotional or project update SMS text messages from American Author Hub:
                            </p>
                            <ul>
                                <li><strong>No Sharing of Mobile Data:</strong> Your mobile information, phone number, and SMS opt-in consent will <strong>not</strong> be sold, rented, or shared with third parties or affiliates for marketing or promotional purposes.</li>
                                <li><strong>Terms:</strong> Message frequency varies. Standard message and data rates may apply. Consent to receive marketing text messages is not a condition of purchasing any service.</li>
                                <li><strong>Opt-Out:</strong> You may opt out of receiving text messages at any time by replying <strong>STOP</strong> to any text message you receive from us. For help, reply <strong>HELP</strong> or contact customer support.</li>
                            </ul>
                            <p>
                                Opting out of marketing communications does not prevent us from sending transactional or service-related messages regarding active projects.
                            </p>

                            <h2 id="retention">8. Data Retention</h2>
                            <p>
                                We retain personal information only for as long as reasonably necessary to fulfill the purposes outlined in this Privacy Policy, including:
                            </p>
                            <ul>
                                <li>Delivering contracted publishing services</li>
                                <li>Maintaining project records and historical client files</li>
                                <li>Resolving disputes and fulfilling customer support needs</li>
                                <li>Meeting legal, tax, accounting, and regulatory compliance requirements</li>
                            </ul>
                            <p>
                                When personal information is no longer needed, we take reasonable steps to securely delete, anonymize, or destroy it.
                            </p>

                            <h2 id="choices">9. State-Specific Privacy Rights (Texas &amp; US Residents)</h2>
                            <p>
                                Depending on your state of residence—including <strong>Texas (under the Texas Data Privacy and Security Act - TDPSA)</strong>, California (CCPA/CPRA), Virginia, Colorado, Connecticut, Utah, and other states with comprehensive privacy legislation—you may have specific rights regarding your Personal Information:
                            </p>
                            <ul>
                                <li><strong>Right to Know / Access:</strong> Request confirmation of whether we process your personal data and access specific pieces of personal information we hold about you.</li>
                                <li><strong>Right to Delete:</strong> Request the deletion of personal information you provided or that we obtained about you, subject to legal exceptions (such as tax compliance, accounting, or record-retention requirements).</li>
                                <li><strong>Right to Correct:</strong> Request that we correct inaccuracies in your personal information, taking into account the nature and purpose of processing.</li>
                                <li><strong>Right to Opt-Out of Sale, Sharing, or Targeted Advertising:</strong> You have the right to direct us not to "sell" or "share" your personal data or process it for targeted advertising or cross-context behavioral advertising.</li>
                                <li><strong>Right to Limit Use of Sensitive Personal Information:</strong> We only collect sensitive personal information (such as billing data) necessary to fulfill requested publishing services, and we do not use or disclose sensitive personal information for targeted marketing.</li>
                                <li>
                                    <strong>Right to Appeal (Texas &amp; State Law Requirement):</strong> If we decline to take action on your privacy request, we will inform you of our decision and the underlying reason. If you reside in Texas or another applicable state, you have the right to appeal our decision by contacting us at
                                    <a class="text-danger fw-bold" href="mailto:info@americanauthorhub.com?subject=Privacy%20Appeal">info@americanauthorhub.com</a>
                                    with the subject line <em>"Privacy Appeal."</em> If your appeal is denied, we will provide information on how to contact your State Attorney General.
                                </li>
                                <li><strong>Non-Discrimination:</strong> We will not discriminate against you (such as denying services, altering quality, or charging different rates) for exercising any of your legal privacy rights.</li>
                            </ul>

                            <h3>How to Exercise Your Rights</h3>
                            <p>To submit a privacy request, opt out of targeted advertising, or file an appeal, you can:</p>
                            <ol>
                                <li><strong>Manage Cookie Settings:</strong> Click the <strong>"Do Not Sell or Share My Personal Info"</strong> or <strong>"Cookie Preferences"</strong> link in the footer of our website.</li>
                                <li><strong>Global Privacy Control (GPC):</strong> Set an automated opt-out preference signal on your browser (such as GPC). When detected, our site will apply your opt-out choices for advertising cookies.</li>
                                <li>
                                    <strong>Direct Request or Appeal:</strong> Email us directly at
                                    <a class="text-danger fw-bold" href="mailto:info@americanauthorhub.com">info@americanauthorhub.com</a>
                                    with the subject line <em>"Privacy Rights Request"</em> or <em>"Privacy Appeal"</em>.
                                </li>
                            </ol>
                            <p>We will review and respond to verifiable requests within the timeframe mandated by applicable law.</p>

                            <h2 id="external-links">10. Third-Party Websites and External Links</h2>
                            <p>
                                Our website may contain links to third-party sites, payment gateways, online bookstores, or book distribution networks. These independent platforms maintain their own privacy policies. We are not responsible for the privacy practices, content, or security of external websites, and encourage you to review their policies prior to submitting personal data.
                            </p>

                            <h2 id="children">11. Children's Privacy</h2>
                            <p>
                                Our website and services are intended for adults and are not directed toward children under 13. We do not knowingly collect personal information from children under the age of 13 without verifiable parental consent. If we become aware that personal information from a child under 13 was collected improperly, we will take immediate steps to delete it.
                            </p>
                            <p>
                                For minors aged 13 to 17, parental or legal guardian consent is required before submitting manuscripts or establishing service agreements.
                            </p>

                            <h2 id="changes">12. Changes to This Privacy Policy</h2>
                            <p>
                                We may update this Privacy Policy periodically to reflect changes in our service offerings, business practices, technology, or legal obligations. When updates occur, we will revise the "Effective Date" at the top of this policy. We encourage you to review this page periodically to stay informed about how we protect your information.
                            </p>

                            <h2 id="contact">13. Contact Us</h2>
                            <p>
                                If you have questions about this Privacy Policy, wish to exercise your privacy rights, or have concerns regarding how your information or manuscript is handled, please contact us at:
                            </p>
                            <address class="mb-0" style="font-style: normal;">
                                <strong>American Author Hub</strong><br>
                                <strong>Website:</strong>
                                <a href="https://americanauthorhub.com" class="text-danger fw-bold text-decoration-none">americanauthorhub.com</a><br>
                                <strong>Privacy Email:</strong>
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