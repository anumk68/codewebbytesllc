@extends('frontend.layouts.app')
@section('title', 'Affordable Web Design Company​ | Code Web Bytes')
@section('meta_description', 'Code Web Bytes is an affordable web design company delivering creative, responsive, and
    user-friendly websites for businesses. Visit now!')
@section('content')

    <!-- ====== = about bannear====== -->
    <section class="about-banner text-center"
        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('public/assets/img/about.webp');">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-6">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="{{ asset('public/assets/img/about.avif') }}"
                        alt="best digital marketing agency in usa">
                </div>
                <div class="col-md-6">
                    <span class="eyebrow">About Us</span>
                    <h2 class="heading">Why Choose Us?</h2>
                    <p>At Code Web Bytes LLC, we know how important it is for your business to find the right Digital
                        Marketing
                        Agency. As one top-rated content marketing agencies and Best SEO agencies, offers extensive
                        experience and
                        professionalism to business. Our team has cross-functional capabilities and is focused on providing
                        solutions for unique requirements. We integrate cutting-edge approaches with analytics to optimize
                        your web
                        presence and deliver results at matter. Whether you're looking for e-commerce search engine
                        optimization
                        firm to boost your online business, a social media marketing firm reach out to audience or
                        full-fledged PPC
                        services to enhance your returns on investments, we have it all.
                    </p>

                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get A Free
                        Quote →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== about section end====== -->


    <!-- ===== Experience  start   ========= -->
    <section id="eeat" class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="eeat-card h-100 d-flex align-items-start gap-3">
                        <span class="eeat-icon">
                            <!-- analytics/search svg -->
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M21 21l-3.5-3.5M11 18a7 7 0 1 1 0-14 7 7 0 0 1 0 14Z" stroke="#fff"
                                    stroke-width="2" stroke-linecap="round" />
                                <path d="M8.5 11.5l2 2 4-4" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <div>
                            <h5 class="mb-1">Experience</h5>
                            <p class="mb-0 text-muted">We specialize in digital marketing, which allows us to incorporate
                                the latest trends in practices and Alger.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="eeat-card h-100 d-flex align-items-start gap-3">
                        <span class="eeat-icon">
                            <!-- bar chart svg -->
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 20V10M10 20V6M16 20V12M22 20H2" stroke="#fff" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                        <div>
                            <h5 class="mb-1">Expertise</h5>
                            <p class="mb-0 text-muted">Our knowledge and skills provide efficient and effective strategies
                                to meet your business goals</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6">
                    <div class="eeat-card h-100 d-flex align-items-start gap-3">
                        <span class="eeat-icon">
                            <!-- shield/badge svg -->
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M12 3l7 2v6c0 5-3.5 8-7 10-3.5-2-7-5-7-10V5l7-2Z" stroke="#fff"
                                    stroke-width="2" />
                                <path d="M9 12l2 2 4-4" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <div>
                            <h5 class="mb-1">Authoritativeness</h5>
                            <p class="mb-0 text-muted">We are aware of our position in the sector and as digital marketers,
                                are the trendsetters and tactical deployers.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6">
                    <div class="eeat-card h-100 d-flex align-items-start gap-3">
                        <span class="eeat-icon">
                            <!-- bulb svg -->
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path
                                    d="M9 18h6M10 21h4M8 10a4 4 0 1 1 8 0c0 2-1 3-2 4-1 1-1 2-1 2h-2s0-1-1-2c-1-1-2-2-2-4Z"
                                    stroke="#fff" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                        <div>
                            <h5 class="mb-1">Trustworthiness</h5>
                            <p class="mb-0 text-muted">We maintain honesty and transparency, which enables us to have
                                cordial and thriving relationships with clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===== Experience  start   ========= -->

    <!-- ===== Our Vision  start   ========= -->


    <section id="second" class="py-6">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid rounded-4 shadow-sm" src="{{ asset('public/assets/img/vison.jpg') }}"
                        alt="best web development agency">
                </div>
                <div class="col-md-6">

                    <h2 class="heading">Our Vision</h2>
                    <span class="mission-underline d-inline-block mb-3"></span>
                    <p>As a Digital Marketing Agency In the USA, Code Web Bytes LLC aims to equip brands with
                        advanced/modern
                        solutions in the digital space. Labeling ourselves as the best SEO service and the top
                        content-promoting
                        agency in the United States, we aim to build a digital presence through eCommerce SEO, strategic PPC
                        management services and age-appropriate social media marketing. We believe in leading our clients'
                        growth
                        through their brands' success by offering customized approaches and state-of-the-art website
                        development
                        services. We believe in concrete outcomes and sustained growth and assist businesses within the
                        digitally
                        aggressive landscape in asserting their uniqueness and flourishing.
                    </p>
                    <ul class="list-unstyled vstack gap-2">
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>
                            Understanding Your Brand-Heads Up Positioning Services</li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Unique Profile Design & Setup to Reflect the
                            Brand
                            The Way It Stands Out

                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Innovative Social Media Games to Increase
                            the User
                            Base
                        </li>
                        <li><i class="bi bi-check2-circle text-accent me-2"></i>Impressive Social Media Management to Ensure
                            Effectiveness

                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">FREE
                        CONSULTATION
                        →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Our Vision  end   ========= -->

    <!-- ===== Our Mission start   ========= -->
    <section id="exp-mission" class="py-5">
        <div class="container">
            <div class="row g-0 shadow-sm rounded-3 overflow-hidden">
                <!-- Left: Experiences -->
                <div class="col-lg-6">
                    <div class="exp-pane h-100 p-4 p-md-5">
                        <h3 class="text-white mb-4">Our Experiences</h3>
                        <span class="exp-underline mb-4 d-inline-block"></span>

                        <!-- Bar 1 -->
                        <div class="skill mb-4">
                            <div class="skill-head">
                                <span class="skill-title">Digital Marketing</span>
                                <span class="skill-val">75%</span>
                            </div>
                            <div class="skill-track">
                                <span class="skill-fill" style="--w:75%"></span>
                            </div>
                        </div>

                        <!-- Bar 2 -->
                        <div class="skill mb-4">
                            <div class="skill-head">
                                <span class="skill-title">Web Development</span>
                                <span class="skill-val">70%</span>
                            </div>
                            <div class="skill-track">
                                <span class="skill-fill" style="--w:70%"></span>
                            </div>
                        </div>

                        <!-- Bar 3 -->
                        <div class="skill mb-4">
                            <div class="skill-head">
                                <span class="skill-title">Web Designing</span>
                                <span class="skill-val">85%</span>
                            </div>
                            <div class="skill-track">
                                <span class="skill-fill" style="--w:85%"></span>
                            </div>
                        </div>

                        <!-- Bar 4 -->
                        <div class="skill">
                            <div class="skill-head">
                                <span class="skill-title">Pay Per Click</span>
                                <span class="skill-val">60%</span>
                            </div>
                            <div class="skill-track">
                                <span class="skill-fill" style="--w:60%"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Mission -->
                <div class="col-lg-6">
                    <div class="mission-pane h-100 p-4 p-md-5 bg-white">
                        <h2 class="heading">Our Mission</h2>

                        <p>
                            We aim to help businesses succeed on internet. As these best SEO services and content marketing
                            agency In
                            the USA, we provide customized packages that contribute positively to your business. Let’s
                            change the
                            narrative and as make it a strategic avenue for growth!

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Our Mission end   ========= -->
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
                                    <img class="avatar" src="https://i.pravatar.cc/80?img=12" alt="top web development agency">
                                    <div>
                                        <h6 class="mb-0">Emily J.</h6>
                                        <small class="text-muted">Web Administrator</small>
                                    </div>
                                </div>
                                <p>Code Web Bytes LLC transformed our website. Organic traffic is up and pages load in a
                                    blink. Highly
                                    recommended.</p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial h-100">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img class="avatar" src="https://i.pravatar.cc/80?img=3" alt="digital marketing service provider">
                                    <div>
                                        <h6 class="mb-0">Mark T.</h6>
                                        <small class="text-muted">Digital Marketer</small>
                                    </div>
                                </div>
                                <p>Our ads and landing pages are finally in sync. Clear reporting, great communication and
                                    strong
                                    results.</p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial h-100">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img class="avatar" src="https://i.pravatar.cc/80?img=30" alt="best digital marketing agency in usa">
                                    <div>
                                        <h6 class="mb-0">Sarah L.</h6>
                                        <small class="text-muted">SEO Specialist</small>
                                    </div>
                                </div>
                                <p>The technical SEO work fixed crawling issues and improved rankings across core
                                    categories.</p>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial h-100">
                                <div class="d-flex align-items-center gap-3 mb-3">
                                    <img class="avatar" src="https://i.pravatar.cc/80?img=30" alt="best web development agency">
                                    <div>
                                        <h6 class="mb-0">Sarah L.</h6>
                                        <small class="text-muted">SEO Specialist</small>
                                    </div>
                                </div>
                                <p>The technical SEO work fixed crawling issues and improved rankings across core
                                    categories.</p>
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
    <!-- ========= Testimonials end= ==== -->

    <!-- ========= addres and number = ==== -->
    <section id="contact-cards" class="py-5">
        <div class="container">
            <div class="row g-3 g-md-4">
                <!-- Phone -->
                <div class="col-md-4">
                    <div class="ccard h-100 d-flex align-items-center gap-3">
                        <span class="ccard-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-1"><a class="ccard-link" href="tel:+11230800567890">(123) 0800 567890</a>
                            </h5>
                            <div class="ccard-sub">Mon-Fri. 9.00 am – 6.00 pm</div>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <div class="ccard h-100 d-flex align-items-center gap-3">
                        <span class="ccard-icon">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <div>
                            <h5 class="mb-1">
                                <a class="ccard-link" href="mailto:info@codewebbytesllc.com">info@codewebbytesllc.com</a>
                            </h5>
                            <div class="ccard-sub">15 Hours Real-Time Support</div>
                        </div>
                    </div>
                </div>

                <!-- Location -->
                <div class="col-md-4">
                    <div class="ccard h-100 d-flex align-items-center gap-3">
                        <span class="ccard-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </span>
                        <div>
                            <h5 class="mb-1">New York City</h5>
                            <div class="ccard-sub">55 Street, South Park Avenue</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= addres and number = ==== -->


@endsection
