@extends('frontend.layouts.app')
@section('title', 'Best SEO Agency​ | Affordable SEO Services | Code Web Bytes')
@section('meta_description',
    'Get top rankings with the Best SEO Agency. Want affordable SEO services? Choose Code Web Bytes for proven online
    growth. Get free website audit now!')
@section('content')

    <!-- Hero -->
    <section class="hero position-relative overflow-hidden">
        <img class="hero-bg" src="{{ asset('public/assets/img/home-img.webp') }}" alt="affordable seo services">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white py-5">

                    <h1 class="display-5 fw-bold">Leading <span class="text-accent">SEO Services</span> for
                        Maximum Visibility</h1>
                    <p class="lead opacity-90">Improve your search rankings
                        and online visibility with effective SEO strategies
                        that bring high-quality traffic and enhance your
                        reach across top search engines. </p>
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

    <section class="py-6 seo ">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">Best SEO Agency</span>
                <h2 class="heading">Best SEO Agency: Unlock Your Brand's
                    Potential with Organic SEO
                </h2>
                <p>At CodeWebBytes LLC, we are proud to be the best SEO
                    agency dedicated to helping your business succeed. From
                    a startup to an established brand, our affordable SEO
                    services come packed with what you need. We specialize
                    in organic SEO services at CodeWebBytes LLC, from
                    long-term growth enhancing your online presence to
                    driving targeted traffic. Our well-proven strategies
                    improve your search engine rankings, enhance website
                    visibility, and ensure sustainable results that convert
                    visitors into loyal customers. With our knowledge, you
                    unlock your brand’s potential and realize measurable
                    success in today’s aggressive digital playing field.

                </p>
            </div>
        </div>
    </section>

    <!-- Best SEO Agency -->
    <section id="services" class="py-6 bg-soft">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">Why Choose Us</span>
                <h2 class="heading">Why Choose Us as Your Organic SEO
                    Services Company?</h2>
                <p>We are known for quality, reliable, organic SEO services.
                    We ensure long-term success by only using sustainable
                    and ethical methods that can help increase your online
                    presence and web rankings without shortcuts or paid
                    advertisements. Here’s why your business can trust us as
                    your organic SEO services provider:

                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-geo-alt"></i></div>
                            <h5>Customized SEO Strategies</h5>
                            <p>We believe in personalized approaches for
                                every single client. Our experts will
                                closely work with you and know your
                                business, target audience, goals, and more.
                                With that, we'll create custom SEO
                                strategies to deliver measurable results.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-chart-simple"></i></div>
                            <h5>Affordable SEO Services with Big
                                Results</h5>
                            <p>In no way do you have to break the bank to
                                receive excellent SEO results. Because of
                                our affordable SEO services, there is always
                                the best value for your investment. Whether
                                it is local SEO, technical SEO, or content
                                optimization, we ensure that your brand
                                reaches the right audience at the right
                                time, all within your budget.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="fa-solid fa-earth-americas"></i></div>
                            <h5>Expertise in Organic SEO</h5>
                            <p>We will focus on organic and sustainable
                                growth modes that gradually build your
                                brand's authority and credibility. Organic
                                SEO, unlike paid advertising, has the
                                potential to offer long-term benefits for
                                your rankings through optimized content,
                                linkbacks, and a host of on-page SEO
                                practices.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-megaphone"></i></div>
                            <h5>Proven Track Record of Success</h5>
                            <p>Among the leading SEO firms, we have moved
                                hundreds of businesses forward with our
                                strategic SEO campaigns. We make your
                                customers watch their search rankings
                                improve and more website traffic and
                                conversions. Success is measured by seeing
                                results for our clients, so we work hard to
                                bring that about.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-file-earmark-bar-graph"></i></div>
                            <h5>In-depth SEO Audit and Keyword Research
                            </h5>
                            <p>Our team conducts a deep audit for technical
                                issues and growth opportunities. We do vast
                                keyword research to ensure that we are
                                targeting the most relevant, profitable
                                keywords to your industry and organic
                                traffic that converts.

                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Best SEO Agency -->


    <section class="py-6 seo">
        <div class="container">
            <div class="mb-5">
                <span class="eyebrow">Best SEO Agency</span>
                <h2 class="heading">Why You Should Invest in SEO Services?

                </h2>
                <p>SEO is essential in the present digital world for businesses to thrive online. Not only does
                    investing in SEO services improve the visibility of your website, but It also uniquely positions
                    your brand to magnetize and connect with a broader audience! Let's explore compelling reasons why
                    investing in SEO is a fantastic opportunity for your business growth!</p>
            </div>

            <div class="row">
                <!-- Tabs -->
                <div class="col-md-3">
                    <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <li class="nav-item">
                            <button class="nav-link active" id="tab1-tab" data-bs-toggle="pill" data-bs-target="#tab1"
                                type="button" role="tab">
                                Visibility on the First Page Matters
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2"
                                type="button" role="tab">
                                Increased Brand Awareness
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3"
                                type="button" role="tab">
                                Increased Domain Authority
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <p>About 75% of users do not scroll down to other pages of a search engine result.
                                Visibility on Google's first page could be better; it's vital in reaching your audience
                                and being competitive in your market.</p>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <p>Proper SEO always works to increase brand awareness, attract a larger audience, and be
                                more visible in your industry. All this leads to increased trust and a strengthened
                                brand presence over the Internet.</p>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <p>Though, for example, quality backlinks build your website's domain authority and profile
                                regarding SEO efforts, this is supposed to prove that it is a brand to be trusted on
                                anything about the niche. Good domain authority implies better ranks in a broader array
                                of keywords.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Get Started -->
    <section id="get-start" class="pb-5">
        <div class="container">
            <div class="row g-4 align-items-center">

                <div class="col-md-6">

                    <h2 class="heading">Get Started with the Best SEO Agency
                    </h2>
                    <p>Do you want positive, measurable, long-term results from affordable SEO services? Organic SEO
                        improves your website’s visibility and attracts high-quality traffic, further helping to
                        escalate brand authority in a specific industry. Based on your business goals, our customized
                        strategies ensure that your site ranks higher and converts more visitors into loyal customers.

                    </p>
                    <p>Start your way to the top of search results and chat with us today, ensuring that CodeWebBytes
                        LLC is the one to help you achieve sustainable growth and online success.

                    </p>


                </div>
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="{{ asset('public/assets/img/figure5.webp') }}"
                        alt="organic seo services​">
                </div>
            </div>
        </div>
    </section>

@endsection
