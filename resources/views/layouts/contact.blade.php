<section class="touch-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-head">
                        <span>Get in Touch</span>
                        <h2>We’re Here to Support You</h2>
                        <p>
                            Need expert writers to bring your ideas to life? Reach out to us and share your project details. 
                            Our skilled team will craft compelling content with creativity and precision, ensuring excellence 
                            and complete satisfaction every step of the way.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-1">
                    <div class="touc-sec-form">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" maxlength="30" required placeholder="Enter Your Name*">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" required placeholder="Enter Your Email*">
                                </div>
                                <div class="col-md-12">
                                    <input type="tel" name="phone" required placeholder="Phone Number*" minlength="9" maxlength="12">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Enter Message Here"></textarea>
                                </div>
                            </div>
                        
                            <div class="form-group text-dark pt-3">
                                <input type="checkbox" class="required" name="policy_check" id="policy_check" required
                                    style="width: fit-content !important;height: auto !important;">
                                By providing my contact information, I agree to receive text messages, calls, and emails
                                from American Author Hub .
                            </div>
                            <div class="form-group text-dark">
                                <input type="checkbox" class="required" name="terms_policy" id="terms_policy" required
                                    style="width: fit-content !important;height: auto !important;">
                                I have read the <a href="terms-conditions" class="text-danger">Terms & Conditions</a>
                                and <a href="privacy-policy" class="text-danger">Privacy Policy</a>.
                            </div>
                        
                            <button type="submit" name="sendmail">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
