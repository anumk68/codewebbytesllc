@extends('frontend.layouts.app')
@section('title', 'Content Marketing Agency | Content Marketing | Code Web Bytes')
@section('meta_description', 'Grow your brand with the Best Content Marketing Agency. Drive engagement and results with
    Code Web Bytes’ expert Content Marketing services.')
@section('content')
    <!-- Hero -->
    <section class="hero position-relative overflow-hidden">
        <img class="hero-bg" src="{{ asset('public/assets/img/media-marketing-internet-digital-global-min1-scaled-1.webp') }}"
            alt="content marketing services">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white py-5">
                    <h1 class="display-5 fw-bold">Results-Driven <span class="text-accent"> Content Marketing</span>
                        Solutions</h1>
                    <p class="lead opacity-90">We develop effective content
                        strategies that inform, interact, and convert your
                        audience—establishing brand authority and driving
                        long-term digital success. </p>
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

                <h2 class="heading">Content Marketing Agency: Amplify Your
                    Brand's Voice and Reach

                </h2>
                <p>For this, we at Code Web Bytes LLC realize that the
                    content is indeed king. As a top content marketing
                    agency, we design bespoke content strategies that
                    resonate with your target audiences. With all that comes
                    in video, blog posts, infographics, and social media
                    content, our team is committed to high-quality content
                    marketing services to enhance engagement and increase
                    brand loyalty.

                </p>
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
                        src="{{ asset('public/assets/img/media-journalism-global-daily-news-content-concept-min-1-1024x674-1.webp') }}"
                        alt="seo and content marketing services">
                </div>
                <div class="col-md-6">

                    <h2 class="heading">Explore the Depth of Our Content
                        Marketing Agency

                    </h2>
                    <p>For this, we at Code Web Bytes LLC realize that the
                        content is indeed king. As a top content marketing
                        agency, we design bespoke content strategies that
                        resonate with your target audiences. With all that
                        comes in video, blog posts, infographics, and social
                        media content, our team is committed to high-quality
                        content marketing services to enhance engagement and
                        increase brand loyalty.
                    </p>
                    <p>Our content marketing services will be more than
                        article or blog post writing. We understand your
                        target market to have every piece of content
                        directly talk to the needs and interests of your
                        target market. From your blog content to social
                        media posts and email newsletters to video
                        marketing, we ensure your message flows seamlessly
                        across all channels.

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

                    <h2 class="heading">Get Started with the Content
                        Marketing Agency at Code Web Bytes

                    </h2>
                    <p>Want to increase your online presence and encourage
                        meaningful engagement with your audience?
                        CodeWebBytes LLC can help your business achieve
                        sustainable success through targeted content
                        strategies. From quality content development to
                        search engine optimization and distribution to the
                        correct audience, we will take care of every facet
                        of your content marketing so that you may recover
                        ROI from it.

                    </p>
                    <p>Let’s collaborate to create attractive, impactful
                        content that will drive traffic, increase brand
                        visibility, and help you reach your business goals.
                        Contact us to see how our content marketing agency
                        can help drive your business forward.

                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                        A Free Quote →</a>

                </div>

                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ asset('public/assets/img/social-media-marketing-concept-marketing-with-applications-1-min-1-2048x1365-1.webp') }}"
                        alt="content marketing agency">
                </div>

            </div>
        </div>
    </section>

    <!--Why Choose  end  -->

    <!-- Our Approach to end-->

    <!-- Best SEO Agency -->
    <section id="services" class="py-6 bg-soft">
        <div class="container">
            <div class="text-center mb-5">

                <h2 class="heading">What's We Included in Our Content
                    Marketing Solutions

                </h2>
                <p>At CodeWebBytes LLC, our content marketing services offer
                    solutions that prove effective and result-driven. Here
                    is what we offer you upon forming a partnership with us:

                </p>

            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-chart-pie"></i></div>
                            <h5>Online Content Marketing Strategy
                                Creation</h5>
                            <p>We help create unique online content. Using
                                market trends and performance excellence
                                beyond your business, we ensure that your
                                plan is effective, impactful, and drives
                                constant traffic and engagement.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-chart-simple"></i></div>
                            <h5>Audience Analysis</h5>
                            <p>Given their preferences, behaviors, and
                                needs, understanding the target audience is
                                crucial for connecting with the writing
                                audience. Therefore, better engagement and
                                higher conversion rates are attained.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-credit-card"></i></div>
                            <h5>ontent Publication & Distribution

                            </h5>
                            <p>Then, we enhance this production by
                                publishing and distributing it on relevant
                                channels. Whether on your website, social
                                media, or third-party platforms, we ensure
                                that each piece of content touches vast
                                audiences and generates maximum visibility.

                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-rocket"></i></div>
                            <h5>
                                Syndication & Repurposing of Content

                            </h5>
                            <p>We syndicate and repurpose your content for
                                the maximum value-add, meaning it will be
                                spread across different platforms and
                                re-skinned differently to continue driving
                                traffic and carrying value long after you
                                post it.

                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-lightbulb"></i></div>
                            <h5>
                                Content Analysis

                            </h5>
                            <p>

                                We can determine the effectiveness of
                                content through thorough content analysis.
                                We monitor crucial metrics such as
                                engagement, traffic, and conversions to
                                evaluate performance and identify areas for
                                optimization, continuously improving and
                                maximizing ROI.</p>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-bullseye"></i></div>
                            <h5>

                                Content Creation

                            </h5>
                            <p>Our professional content developers create
                                excellent, high-quality, engaging content
                                that aligns with your brand's voice. Various
                                formats include blog posts, articles,
                                videos, and infographics to keep your
                                audience interested in your work while
                                reinforcing your online presence.

                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
