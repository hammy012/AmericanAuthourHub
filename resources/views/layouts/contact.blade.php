<section class="touch-sec py-5 section-white" id="contact">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-md-5" data-aos="fade-right">
                    <div class="banner-head">
                        <span class="gradient-badge mb-2"><i class="fa-solid fa-paper-plane text-danger me-1"></i> Get in Touch</span>
                        <h2 class="fw-bold display-6 mt-2 mb-3">We’re Here to <span class="gradient-text">Support You</span></h2>
                        <p class="text-muted fs-6 leading-relaxed">
                            Need expert writers to bring your ideas to life? Reach out to us and share your project details. 
                            Our skilled team will craft compelling content with creativity and precision, ensuring excellence 
                            and complete satisfaction every step of the way.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1" data-aos="fade-left" data-aos-delay="200">
                    <div class="touc-sec-form custom-card p-4">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="name" maxlength="30" required placeholder="Enter Your Name*" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" required placeholder="Enter Your Email*" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <input type="tel" name="phone" required placeholder="Phone Number*" minlength="9" maxlength="12" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Enter Message Here" class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        
                            <div class="form-group text-dark pt-3 small">
                                <input type="checkbox" class="required me-1" name="policy_check" id="policy_check" required
                                    style="width: fit-content !important;height: auto !important;">
                                By providing my contact information, I agree to receive text messages, calls, and emails
                                from American Author Hub.
                            </div>
                            <div class="form-group text-dark small">
                                <input type="checkbox" class="required me-1" name="terms_policy" id="terms_policy" required
                                    style="width: fit-content !important;height: auto !important;">
                                I have read the <a href="{{ url('terms-conditions') }}" class="text-danger fw-bold">Terms & Conditions</a>
                                and <a href="{{ url('privacy-policy') }}" class="text-danger fw-bold">Privacy Policy</a>.
                            </div>
                        
                            <button type="submit" name="sendmail" class="btn-gradient-primary w-100 mt-3 py-3 fs-6"><i class="fa-solid fa-paper-plane me-2"></i> Submit Inquiry</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
