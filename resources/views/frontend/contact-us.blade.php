@extends('frontend.layouts.app')
@section('title', 'Contact Us - Code Web Bytes LLC')
@section('meta_description', 'Reach out to Code Web Bytes LLC for expert digital solutions. Connect with us today to
    grow your online presence.')
@section('content')

    <section class="about-banner text-center"
        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('public/assets/img/about.webp');">
        <div class="container">
            <h1>Contact Us
            </h1>
        </div>
    </section>


    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- LEFT: Info -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Get In Touch</h2>
                    <p class="mb-4">
                        Raring for improving your online visibility even more? Let’s get in
                        touch and see how we can partner with you in achieving your business
                        goals through tailored web solutions and professional advice. Feel free
                        to contact us any day, we would like you to succeed!
                    </p>
                    <div class="d-flex gap-3 mb-3">
                        <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <strong>Address</strong><br>
                            2501 148TH AVE SE APT F5, BELLEVUE, WA, 98007- 6434, US

                        </div>
                    </div>
                    <div class="d-flex gap-3 mb-3">

                        <div class="info-icon"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <a href="tel: +(805) 498-4719">
                                <strong>Phone</strong><br>
                                +(805) 498-4719
                            </a>
                        </div>

                    </div>
                    <div class="d-flex gap-3">

                        <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <a href="mailto:info@codewebbytesllc.com">
                                <strong>E-mail</strong><br>
                                info@codewebbytesllc.com
                            </a>
                        </div>

                    </div>
                </div>

                <!-- RIGHT: Form -->
                <div class="col-lg-6">
                    @include('frontend.form')
                </div>
            </div>
        </div>
    </section>
@endsection
