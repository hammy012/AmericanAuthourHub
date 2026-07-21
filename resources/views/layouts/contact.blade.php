<section class="py-5 bg-light position-relative" id="contact">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            
            <!-- Left Side Content -->
            <div class="col-lg-5">
                <span class="text-uppercase text-danger fw-bold small tracking-wider">GET IN TOUCH</span>
                <h2 class="display-6 fw-bold text-dark mt-2 mb-3">
                    We’re Here to <span class="text-danger">Support You</span>
                </h2>
                <p class="text-muted leading-relaxed mb-4">
                    Need expert writers to bring your ideas to life? Reach out to us and share your project details. 
                    Our skilled team will craft compelling content with creativity and precision, ensuring excellence 
                    and complete satisfaction every step of the way.
                </p>

                <!-- Check Badges -->
                <div class="d-flex flex-wrap gap-4 pt-2">
                    <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger"></i>
                        <span class="fw-semibold text-dark small">Fast Response</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger"></i>
                        <span class="fw-semibold text-dark small">100% Confidential</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="fa-solid fa-circle-check text-danger"></i>
                        <span class="fw-semibold text-dark small">Expert Guidance</span>
                    </div>
                </div>
            </div>

            <!-- Right Side Form -->
            <div class="col-lg-7">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-light">
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="name" maxlength="30" required placeholder="Enter Your Name*" class="form-control form-control-lg bg-light border-0 fs-6">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" required placeholder="Enter Your Email*" class="form-control form-control-lg bg-light border-0 fs-6">
                            </div>
                            <div class="col-md-12">
                                <input type="tel" name="phone" required placeholder="Phone Number*" minlength="9" maxlength="12" class="form-control form-control-lg bg-light border-0 fs-6">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" placeholder="Enter Message Here" class="form-control bg-light border-0 fs-6" rows="4"></textarea>
                            </div>
                        </div>

                        <div class="form-check pt-3 small text-muted">
                            <input class="form-check-input" type="checkbox" name="policy_check" id="policy_check" required>
                            <label class="form-check-label" for="policy_check">
                                I agree to the <a href="{{ url('terms-conditions') }}" class="text-danger">Terms & Conditions</a> and <a href="{{ url('privacy-policy') }}" class="text-danger">Privacy Policy</a>.
                            </label>
                        </div>

                        <button type="submit" name="sendmail" class="btn-red-pill w-100 mt-4 py-3 fs-6">
                            <i class="fa-solid fa-paper-plane me-1"></i> Submit Inquiry
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
