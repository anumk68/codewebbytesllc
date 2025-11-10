 @extends('frontend.layouts.app')
 @section('title', 'Blog - Code Web Bytes LLC')
 @section('meta_description',
     'Explore insights and tips on digital marketing, SEO, and web growth on the Code Web Bytes
     LLC Blog. Read now!')
 @section('content')

     <section class="about-banner text-center"
         style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('public/assets/img/about.webp');">
         <div class="container">
             <h1>Blog</h1>
         </div>
     </section>

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
                                 alt="best web development agency">
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
                                 alt="top web development agency">
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
                                 alt="digital marketing service provider">
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

 @endsection
