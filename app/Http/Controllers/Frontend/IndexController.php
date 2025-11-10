<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function bestLocalSeoAgency()
    {
        return view('frontend.best-local-seo-agency');
    }

    public function bestSeoAgency()
    {
        return view('frontend.best-seo-agency');
    }

    public function bestWebDesignAgency()
    {
        return view('frontend.best-web-design-agency');
    }

    public function bestWebDevelopmentAgency()
    {
        return view('frontend.best-web-development-agency');
    }
    
    public function NewBestWebDevelopmentAgency()
    {
        return view('frontend.best-leading');
    }

    public function leadingDevelopments()
    {
        return view('frontend.web-develoment-leading');
    }

    public function blog()
    {
        return view('frontend.blog');
    }


    public function blog_casino_zevenaar()
    {
        return view('frontend.Google-Ads-vs-Meta-Ads-for-Small-Businesses');
    }
    public function Carousel_Be_Casino_50_Free_Spins()
    {
        return view('frontend.Keyword-Clustering-Can-Transform-Your-Content-Marketing');
    }
    public function bingo_aanbieding()
    {
        return view('frontend.can-local-seo-help-business-rank-higher-google-maps');
    }

    public function contact()
    {
        return view('frontend.contact-us');
    }

    public function contentMarketingAgency()
    {
        return view('frontend.content-marketing-agency');
    }

    public function ecommerceSeoAgency()
    {
        return view('frontend.ecommerce-seo-agency');
    }

    // public function payment() {
    //     return view('frontend.payment');
    // }

    public function ppcManagementServices()
    {
        return view('frontend.ppc-management-services');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function refundPolicy()
    {
        return view('frontend.refund-policy');
    }

    public function socialMediaMarketingAgency()
    {
        return view('frontend.social-media-marketing-agency');
    }

    public function termsConditions()
    {
        return view('frontend.terms-conditions');
    }
    public function thanku()
    {
        return view('frontend.thanks');
    }


      public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        try {
            // Send email to admin
            $adminEmail = 'hardeepsingh.digirush@gmail.com'; 
            $userEmail = $request->email;

            $data = [
                'email' => $userEmail,
                'subject' => 'New Newsletter Subscription',
            ];

            Mail::send('frontend.emails.newsletter_admin', $data, function ($message) use ($data, $adminEmail) {
                $message->to($adminEmail)
                        ->subject($data['subject']);
            });

            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Failed to send email.']);
        }
    }
}
