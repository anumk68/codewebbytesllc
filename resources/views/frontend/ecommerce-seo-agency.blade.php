@extends('frontend.layouts.app')
@section('title', 'Ecommerce SEO Agency | Ecommerce SEO | Code Web Bytes')
@section('meta_description', 'Boost your online store with the Best Ecommerce SEO Agency. Achieve top rankings with Code
    Web Bytes’ Ecommerce SEO services. Book free consultation now!')
@section('content')

    <!-- Hero -->
    <section class="hero position-relative overflow-hidden">
        <img class="hero-bg"
            src="{{ asset('public/assets/img/showing-cart-trolley-shopping-online-sign-graphic-3-min-scaled-1.webp') }}"
            alt="ecommerce seo agency">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white py-5">
                    <h1 class="display-5 fw-bold"><span class="text-accent">E-Commerce SEO</span> That Drive leads </h1>
                    <p class="lead opacity-90">Drive more traffic, visibility, and conversions to your online store with
                        expert e-commerce SEO solutions designed for competitive industries and product-based
                        businesses.
                    </p>
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

    <!-- Best E-commerce -->
    <section class="py-6">
        <div class="container">
            <div class="text-center mb-5">

                <h2 class="heading">The Best E-commerce SEO Agency

                </h2>
                <p>eCommerce is competitive, and proper SEO strategy is required to maneuver through it. Code Web Bytes
                    offers specialized eCommerce SEO services that maximize visibility, attract qualified traffic, and
                    drive conversions for online stores. Our team is a leading eCommerce SEO agency with extensive
                    experience and proven success in helping businesses succeed.</p>
            </div>
        </div>
    </section>

    <!-- Best E-commerce end -->


    <!-- Get Started -->
    <section id="ecommerce" class="py-6 pt-0">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ 'public/assets/img/e-commerce-online-shopping-plant-sale-min-1024x846-1.webp' }}"
                        alt="ecommerce seo services">
                </div>
                <div class="col-md-6">

                    <h2 class="heading">Why Your Online Store Should Have E-commerce SEO
                    </h2>
                    <p>Effective e-commerce search engine optimization ensures that the right people find the best
                        products; therefore, it is effective for stores to rank up in relevant search results by
                        attracting massive traffic and, thus, sales, but it optimizes for more than keywords, helping
                        improve on product page optimization, structures of website, and making it so that pages do not
                        overload. Investing in a professional E-commerce SEO service keeps you ahead while maximizing
                        your brand’s authority; this increases your chances of converting. It is way better than the
                        super-dense web.


                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>

                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose  -->
    <section id="ppc" class="py-6">
        <div class="container">
            <div class="row g-4 align-items-center">

                <div class="col-md-6">
                    <h2 class="heading">How Our eCommerce SEO Agency Will Work Business

                    </h2>
                    <p>Our eCommerce SEO services will bring you complete visibility and traffic to attract the right
                        customers. This increases conversion to an even higher level as every minute detail is done and
                        executed through search trend strategies, with the targeted approach intent buyers to finally
                        fine-tune each small detail within the structure and pages on your website. Our services
                        emphasize measurable results by increasing traffic, enhancing brand credibility, and fostering
                        customer loyalty. This strategy will give your business a competitive edge in today’s crowded
                        digital marketplace.



                    </p>

                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>

                </div>

                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ asset('public/assets/img/digital-tablet-paper-craft-1-min-2048x1367-1.webp') }}"
                        alt="best ecommerce seo agency">
                </div>

            </div>
        </div>
    </section>

    <!--Why Choose  end  -->




    <!-- Our Approach to end-->

    <section class="py-6 pt-0">
        <div class="container">
            <div class="mb-5">

                <h2 class="heading">We have focused on high-traffic keywords and optimized product pages to rank at the
                    top of search results.
                </h2>

            </div>

            <div class="row">
                <!-- Tabs -->
                <div class="col-md-3">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item">
                            <button class="nav-link ppc-t active" id="tab1-tab" data-bs-toggle="pill"
                                data-bs-target="#tab1" type="button" role="tab">
                                Increased Traffic & Conversion Rates
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link ppc-t" id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2"
                                type="button" role="tab">
                                Optimized User Experience
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link ppc-t" id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3"
                                type="button" role="tab">
                                Trusted Brand Authority
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <p>We help convert visitors into paying customers with the right audience so you increase
                                your ROI.


                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <p>Our technical SEO improvements, such as fast load times and mobile compatibility, make
                                for seamless customer shopping experiences.



                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <p>We will build a reputation for your brand through efficient SEO and content strategies,
                                building trust in the eyes of customers and search engines.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tabs -->

    <!-- Our Approach to end-->

    <!-- Best SEO Agency -->
    <section id="services" class="py-6 bg-soft">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="heading">Unlock the Power of E-commerce SEO for Your Online Store</h2>

            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-thumbs-up"></i></div>
                            <h5>eCommerce SEO Keyword Strategy</h5>
                            <p>Pinpoint impactful keywords that will draw in the relevant audience to your site for
                                eCommerce, so it receives valuable conversion-ready traffic.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-chart-simple"></i></div>
                            <h5>Optimized On-page SEO
                            </h5>
                            <p>Most e-commerce sites lack depth in their content. We assist you in optimizing and
                                augmenting your site's on-page SEO strategy and adding depth by strategizing your
                                visibility.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-desktop"></i></div>
                            <h5>Technical SEO for eCommerce

                            </h5>
                            <p>We have sharpened both the latent and explicit portions of your site, whether it is the
                                title tag, the meta description, or a thousand other tiny fine-tunings that the search
                                engines examine.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-address-book"></i></div>
                            <h5>Off-site SEO Strategy
                            </h5>
                            <p>We would surely increase the credibility and reputation of your store. Therefore, this
                                increases your keyword ranking and facilitates growing your brand online.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best SEO Agency -->

    <section id="get-start" class="pb-5">
        <div class="container">
            <div class="get-offer text-center">
                <div class="text-center mb-5">

                    <h2 class="heading">E-commerce SEO Agency Essentials for E-commerce Business
                    </h2>
                    <p>An eCommerce SEO agency can make your online store shine above the rest. Code Web Bytes
                        specializes in creating unique SEO strategies and using targeted keywords to enhance the quality
                        of your content and work on technical performance for the best outcome. Our competence ensures
                        you get more visitors, increase sales, and build up authority for your brand. Are you ready to
                        take your online business to the next level? Contact Code Web Bytes today and begin growing your
                        eCommerce store.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                    a Free Consultant
                    →</a>
            </div>
        </div>
    </section>
@endsection
