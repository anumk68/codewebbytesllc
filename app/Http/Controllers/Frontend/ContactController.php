<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Scalar\DNumber;

class ContactController extends Controller
{
 public function form_submit(Request $request)
{
    $request->validate([
        'service'      => 'required|string|max:255',
        'website'      => 'required|url',
        'fname'        => 'required|string|max:100',
        'lname'        => 'nullable|string|max:100',
        'email'        => 'required|email|max:255',
        'countrycode'  => 'required|string|max:5',
        'number'       => 'required|digits:10',
    ]);

    Contact::create($request->all());

      Mail::to(env('MAIL_FROM_ADDRESS'))
        ->send(new ContactFormMail($request->all()));
    return response()->json([
        'message' => 'Your request has been submitted successfully!'
    ]);
}

}
