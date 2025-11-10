@extends('frontend.layouts.app')
@section('title', 'PPC Management Services| Code Web Bytes LLC')
@section('meta_description', 'Maximize ROI with expert PPC Management Services. Code Web Bytes LLC delivers targeted
    campaigns for higher conversions and growth.')
@section('content')

    <!-- Hero -->
    <section class="hero position-relative overflow-hidden">
        <img class="hero-bg" src="{{ asset('public/assets/img/home-img.webp') }}" alt="ppc management services">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white py-5">
                    <h1 class="display-5 fw-bold">High-Impact <span class="text-accent">PPC Campaign</span> Management
                    </h1>
                    <p class="lead opacity-90">Get immediate visibility and trackable results with targeted PPC
                        campaigns—optimized for conversions on Google Ads, Bing, and other ad platforms.

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

    <!-- Get Started -->
    <section id="ppc" class="py-6">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="{{ asset('public/assets/img/ppc-ads3.webp') }}"
                        alt="best ppc marketing agency">
                </div>
                <div class="col-md-6">
                    <h2 class="heading">Professional PPC Management Services To Drive Targeted Traffic
                    </h2>
                    <p>All business sizes have Code Web Bytes LLC, which will offer PPC management services based on
                        measurable results. You found your best PPC marketing agency because we combine advanced
                        strategies with a personalized approach to ensure you reach your advertising goals efficiently
                        and affordably. Our certified PPC experts manage every aspect of your campaigns so ads get to
                        the right audience at the right time for the best possible return on investment.

                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>

                </div>

            </div>
        </div>
    </section>

    <!-- tabs -->
    <section class="py-6">
        <div class="container">
            <div class="mb-5">
                <span class="eyebrow">PPC Management</span>
                <h2 class="heading">Why Choose Code Web Bytes LLC for PPC Management?
                </h2>
                <p>When you work with Code Web Bytes LLC, you hire a company that genuinely cares about your success on
                    the web. What sets us apart is as follows:
                </p>
            </div>

            <div class="row">
                <!-- Tabs -->
                <div class="col-md-3">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item">
                            <button class="nav-link ppc-t active" id="tab1-tab" data-bs-toggle="pill"
                                data-bs-target="#tab1" type="button" role="tab">
                                Deep Understanding and Proven Strategies
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link ppc-t" id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2"
                                type="button" role="tab">
                                Economical PPC Services and Not Compromising with Quality
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link ppc-t" id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3"
                                type="button" role="tab">
                                Customized Campaigns to Align With Your Business Goals
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <p>Our team has years of experience in PPC management services, working with Google Ads,
                                Bing Ads, and other major ad platforms. We stay updated on the latest trends and
                                algorithm changes so that we can maximize your campaigns and deliver as much relevance
                                as possible. Your goal may be conversions, leads, or targeted traffic to your website—we
                                are sure our campaigns are built to perform.</p>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <p>At Code Web Bytes, we offer affordable PPC services. High-quality PPC services should be
                                achievable by small businesses and even big enterprises. Though we are one of the cheap
                                PPC service providers, we still deliver high-performance results. Our cost-effective
                                approach doesn't compromise performance but pushes you up for maximum ROI from your ad
                                spending.

                            </p>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <p>Every business is different. Our PPC management process includes an in-depth analysis of
                                your business, industry, and target audience to help create campaigns on a case-by-case
                                approach customized to meet your needs. We are confident of our data-driven approach
                                because we can focus only on what will work best for your business: optimizing ad
                                targeting, keywords, and even the bidding strategy for more effective performance.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-6 bg-soft">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">PPC Services</span>
                <h2 class="heading">Our Comprehensive PPC Services
                </h2>
                <p>Our comprehensive PPC management services involve complete campaign management. We provide the
                    following services to deliver measurable results.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-geo-alt"></i></div>
                            <h5>Keyword Research & Ad Copy Creation</h5>
                            <p>Our team creates compelling ad copy and designs that draw attention. We then vigilantly
                                monitor and optimize ads to ensure the highest possible clickthrough rate and
                                conversion.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-chart-simple"></i></div>
                            <h5>Tracking and Reporting of Performance</h5>
                            <p>We provide regular campaign reporting with clickthroughs, conversion rates, and ROI
                                generated, which helps you understand how our PPC management services benefit your
                                business.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-earth-americas"></i></div>
                            <h5>Remarketing Campaigns</h5>
                            <p>We have advanced remarketing strategies to re-engage with visitors who have already
                                visited your website and are more likely to return and convert.
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
                    <span class="eyebrow">PPC Services</span>
                    <h2 class="heading">Get PPC Management Services</h2>
                    <p>Converting Right Now</p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get A Free Quote
                    →</a>
            </div>
        </div>
    </section>
@endsection
