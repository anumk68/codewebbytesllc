@extends('frontend.layouts.app')
@section('title', 'Payment Success')

@section('content')
<main class="container pt-100 pb-100 text-center">
    <div class="card shadow p-5">
        <h2 class="text-success fw-bold">
            <i class="bi bi-check-circle-fill"></i> Payment Successful!
        </h2>
        <p class="mt-3">Thank you, your payment has been processed successfully.</p>

        <a href="{{ url('/') }}" class="btn btn-primary mt-4">Go to Home</a>
    </div>
</main>
@endsection
