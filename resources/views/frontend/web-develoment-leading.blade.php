
@section('title', 'Web Development Services | Web Development | Code Web Bytes')
@section('meta_description', 'Professional web development services by Code Web Bytes. We build modern, user-friendly, and high-performing websites tailored to your brand and business goals.')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Landing Page</title>
  <link rel="icon" href="public/assets/files/images/Favicon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    />

    <!-- Bootstrap 5.3.3 -->
  
    <link href="{{ asset('public/assets/dist/framework/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/dist/css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/dist/css/theme.css') }}" rel="stylesheet">
     <link href="{{ asset('public/assets/dist/css/responsive.css') }}" rel="stylesheet">
     <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    
    <!-- Theme Style -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
   <link href="{{ asset('public/assets/dist/css/animation.css') }}" rel="stylesheet">

 

  </head>
  <body>
    <!-- loader -->
    <!-- <div class="loader">
      <div class="loaderTop">
        <span class="loaderTopTxt"> <span class="animateTxt">Yoso.</span></span>
      </div>
      <div class="loaderBottom">
        <span class="loaderBottomTxt">
          <span class="animateTxt">Yoso.</span></span
        >
      </div>
    </div> -->

    <div id="scroll-content">
      <main>
        <header id="home" class="d-flex flex-column">
          <div class="container d-flex flex-column flex-grow-1">
            <nav class="yoso-nav">
              <div class="topBar desktopTopBar">
                <h5 class="discount">
                  <strong>End of Year Sale</strong>: Save up to 35% on Tasks
                </h5>
                <ul class="list-unstyled">
                  <li><i class="fa-solid fa-phone"></i>+1 (805) 498-4719</li>
                  <li>
                    <i class="fa-solid fa-envelope"></i> info@codewebbytesllc.com
                  </li>
                </ul>
              </div>
              <div class="yoso-menu" id="navbar">
                <div class="logo">
                  <img src="{{ asset('public/assets/images/header/codewebbyte_landing.png') }}" alt="Icon" />
                </div>

                <!-- desktop -->
                <!-- <ul class="list-unstyled desktopMenu mainMenu">
                  <li>
                    <a class="menuText" href="#home">
                      <span class="menuTextInner">Home</span>
                      <span class="duplicateText"></span>
                    </a>
                  </li>
                  <li>
                    <a class="menuText" href="#services">
                      <span class="menuTextInner">Services</span>
                      <span class="duplicateText"></span>
                    </a>
                  </li>
                  <li>
                    <a class="menuText" href="#gallery">
                      <span class="menuTextInner">Gallery</span>
                      <span class="duplicateText"></span>
                    </a>
                  </li>
                  <li>
                    <a class="menuText" href="#pricing">
                      <span class="menuTextInner">Pricing</span>
                      <span class="duplicateText"></span>
                    </a>
                  </li>
                  <li>
                    <a class="menuText" href="#reviews">
                      <span class="menuTextInner">Reviews</span>
                      <span class="duplicateText"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#blog" class="menuText">
                      <span class="menuTextInner">Blog</span>
                      <span class="duplicateText"></span
                    ></a>
                  </li>
                </ul> -->

                <!-- mobile Menu -->
                <div class="mobileMenu">
                  <div class="hamburger">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                  </div>
                  <ul class="list-unstyled mainMenu d-none">
                    <div class="topBar">
                      <h5 class="discount">
                        <strong>End of Year Sale</strong>: Save up to 35% on
                        Tasks
                      </h5>
                      <ul class="list-unstyled">
                        <li>
                          <i class="fa-solid fa-phone"></i>+1-800-456-478-23
                        </li>
                        <li>
                          <i class="fa-solid fa-envelope"></i>youremail@mail.com
                        </li>
                      </ul>
                    </div>
                    <div class="hamburger">
                      <span class="hamburger-line"></span>
                      <span class="hamburger-line"></span>
                      <span class="hamburger-line"></span>
                    </div>
                    <li>
                      <a class="menuText" href="#home">
                        <span class="menuTextInner">Home</span>
                        <span class="duplicateText"></span>
                      </a>
                    </li>
                    <li>
                      <a class="menuText" href="#services">
                        <span class="menuTextInner">Services</span>
                        <span class="duplicateText"></span>
                      </a>
                    </li>
                    <li>
                      <a class="menuText" href="#gallery">
                        <span class="menuTextInner">Gallery</span>
                        <span class="duplicateText"></span>
                      </a>
                    </li>
                    <li>
                      <a class="menuText" href="#pricing">
                        <span class="menuTextInner">Pricing</span>
                        <span class="duplicateText"></span>
                      </a>
                    </li>
                    <li>
                      <a class="menuText" href="#reviews">
                        <span class="menuTextInner">Reviews</span>
                        <span class="duplicateText"></span>
                      </a>
                    </li>
                    <li class="dropdown">
                      <a href="#blog" class="menuText">
                        <span class="menuTextInner">Blog</span>
                        <span class="duplicateText"></span
                      ></a>
                    </li>
                  </ul>
                </div>

                <div class="search revealSearch">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </div>
              </div>
            </nav>

            <!-- Hero Section -->
            <section
              class="yosoHero my-5 flex-grow-1 d-flex flex-column justify-content-center"
            >
              <div class="row align-items-center">
                <div class="col-md-7">
                  <!-- <div class="tagline">
                    <img src=" {{ asset('public/assets/images/star.png') }}" alt="Star" />
                   
                  </div> -->
                  <h1 class="yoso-h1">
                    Professional Web Development Services.
                  </h1>
                  <p class="yoso-desc">
                    Delivering modern, responsive, and result-driven websites that help businesses grow online. Code Web Bytes specializes in creating dynamic digital experiences through custom web development, UX/UI design, and seamless functionality—crafted to strengthen your brand identity and online success.
                  </p>
                  <div class="row align-items-end">
                    <div class="col-md-5">
                      <ul class="list-unstyled yoso-list">
                        <li>
                          <i class="fa-solid fa-circle-check"></i> Custom Web Development
                        </li>
                        <li>
                          <i class="fa-solid fa-circle-check"></i> E-commerce & CMS Solutions
                        </li>
                      </ul>
                    </div>
                    
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 position-relative">
                  <img
                    class="img-animation w-100"
                    src=" {{ asset('public/assets/images/hero/pic1.png') }}"
                    alt="Pic"
                  />
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="communityNumbers">
        
                      </div>
                    </div>
                    <div
                      class="col-md-9 bottomImg position-absolute top-50 start-50"
                    >
                      <img
                        class="w-100 rounded-3"
                        src=" {{ asset('public/assets/images/hero/pic2.jpg') }}"
                        alt="Pic"
                      />
                   
                    
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="searchPopUp">
            <div class="close search">
              <i class="revealSearch fa-solid fa-xmark"></i>
            </div>
            <form>
              <input type="text" placeholder="Type to Search.." />
              <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </header>



        <!-- About section start -->
<section id="about" class="about_section yoso-margin">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="{{ asset('public/assets/images/Gallery/slide1.jpg') }}" alt="">
      </div>
      <div class="col-md-6">
        <h2 class="yoso-h2">Transform Your Online Presence with Expert Web Development</h2>
        <p class="yoso-desc">
          Code Web Bytes specializes in creating innovative, high-performance websites tailored to your business needs. Whether you're looking for a custom-built solution or need a powerful e-commerce platform, our web development services are designed to bring your ideas to life.
        </p>

        <ul class="list-unstyled yoso-list">
          <li><i class="fa-solid fa-circle-check"></i> Custom Web Development</li>
          <li><i class="fa-solid fa-circle-check"></i> E-commerce & CMS Solutions</li>
        </ul>
      </div>
    </div>
  </div>
</section>



        <!-- About section end -->

        <!-- Yoso Services -->
        <section class="yoso-services">
          <div class="featureslide">
            <div class="marquee">
              <div class="slideInner">
                <h1 class="slide">UI/UX Design</h1>
                <h1 class="slide">Web Design</h1>
                <h1 class="slide">Brand Design</h1>
                <h1 class="slide">Graphic Design</h1>
              </div>
            </div>
          </div>
         
         
          <div class="container" id="services">
            <div  class="services yoso-margin">
              <!-- <div class="tagline justify-content-center">
                <img src=" {{ asset('public/assets/images/star.png') }}" alt="Star" />
               
                
                <p>With SEO Optimization</p>
              </div> -->
              <h2 class="yoso-h2 text-center">Expert Web Development Services</h2>
              <div class="row">
                <div class="col-md-4 tab-50 sm-100">
                  <div class="serviceSingle pb-4">
                    <div class="serviceIcon">
                      <img
                        src="{{ asset('public/assets/images/announcement.png') }}"
                        alt="announcement"
                      />
                       
                    </div>

                    <h3 class="yoso-h3 m-0">eCommerce Web Development Services</h3>
                    <p class="yoso-desc">
                     Drive online growth with scalable eCommerce platforms built for secure transactions, effortless navigation, and higher conversions.
                    </p>
                   

                    <!-- <a href="#" class="mt-5 yoso-button-2"
                      ><i class="fa-solid fa-right-long"></i
                    ></a> -->
                  </div>
                </div>
                <div class="col-md-4 tab-50 sm-100">
                  <div class="serviceSingle pb-4">
                    <div class="serviceIcon">
                      <img
                        src=" {{ asset('public/assets/images/announcement.png') }}"
                        alt="announcement"
                      />
                     
                    </div>

                    <h3 class="yoso-h3 m-0">Web Application Development Services</h3>
                    <p class="yoso-desc">
                      Empower your business with custom-built web applications designed to streamline operations and enhance digital efficiency.
                    </p>
                    
                  </div>
                </div>
                <div class="col-md-4 tab-50 sm-100">
                  <div class="serviceSingle pb-4">
                    <div class="serviceIcon">
                      <img
                        src=" {{ asset('public/assets/images/announcement.png') }}"
                        alt="announcement"
                      />
                    </div>

                    <h3 class="yoso-h3 m-0">Custom Web Development Services</h3>
                    <p class="yoso-desc">
                      Experience tailor-made web solutions engineered to reflect your brand voice and deliver exceptional user experiences. 
                    </p>
                  

                  </div>
                </div>

                  <div class="col-md-4 tab-50 sm-100">
                  <div class="serviceSingle pb-4">
                    <div class="serviceIcon">
                      <img
                        src=" {{ asset('public/assets/images/announcement.png') }}"
                        alt="announcement"
                      />
                    </div>

                    <h3 class="yoso-h3 m-0">Custom CMS Development Services</h3>
                    <p class="yoso-desc">
                      Gain full control over your digital content with intuitive, secure, and flexible CMS solutions customized for your business needs.
                    </p>
                   
                  </div>
                </div>

                  <div class="col-md-4 tab-50 sm-100">
                  <div class="serviceSingle pb-4">
                    <div class="serviceIcon">
                      <img
                        src=" {{ asset('public/assets/images/announcement.png') }}"
                        alt="announcement"
                      />
                    </div>

                    <h3 class="yoso-h3 m-0">Website Design and Redesign</h3>
                    <p class="yoso-desc">
                     Reimagine your website with responsive, user-centric designs that combine creativity, speed, and performance for impactful results.
                    </p>
                    
                  </div>
                </div>

                  <div class="col-md-4 tab-50 sm-100">
                  <div class="serviceSingle pb-4">
                    <div class="serviceIcon">
                      <img
                        src=" {{ asset('public/assets/images/announcement.png') }}"
                        alt="announcement"
                      />
                    </div>

                    <h3 class="yoso-h3 m-0">Landing Page Development Services</h3>
                    <p class="yoso-desc">
                      Maximize your marketing impact with high-performing landing pages built to convert visitors into valuable leads and customers.
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- About -->
        <section class="aboutAgency">
          <div class="container-fluid">
            <div class="row px-5 align-items-end">
              <div class="col-md-7">
                <div class="agencySide position-relative">
                  <img
                    class="position-absolute start-0"
                    src="  {{ asset('public/assets/images/quote.png') }}"
                    alt=""
                  />
                  
                  <img
                    class="position-absolute start-0"
                    src=" {{ asset('public/assets/images/agency2.png') }}"
                    alt=""
                  />
                  
                  <img src=" {{ asset('public/assets/images/avatar.png') }}" alt="Avatar" />
                    
                  <img
                    class="position-absolute end-0 pe-5"
                    src="assets/images/agency1.png"
                    alt=""
                  />
                </div>
              </div>
              <div class="col-md-5 pb-5 mb-3">
                <!-- <div class="tagline">
                  <img src=" {{ asset('public/assets/images/star.png') }}" alt="Star" />
                  
                  <p>With SEO Optimization</p>
                </div> -->
                <h2 class="yoso-h2">Innovative Web Development Agency</h2>
                <p class="yoso-desc">
                  At Code Web Bytes, we redefine digital success through cutting-edge web development services tailored for growth-focused brands
                </p>
                <ul class="list-unstyled yoso-list">
                  <li>
                    <i class="fa-solid fa-circle-check"></i>Next-Gen Web Solutions
                  </li>
                  <li>
                    <i class="fa-solid fa-circle-check"></i>User-Centric Performance
                  </li>
                </ul>
                <!-- <a href="#" class="mt-5 yoso-button"
                  >read more
                  <span
                    ><i class="fa-solid fa-arrow-right"></i
                    ><i class="fa-solid fa-arrow-right"></i></span
                ></a> -->
              </div>
            </div>
          </div>
        </section>

      
        <!-- Awards section -->
        <section class="yoso-awards yoso-padding">
          <div class="container">
            <!-- <div class="tagline darkTagline justify-content-center">
              <img src="  {{ asset('public/assets/images/starLight.png') }}" alt="Star" />
             
              <p>With SEO Optimization</p>
            </div> -->
            <h2 class="yoso-h2 text-center headingLight">
              Custom CMS & Website Optimization
            </h2>
            <div class="row mt-5">
              <div class="col-md-6 pe-5 sm-100 tab-50">
                <div class="awardSingle">
                  <div class="awardIcon">
                    <img src=" {{ asset('public/assets/images/awardIcon/seo.png') }}" alt="Icon" />
                    
                  </div>
                  <h4 class="yoso-h4 headingLight menuText">
                    <span class="menuTextInner"
                      >Reliable Web Development Agency</span
                    >
                    <span class="duplicateText"></span>
                  </h4>
                  <a href="#" class="yoso-button-3">
                    <span>
                      <i class="fa-solid fa-arrow-right"></i
                      ><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
              <div class="col-md-6 ps-5 sm-100 tab-50">
                <div class="awardSingle">
                  <div class="awardIcon">
                    <img
                      src=" {{ asset('public/assets/images/awardIcon/data-analysis.png') }}"
                      alt="Icon"
                    />
                     
                  </div>
                  <h4 class="yoso-h4 headingLight menuText">
                    <span class="menuTextInner"
                      >Strategic Business Development</span
                    >
                    <span class="duplicateText"></span>
                  </h4>
                  <a href="#" class="yoso-button-3">
                    <span>
                      <i class="fa-solid fa-arrow-right"></i
                      ><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
              <div class="col-md-6 pe-5 sm-100 tab-50">
                <div class="awardSingle">
                  <div class="awardIcon">
                    <img src="{{ asset('public/assets/images/awardIcon/audit.png') }}" alt="Icon" />
                     
                  </div>
                  <h4 class="yoso-h4 headingLight menuText">
                    <span class="menuTextInner"
                      >Advanced Website Optimization</span
                    >
                    <span class="duplicateText"></span>
                  </h4>
                  <a href="#" class="yoso-button-3">
                    <span>
                      <i class="fa-solid fa-arrow-right"></i
                      ><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
              <div class="col-md-6 ps-5 sm-100 tab-50">
                <div class="awardSingle">
                  <div class="awardIcon">
                    <img
                      src=" {{ asset('public/assets/images/awardIcon/statement.png') }}"
                      alt="Icon"
                    />
                   
                  </div>
                  <h4 class="yoso-h4 headingLight menuText">
                    <span class="menuTextInner"
                      >Custom Marketing Integration</span
                    >
                    <span class="duplicateText"></span>
                  </h4>
                  <a href="#" class="yoso-button-3">
                    <span>
                      <i class="fa-solid fa-arrow-right"></i
                      ><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
              <div class="col-md-6 pe-5 sm-100 tab-50">
                <div class="awardSingle">
                  <div class="awardIcon">
                    <img
                      src="{{ asset('public/assets/images/awardIcon/announcement.png') }}"
                      alt="Icon"
                    />
                     
                  </div>
                  <h4 class="yoso-h4 headingLight menuText">
                    <span class="menuTextInner"
                      >Scalable eCommerce Solutions
                    </span>
                    <span class="duplicateText"></span>
                  </h4>
                  <a href="#" class="yoso-button-3">
                    <span>
                      <i class="fa-solid fa-arrow-right"></i
                      ><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
              <div class="col-md-6 ps-5 sm-100 tab-50">
                <div class="awardSingle">
                  <div class="awardIcon">
                    <img
                      src="   {{ asset('public/assets/images/awardIcon/light-bulb.png') }}"
                      alt="Icon"
                    />
                 
                  </div>
                  <h4 class="yoso-h4 headingLight menuText">
                    <span class="menuTextInner"
                      >Innovative Web Design Approach</span
                    >
                    <span class="duplicateText"></span>
                  </h4>
                  <a href="#" class="yoso-button-3">
                    <span>
                      <i class="fa-solid fa-arrow-right"></i
                      ><i class="fa-solid fa-arrow-right"></i></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="yoso-price yoso-margin">
          <div class="container">
           
            <h2 class="yoso-h2 text-center">
              Web Development <br> Pricing Plans
            </h2>
            <div class="row mt-5">
              <div class="col-md-4 tab-50 sm-100">
                <div class="priceSingle">
                  <div class="price"><sup>$</sup>499<span> /month</span></div>
                  <img
                    src="{{ asset('public/assets/images/pricing/price1.png') }}"
                    alt="Pricing"
                    class="priceImg"
                  />
                  
                  <h4 class="yoso-h4 ">Starter Website Plan</h4>
                  <p class="yoso-desc mt-2 p-0 text-black text-start"> Perfect for startups & small businesses</p>

                  <div class="priceLine"></div>
                  <ul class="list-unstyled yoso-list">
                    <li>
                      <i class="fa-solid fa-circle-check"></i>5-Page Custom Website
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Responsive Design (Mobile + Desktop)
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Basic On-Page SEO
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>SSL & Security Setup
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>1-Month Free Support
                    </li>
                  </ul>
                  <!-- <a href="#" class="yoso-button-4">Get Started</a> -->
                </div>
              </div>
              <div class="col-md-4 tab-50 sm-100">
                <div class="priceSingle">
                  <div class="price"><sup>$</sup>899<span> /month</span></div>
                  <img
                    src=" {{ asset('public/assets/images/pricing/price2.png') }}"
                    alt="Pricing"
                    class="priceImg"
                  />
                 
                  <h4 class="yoso-h4">Business Growth Plan</h4>
                  <p class="yoso-desc mt-2 p-0 text-black text-start">Ideal for growing brands & service providers</p>

                  <div class="priceLine"></div>
                  <ul class="list-unstyled yoso-list">
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Up to 10 Custom Pages
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>WordPress / Shopify Development
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Blog Setup + SEO Optimization
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Speed Optimization
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Basic Maintenance & Updates
                    </li>
                    
                  </ul>
                  <!-- <a href="#" class="yoso-button-4">Get Started</a> -->
                </div>
              </div>
              <div class="col-md-4 tab-50 sm-100">
                <div class="priceSingle">
                  <div class="price"><sup>$</sup>1499<span> /month</span></div>
                  <img
                    src=" {{ asset('public/assets/images/pricing/price3.png') }}"
                    alt="Pricing"
                    class="priceImg"
                  />
                  <h4 class="yoso-h4">Enterprise Web Solution</h4>
                  <p class="yoso-desc mt-2 p-0 text-black text-start"> For established brands & enterprises</p>

                  <div class="priceLine"></div>
                  <ul class="list-unstyled yoso-list">
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Unlimited Pages
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Advanced Custom Development
                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>API & Third-Party Integrations

                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i>Advanced SEO + Analytics Setup

                    </li>
                    <li>
                      <i class="fa-solid fa-circle-check"></i> Dedicated Project Manager

                    </li>
                    <!-- <li>
                      <i class="fa-solid fa-circle-check"></i>Monthly Maintenance & Priority Support

                    </li> -->
                   

                  </ul>
                  <!-- <a href="#" class="yoso-button-4">Get Started</a> -->
                </div>
              </div>
            </div>
          
          </div>
        </section>

        <!-- testimonials  -->
        <section id="reviews" class="yoso-testimonials yoso-padding">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-9">
                <div class="swiper testimonials">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide swiper-slide-active">
                      <div class="row h-100 align-items-center">
                        <div class="col-md-7">
                          <div class="tagline">
                            <img src=" {{ asset('public/assets/images/star.png') }}" alt="Star" />
                         
                            <p>What Our Clients Say About Us</p>
                          </div>
                          <h2 class="yoso-h2">Exceptional Web Development Experience</h2>
                          <p class="yoso-desc">
                            Code Web Bytes transformed our outdated website into a modern, user-friendly platform. Their attention to detail, communication, and technical expertise made the entire process smooth and professional. Highly recommend them for any web development project!
                          </p>
                          <div class="stars ">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                          </div>
                          <p class="clientName ">
                             – Sarah M<span>, Marketing Director, New York</span>
                          </p>
                        </div>
                        <div class="col-md-5 position-relative">
                          <img
                            class="qouteSign"
                            src="{{ asset('public/assets/images/testimonials/qouteSign.png') }}"
                            alt="Qoute"
                          />
                              
                          <img
                            class="testimonialImg"
                            src="{{ asset('public/assets/images/testimonials/t1.jpg') }}"
                          />
                          
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="row h-100 align-items-center">
                        <div class="col-md-7">
                          
                          <h2 class="yoso-h2">Professional, Reliable, and Results-Driven</h2>
                          <p class="yoso-desc">
                           The team at Code Web Bytes delivered beyond expectations. Our eCommerce site now loads faster, looks incredible, and has improved our conversions significantly. They truly understand what makes a website perform.
                          </p>
                          <div class="stars ">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                          </div>
                          <p class="clientName ">
                           – David L.,<span> Business Owner, California
</span>
                          </p>
                        </div>
                        <div class="col-md-5 position-relative">
                          <img
                            class="qouteSign"
                            src="{{ asset('public/assets/images/testimonials/qouteSign.png') }}"
                            alt="Qoute"
                          />
                          
                          <img
                            class="testimonialImg"
                            src=" {{ asset('public/assets/images/testimonials/t2.jpg') }}"
                          />
                         
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="row h-100 align-items-center">
                        <div class="col-md-7">
                          
                          <h2 class="yoso-h2">Top-Notch Development & SEO Integration</h2>
                          <p class="yoso-desc">
                            We hired Code Web Bytes for our company website redesign, and the results were outstanding. The combination of design, speed optimization, and SEO strategy has helped us increase traffic and sales.

                          </p>
                          <div class="stars ">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half"></i>
                          </div>
                          <p class="clientName ">
                           – Amanda P.,<span>Operations Manager, Florida
</span>
                          </p>
                        </div>
                        <div class="col-md-5 tab-none position-relative">
                          <img
                            class="qouteSign"
                            src="{{ asset('public/assets/images/testimonials/qouteSign.png') }}"
                            alt="Qoute"
                          />
                           
                          <img
                            class="testimonialImg"
                            src="{{ asset('public/assets/images/testimonials/t3.jpg') }}"
                          />
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 tab-none position-relative">
                <div thumbsSlider="" class="swiper testimonialsThumb">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="{{ asset('public/assets/images/testimonials/t1.jpg') }}" />
                      
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('public/assets/images/testimonials/t2.jpg') }}" />
                    </div>
                    <div class="swiper-slide">
                      <img src="{{ asset('public/assets/images/testimonials/t3.jpg') }}" />
                    </div>
                  </div>
                </div>

                <div class="prevNext">
                  <button class="testimonial-prev">
                    <i class="fa-solid fa-left-long"></i>
                  </button>
                  <button class="testimonial-next">
                    <i class="fa-solid fa-right-long"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>

  

        <!-- Tabs -->
        
        <div class="container">
          <div class="yoso-break">
            <img src="  {{ asset('public/assets/images/star.png') }}" alt="Star" />    
          </div>
        </div>
        <div class="container">
          <!-- Yoso Faqs -->
          <section class="yoso-faqs p-5">
            <div class="row align-items-center">
              <div class="col-md-6 my-4">
               
                <h2 class="yoso-h2">
                  Frequently Asked Question
                </h2>
               
              </div>
              <div class="col-md-5 offset-md-1">
                <div class="accordion" id="yosoFaq">
                  <div class="faq-item">
                    <h2 class="faq-header">
                      <button
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq1"
                        aria-expanded="true"
                        aria-controls="faq1"
                      >
                        What types of websites do you develop?
                        <div class="plusminus"></div>
                      </button>
                    </h2>
                    <div
                      id="faq1"
                      class="collapse show"
                      data-bs-parent="#yosoFaq"
                    >
                      <div class="faq-body">
                        <p class="yoso-desc p-0 m-0">
                          We design and develop all types of websites — from business portfolios and eCommerce stores to custom web applications. Our goal is to deliver user-friendly, responsive, and SEO-optimized websites that match your business goals.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-item">
                    <h2 class="faq-header">
                      <button
                        class="collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq2"
                        aria-expanded="false"
                        aria-controls="faq2"
                      >
                         Do you provide website maintenance and support after development?
                        <div class="plusminus"></div>
                      </button>
                    </h2>
                    <div id="faq2" class="collapse" data-bs-parent="#yosoFaq">
                      <div class="faq-body">
                        <p class="yoso-desc p-0">
                          Yes! We offer complete website maintenance and support packages to ensure your site remains secure, updated, and high-performing. Our team handles everything from content updates to bug fixes.Absolutely! We provide ongoing maintenance, updates,
                          and performance monitoring to ensure your website or
                          digital solution remains efficient, secure, and
                          up-to-date.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="faq-item">
                    <h2 class="faq-header">
                      <button
                        class="collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq3"
                        aria-expanded="false"
                        aria-controls="faq3"
                      >
                        Can you redesign my existing website to make it more modern and responsive?
                        <div class="plusminus"></div>
                      </button>
                    </h2>
                    <div id="faq3" class="collapse" data-bs-parent="#yosoFaq">
                      <div class="faq-body">
                        <p class="yoso-desc p-0">
                          Absolutely. We specialize in website redesigns that enhance speed, functionality, and visual appeal. Whether you need a full revamp or a few improvements, we’ll make your site stand out across all devices.
                        </p>
                      </div>
                    </div>
                  </div>
                   <div class="faq-item">
                    <h2 class="faq-header">
                      <button
                        class="collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq4"
                        aria-expanded="false"
                        aria-controls="faq4"
                      >
                        How long does it take to complete a website project?
                        <div class="plusminus"></div>
                      </button>
                    </h2>
                    <div id="faq4" class="collapse" data-bs-parent="#yosoFaq">
                      <div class="faq-body">
                        <p class="yoso-desc p-0">
                      The project timeline depends on your requirements and complexity. On average, a standard business website takes around 2–4 weeks, while custom or eCommerce websites may take longer. We always share a clear timeline before starting.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- <div class="container">
          <div class="clients yoso-margin">
            <img class="w-100" src="assets/images/client.png" alt="Client" />     
          </div>
        </div> -->


        <!-- Contact form section start -->

<section class="contact_us_section yoso-margin" id="contact">
  <div class="container">
    <div class="row align-items-center">
      

      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="contact-card p-4 p-md-5 shadow-lg">
          <h2 class="mb-4 text-center fw-bold">Let's Start a Conversation</h2>
          <p class="text-center mb-4">Have a project in mind or need help growing your business? Fill out the form and we’ll get back to you shortly.</p>
 <div id="form-messages"></div>
          <form id="contactForm" class="needs-validation" novalidate method="POST">
            @csrf
            <div class="row g-3">

              <div class="col-md-6">
                <label for="service" class="form-label">Service</label>
                <select id="service" class="form-select" name="service">
                  <option value="web-devlopment-and-design">Website Design &amp; IPO Development</option>
                    <option value="application-development">Application Development</option>
                    <option value="software-development">Software Development</option>
                    <option value="all-digital-marketing-services">All Digital Marketing Services</option>
                    <option value="seo">SEO Services</option>
                    <option value="smo">SMO Services</option>
                    <option value="ppc">PPC Services</option>
                    <option value="graphic-designing">Graphic Designing</option>
                    <option value="email-marketing">Email Marketing</option>
                    <option value="others">Others</option>
                </select>
                <div class="text-danger error" id="error-service"></div>
              </div>

              <div class="col-md-6">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" id="website" placeholder="Enter website" name="website">
                  <div class="text-danger error" id="error-website"></div>
              </div>

              <div class="col-md-6">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="fname">
                  <div class="text-danger error" id="error-fname"></div>
              </div>

              <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="lname">
                   <div class="text-danger error" id="error-lname"></div>
              </div>

              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                   <div class="text-danger error" id="error-email"></div>
              </div>

              <div class="col-md-6">
                <label for="phone" class="form-label">Phone</label>
                <div class="input-group">
                   <span class="input-group-text">
                        <select class="border-0 bg-white" name="countrycode">
                            <option>+1</option>
                            <option>+91</option>
                        </select>
                        <div class="text-danger error" id="error-countrycode"></div>
                    </span>
                  <input type="text" class="form-control" name="number" id="phone" placeholder="Enter phone number">
                    <div class="text-danger error" id="error-number"></div>
                </div>
              </div>



              <div class="col-12 mt-4">
                <button type="submit" class="btn contact-btn w-100">Send Message</button>
              </div>

            </div>
          </form>
        </div>
      </div>

  
      <div class="col-lg-6 position-relative text-center">
        <div class="contact-image-wrapper">
          <img src="{{ asset('public/assets/images/ahtwcva5c79jeyinmrh6.webp') }}" alt="Contact Us" class="img-fluid rounded contact-image">
         
        </div>
      </div>

    </div>
  </div>
</section>

         <!-- Contact form section end -->
        <footer class="yoso-footer">
          <div class="container">
          
            <div class="footerMain">
              <div class="row">
                <div class="col-md-5">
                  <div class="logo">
                        <img
                          src="{{ asset('public/assets/images/header/codewebbyte_landing.png') }}"    
                          alt="Icon"
                        />
                      </div>
                  <p class="yoso-desc">
                    Improve efficiency, provide a better Customer experience
                    with modern Technolo services available
                  </p>
                </div>
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-5 tab-50">
                      <h4 class="yoso-h4 mb-5 headingLight">Quick Links</h4>
                      <ul class="list-unstyled footerLinks">
                        <li>
                          <a href="#about">About Us</a>
                          
                        </li>
                        <li>
                          <a href="#contact">Contact Us</a>
                        
                        </li>
                        <li>
                          <a href="#services">Our Services</a>
                         
                        </li>
                      
                      </ul>
                    </div>
                   
                    <div class="col-md-7 tab-50">
                      <h4 class="yoso-h4 mb-5 headingLight">Contact Us</h4>
                      <ul class="list-unstyled footerLinks">
                        <li>
                          <a href="mailto:info@codewebbytesllc.com">info@codewebbytesllc.com</a>
                        
                        </li>

                         <li>
                          <a href="tel:+1 (805) 498-4719">+1 (805) 498-4719</a>
                          
                        </li>
                      
                        
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright">
          <div class="container">
            <div
              class="w-100 h-100 flex-wrap d-flex align-items-center justify-content-between"
            >
              <div class="copyrightTxt sm-lg-100">
                © Copyright 2025 Yoso All rights reserved.
              </div>
              <!-- <div class="d-flex gap-4 sm-lg-100 flex-wrap">
                <div class="socialIcon">
                  <i class="fa-brands fa-facebook"></i>facebook
                </div>
                <div class="socialIcon">
                  <i class="fa-brands fa-youtube"></i>youtube
                </div>
                <div class="socialIcon">
                  <i class="fa-brands fa-linkedin"></i>Linkedin
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </main>
    </div>
    <div class="cursor"></div>
    <button id="backToTop" class="back-to-top">↑ Top</button>

    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  
    <script src="{{ asset('public/assets/dist/libraries/jquery-3.7.1.min.js') }}"></script>

      <script src="{{ asset('public/assets/dist/framework/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- <script src="assets/dist/framework/bootstrap/js/bootstrap.min.js"></script> -->
     
    <script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.6.0/jquery.marquee.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('public/assets/dist/libraries/swiperSlider/effects/spring-slider.js') }}"></script>
    <!-- <script src="assets/dist/libraries/swiperSlider/effects/spring-slider.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.8.4/smooth-scrollbar.min.js"></script>

    <script src="{{ asset('public/assets/dist/js/custom.js') }}"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script>
        $(document).ready(function() {
            $("#contactForm").on("submit", function(e) {
                e.preventDefault();

                let form = $(this);
                let submitBtn = form.find("button[type='submit']");

                // disable button without changing color
                submitBtn.css("pointer-events", "none").text("Sending..");

                let formData = form.serialize();

                $.ajax({
                    url: "{{ route('contact.submit') }}",
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#form-messages").html(
                            '<div class="alert alert-success">' + response.message +
                            '</div>'
                        );

                        form[0].reset();
                        $(".error").html("");
                        form.find(".form-control, .form-select").removeClass("is-invalid");

                        // re-enable button
                        submitBtn.css("pointer-events", "auto").text("Send Message");

                        setTimeout(function() {
                            $("#form-messages .alert-success").fadeOut('slow',
                                function() {
                                    $(this).remove();
                                });
                        }, 3000);
                    },
                    error: function(xhr) {
                        // re-enable button on error
                        submitBtn.css("pointer-events", "auto").text("Send Message");

                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $(".error").html("");
                            $(".form-control, .form-select").removeClass("is-invalid");

                            $.each(errors, function(key, value) {
                                $("#error-" + key).html(value[0]);
                                $("[name=" + key + "]").addClass("is-invalid");
                            });
                        } else {
                            $("#form-messages").html(
                                '<div class="alert alert-danger">Something went wrong. Please try again.</div>'
                            );
                        }
                    }
                });
            });
        });
    </script>


  </body>
</html>
