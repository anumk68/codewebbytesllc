<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $payment;

    // Pass the payment data into the mailable
    public function __construct($payment)
    {
        $this->payment = $payment;
    }

    public function build()
    {
        return $this->subject('Payment Successful')
                    ->view('frontend.emails.payment-success')  // View for the email content
                    ->with([
                        'first_name' => $this->payment->first_name,
                        'last_name' => $this->payment->last_name,
                        'package' => $this->payment->package,
                        'plan' => $this->payment->plan,
                        'amount' => $this->payment->amount,
                        'currency' => $this->payment->currency,
                    ]);
    }
}
