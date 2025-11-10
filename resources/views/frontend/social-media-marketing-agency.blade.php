 @extends('frontend.layouts.app')
 @section('title', 'Social Media Marketing Agency | Code Web Bytes LLC')
 @section('meta_description', 'Expand your reach with the Best Social Media Marketing Agency. Code Web Bytes LLC drives engagement
     and growth across platforms.')
 @section('content')

     <!-- Hero -->
     <section class="hero position-relative overflow-hidden">
         <img class="hero-bg" src="{{ asset('public/assets/img/sosel.webp') }}"
             alt="affordable social media marketing services">
         <div class="container position-relative">
             <div class="row align-items-center">
                 <div class="col-lg-6 text-white py-5">
                     <h1 class="display-5 fw-bold">Professional <span class="text-accent">Social Media</span>
                         Marketing Services </h1>
                     <p class="lead opacity-90">Strengthen your digital
                         presence with fact-driven social media
                         plans—highlighted by customized content, steady
                         branding, and ad campaigns on Facebook, Instagram,
                         LinkedIn, and beyond. </p>
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
                     <img class="img-fluid rounded-4 shadow-sm" src="{{ asset('public/assets/img/social.avif') }}"
                         alt="social media marketing services packages">
                 </div>
                 <div class="col-md-6">
                     <h2 class="heading">Social Media Marketing Agency for
                         Powerful Brand Growth
                     </h2>
                     <p>CodeWebBytes LLC is a top-ranking social media
                         marketing agency offering the best, most effective,
                         and result-oriented campaigns. In today’s digital
                         world, one needs a substantial presence on the
                         internet. The affordable social media marketing
                         services here boost your brand, attract potential
                         customers and increase engagement across all social
                         platforms.

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

                     <h2 class="heading">Why Choose Our Social Media
                         Marketing Agency?

                     </h2>
                     <p>We are a niche social media marketing agency. We
                         understand that each brand has customized
                         requirements. Thus, the social media strategists at
                         CodeWebBytes LLC craft and tailor a social media
                         strategy based on your needs, goals, target
                         audience, and industry trends. All this is backed by
                         in-depth knowledge of social algorithms, designing
                         and creating content, and successful audience
                         engagement to deliver valuable results without
                         burning a hole in your pocket.

                     </p>
                     <p>Our social media marketing service is affordable and
                         high-quality, bridging gaps from startups to
                         established business organizations and even
                         individual brands. We have a team of professionals
                         deeply rooted in data-driven insights and innovative
                         strategies at the helm to ensure your brand’s
                         success.

                     </p>
                     <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                         A Free Quote →</a>

                 </div>

                 <div class="col-md-6">
                     <img class="img-fluid rounded-4 shadow-sm"
                         src="{{ asset('public/assets/img/person-is-using-phone-with-icons-screen_1014754-797.avif') }}"
                         alt="social media marketing agency">
                 </div>

             </div>
         </div>
     </section>

     <!--Why Choose  end  -->
     <!-- Ready to Discover -->
     <section id="get-start" class="pb-5 py-6">
         <div class="container">
             <div class="get-offer text-center">
                 <div class="text-center mb-5">

                     <h2 class="heading">Ready to Discover How Our Social
                         Media Marketing Agency Can Drive Engagement and
                         Boost Revenue?
                     </h2>
                     <p>Schedule a Social Media Strategy Session with one of
                         our strategists. CodeWebBytes LLC understands the
                         multiple steps it takes to establish your brand's
                         social media presence—without the multiple zeros on
                         the price tag of social media marketing. From
                         optimized content strategies to targeted ad
                         campaigns, we ensure measurable growth and ROI
                         results.

                     </p>
                 </div>
                 <a href="{{ route('contact') }}" class="btn btn-accent btn-lg rounded-pill mt-2 hover-c">Get
                     a Free Consultant
                     →</a>
             </div>
         </div>
     </section>

     <!-- Ready to Discover  end-->

     <!-- Our Approach to end-->

     <section class="py-6">
         <div class="container">
             <div class="mb-5">
                 <span class="eyebrow">Our Approach to</span>
                 <h2 class="heading">Social Media Marketing Fundamentals

                 </h2>
                 <p>The results speak for themselves in the CodeWebBytes LLC
                     story. With a deep and impactful approach towards social
                     media fundamentals, we have assisted businesses of all
                     sizes in obtaining impactful growth. This is a look at
                     what we deliver:

                 </p>
             </div>

             <div class="row">
                 <!-- Tabs -->
                 <div class="col-md-3">
                     <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                         <li class="nav-item">
                             <button class="nav-link ppc-t active" id="tab1-tab" data-bs-toggle="pill"
                                 data-bs-target="#tab1" type="button" role="tab">
                                 Understood audience
                             </button>
                         </li>
                         <li class="nav-item">
                             <button class="nav-link ppc-t" id="tab2-tab" data-bs-toggle="pill" data-bs-target="#tab2"
                                 type="button" role="tab">
                                 Platform-Specific Strategies
                             </button>
                         </li>
                         <li class="nav-item">
                             <button class="nav-link ppc-t" id="tab3-tab" data-bs-toggle="pill" data-bs-target="#tab3"
                                 type="button" role="tab">
                                 Creative Content Creation
                             </button>
                         </li>
                     </ul>
                 </div>

                 <!-- Tab Content -->
                 <div class="col-md-9">
                     <div class="tab-content" id="v-pills-tabContent">
                         <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                             <p>In-depth audience analysis with our clients
                                 has made us elevate their engagement rates
                                 to 70% within the first few months of
                                 working together. Knowing who your audience
                                 is helps create the connection that best
                                 resonates with them.

                             </p>
                         </div>
                         <div class="tab-pane fade" id="tab2" role="tabpanel">
                             <p>We tailor our approach to every social
                                 platform for which we work, and we have seen
                                 our clients' followers on Instagram grow by
                                 40% and reach on LinkedIn increase by 55%.
                                 Every platform works differently, plays with
                                 different strengths, and uses the same
                                 concept to your advantage.

                             </p>
                         </div>
                         <div class="tab-pane fade" id="tab3" role="tabpanel">
                             <p>Believe it or not, imaginative and compelling
                                 content has driven three times more shares
                                 and saved on client post activities. Organic
                                 growth occurs when people share what they
                                 have put out there with others. Creativity
                                 is critical: We know how to make your brand
                                 shine.

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

                 <h2 class="heading">Why Social Media Marketing Matters for
                     Your Business

                 </h2>
                 <p>Billions of users across various social platforms mean
                     that your business can afford to take advantage of the
                     availability of social media marketing services
                     packages. These services are very critical in the
                     following areas:

                 </p>
             </div>
             <div class="row g-4">
                 <div class="col-md-6 col-lg-3">
                     <div class="card service h-100">
                         <div class="card-body">
                             <div class="service-icon"><i class="fa-solid fa-thumbs-up"></i></div>
                             <h5>Brand Awareness</h5>
                             <p>Set up your business as your industry leader.

                             </p>

                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="card service h-100">
                         <div class="card-body">
                             <div class="service-icon"><i class="fa-solid fa-chart-simple"></i></div>
                             <h5>Engagement for Customers
                             </h5>
                             <p>Create an army of loyal fans and keep
                                 eyeballs on the same crowd with increasingly
                                 new and relevant material.

                             </p>

                         </div>
                     </div>
                 </div>
                 <div class="col-md-6 col-lg-3">
                     <div class="card service h-100">
                         <div class="card-body">
                             <div class="service-icon"><i class="fa-solid fa-desktop"></i></div>
                             <h5>Lead Generation
                             </h5>
                             <p>Engage on Social Media-Sanctioned Channels:
                                 Social engagement can be converted into
                                 leads and business sales.

                             </p>

                         </div>
                     </div>
                 </div>

                 <div class="col-md-6 col-lg-3">
                     <div class="card service h-100">
                         <div class="card-body">
                             <div class="service-icon"><i class="fa-solid fa-address-book"></i></div>
                             <h5>Cost-Effective Advertising

                             </h5>
                             <p>You can reach a larger audience using
                                 targeted social media ads without busting
                                 your budget.

                             </p>

                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </section>
 @endsection
