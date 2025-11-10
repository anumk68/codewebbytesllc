<div class="form-shell p-4 p-md-5">
    <h3 class="hero-title mb-3">Let’s Get The Conversation<br>Started <span class="off">50% Off</span></h3>
    <p class="hero-note mb-4">Please fill the following form to Get a Free Consultation</p>
    {{-- Show All Errors on Top --}}
    <div id="form-messages"></div>

    <form id="contactForm" class="needs-validation" novalidate method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Service</label>
                <select class="form-select" required name="service">

                    <option selected="" disabled="" value="">Select Service</option>
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
                <label class="form-label">Website</label>
                <input type="url" class="form-control" placeholder="Enter website" name="website" required>
                <div class="text-danger error" id="error-website"></div>
            </div>
            <div class="col-md-6">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" placeholder="Enter first name" name="fname" required>
                <div class="text-danger error" id="error-fname"></div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" placeholder="Enter last name" name="lname" required>
                <div class="text-danger error" id="error-lname"></div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                <div class="text-danger error" id="error-email"></div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <select class="border-0 bg-white" name="countrycode">
                            <option>+1</option>
                            <option>+91</option>
                        </select>
                        <div class="text-danger error" id="error-countrycode"></div>
                    </span>
                    <input type="tel" class="form-control" name="number" placeholder="Enter phone number"
                        pattern="[0-9]{10}" maxlength="10" required>
                    <div class="text-danger error" id="error-number"></div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-accent w-100" type="submit">Submit</button>
            </div>
        </div>
    </form>

</div>
