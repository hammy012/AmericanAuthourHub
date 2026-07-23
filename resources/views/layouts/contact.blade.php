<section class="contact-section-premium" id="contact">
    <div class="contact-dot-pattern"></div>
    <div class="container">

        <!-- Section Header -->
        <div class="banner-head" data-aos="fade-up">
            <span>
                <i class="fa-solid fa-feather-pointed"></i> CONTACT US <i class="fa-solid fa-feather-pointed"></i>
            </span>
            <h2>Let's Work <span class="text-brand-red">Together</span></h2>
            <p class="testi-sub text-muted">
                Have a question or ready to get started? We'd love to hear from you.
            </p>
        </div>

        <div class="row g-5 align-items-center mt-2">

            <!-- Left Column: Info list & privacy -->
            <div class="col-lg-5" data-aos="fade-right" data-aos-duration="900">
                <div class="contact-left-wrapper">
                    <h3 class="contact-left-title">Get In Touch</h3>
                    <p class="contact-left-text">
                        Our team is here to help you at every step of your publishing journey.
                    </p>

                    <!-- Contact Details List -->
                    <div class="contact-info-list">

                        <!-- Email -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon-box">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact-info-details">
                                <span class="contact-info-label">Email Us</span>
                                <a href="mailto:info@americanauthorhub.com" class="contact-info-value">
                                    info@americanauthorhub.com
                                </a>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="contact-info-details">
                                <span class="contact-info-label">Call Us</span>
                                <a href="tel:+13463476046" class="contact-info-value">
                                    +1 (346) 347-6046
                                </a>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="contact-info-item">
                            <div class="contact-info-icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contact-info-details">
                                <span class="contact-info-label">Our Location</span>
                                <span class="contact-info-value">
                                    15155 Richmond Ave, Houston, TX 77082, USA
                                </span>
                            </div>
                        </div>

                    </div>

                    <!-- Privacy card -->
                    <div class="contact-privacy-card">
                        <div class="contact-privacy-icon-box">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="contact-privacy-content">
                            <h5 class="contact-privacy-title">Your Privacy Matters</h5>
                            <p class="contact-privacy-text">
                                We respect your privacy. Your information is safe with us and will never be shared.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Form Card -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="900">
                <div class="contact-premium-form-card">

                    <!-- Form Card Header -->
                    <div class="contact-form-header">
                        <div class="contact-form-header-icon">
                            <i class="fa-solid fa-paper-plane"></i>
                        </div>
                        <div class="contact-form-header-text">
                            <h4 class="contact-form-header-title">Send Us a Message</h4>
                            <p class="contact-form-header-subtitle">Fill out the form below and we'll get back to you
                                soon.</p>
                        </div>
                    </div>

                    <!-- Form Content -->
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <!-- Name Field -->
                        <div class="form-group-custom">
                            <label for="name">Name</label>
                            <div class="input-icon-wrapper">
                                <input type="text" id="name" name="name" maxlength="100" required
                                    placeholder="Your Name" class="form-control">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Email Field -->
                            <div class="col-md-6">
                                <div class="form-group-custom">
                                    <label for="email">Email</label>
                                    <div class="input-icon-wrapper">
                                        <input type="email" id="email" name="email" required placeholder="Your Email"
                                            class="form-control">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Phone Field -->
                            <div class="col-md-6">
                                <div class="form-group-custom">
                                    <label for="phone">Phone Number</label>
                                    <div class="input-icon-wrapper">
                                        <input type="tel" id="phone" name="phone" required
                                            placeholder="Your Phone Number" class="form-control">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div class="form-group-custom">
                            <label for="message">Message</label>
                            <div class="input-icon-wrapper">
                                <textarea id="message" name="message" placeholder="Your Message" class="form-control"
                                    rows="4" required></textarea>
                                <i class="fa-solid fa-pen textarea-icon"></i>
                            </div>
                        </div>

                        <!-- Legal Checkboxes Stack (Small & Subtle to comply with Controller validation) -->
                        <div class="row pt-2 pb-1 small text-muted">
                            <div class="col-md-6 mb-2 mb-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="policy_check"
                                        id="policy_check" checked required>
                                    <label class="form-check-label" for="policy_check"
                                        style="font-size:12.5px; cursor:pointer;">
                                        I agree to the <a href="{{ url('privacy-policy') }}"
                                            class="text-danger fw-semibold">Privacy Policy</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms_policy"
                                        id="terms_policy" checked required>
                                    <label class="form-check-label" for="terms_policy"
                                        style="font-size:12.5px; cursor:pointer;">
                                        I agree to the <a href="{{ url('terms-conditions') }}"
                                            class="text-danger fw-semibold">Terms & Conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-contact-submit">
                            <i class="fa-solid fa-paper-plane"></i> Send Message
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>