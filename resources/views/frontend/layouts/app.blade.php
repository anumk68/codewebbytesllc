<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Code Web Bytes LLC — Digital Marketing & Web Development')</title>
    <meta name="description" content="@yield('meta_description', 'Best Digital Marketing and Web Development Agency in USA')">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Bootstrap Icons for arrow (optional, you already use bi) -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('public/assets/img/Favicon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <!-- Bootstrap 5.3 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme CSS -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/about.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/best-seo-agency.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/ppc-management-services.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/payment.css') }}">


    <link rel="stylesheet" href="{{ asset('public/assets/style.css') }}">
    <meta name="robots" content="index, follow">

    <meta name="google-site-verification" content="M6oRFkCpJ6UP3_qN6zWPazz1Zy7xjgAndc_CwQ47TZI" />
    <meta name="msvalidate.01" content="DBF080E258D5D42B42C8B22A6456FBC8" />
    <meta name="robots" content="index, follow">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BFH230E36N"></script>

     <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfI2gcsAAAAAI3N3nfIaciPkxqF_yRBzvO6WH4g"></script>
  <!-- Your code -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BFH230E36N');
    </script>


    <!-- Event snippet for Submit lead form conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-11508799267/KGDWCOiQo_wZEKOu6e8q'
        });
    </script>


    @verbatim
        <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Code Web Bytes LLC",
      "url": "https://codewebbytesllc.com/",
      "logo": "https://codewebbytesllc.com/public/assets/img/main_logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1 (805) 498-4719",
        "contactType": "technical support",
        "areaServed": "US",
        "availableLanguage": "en"
      }
    }
    </script>
    @endverbatim
</head>

<body>

    @if (request()->segment(1) != 'payment' && request()->segment(2) != 'success')
        @include('frontend.layouts.header')
    @endif


    @yield('content')

    @if (request()->segment(1) != 'payment' && request()->segment(2) != 'success')
        @include('frontend.layouts.footer')
    @endif



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const testiSwiper = new Swiper('.myTestimonialSwiper', {
            speed: 500,
            loop: false,
            grabCursor: true,
            spaceBetween: 24,
            slidesPerView: 1.1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                576: {
                    slidesPerView: 1.2,
                    spaceBetween: 24
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24
                }
            }
        })
    </script>

    <script>
        const workSwiper = new Swiper('.myWorkSwiper', {
            speed: 500,
            loop: false,
            grabCursor: true,
            spaceBetween: 24,
            slidesPerView: 1.1,
            centeredSlides: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                576: {
                    slidesPerView: 1.5,
                    spaceBetween: 24
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24
                }
            }
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll(
                    '.dropdown-submenu > .dropdown-toggle, .dropdown-submenu > a.dropdown-toggle, .dropdown-submenu > a'
                )
                .forEach(function(el) {
                    el.addEventListener('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        const submenu = this.nextElementSibling;
                        this.closest('.dropdown-menu').querySelectorAll('.dropdown-menu.show')
                            .forEach(m => {
                                if (m !== submenu) m.classList.remove('show')
                            });
                        submenu.classList.toggle('show');
                    });
                });
            document.querySelectorAll('.dropdown').forEach(function(dd) {
                dd.addEventListener('hide.bs.dropdown', function() {
                    this.querySelectorAll('.dropdown-menu.show').forEach(m => m.classList.remove(
                        'show'));
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#contactForm").on("submit", function(e) {
                e.preventDefault();

                let form = $(this);
                let submitBtn = form.find("button[type='submit']");

                // disable button without changing color
                submitBtn.css("pointer-events", "none").text("Submitting...");

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
                        submitBtn.css("pointer-events", "auto").text("Submit");

                        setTimeout(function() {
                            $("#form-messages .alert-success").fadeOut('slow',
                                function() {
                                    $(this).remove();
                                });
                        }, 3000);
                    },
                    error: function(xhr) {
                        // re-enable button on error
                        submitBtn.css("pointer-events", "auto").text("Submit");

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
    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Homepage",
    "item": "https://codewebbytesllc.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "About",
    "item": "https://codewebbytesllc.com/about"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "SEO Services",
    "item": "https://codewebbytesllc.com/best-seo-agency"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "Local SEO",
    "item": "https://codewebbytesllc.com/best-local-seo-agency"  
  },{
    "@type": "ListItem", 
    "position": 5, 
    "name": "Ecommerce SEO",
    "item": "https://codewebbytesllc.com/ecommerce-seo-agency"  
  },{
    "@type": "ListItem", 
    "position": 6, 
    "name": "Content Marketing",
    "item": "https://codewebbytesllc.com/content-marketing-agency"  
  },{
    "@type": "ListItem", 
    "position": 7, 
    "name": "PPC Service",
    "item": "https://codewebbytesllc.com/ppc-management-services" 
},{
    "@type": "ListItem", 
    "position": 8, 
    "name": "Content Marketing",
    "item": "https://codewebbytesllc.com/content-marketing-agency" 
},{
    "@type": "ListItem", 
    "position": 9, 
    "name": "Social Media Marketing",
    "item": "https://codewebbytesllc.com/social-media-marketing-agency" 
},{
    "@type": "ListItem", 
    "position": 10, 
    "name": "Web Development",
    "item": "https://codewebbytesllc.com/web-development" 
},{
    "@type": "ListItem", 
    "position": 11, 
    "name": "web design",
    "item": "https://codewebbytesllc.com/best-web-design-agency" 
},{
    "@type": "ListItem", 
    "position": 12, 
    "name": "Blog",
    "item": "https://codewebbytesllc.com/blog" 
},{
    "@type": "ListItem", 
    "position": 13, 
    "name": "Contact Us",
    "item": "https://codewebbytesllc.com/contact-us" 
},{
    "@type": "ListItem", 
    "position": 14, 
    "name": "Payment",
    "item": "https://codewebbytesllc.com/payment" 

  }]
}
</script>
    @endverbatim

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="{{ asset('public/assets/main.js') }}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/68f0bbb06e51e41951dbdcab/1j7m5qah7';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script> --}}
    <!--End of Tawk.to Script-->

    <script>
  function onClick(e) {
    e.preventDefault();
    grecaptcha.enterprise.ready(async () => {
      const token = await grecaptcha.enterprise.execute('6LfI2gcsAAAAAI3N3nfIaciPkxqF_yRBzvO6WH4g', {action: 'LOGIN'});
    });
  }
</script>
</body>

</html>
