@extends('frontend.layouts.app')
@section('title', 'Best Digital Marketing Agency | Web Development Agency')
@section('meta_description',
    'Boost your business with the best digital marketing & web development agency Code Web Bytes. Drive growth, leads and
    online success.')
@section('content')
 
    <!-- Hero -->
    <section class="hero position-relative overflow-hidden">
        <img class="hero-bg" src="{{ asset('public/assets/img/home-img.webp') }}" alt="best web development agency">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white py-5">
                    <p class="badge rounded-pill text-bg-light text-dark mb-3">Your Trusted Partner for Digital Success</p>
                    <h1 class="display-5 fw-bold">Best Digital Marketing and Web Development Agency in <span
                            class="text-accent">USA</span></h1>
                    <p class="lead opacity-90">Transform your business with our expert digital marketing and innovative web
                        solutions.</p>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get a Free Consultant →</a>
                </div>
                <div class="col-lg-6">
                    @include('frontend.form')
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-6">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="{{ asset('public/assets/img/about.avif') }}"
                        alt="top web development agency">
                </div>
                <div class="col-md-6">
                    <span class="eyebrow">About Us</span>
                    <h2 class="heading">Your Partner in Digital Success</h2>
                    <p>Code Web Bytes LLC is built on the promise for delivering excellences in digital marketing and web
                        development. Our team of experts utilizes the latest modern technologies and strategies in ways that
                        help businesses perform best within the competitive online landscape. Prioritizing client
                        satisfaction, our services designed to cater your unique needs. Focused on innovation and
                        excellence, we strive to grow and maximize your online potential. Count on your partner in achieving
                        success the digital means.

                    </p>
                    <ul class="list-unstyled vstack gap-2">
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Data‑driven approach with transparent
                            reporting</li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Modern, fast and secure web builds</li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Dedicated account managers</li>
                    </ul>
                    <a href="{{ route('about') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">More About Us
                        →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-6 bg-soft">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">Our Services</span>
                <h2 class="heading">Comprehensive Digital Solutions for Your Business Success</h2>
                <p>We are committed to providing all the digital services that your organization may require. We possess the
                    requisite know-how to grow your business, be it SEO and social media marketing, web design and
                    development or e-commerce. We aim to develop creative content and strategies to reach the audience. We
                    improve attention-grabbing strategies so that your business and brand stay aware of the multitude of
                    them and so that your brand achieves tangible aims.

                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-graph-up-arrow"></i></div>
                            <h5>SEO Services</h5>
                            <p>Leverage expert SEO to grow visibility and increase organic traffic.</p>
                            <a href="{{ route('best.seo') }}" class="stretched-link">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-window-stack"></i></div>
                            <h5>Web Development</h5>
                            <p>Develop responsive, user-friendly websites focused on enriching user experience and
                                functionality.</p>
                            <a href="{{ route('best.web.dev') }}" class="stretched-link">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-badge-ad"></i></div>
                            <h5>PPC Advertising</h5>
                            <p>Maximize your ROI through data-driven PPC campaigns delivering results and quality leads.</p>
                            <a href="{{ route('ppc.management') }}" class="stretched-link">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-megaphone"></i></div>
                            <h5>Social Media Marketing</h5>
                            <p>Engage your audience and build brand loyalty through targeted social media campaigns.</p>
                            <a href="{{ route('social.media.marketing') }}" class="stretched-link">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-cart-check"></i></div>
                            <h5>E-commerce Seo Services</h5>
                            <p>Transform your online store into a secure, scalable e-commerce platform that can drive sales.
                            </p>
                            <a href="{{ route('ecommerce.seo') }}" class="stretched-link">Learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card service h-100">
                        <div class="card-body">
                            <div class="service-icon"><i class="bi bi-shield-check"></i></div>
                            <h5>Content Marketing</h5>
                            <p>Engage your audience with compelling content that informs, entertains and converts visitors.
                            </p>
                            <a href="{{ route('content.marketing') }}" class="stretched-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Strategy -->
    <section id="strategy" class="py-6">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <img class="img-fluid rounded-4 shadow-sm"
                        src="{{ asset('public/assets/img/pexels-ivan-samkov.webp') }}"
                        alt="digital marketing service provider">
                </div>
                <div class="col-lg-6">
                    <span class="eyebrow">SEO Strategy</span>
                    <h2 class="heading">Top Web Development and Website Design Agency in the USA</h2>
                    <p>At Code Web Bytes LLC, we are proud to be hailed as the USA's top web development and website design
                        agency. Our devoted team is focused on building engaging and aesthetically pleasing websites
                        designed to enhance your brand and increase user interaction. We guarantee your online presence will
                        be a growth engine that serves its purpose and meets your business needs by offering beautifully
                        designed solutions with an infrastructural solid back-end. Contact us today to bring your dream to
                        life!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Growth CTA -->
    <section class="growth-cta text-white">
        <div class="container ">
            <div class="text-center mx-auto box_gro"
                style="background-image:  url(public/assets/img/home4_section1.webp); background-repeat: no-repeat; background-position: center;">
                <h2 class="heading">Accelerate Your Digital Growth Journey</h2>
                <p class="lead ">We strive to give you a seamless and innovative experience utilizing digital solutions to
                    boost your business. We take pride in our specialists working hand in hand with you to formulate
                    approaches that increase your online presence, engage visitors, and encourage growth. With an eye for
                    quality and outcomes, we blend the best web design and development and digital marketing strategies.
                    Allow us to walk with you in your endeavor to conquer the digital space so that you stay relevant and
                    accomplish the targets set by your business.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Talk to an expert
                    →</a>
            </div>
        </div>
    </section>

    <!-- Work -->
    <!-- Recent Work -->
    <section id="work" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <div>
                        <span class="text-uppercase small text-muted fw-semibold">Recent Work</span>
                        <h2 class="heading mb-0">Highlighting Our Powerful Work Projects</h2>
                        <p class="text-muted mt-2">
                            Learn more about how we bear our fruits in recent projects. Each case study is a portrait of our
                            design & development capabilities and the ways we overcome various client problems. We explore
                            the project's objectives, what strategies were implemented, and what results were given - such
                            information is priceless for companies willing to develop internet-oriented activities. Let's
                            see how such solutions helped our customers to win in the dynamic business sector characterized
                            by the use of the internet.
                        </p>
                    </div>
                </div>
                <div class="col-md-2 text-md-end mt-3 mt-md-0">
                    <a class="btn btn-warning text-white fw-semibold rounded-pill px-4" href="#">
                        See All Project <span class="ms-1">➜</span>
                    </a>
                </div>
            </div>

            <!-- Slider wrapper -->
            <div class="position-relative mt-4">
                <div class="swiper myWorkSwiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <a href="#" class="project-card">
                                <img src="{{ asset('public/assets/img/web-design-technology-browsing-programming-concept-min-490x340-1.webp') }}"
                                    alt="responsive web design company​">
                                <div class="project-info">
                                    <span class="tag">Marketing</span>
                                    <h6 class="project-title mb-0">Project: Best Website Design Agency</h6>
                                    <span class="project-arrow"><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <a href="#" class="project-card">
                                <img src="{{ asset('public/assets/img/showing-cart-trolley-shopping-online-sign-graphic-1-min-490x340-1.webp') }}"
                                    alt="web design company in usa">
                                <div class="project-info">
                                    <span class="tag">E-Commerce</span>
                                    <h6 class="project-title mb-0">Project: Conversion-First Online Store</h6>
                                    <span class="project-arrow"><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <a href="#" class="project-card">
                                <img src="{{ asset('public/assets/img/searching-engine-optimizing-seo-browsing-concept-min-490x340-1.webp') }}"
                                    alt="affordable web design company​">
                                <div class="project-info">
                                    <span class="tag">Analytics</span>
                                    <h6 class="project-title mb-0">Project: Growth Dashboard & SEO</h6>
                                    <span class="project-arrow"><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <a href="#" class="project-card">
                                <img src="{{ asset('public/assets/img/pexels-ivan-samkov.webp') }}"
                                    alt="best web development agency">
                                <div class="project-info">
                                    <span class="tag">Analytics</span>
                                    <h6 class="project-title mb-0">Project: Growth Dashboard & SEO</h6>
                                    <span class="project-arrow"><i class="bi bi-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination d-md-none mt-3"></div>
            </div>
        </div>
    </section>



    <!-- Testimonials -->
    <section id="testimonials" class="py-6 bg-soft">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">Client Testimonials</span>
                <h2 class="heading">Clients Share Their Success Journeys</h2>
            </div>

            <!-- Slider wrapper -->
            <div class="position-relative">
                <div class="swiper myTestimonialSwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial h-100">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img class="avatar" src="https://i.pravatar.cc/80?img=12"
                                        alt="top web development agency">
                                    <div>
                                        <h6 class="mb-0">Emily J.</h6>
                                        <small class="text-muted">Web Administrator</small>
                                    </div>
                                </div>
                                <p>Code Web Bytes LLC transformed our online presence! Their web development and digital
                                    marketing expertise led to a significant increase in our traffic and sales. Highly</p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial h-100">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img class="avatar" src="https://i.pravatar.cc/80?img=3"
                                        alt="digital marketing service provider">
                                    <div>
                                        <h6 class="mb-0">Mark T.</h6>
                                        <small class="text-muted">Digital Marketer</small>
                                    </div>
                                </div>
                                <p>Working with Code Web Bytes was a game-changer for our business. They understood our
                                    vision and delivered a stunning website that has received rave customer reviews.</p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial h-100">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img class="avatar" src="https://i.pravatar.cc/80?img=30"
                                        alt="responsive web design company​">
                                    <div>
                                        <h6 class="mb-0">Sarah L.</h6>
                                        <small class="text-muted">SEO Specialist</small>
                                    </div>
                                </div>
                                <p>The team at Code Web Bytes LLC is incredible! Their attention to detail and commitment to
                                    our project's success exceeded our expectations. Our brand has never</p>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial h-100">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img class="avatar" src="{{ asset('public/assets/img/2a.jpg') }}"
                                        alt="web design company in usa">
                                    <div>
                                        <h6 class="mb-0">Sarah L.</h6>
                                        <small class="text-muted">SEO Specialist</small>
                                    </div>
                                </div>
                                <p>Code Web Bytes LLC transformed our online presence! Their web development and digital
                                    marketing expertise led to a significant increase in our traffic and sales. Highly</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Navigation + Pagination -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination d-md-none mt-3"></div>
            </div>
        </div>
    </section>
    <!-- Testimonials end -->

    <!-- Blog -->
    <section id="blog" class="py-6">
        <div class="container">
            <div class="text-center mb-5">
                <span class="eyebrow">Our Post</span>
                <h2 class="heading">Latest &amp; Trending Blogs</h2>
            </div>

            <div class="row g-4">
                <!-- Blog Card -->
                <div class="col-md-4">
                    <article class="blog-card h-100">
                        <div class="blog-img">
                            <img src="{{ asset('public/assets/img/Which is Better Google Ads vs Meta Ads for Small Businesses.jpg') }}"
                                alt="affordable web design company​">
                            <span class="blog-date"><i class="bi bi-clock me-1"></i> August 01, 2025</span>
                        </div>
                        <div class="blog-body">
                            <h5 class="blog-title"><a href="{{ route('blog.casino.zevenaar') }}">Which is Better: Google
                                    Ads vs Meta Ads for Small
                                    Businesses?</a></h5>
                            <p class="blog-text">For small businesses, every marketing rupee or dollar matters. Investing
                                in the right advertising platform can make the difference between achieving consistent
                                growth and wasting precious resources. The two giants dominating the online advertising
                                space today are Google Ads and Meta Ads (formerly Facebook Ads). But the burning question
                                remains: Which is better: Google Ads vs Meta Ads for small.....</p>
                        </div>
                        <div class="blog-footer d-flex justify-content-between align-items-center">
                            <small><i class="bi bi-person"></i></small>
                            <small><i class="bi bi-chat-left-text"></i> 0 Comments</small>
                        </div>

                        <div class="blog_button">
                            <a href="{{ route('blog.casino.zevenaar') }}"
                                class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">See More →</a>
                        </div>
                    </article>
                </div>

                <!-- Duplicate Cards -->
                <div class="col-md-4">
                    <article class="blog-card h-100">
                        <div class="blog-img">
                            <img src="{{ asset('public/assets/img/How Keyword Clustering Can Transform Your Content Marketing.jpg') }}"
                                alt="best web development agency">
                            <span class="blog-date"><i class="bi bi-clock me-1"></i> August 21, 2025</span>
                        </div>
                        <div class="blog-body">
                            <h5 class="blog-title"><a href="{{ route('carousel.be.casino_50_ree.spins') }}">How Keyword
                                    Clustering Can Transform Your Content
                                    Marketing</a></h5>
                            <p class="blog-text">Keyword research has long been the foundation of content marketing
                                strategies, but simply identifying high-volume keywords is no longer enough. Search engines
                                have evolved, and so have user behaviors.
                                Today, ranking well requires a deeper understanding of search intent, content relevance,
                                and topic authority. This is where keyword clustering comes into...
                            </p>
                        </div>
                        <div class="blog-footer d-flex justify-content-between align-items-center">
                            <small><i class="bi bi-person"></i></small>
                            <small><i class="bi bi-chat-left-text"></i> 0 Comments</small>
                        </div>
                        <div class="blog_button">
                            <a href="{{ route('carousel.be.casino_50_ree.spins') }}"
                                class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">See More →</a>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="blog-card h-100">
                        <div class="blog-img">
                            <img src="{{ asset('public/assets/img/Can Local SEO Help My Business Rank Higher on Google Maps.jpg') }}"
                                alt="top web development agency">
                            <span class="blog-date"><i class="bi bi-clock me-1"></i> September 13, 2025</span>
                        </div>
                        <div class="blog-body">
                            <h5 class="blog-title"><a href="{{ route('bingo.aanbieding') }}">Can Local SEO Help My
                                    Business
                                    Rank Higher on Google
                                    Maps?</a></h5>
                            <p class="blog-text">Google Maps has become more than just a navigation tool—it’s now one of
                                the most powerful platforms for local business visibility. When potential customers search
                                for services near them, Google Maps results often appear at the top of search pages. That’s
                                why many business owners ask: Can Local SEO help my business rank higher on Google Maps?
                                The short answer is yes. Local SEO...
                            </p>
                        </div>
                        <div class="blog-footer d-flex justify-content-between align-items-center">
                            <small><i class="bi bi-person"></i></small>
                            <small><i class="bi bi-chat-left-text"></i> 0 Comments</small>
                        </div>
                        <div class="blog_button">
                            <a href="{{ route('bingo.aanbieding') }}"
                                class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">See More →</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
	<div class="content-wrapper">
		<h1>Our Reviews</h1>
		<div class="blue-line"></div>
		<div class="wrapper-for-arrows">
			<div style="opacity: 0;" class="chicken"></div>
			<div id="reviewWrap" class="review-wrap">
				<div id="imgDiv" class="">
				</div>
				<div id="personName"></div>
				<div id="profession"></div>
				<div id="description">
				</div>
			</div>
			<div id="surpriseMeBtn" class="surprise-me-btn">Surprise me</div>
			<div class="left-arrow-wrap arrow-wrap">
				<div class="arrow" id="leftArrow"></div>
			</div>
			<div class="right-arrow-wrap arrow-wrap">
				<div class="arrow" id="rightArrow"></div>
			</div>
		</div>
	</div>
    
@endsection
