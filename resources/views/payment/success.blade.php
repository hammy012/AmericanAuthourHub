@extends('layouts.app')

@section('title', 'Payment Successful | American Author Hub')
@section('meta_description', 'Your order with American Author Hub has been completed successfully.')
@section('robots', 'noindex, follow')

@section('content')
<section class="success-section py-5 d-flex align-items-center bg-light-gradient">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                
                <!-- Micro-animated checkmark container -->
                <div class="success-icon-wrapper mb-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="success-checkmark">
                        <div class="check-icon">
                            <span class="icon-line line-tip"></span>
                            <span class="icon-line line-long"></span>
                            <div class="icon-circle"></div>
                            <div class="icon-fix"></div>
                        </div>
                    </div>
                </div>

                <h1 class="fw-extrabold mt-3 mb-2 text-navy" style="font-size: 32px;">
                    Payment <span class="gradient-text">Successful!</span>
                </h1>
                <p class="text-muted mx-auto mb-5" style="max-width: 520px; font-size: 15px;">
                    Thank you for choosing American Author Hub. Your payment has been processed securely, and a notification has been sent to our publishing directors.
                </p>

                <!-- Order Receipt Card -->
                <div class="receipt-card text-start p-4 p-md-5 mb-4 rounded-4 shadow-sm">
                    <h4 class="receipt-title text-navy mb-4 font-bold border-bottom pb-3">
                        <i class="fa-solid fa-receipt me-2 text-muted"></i> Order Summary
                    </h4>

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <span class="receipt-label">Client Name</span>
                            <p class="receipt-value font-bold text-navy mb-0">{{ $orderDetails['client_name'] }}</p>
                        </div>
                        
                        <div class="col-sm-6">
                            <span class="receipt-label">Email Address</span>
                            <p class="receipt-value mb-0">{{ $orderDetails['client_email'] }}</p>
                        </div>

                        <div class="col-sm-6">
                            <span class="receipt-label">Contact Phone</span>
                            <p class="receipt-value mb-0">{{ $orderDetails['client_phone'] }}</p>
                        </div>

                        <div class="col-sm-6">
                            <span class="receipt-label">Selected Package</span>
                            <p class="receipt-value font-bold text-brand-red mb-0">{{ $orderDetails['package_name'] }}</p>
                        </div>

                        <div class="col-sm-6">
                            <span class="receipt-label">Stripe Charge ID</span>
                            <p class="receipt-value text-break mb-0"><code>{{ $orderDetails['charge_id'] }}</code></p>
                        </div>

                        <div class="col-sm-6">
                            <span class="receipt-label">Amount Paid</span>
                            <p class="receipt-value mb-0"><span class="success-price-tag">${{ number_format($orderDetails['amount'], 2) }} USD</span></p>
                        </div>
                    </div>
                </div>

                <!-- Next steps box -->
                <div class="next-steps-card p-4 text-start rounded-4 mb-5">
                    <h5 class="text-navy font-bold mb-3"><i class="fa-solid fa-circle-info text-primary me-2"></i> What happens next?</h5>
                    <ol class="next-steps-list mb-0 ps-3">
                        <li class="mb-2">An onboarding confirmation email has been dispatched to <strong>{{ $orderDetails['client_email'] }}</strong>.</li>
                        <li class="mb-2">Our publishing director will review your project details and contact you via email or phone within the next 12-24 hours.</li>
                        <li>We'll schedule an introductory brief session to align on the outline and start working on your book cover layout, editing, or proofreading.</li>
                    </ol>
                </div>

                <!-- Action buttons -->
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('home') }}" class="btn-navy-solid px-4 py-3 rounded-3 text-white text-decoration-none font-bold shadow-sm transition">
                        <i class="fa-solid fa-house me-2"></i> Return to Homepage
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .success-section {
        background: radial-gradient(100% 100% at 50% 0%, #ffffff 0%, #f4f7fb 100%);
        min-height: calc(100vh - 100px);
        font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
    }

    .gradient-text {
        background: linear-gradient(135deg, #9F0B07 0%, #002768 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* Animated Checkmark CSS */
    .success-icon-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .success-checkmark {
        width: 80px;
        height: 80px;
    }
    
    .success-checkmark .check-icon {
        width: 80px;
        height: 80px;
        position: relative;
        border-radius: 50%;
        box-sizing: content-box;
        border: 4px solid #4CAF50;
    }
    
    .success-checkmark .check-icon::before {
        top: 3px;
        left: -2px;
        width: 30px;
        transform-origin: 100% 50%;
        border-radius: 100px 0 0 100px;
    }
    
    .success-checkmark .check-icon::after {
        top: 0;
        left: 30px;
        width: 60px;
        transform-origin: 0 50%;
        border-radius: 0 100px 100px 0;
    }
    
    .success-checkmark .check-icon .icon-line {
        height: 5px;
        background-color: #4CAF50;
        display: block;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
    }
    
    .success-checkmark .check-icon .icon-line.line-tip {
        top: 46px;
        left: 14px;
        width: 25px;
        transform: rotate(45deg);
        animation: icon-line-tip 0.75s;
    }
    
    .success-checkmark .check-icon .icon-line.line-long {
        top: 38px;
        right: 8px;
        width: 47px;
        transform: rotate(-45deg);
        animation: icon-line-long 0.75s;
    }
    
    .success-checkmark .check-icon .icon-circle {
        top: -4px;
        left: -4px;
        z-index: 10;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 4px solid rgba(76, 175, 80, 0.5);
        box-sizing: content-box;
        position: absolute;
    }
    
    .success-checkmark .check-icon .icon-fix {
        top: 8px;
        width: 5px;
        left: 26px;
        z-index: 1;
        height: 85px;
        position: absolute;
        transform: rotate(-45deg);
    }
    
    @keyframes icon-line-tip {
        0% {
            width: 0;
            left: 1px;
            top: 19px;
        }
        54% {
            width: 0;
            left: 1px;
            top: 19px;
        }
        70% {
            width: 50px;
            left: -8px;
            top: 37px;
        }
        84% {
            width: 17px;
            left: 21px;
            top: 48px;
        }
        100% {
            width: 25px;
            left: 14px;
            top: 46px;
        }
    }
    
    @keyframes icon-line-long {
        0% {
            width: 0;
            right: 46px;
            top: 54px;
        }
        65% {
            width: 0;
            right: 46px;
            top: 54px;
        }
        84% {
            width: 55px;
            right: 0px;
            top: 35px;
        }
        100% {
            width: 47px;
            right: 8px;
            top: 38px;
        }
    }

    /* Receipt card styling */
    .receipt-card {
        background: #ffffff;
        border: 1px solid rgba(0, 39, 104, 0.08);
        box-shadow: 0 4px 20px rgba(0, 39, 104, 0.02);
    }

    .receipt-title {
        font-size: 18px;
    }

    .receipt-label {
        display: block;
        font-size: 11.5px;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        color: #64748b;
        font-weight: 600;
        margin-bottom: 3px;
    }

    .receipt-value {
        font-size: 15px;
        color: #334155;
    }

    .success-price-tag {
        background-color: rgba(25, 135, 84, 0.1);
        color: #198754;
        padding: 4px 10px;
        border-radius: 6px;
        font-weight: 700;
        display: inline-block;
        font-size: 14px;
    }

    /* Next Steps Card styling */
    .next-steps-card {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-left: 5px solid #002768;
    }

    .next-steps-list {
        font-size: 14px;
        color: #475569;
        line-height: 1.6;
    }

    .text-navy {
        color: #002768 !important;
    }

    .text-brand-red {
        color: #9F0B07 !important;
    }

    .font-bold {
        font-weight: 700;
    }

    .fw-extrabold {
        font-weight: 900;
    }

    .btn-navy-solid {
        background: #002768;
        border: none;
    }

    .btn-navy-solid:hover {
        background: #9F0B07;
        box-shadow: 0 6px 20px rgba(159, 11, 7, 0.2);
        transform: translateY(-2px);
    }

    .transition {
        transition: all 0.25s ease-in-out;
    }
</style>
@endsection
