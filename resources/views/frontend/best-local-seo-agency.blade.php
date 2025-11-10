@extends('frontend.layouts.app')
@section('title', 'Best Local SEO Agency | Local SEO | Code Web Bytes')
@section('title', 'Get found faster with the Best Local SEO Agency. Want to boost local leads? Code Web Bytes delivers
    trusted Local SEO services. Get free website audit now!')
@section('content')

    <section class="hero position-relative overflow-hidden">
        <img class="hero-bg" src="{{ asset('public/assets/img/local-h.webp') }}" alt="organic seo services company">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white py-5">
                    <h1 class="display-5 fw-bold">Experts in <span class="text-accent">Local SEO</span> for Geo-Based
                        Growth</h1>
                    <p class="lead opacity-90">Gain dominance over local search with geo-targeted SEO methods that boost
                        your visibility in front of nearby, buy-ready shoppers and generate actual foot traffic or local
                        leads. </p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>
                </div>
                <div class="col-lg-6">
                    @include('frontend.form')
                </div>
            </div>
        </div>
    </section>
    <!-- Hero end-->

    <!-- Get Started -->
    <section id="ppc" class="py-6">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ asset('public/assets/img/side-view-woman-holding-smartphone-min-1024x768-1.webp') }}"
                        alt="best local seo services">
                </div>
                <div class="col-md-6">
                    <h2 class="heading">Boost Your Local Presence with the Best Local SEO Agency
                    </h2>
                    <p>In the present day, it is imperative to have a local presence that aids in acquiring customers
                        who are close to your business and are already looking for services like yours. Having been duly
                        rated as the best local SEO agency near me, we have the right experience, proven techniques, and
                        the latest tactics to ensure your business is on top of local search results. We’re providing
                        localized SEO solutions, but it’s far more than clicks; we bring real customers in through
                        doors.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-6 " style="background-color: antiquewhite;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="heading">Real-Time Results with the Best Local SEO Agency
                </h2>
                <p>It is more than just strategic planning to reach the top ranks. For domination of the competition,
                    real-time adjustments are needed. This is what the best local SEO agency can do. Real-time insights
                    and data-driven adjustments are provided to make your business stay ahead. This local SEO agency is
                    capable of dynamic strategies, and such strategies not only boost the visibility of the site but
                    also ensure consistent rankings due to the constant shift in search trends and algorithms.
                </p>
            </div>
        </div>
    </section>

    <!-- Why Choose  -->
    <section id="ppc" class="py-6">
        <div class="container">
            <div class="row g-4 align-items-center">

                <div class="col-md-6">
                    <p>See How Our SEO Solutions Deliver Instant Results. We observe the campaign continuously and
                        adjust to the latest data. A close monitoring of performance metrics is in place, which means
                        that every effort funneled into your precise business goals
                    </p>
                    <ul class="list-unstyled vstack gap-2">
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Real-Time Keyword Optimization for
                            Maximum Local Reach
                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Continuous On-Page and Profile
                            Enhancements
                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Transparent, Up-to-the-Minute Reporting
                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Adaptable Geo-Targeted Strategies for
                            Better Results

                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Ongoing Profile and Content Optimization

                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>

                </div>

                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ asset('public/assets/img/3d-view-map-1-min-scaled-1.webp') }}"
                        alt="white label local seo services">
                </div>

            </div>
        </div>
    </section>

    <section id="get-start" class="pb-5">
        <div class="container">
            <div class="get-offer text-center">
                <div class="text-center mb-5">

                    <h2 class="heading">Unlock Top Local Rankings with the Best Local SEO Agency

                    </h2>
                    <p>Start Growing Your Business Today!

                    </p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                    a Free Consultant
                    →</a>
            </div>
        </div>
    </section>
@endsection
