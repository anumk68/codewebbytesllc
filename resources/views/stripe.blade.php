@extends('frontend.layouts.app')

@section('title', 'Stripe - Payment Page')

@section('content')
<main>
    <div class="container pt-100 pb-100">
        <div class="form-section">
            <form id="stripe-form" class="p-4 shadow rounded-3 bg-white" style="max-width: 580px; margin:auto;">
                @csrf
                <h4 class="mb-4 text-center fw-bold text-primary">
                    <i class="bi bi-credit-card"></i> Pay with Stripe
                </h4>

                <!-- First Name -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter your first name" required>
                </div>

                <!-- Last Name -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" required>
                </div>

                <!-- Currency Select -->
                <div class="mb-3">
                    <label class="form-label fw-semibold"><i class="bi bi-cash-coin"></i> Select Currency</label>
                    <select class="form-select" id="currency" name="currency" required>
                        <option value="USD" selected>USD - US Dollar</option>
                        <option value="GBP">GBP - British Pound</option>
                        <option value="CAD">CAD - Canadian Dollar</option>
                    </select>
                </div>

                <!-- Amount Input -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Amount</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light fw-bold" id="currency-symbol">USD $</span>
                        <input type="number" class="form-control" name="amount" min="1" placeholder="Enter amount" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                </div>

                <!-- Stripe Card Element -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Card Details</label>
                    <div id="card-element" class="stripe-card-element"></div>
                    <div id="card-errors" role="alert" class="text-danger mt-2"></div>
                </div>

                <!-- Terms & Policies -->
                <div class="mt-4">
                    <h6 class="fw-bold">Terms & Policies</h6>
                    <p class="small text-muted">
                        By proceeding with this payment, you agree to our 
                        <a href="{{ route('terms.conditions') }}" target="_blank">Terms & Conditions</a>, 
                        <a href="{{ route('privacy.policy') }}" target="_blank">Privacy Policy</a>, 
                        and <a href="{{ route('refund.policy') }}" target="_blank">Refund Policy</a>.
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="accept-terms" required>
                        <label class="form-check-label small" for="accept-terms">
                            I have read and accept the Terms & Conditions.
                        </label>
                    </div>
                </div>

                <!-- Service / Delivery Information -->
                <!--<div class="mt-4">-->
                <!--    <h6 class="fw-bold">Service Delivery</h6>-->
                <!--    <p class="small text-muted mb-0">-->
                <!--        Upon successful payment, you will receive an email confirmation immediately.-->
                <!--        Digital support or service activation occurs within 24 hours. -->
                <!--        No physical products are shipped.-->
                <!--    </p>-->
                <!--</div>-->

                <!-- Submit Button with Spinner -->
                <button type="submit" id="submit" class="btn btn-primary w-100 mt-4">
                    <span id="button-text">Pay Now</span>
                    <span id="loading-spinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                </button>

                <!-- SSL Badge -->
                <div class="text-center mt-4">
                    <img src="{{ asset('public/assets/img/22.png') }}" alt="SSL Secure" width="100">
                    <p class="small text-muted">This payment page is SSL secured (128-bit encryption).</p>
                </div>

                <!-- Review Notice -->
                <p class="text-muted small mt-3 text-center">
                    Please review your details carefully before completing the payment. 
                    You may cancel anytime before confirmation.
                </p>
            </form>

            <!-- Business & Contact Information -->
              <!-- Business & Contact Information -->
            <!--<div class="mt-5 p-4 bg-light rounded-3 text-center">-->
            <!--    <h5 class="fw-bold text-primary">Business Information</h5>-->
            <!--    <p class="mb-1 fw-semibold">Code Web Bytes LLC</p>-->
            <!--    <p class="mb-1">Application Number: OLA 111419823</p>-->
            <!--    <p class="mb-1">Office Address: 2501 148TH AVE SE APT G11, BELLEVUE, WA, 98007-6434, US</p>-->
            <!--    <p class="mb-1">Phone: +1 (805) 498-4719</p>-->
            <!--    <p class="mb-1">Email: info@codewebbytesllc.com</p>-->
            <!--    <p class="mb-1">Country of Origin: United States</p>-->
            <!--    <p class="mb-0">All transactions are processed in the selected currency (<span id="currency-display">USD</span>).</p>-->

            <!--    <div class="mt-3">-->
            <!--        <img src="{{ asset('public/assets/img/33.png') }}" alt="Visa" width="50">-->
            <!--        <img src="{{ asset('public/assets/img/44.png') }}" alt="Mastercard" width="50">-->
            <!--        <img src="{{ asset('public/assets/img/66.png') }}" alt="Amex" width="50">-->
            <!--    </div>-->

            <!--    <p class="text-center text-muted small mt-4 mb-0">-->
            <!--        Website hosted securely by -->
            <!--        <a href="https://www.hostinger.com" target="_blank">Hostinger</a>.-->
            <!--    </p>-->
            <!--</div>-->
        </div>
    </div>
</main>
@endsection

{{-- Stripe & jQuery --}}
<script src="https://js.stripe.com/v3/"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    var stripe = Stripe("{{ config('services.stripe.key') }}");
    var elements = stripe.elements();
    var card = elements.create('card', { style: { base: { fontSize: '16px', color: '#32325d' } } });
    card.mount('#card-element');

    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    const currencySymbols = { USD: "USD $", GBP: "GBP £", CAD: "CAD $" };
    $("#currency").on("change", function () {
        let selectedCurrency = $(this).val();
        $("#currency-symbol").text(currencySymbols[selectedCurrency]);
        $("#currency-display").text(selectedCurrency);
    });

    $("#stripe-form").on("submit", function (e) {
        e.preventDefault();

        // Check Terms Accepted
        if (!$("#accept-terms").is(":checked")) {
            alert("Please accept the Terms & Conditions before proceeding.");
            return;
        }

        // 🔵 Loading Start
        $("#submit").attr("disabled", true);
        $("#button-text").text("Processing...");
        $("#loading-spinner").removeClass("d-none");

        let form = $(this);
        let formData = form.serialize();

        $.ajax({
            url: "{{ route('stripe.paymentIntent') }}",
            method: "POST",
            data: formData,
            headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" },
            success: function (response) {
                if (response.success) {
                    stripe.confirmCardPayment(response.clientSecret, {
                        payment_method: {
                            card: card,
                            billing_details: {
                                name: $("input[name=first_name]").val() + " " + $("input[name=last_name]").val(),
                                email: $("input[name=email]").val(),
                            }
                        }
                    }).then(function (result) {
                        if (result.error) {
                            $("#card-errors").text(result.error.message);
                            $("#submit").attr("disabled", false);
                            $("#button-text").text("Pay Now");
                            $("#loading-spinner").addClass("d-none");
                        } else {
                            if (result.paymentIntent.status === 'succeeded') {
                                window.location.href = "{{ route('stripe.success') }}";
                            }
                        }
                    });
                } else {
                    alert("⚠️ Backend error: " + response.message);
                    $("#submit").attr("disabled", false);
                    $("#button-text").text("Pay Now");
                    $("#loading-spinner").addClass("d-none");
                }
            },
            error: function (err) {
                console.error(err);
                alert("❌ Something went wrong!");
                $("#submit").attr("disabled", false);
                $("#button-text").text("Pay Now");
                $("#loading-spinner").addClass("d-none");
            }
        });
    });
});
</script>

<style>
.stripe-card-element {
    border: 1px solid #ced4da;
    border-radius: 10px;
    padding: 12px;
    background: #fff;
    height: 50px;
}
.StripeElement {
    width: 100%;
    font-size: 16px;
    color: #495057;
}
.StripeElement--focus {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(128, 189, 255, 0.5);
}
.StripeElement--invalid {
    border-color: #e3342f;
}
</style>
