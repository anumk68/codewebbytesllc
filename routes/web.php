<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');

Route::get('/best-local-seo-agency', [IndexController::class, 'bestLocalSeoAgency'])->name('best.local.seo');
Route::get('/services/best-seo-agency', [IndexController::class, 'bestSeoAgency'])->name('best.seo');
Route::get('/services/best-web-design-agency', [IndexController::class, 'bestWebDesignAgency'])->name('best.web.design');
Route::get('/web-development', [IndexController::class, 'bestWebDevelopmentAgency'])->name('best.web.dev');

Route::get('/seo-services', [IndexController::class, 'NewBestWebDevelopmentAgency'])->name('best.web.new');
Route::get('/web-developments', [IndexController::class, 'leadingDevelopments'])->name('leading.dev');

Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact');
Route::get('/content-marketing-agency', [IndexController::class, 'contentMarketingAgency'])->name('content.marketing');
Route::get('/services/ecommerce-seo-agency', [IndexController::class, 'ecommerceSeoAgency'])->name('ecommerce.seo');

// Route::get('/payment', [IndexController::class, 'payment'])->name('payment');
Route::get('/ppc-management-services', [IndexController::class, 'ppcManagementServices'])->name('ppc.management');

Route::get('/privacy-policy', [IndexController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/refund-policy', [IndexController::class, 'refundPolicy'])->name('refund.policy');
Route::get('/social-media-marketing-agency', [IndexController::class, 'socialMediaMarketingAgency'])->name('social.media.marketing');
Route::get('/terms-conditions', [IndexController::class, 'termsConditions'])->name('terms.conditions');

Route::get('/blog/Google-Ads-vs-Meta-Ads-for-Small-Businesses', [IndexController::class, 'blog_casino_zevenaar'])->name('blog.casino.zevenaar');
Route::get('/blog/Keyword-Clustering-Can-Transform-Your-Content-Marketing', [IndexController::class, 'Carousel_Be_Casino_50_Free_Spins'])->name('carousel.be.casino_50_ree.spins');
Route::get('/blog/can-local-seo-help-business-rank-higher-google-maps', [IndexController::class, 'bingo_aanbieding'])->name('bingo.aanbieding');
Route::get('/thanks', [IndexController::class, 'thanku'])->name('thanks');


Route::post('/contact-submit', [ContactController::class, 'form_submit'])->name('contact.submit');

Route::get('/payment', [StripeController::class, 'showForm'])->name('stripe.form');
Route::post('/stripe/payment-intent', [StripeController::class, 'createPaymentIntent'])->name('stripe.paymentIntent');
Route::get('/stripe/success', [StripeController::class, 'success'])->name('stripe.success');
Route::post('/stripe/payment-intent-seo', [StripeController::class, 'createPaymentIntentSeo'])->name('stripe.paymentIntent.seo');
Route::post('/stripe/updatePaymentStatus', [StripeController::class, 'updatePaymentStatus'])->name('stripe.updatePaymentStatus');
Route::post('/newsletter-subscribe', [IndexController::class, 'subscribe'])
    ->name('newsletter.subscribe');
