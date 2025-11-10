@extends('frontend.layouts.app')

@section('title', 'Stripe - Payment Page')

@section('content')
<main>
    <div class="container pt-100 pb-100">
        <div class="form-section">
            <form id="stripe-form" class="p-4 shadow rounded-3 bg-white" style="max-width: 500px; margin:auto;">
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

                <!-- Submit Button with Spinner -->
                <button type="submit" id="submit" class="btn btn-primary w-100 mt-3">
                    <span id="button-text">Pay Now</span>
                    <span id="loading-spinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                </button>
            </form>
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
    });

    $("#stripe-form").on("submit", function (e) {
        e.preventDefault();

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

                            // 🔴 Loading Stop
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

                    // 🔴 Loading Stop
                    $("#submit").attr("disabled", false);
                    $("#button-text").text("Pay Now");
                    $("#loading-spinner").addClass("d-none");
                }
            },
            error: function (err) {
                console.error(err);
                alert("❌ Something went wrong!");

                // 🔴 Loading Stop
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
