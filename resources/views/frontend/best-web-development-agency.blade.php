@extends('frontend.layouts.app')
@section('title', 'Best Web Development Agency​ | Code Web Bytes LLC')
@section('meta_description', 'Transform your online presence with the Best Web Development Agency. Code Web Bytes LLC
    builds fast, modern, and responsive websites.')
@section('content')
    <!-- Hero -->
    <section class="hero position-relative overflow-hidden">
        <img class="hero-bg" src="{{ asset('public/assets/img/rwmizqk9zgetg5wh5hce.webp') }}"
            alt="best web development agency​">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white py-5">
                    <h1 class="display-5 fw-bold">Custom <span class="text-accent">Web Development</span>
                        Solutions</h1>
                    <p class="lead opacity-90">We develop fast, secure, and
                        scalable websites that meet your business
                        requirements—providing an optimal user experience on
                        every device and platform.</p>
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
                        src="{{ asset('public/assets/img/medium-shot-woman-working-laptop-min-1024x683-1.webp') }}"
                        alt="website development services">
                </div>
                <div class="col-md-6">
                    <h2 class="heading">Code Web Bytes LLC. The Best Web
                        Development Agency and Custom Web Development
                        Solutions
                    </h2>
                    <p>We are more than one of the best web development
                        agencies- we are passionate about building online
                        solutions that help businesses connect and grow. As
                        one of the best web development agencies worldwide,
                        we always combine creativity, technology, and
                        strategy to develop a website that accurately
                        relates to the brand and delivers tangible results.
                        As a company built to provide services for startups,
                        small businesses, and already established
                        enterprises, we have a custom approach to ensure
                        your website is built to engage, convert, and scale
                        your business.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- tabs -->
    <section class="py-6 pt-0">
        <div class="container">
            <div class="mb-5">
                <span class="eyebrow">Web Development</span>
                <h2 class="heading">Why Choose Code Web Bytes LLC for Web
                    Development Services?
                </h2>
                <p>Code Web Bytes LLC is a full-service website development
                    agency that understands that every company has different
                    goals, challenges, and audiences. Here's how we make a
                    difference:

                </p>
            </div>

            <div class="row">
                <!-- Tabs -->
                <div class="col-md-3">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item">
                            <button class="nav-link ppc-t active" id="tab1-tab" data-bs-toggle="pill"
                                data-bs-target="#tab1" type="button" role="tab">
                                Experienced Team with Proven Results
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link ppc-t" id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2"
                                type="button" role="tab">
                                Customized Approach to Web Development
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link ppc-t" id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3"
                                type="button" role="tab">
                                Responsive, SEO-Friendly Websites
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <p>Our developers, designers, and strategists
                                have successfully delivered sites in various
                                industry markets. Some of the tools our team
                                employs to build stunning sites that look
                                great but mostly perform superbly include
                                deep technical knowledge and creative flair.

                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <p>Through our custom website development
                                services, we cater to every client's
                                specific needs. From concept to launch, we
                                work with you to ensure that every feature,
                                design element, and function is in line with
                                your brand and business goals.

                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <p>Each site we design is fully responsive, so
                                your site will look stellar on every device.
                                We also implement our designs according to
                                SEO best practice guidelines to establish
                                and enhance visibility across search engines
                                from day one.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tabs -->

    <!-- Get Started end-->

    <section id="Web-d" class="py-6 pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ asset('public/assets/img/which-development-job-is-right-for-you.jpg') }}"
                        alt="custom website development services">
                </div>
                <div class="col-md-6">

                    <h2 class="heading">Get Started with Custom Website
                        Development Services Today!

                    </h2>
                    <p>Ready to take your online presence to a new level and
                        connect to your audience through a website that
                        speaks to your brand? Code Web Bytes LLC offers
                        custom development services in website building,
                        catering to specific business requirements and
                        goals. We are here to assist you right from the
                        first discussion and get the vision executed-
                        focused on making the perfect website unique in
                        today’s market competition.Their approach to design
                        goes beyond just the looks, as they will be
                        concerned with how user-friendly, fully functional,
                        and responsive a website could be. Coding each site
                        to increase its performance, security, and
                        scalability ensures your new, revamped website will
                        do it all. Years of experience in quality work are
                        behind Code Web Bytes LLC, holding them ready to
                        make a digital experience grow with your business.

                    </p>
                    <p>Not a one-size-fits-all solution, but a website
                        tailored to your needs and aspirations. Contact us
                        today and see how our custom website development
                        services can be leveraged to support your business
                        goals and materialize an enduring presence online.
                        Together, let’s build success.

                    </p>

                </div>

            </div>
        </div>
    </section>
@endsection
