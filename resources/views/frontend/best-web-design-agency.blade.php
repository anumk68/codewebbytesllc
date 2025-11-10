@extends('frontend.layouts.app')
@section('title', 'Best Website Design Agency | Code Web Bytes LLC')
@section('meta_description', 'Enhance your brand with the Best Website Design Agency. Code Web Bytes LLC creates
    stunning, user-friendly, and responsive websites.')
@section('content')
    <!-- Hero -->
    <section class="hero position-relative overflow-hidden">
        <img class="hero-bg" src="{{ asset('public/assets/img/acklcfdguobazqkf7wjf.webp') }}" alt="best website design agency">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white py-5">
                    <h1 class="display-5 fw-bold">Engaging <span class="text-accent">Web Design</span> Services
                    </h1>
                    <p class="lead opacity-90">Our cutting-edge, responsive
                        designs engage your audience, maximize user
                        interaction, and showcase your brand identity</p>
                    <p>—fostering engagement and establishing trust.</p>
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
                        src="{{ asset('public/assets/img/geenahe35qwgm4tyvwri.webp') }}"
                        alt="affordable web design services">
                </div>
                <div class="col-md-6">

                    <h2 class="heading">Your Best Web Design Company that
                        Provides Customized Web Designing Solutions

                    </h2>
                    <p>Here at Code Web Bytes, we will create a website that
                        can fit into your brand identity. Our team of
                        seasoned designers and developers work together with
                        you to come up with a website that’s unique and
                        user-friendly, catering to your target audience and
                        result-converting. From graphical designs to smooth
                        functionality, we ensure that every detail of your
                        website reflects who you are. Our custom web design
                        services will make you get that new design or
                        completely overhauled web design, just for you and
                        to make your online presence even better.

                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>

                </div>

            </div>
        </div>
    </section>
    <!--  -->
    <!-- Get Started -->
    <section id="ppc" class="py-6 pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">

                <div class="col-md-6">

                    <h2 class="heading">Responsive Web Design Agency to Help
                        You Create Your Ideal Website

                    </h2>
                    <p>Code Web Bytes stands as the number one firm in India
                        to create responsive web design. With fully-fledged
                        local designers at service, our customized web
                        designs and web developments come promised by budget
                        friendliness along with no compromise in the matter
                        of quality.

                    </p>
                    <p>We pride ourselves on providing superb value at a low
                        cost, which is why, at the low-cost web design
                        company, we give an edge in your website with our
                        experienced team of designers and budget-friendly
                        solutions for any competitive digital marketplace by
                        simply having a website that truly stands out. Hire
                        web designers or any other needs to acquire India’s
                        finest services for website design and development?
                        Let’s get on a discussion on how we can help you
                        navigate along the road to successful success in the
                        online marketplace.

                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>

                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ asset('public/assets/img/mfvn8cjpxp4xll42obpk.webp') }}" alt="custom web design services">
                </div>

            </div>
        </div>
    </section>

    <!-- Get Started -->
    <section id="ppc" class="py-6 pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ asset('public/assets/img/ahtwcva5c79jeyinmrh6.webp') }}" alt="best website design agency">
                </div>
                <div class="col-md-6">

                    <h2 class="heading">Why Do You Need a Creative Landing
                        Page Design?</h2>
                    <p>A creative landing page design is all about getting
                        people’s attention as well as driving conversion.
                        Your brand’s personality or the values it stands
                        behind reveal its first impression with its
                        visitors. So a good landing page can really put your
                        offering in such a form in front of people who can
                        clearly understand what it has in store for a value
                        proposition for you.

                    </p>
                    <p>Creativity does not only enhance user experience but
                        also leads the visitors through a clear, appealing
                        journey. This implies an increase in engagement,
                        decreases bounce rates, and even more conversions.
                        Being successful in a competitive digital scenario
                        comes down to stand-apart landing pages, and how
                        eye-catching they can be while still being
                        functional.

                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>

                </div>

            </div>
        </div>
    </section>
    <!--  -->

    <!-- Get Started end-->

    <section id="ppc" class="py-6 pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">

                <div class="col-md-12">
                    <h2 class="heading">Expect All Designing Solutions from
                        Our Web Designing Agency</h2>

                    <ul class="list-unstyled vstack gap-2">
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>We
                            carry out projects with an exclusive design that
                            sets you apart from the competition.

                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>We
                            write well-studied content aimed at the target
                            audience.

                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>We
                            use Digital Marketing and Advertising techniques
                            to attract more and guide the user towards
                            conversion.

                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>We
                            position the web in the top positions of Google
                            and perform its maintenance.

                        </li>

                    </ul>

                </div>

            </div>
        </div>
    </section>
@endsection
