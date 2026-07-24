@extends('layouts.app')

@section('title', 'Secure Checkout - ' . $package['name'] . ' | American Author Hub')

@section('content')
<section class="checkout-section py-5 bg-light-gradient">
    <div class="container py-4">
        
        <!-- Header -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <span class="checkout-badge mb-2">
                    <i class="fa-solid fa-lock text-success me-1"></i> SECURE SSL CHECKOUT
                </span>
                <h1 class="fw-extrabold mt-2 mb-2 text-navy text-center" style="font-size: 34px;">
                    Complete Your <span class="gradient-text">Order</span>
                </h1>
                <p class="text-muted mx-auto" style="max-width: 580px; font-size: 14.5px;">
                    Fill in your billing details below to start your self-publishing journey with our premium support.
                </p>
            </div>
        </div>

        <div class="row g-5">
            
            <!-- Left Column: Payment Form -->
            <div class="col-lg-7 order-2 order-lg-1">
                
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4 rounded-3 p-3" role="alert">
                        <i class="fa-solid fa-circle-exclamation me-2"></i> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm mb-4 rounded-3 p-3" role="alert">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="checkout-card p-4 p-md-5">
                    <form action="{{ route('payment.process') }}" method="POST" id="payment-form">
                        @csrf
                        <input type="hidden" name="package_slug" value="{{ $package['slug'] }}">

                        <!-- Billing Information -->
                        <h4 class="form-section-title text-navy mb-4">
                            <span class="step-num">1</span> Client Information
                        </h4>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-12">
                                <label for="client_name" class="form-label font-semibold">Full Name *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-user text-muted"></i></span>
                                    <input type="text" name="client_name" id="client_name" class="form-control" placeholder="e.g. John Doe" value="{{ old('client_name') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="client_email" class="form-label font-semibold">Email Address *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope text-muted"></i></span>
                                    <input type="email" name="client_email" id="client_email" class="form-control" placeholder="e.g. john@example.com" value="{{ old('client_email') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="client_phone" class="form-label font-semibold">Phone Number *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-phone text-muted"></i></span>
                                    <input type="tel" name="client_phone" id="client_phone" class="form-control" placeholder="e.g. +1 (555) 000-0000" value="{{ old('client_phone') }}" required>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <label for="project_notes" class="form-label font-semibold">Project Notes / Specifications <span class="text-muted">(Optional)</span></label>
                                <textarea name="project_notes" id="project_notes" class="form-control" rows="4" placeholder="Tell us more about your book, specific goals, genre, or timeline..." style="resize: none;">{{ old('project_notes') }}</textarea>
                            </div>
                        </div>

                        <!-- Card Information -->
                        <h4 class="form-section-title text-navy mb-4">
                            <span class="step-num">2</span> Payment Details
                        </h4>

                        <div class="mb-4">
                            <label class="form-label font-semibold">Credit or Debit Card *</label>
                            
                            <!-- Stripe card input -->
                            <div class="card-element-wrapper p-3">
                                <div id="card-element">
                                    <!-- Stripe Elements placeholder -->
                                </div>
                            </div>

                            <!-- Validation error output -->
                            <div id="card-errors" class="invalid-feedback mt-2" role="alert"></div>
                        </div>

                        <!-- Safety disclaimer -->
                        <div class="payment-security-disclaimer d-flex align-items-center mb-4 p-3 rounded-3">
                            <i class="fa-solid fa-shield-halved text-success me-3 fs-4"></i>
                            <span class="small text-muted">
                                Your payment is encrypted using SSL technology. Card data is sent directly to Stripe secure servers and is never saved on our database.
                            </span>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-100 btn-submit-pay p-3 border-0 rounded-3 text-white fw-bold transition" id="submit-pay-button">
                            <span id="btn-spinner" class="spinner-border spinner-border-sm me-2" role="status" style="display: none;"></span>
                            <span id="btn-text">Pay ${{ number_format($package['price'], 2) }} Securely</span>
                        </button>

                    </form>
                </div>
            </div>

            <!-- Right Column: Order Summary -->
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="summary-card p-4 rounded-4 sticky-top-offset">
                    
                    <!-- Selected Package Info -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="summary-subtitle text-uppercase font-bold" style="color: {{ $package['accent'] }}">{{ $package['subtitle'] }}</span>
                        <span class="summary-badge px-3 py-1 rounded-pill text-white font-bold" style="background-color: {{ $package['accent'] }}; font-size: 10px;">SELECTED</span>
                    </div>

                    <h3 class="summary-title text-navy mb-2 font-extrabold">{{ $package['name'] }}</h3>
                    <p class="text-muted small mb-4">{{ $package['description'] }}</p>

                    <div class="summary-price-box p-3 rounded-3 mb-4 d-flex align-items-center justify-content-between">
                        <div>
                            <span class="text-decoration-line-through text-muted small">${{ $package['discount'] }}</span>
                            <div class="d-flex align-items-baseline mt-1 text-navy">
                                <span class="currency-symbol">$</span>
                                <span class="price-big">{{ $package['price'] }}</span>
                                <span class="price-period">/ package</span>
                            </div>
                        </div>
                        <div class="text-end">
                            <span class="discount-pill px-3 py-2 text-success font-bold rounded-3">
                                Save ${{ $package['discount'] - $package['price'] }}
                            </span>
                        </div>
                    </div>

                    <div class="summary-divider mb-4"></div>

                    <!-- Package Features Checklist -->
                    <h5 class="text-navy font-bold mb-3">What's included in this plan:</h5>
                    <ul class="summary-checklist mb-4">
                        @foreach($package['features'] as $feature)
                            <li class="mb-2">
                                <i class="fa-solid fa-circle-check me-2" style="color: {{ $package['accent'] }};"></i>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="summary-divider mb-4"></div>

                    <!-- Guarantees / Trust badging -->
                    <div class="trust-guarantees-grid">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle text-success me-3"><i class="fa-solid fa-circle-check"></i></div>
                            <div>
                                <h6 class="mb-0 text-navy font-bold">100% Royalties Guarantee</h6>
                                <span class="small text-muted">Keep all rights and earnings.</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon-circle text-success me-3"><i class="fa-solid fa-rotate-left"></i></div>
                            <div>
                                <h6 class="mb-0 text-navy font-bold">100% Satisfaction Policy</h6>
                                <span class="small text-muted">Unlimited revisions on covers & formats.</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Stripe Script and Client Validations -->
<script src="https://js.stripe.com/v3/"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize Stripe Elements
        const stripe = Stripe("{{ $stripeKey }}");
        const elements = stripe.elements();

        // Custom styling for elements card field
        const style = {
            base: {
                color: "#1e293b",
                fontFamily: '"Segoe UI", -apple-system, BlinkMacSystemFont, Roboto, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                    color: "#94a3b8"
                }
            },
            invalid: {
                color: "#9F0B07",
                iconColor: "#9F0B07"
            }
        };

        // Create Card elements
        const card = elements.create("card", { style: style, hidePostalCode: true });
        card.mount("#card-element");

        // Validate on-the-fly
        card.on('change', function (event) {
            const displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
                displayError.classList.add('d-block');
            } else {
                displayError.textContent = '';
                displayError.classList.remove('d-block');
            }
        });

        // Intercept form submissions
        const form = document.getElementById('payment-form');
        const submitBtn = document.getElementById('submit-pay-button');
        const btnSpinner = document.getElementById('btn-spinner');
        const btnText = document.getElementById('btn-text');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            // Disable pay button to avoid double submits
            submitBtn.disabled = true;
            btnSpinner.style.display = 'inline-block';
            btnText.textContent = 'Verifying Details...';

            stripe.createToken(card).then(function (result) {
                if (result.error) {
                    // Re-enable and show error
                    const errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                    errorElement.classList.add('d-block');

                    submitBtn.disabled = false;
                    btnSpinner.style.display = 'none';
                    btnText.textContent = 'Pay ${{ number_format($package['price'], 2) }} Securely';
                } else {
                    btnText.textContent = 'Charging Card...';
                    // Append Stripe token value into hidden input and submit
                    const hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);

                    form.submit();
                }
            });
        });
    });
</script>

<style>
    .checkout-section {
        background: radial-gradient(100% 100% at 50% 0%, #ffffff 0%, #f4f7fb 100%);
        min-height: calc(100vh - 100px);
        font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
    }

    .checkout-badge {
        display: inline-flex;
        align-items: center;
        background: rgba(25, 135, 84, 0.08);
        color: #198754;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.2px;
        padding: 5px 14px;
        border-radius: 20px;
        border: 1px solid rgba(25, 135, 84, 0.12);
    }

    .gradient-text {
        background: linear-gradient(135deg, #9F0B07 0%, #002768 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .checkout-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 39, 104, 0.03);
        border: 1px solid rgba(0, 39, 104, 0.06);
    }

    .form-section-title {
        font-size: 18px;
        font-weight: 800;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .step-num {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        background-color: rgba(159, 11, 7, 0.1);
        color: #9F0B07;
        border-radius: 50%;
        font-size: 13px;
        font-weight: 700;
    }

    .form-label {
        font-size: 13px;
        color: #475569;
        margin-bottom: 6px;
    }

    .font-semibold {
        font-weight: 600;
    }

    .input-group-text {
        background-color: #f8fafc;
        border-color: #cbd5e1;
        color: #64748b;
    }

    .form-control {
        border-color: #cbd5e1;
        padding: 11px 14px;
        font-size: 14.5px;
        color: #1e293b;
        border-radius: 8px;
    }

    .form-control:focus {
        border-color: #002768;
        box-shadow: 0 0 0 3px rgba(0, 39, 104, 0.1);
    }

    .card-element-wrapper {
        border: 1.5px solid #cbd5e1;
        border-radius: 8px;
        background-color: #ffffff;
        transition: border-color 0.2s ease;
    }

    .card-element-wrapper:focus-within {
        border-color: #002768;
        box-shadow: 0 0 0 3px rgba(0, 39, 104, 0.1);
    }

    .payment-security-disclaimer {
        background-color: #f8fafc;
        border: 1px solid #e2e8f0;
    }

    .btn-submit-pay {
        background: linear-gradient(135deg, #9F0B07 0%, #002768 100%);
        box-shadow: 0 6px 20px rgba(0, 39, 104, 0.2);
        font-size: 16px;
    }

    .btn-submit-pay:hover {
        background: linear-gradient(135deg, #002768 0%, #9F0B07 100%);
        box-shadow: 0 8px 25px rgba(0, 39, 104, 0.3);
        transform: translateY(-2px);
    }

    .btn-submit-pay:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    /* Summary Card Styles */
    .summary-card {
        background: #ffffff;
        border: 1px solid rgba(0, 39, 104, 0.08);
        box-shadow: 0 8px 25px rgba(0, 39, 104, 0.02);
        padding: 30px !important;
    }

    .sticky-top-offset {
        position: sticky;
        top: 30px;
    }

    .summary-subtitle {
        font-size: 11px;
        letter-spacing: 1px;
    }

    .summary-title {
        font-size: 24px;
    }

    .summary-price-box {
        background-color: #f8fafc;
        border: 1px solid #f1f5f9;
    }

    .currency-symbol {
        font-size: 18px;
        font-weight: 700;
        margin-right: 2px;
        align-self: flex-start;
        margin-top: 3px;
    }

    .price-big {
        font-size: 34px;
        font-weight: 900;
        line-height: 1;
    }

    .price-period {
        font-size: 12px;
        color: #64748b;
        font-weight: 500;
        margin-left: 4px;
    }

    .discount-pill {
        background-color: rgba(25, 135, 84, 0.08);
        font-size: 12px;
    }

    .summary-divider {
        height: 1px;
        background-color: #f1f5f9;
    }

    .summary-checklist {
        list-style: none;
        padding-left: 0;
    }

    .summary-checklist li {
        font-size: 13.5px;
        color: #334155;
        display: flex;
        align-items: flex-start;
        line-height: 1.4;
    }

    .summary-checklist li i {
        margin-top: 3px;
        font-size: 14px;
        flex-shrink: 0;
    }

    .icon-circle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: rgba(25, 135, 84, 0.08);
        color: #198754;
        font-size: 15px;
        flex-shrink: 0;
    }

    .text-navy {
        color: #002768 !important;
    }

    .font-bold {
        font-weight: 700;
    }

    .font-extrabold {
        font-weight: 800;
    }

    .fw-extrabold {
        font-weight: 900;
    }

    .transition {
        transition: all 0.25s ease-in-out;
    }

    @media (max-width: 991px) {
        .sticky-top-offset {
            position: static;
        }
    }
</style>
@endsection
