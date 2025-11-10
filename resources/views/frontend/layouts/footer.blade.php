<!-- resources/views/frontend/layouts/footer.blade.php -->

<footer class="site-footer pt-6 pb-4 text-light">
  <div class="container">
    <!-- Top: Logo + Newsletter -->
    <div class="row g-4 align-items-center mb-5">
      <div class="col-lg-6">
        <a href="{{ route('home') }}" class="d-inline-flex align-items-center gap-3 text-decoration-none">
          <img src="{{ asset('public/assets/img/main_logo.png') }}" alt="Code Web Bytes LLC" class="rounded logo-f shadow-sm">
        </a>
      </div>
      <div class="col-lg-6">
        <form class="newsletter d-flex bg-white rounded-pill p-1 shadow-sm" novalidate>
          <input type="email" class="form-control border-0 px-3 rounded-pill" placeholder="sample@mail.com" required>
          <button class="btn btn-accent rounded-pill px-3 ms-1" type="submit">Subscribe</button>
        </form>
        <small class="text-muted d-block mt-2 ms-2">We respect your privacy</small>
      </div>
    </div>

    <!-- Middle: 4 Columns -->
    <div class="row g-4">
      <!-- About -->
      <div class="col-md-3">
        <h5 class="ft-title">About Us</h5>
        <p class="ft-text">
          At Code Web Bytes LLC, we know how important it is for your business to find the right Digital Marketing Agency.
        </p>
        <div class="d-flex gap-2 mt-3">
          <a class="social" href="#"><i class="bi bi-facebook"></i></a>
          <a class="social" href="#"><i class="bi bi-instagram"></i></a>
          <a class="social" href="#"><i class="bi bi-linkedin"></i></a>
          <a class="social" href="#"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

      <!-- Services -->
      <div class="col-md-3">
        <h5 class="ft-title">Services</h5>
        <ul class="list-unstyled vstack gap-2">
          <li><a class="ft-link" href="{{ route('best.web.dev') }}">Website Development</a></li>
          <li><a class="ft-link" href="{{ route('best.web.design') }}">Website Designing</a></li>
          <li><a class="ft-link" href="{{ route('best.local.seo') }}">Local SEO</a></li>
          <li><a class="ft-link" href="{{ route('best.seo') }}">SEO Services</a></li>
          <li><a class="ft-link" href="{{ route('ppc.management') }}">PPC Services</a></li>
        </ul>
      </div>

      <!-- Quick Links -->
      <div class="col-md-3">
        <h5 class="ft-title">Quick Links</h5>
        <ul class="list-unstyled vstack gap-2">
          <li><a class="ft-link" href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
          <li><a class="ft-link" href="{{ route('refund.policy') }}">Refund Policy</a></li>
          <li><a class="ft-link" href="{{ route('terms.conditions') }}">Terms & Conditions</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-3">
        <h5 class="ft-title">Office Address</h5>
        <ul class="list-unstyled vstack gap-2 small">
          <li class="d-flex gap-2">
            <i class="bi bi-telephone"></i>
            <a class="ft-link" href="tel:+18054984719">+1 (805) 498-4719</a>
          </li>
          <li class="d-flex gap-2">
            <i class="bi bi-envelope"></i>
            <a class="ft-link" href="mailto:info@codewebbytesllc.com">info@codewebbytesllc.com</a>
          </li>
          <li class="d-flex gap-2">
            <i class="bi bi-geo-alt"></i>
            <span>2501 148TH AVE SE APT F5, BELLEVUE, WA, 98007-6434, US</span>
          </li>
           <li class="d-flex gap-2">
            <span>Application Number: OLA 111419823</span>
          </li>
           <li class="d-flex gap-2">
             <span> All transactions are processed in the selected  cards</span>
          </li>
           <li class="d-flex gap-2">
              <img src="{{ asset('public/assets/img/33.png') }}" alt="Visa" width="50">
              <img src="{{ asset('public/assets/img/333.png') }}" alt="Mastercard" width="50">
              <img src="{{ asset('public/assets/img/999.png') }}" alt="Amex" width="50">
               <img src="{{ asset('public/assets/img/0000.png') }}" alt="discover" width="50">
                <img src="{{ asset('public/assets/img/auth-icon.png') }}" alt="discover" width="50">
          </li>
        </ul>
      </div>
    </div>

    <!-- Bottom bar -->
    <hr class="ft-sep my-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 small opacity-75">
      <div>© 2025, CodeWebBytes LLC. All rights reserved</div>
       <span class="ft-link d-inline-flex align-items-center gap-2">
       Hosted With Hostinger
      </span>
      <a href="#" class="ft-link d-inline-flex align-items-center gap-2">
        <i class="bi bi-arrow-up-short fs-5"></i>Back to top
      </a>
    </div>
  </div>
</footer>
