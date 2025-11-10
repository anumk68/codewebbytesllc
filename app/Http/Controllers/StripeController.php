<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Payment;
use App\Mail\PaymentSuccessMail;
use Illuminate\Support\Facades\Mail;

class StripeController extends Controller
{
    public function showForm()
    {
        return view('stripe');
    }

    public function createPaymentIntent(Request $request)
    {
        //dd($request->all());
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount * 100, // cents
                'currency' => strtolower($request->currency),
                'description' => 'Stripe Payment',
                'receipt_email' => $request->email,
            ]);

            return response()->json([
                'success' => true,
                'clientSecret' => $paymentIntent->client_secret
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function success()
    {
        return view('stripe-success');
    }

    // public function createPaymentIntentSeo(Request $request)
    // {
    
    //     Stripe::setApiKey(config('services.stripe.secret'));

    //     try {
    //         $paymentIntent = PaymentIntent::create([
    //             'amount' => $request->amount * 100, // cents
    //             'currency' => strtolower($request->currency),
    //             'description' => 'Stripe Payment',
    //             'receipt_email' => $request->email,
    //         ]);

    //         return response()->json([
    //             'success' => true,
    //             'clientSecret' => $paymentIntent->client_secret
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => $e->getMessage()
    //         ], 500);
    //     }
    // }

    public function createPaymentIntentSeo(Request $request)
    {
        // dd($request->all());
        // Set Stripe API key
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            // Create a PaymentIntent
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount * 100, // Convert to cents
                'currency' => strtolower($request->currency),
                'description' => 'Stripe Payment',
                'receipt_email' => $request->email,
            ]);

            // Store payment details in the database after successful creation of PaymentIntent
            $payment = Payment::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'amount' => $request->amount,
                'package' => $request->package,
                'plan' => $request->plan,
                'currency' => strtoupper($request->currency), // Save the currency in uppercase
                'payment_intent_id' => $paymentIntent->id,
                'status' => 'pending', // Initially set the status to pending
            ]);

            // Return the client secret to the frontend
            return response()->json([
                'success' => true,
                'clientSecret' => $paymentIntent->client_secret,
                'payment_id' => $payment->id, // Optionally return the saved payment ID
            ]);
        } catch (\Exception $e) {
            // Handle error and return error message
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function updatePaymentStatus(Request $request)
    {
        // Find the payment by the payment ID
        $payment = Payment::find($request->payment_id);

        if ($payment) {
            // Update the payment status to 'succeeded'
            $payment->status = $request->status;
            $payment->save();

             // Send email to the user
            Mail::to($payment->email)->send(new PaymentSuccessMail($payment));

            // Send email to the admin (info@codewebbytesllc.com)
            Mail::to('info@codewebbytesllc.com')->send(new PaymentSuccessMail($payment));

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Payment not found.'], 404);
    }

   
}
