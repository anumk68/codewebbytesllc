<!-- Topbar -->
<div class="topbar py-1 d-none d-lg-block">
    <div class="container d-flex justify-content-between small">
        <div>
            <i class="bi bi-envelope"></i>
            <a href="mailto:info@codewebbytesllc.com"
                class="link-light text-decoration-none">info@codewebbytesllc.com</a>
        </div>
        <div class="d-flex gap-3 align-items-center">
            <a href="#" class="link-light"><i class="bi bi-facebook"></i></a>
            <a href="#" class="link-light"><i class="bi bi-instagram"></i></a>
            <a href="#" class="link-light"><i class="bi bi-linkedin"></i></a>
             <a href="tel:+18054984719"
                class="link-light text-decoration-none">      <i class="bi bi-telephone"></i>: +1 (805) 498-4719</a>
        </div>

        

        
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-sticky py-2">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="{{ route('home') }}">
            <img src="{{ asset('public/assets/img/main_logo.png') }}" alt width="100" height="100">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNav" aria-controls="offcanvasNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNav">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>

                    <!-- Digital Marketing -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="digitalDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Digital Marketing
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="digitalDropdown">
                            <li><a class="dropdown-item" href="{{ route('best.seo') }}">SEO Services</a></li>
                            <li><a class="dropdown-item" href="{{ route('best.local.seo') }}">Local SEO</a></li>
                            <li><a class="dropdown-item" href="{{ route('ecommerce.seo') }}">Ecommerce SEO</a></li>
                            <li><a class="dropdown-item" href="{{ route('content.marketing') }}">Content Marketing</a></li>
                            <li><a class="dropdown-item" href="{{ route('ppc.management') }}">PPC Services</a></li>
                            <li><a class="dropdown-item" href="{{ route('social.media.marketing') }}">Social Media Marketing</a></li>
                        </ul>
                    </li>

                    <!-- Web Services -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="webDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Web Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="webDropdown">
                            <li><a class="dropdown-item" href="{{ route('best.web.dev') }}">Web Development</a></li>
                            <li><a class="dropdown-item" href="{{ route('best.web.design') }}">Web Designing</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('stripe.form') }}">Payment</a></li>

                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary rounded-pill" href="tel:+1 (805) 498-4719">Get a Free Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

