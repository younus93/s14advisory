<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>S14Advisory</title>
    <meta charset="UTF-8">
    <!-- <meta name="description" content="S14 Advisory Company Limited is the SEC certified in March 2016 and proudly serves the nation's leading companies, small to medium-sized businesses, and other institutions">
    <meta property="og:title" content="s14advisory" />
    <meta property="og:url" content="https://s14advisory.com" />
    <meta property="og:description" content="S14 Advisory Company Limited is the SEC certified in March 2016 and proudly serves the nation's leading companies, small to medium-sized businesses, and other institutions">
    <meta property="og:image" content="/img/logos/logo-preview.png"> -->

    <!-- fb & Whatsapp -->

    <!-- Site Name, Title, and Description to be displayed -->
    <meta property="og:site_name" content="S14Advisory">
    <meta property="og:title" content="S14Advisory">
    <meta property="og:description" content="S14 Advisory Company Limited is the SEC certified in March 2016 and proudly serves the nation's leading companies, small to medium-sized businesses, and other institutions">

    <!-- Image to display -->
    <!-- Replace   «example.com/image01.jpg» with your own -->
    <meta property="og:image" content="https://s14advisory.com/img/logos/logo-preview.png">

    <!-- No need to change anything here -->
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/jpeg">

    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="90">
    <meta property="og:image:height" content="90">

    <!-- Website to visit when clicked in fb or WhatsApp-->
    <meta property="og:url" content="https://s14advisory.com">

    <link rel="shortcut icon" href="/img/logos/logo-preview.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/icomoon.css')  }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')  }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navigation.css')  }}" id="navigation_menu">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/default.css')  }}">
    <link rel='stylesheet' type="text/css" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css')  }}" id="main_styles">
    <script src="{{ asset('js/map.js')  }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
          <!--Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140816428-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-140816428-1');
    </script>

    @yield('head')
    <style>
        body{
            position: relative;
        }
    </style>
</head>

<body>
<div id="preloader">
    <div class="row loader">
        <div class="loader-icon"></div>
    </div>
</div>
<div id="top-bar" class="hidden-md-down">
    <div class="container for-large-window">
        <div class="row">
            <div class="col-md-12 col-12">
                <ul class="top-bar-info h-100 m-0 d-flex justify-content-between">
                    <li>
                        <!-- <i class="fas fa-map-marker-alt"></i> -->
                        <img src="/img/icons/address.png" style="width: 24px;padding-right:8px;"/>
                        Klongtoey, Bangkok 10110
                    </li>
                    <li>
                        <!-- <i class="fas fa-phone-square"></i>  -->
                        <img src="/img/icons/telephone.png" style="width: 24px;padding-right:8px;"/>
                        Phone: +66 2661 9955-8
                    </li>
                    <li>
                        <!-- <i class="fa fa-envelope"></i> -->
                        <img src="/img/icons/email.png" style="width: 24px;padding-right:8px;"/>
                        Email: info@s14advisory.com
                    </li>
                    <ul class="social-icons">
                        <li><a href="/lang/en">EN</a></li>
                        <li><a href="/lang/th">TH</a></li>
                    </ul>
                </ul>
            </div>
            <!-- <div class="col-md-3 col-12">
                <ul class="social-icons hidden-sm">
                    <li><a href="/lang/en">EN</a></li>
                    <li><a href="/lang/th">TH</a></li>
                </ul>
            </div> -->
        </div>
    </div>
</div>

<header @if(request()->path() == '/') id="nav-transparent" @endif>
    <nav id="navigation4" class="container navigation for-large-window fapp">
        <div class="nav-header">
            <a class="nav-brand" href="/">
                <img src="/img/logos/logo.png" style="max-height: 50px;" alt="logo" id="main_logo"></a>
            @if(request()->path() == '/')
                <img src="/img/logos/logo.png" alt="logo" id="light_logo"
                     style="display: inline-block; max-height: 50px;">
            @endif
            <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper" id="navWrapper">
            <ul class="nav-menu align-to-right">
                @if(request()->path() == '/')
                    <li>
                        <a href="#home" id='home_link'>Home</a>
                    </li>
                    <li>
                        <a href="#about">About Us</a>
                    </li>
                    <!-- <li>
                        <a href="#values">Our Values</a>
                    </li> -->
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <!-- <li>
                        <a href="{{ url("our-clients") }}">Our Clients</a>
                    </li> -->
                    <!-- <li> -->
                        <!-- <a href="#team">Our Team</a> -->
                    <!-- </li> -->
                    <li>
                        <a href="/track-records">Track Records</a>
                    </li>
                    <li>
                        <a href="/careers">Careers</a>
                    </li>
                    <li>
                        <a href="#contact">Contact Us</a>
                    </li>
                @elseif(request()->path() == 'track-records')
                    <li>
                        <a href="#client-sec">Our Clients</a>
                    </li>
                    <li>
                        <a href="/">Return Home</a>
                    </li>
                @else
                    <li>
                        <a href="/team">Our Team</a>
                    </li>
                    <li>
                        <a href="/">Return Home</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</header>

@yield('content')

<footer class="footer-style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
                <h3>About Us</h3><a href="#"><img src="/img/logos/logoWhite.png" style="max-height: 75px;"
                                                  alt="img"></a>
                <div class="mt-20">
                    <p>Financial Advisory Services</p>
                </div>
                <ul class="footer-style-1-social-links">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/s14advisory">
                            <!-- <i class="fab fa-facebook-square"></i> -->
                            <img src="/img/icons/facebook.png"/>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/s14-advisory-company-limited">
                            <img src="/img/icons/linkedin.png"/>
                        </a>
                    </li>
                    <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-skype"></i></a></li> -->
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <h3>Contact Info</h3>
                <ul class="footer-style-1-contact-info">
                    <li>
                        <!-- <i class="fa fa-phone"></i>  -->
                        <img src="/img/icons/telephone.png" style="width: 14px;margin-right:6px;"/>
                        <span>+66 2661 9955-8</span>
                    </li>
                    <li class="d-flex align-items-baseline">
                        <img src="/img/icons/working-hours.png" style="width: 14px;margin-right:6px;"/>
                        <!-- <i class="fa fa-map-marker-alt"></i> -->
                        <div class="ml-1">
                            <!-- <p class="mb-0">Working hours</p> -->
                            <p class="mb-0">Weekdays: 08.00 - 19.00</p>
                            <p class="mb-0" style="margin-left:-24px;">Weekends: Closed</p>
                        </div> 
                    </li>
                    <li>
                        <img src="/img/icons/email.png" style="width: 14px;margin-right:6px;"/>
                        <!-- <i class="fa fa-envelope-open"></i>  -->
                        <span>info@s14advisory.com</span>
                    </li>
                    <li>
                        <img src="/img/icons/address.png" style="width: 14px;margin-right:6px;"/>
                        <!-- <i class="fa fa-map-marker-alt"></i>  -->
                        <span>Klongtoey, Bangkok 10110</span>
                    </li>      
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <h3>Quick Links</h3>
                <ul class="footer-style-1-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#values">Our Values</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="/team">Our Team</a></li>
                    <li><a href="/track-records">Our Clients</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-style-1-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <h5>S14 Advisory Company Limited 2019.</h5>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <ul class="footer-style-1-bar-links">
                        <!-- <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>
<script src="{{ asset('js/jquery.min.js')  }}"></script>
<script src="{{ asset('js/plugins.js')  }}"></script>
<script src="{{ asset('js/navigation.js')  }}"></script>
<script src="{{ asset('js/navigation.fixed.js')  }}"></script>
<script src="{{ asset('js/owl.carousel.min.js')  }}"></script>
<script src="{{ asset('js/filterizr.min.js')  }}"></script>
<script src="{{ asset('js/main.js')  }}"></script>


<script>
    $(document).on('click', 'a[href^="#"]', function (e) {
        // target element id
        var id = $(this).attr('href');

        // target element
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }

        // prevent standard hash navigation (avoid blinking in IE)
        e.preventDefault();

        // top position relative to the document
        var pos = $id.offset().top - 60;

        // animated top scrolling
        $('body, html').animate({scrollTop: pos}, 2000);
    });
    $(document).ready(function(){
        $('#home_link').hide()
        $(document).scroll(function(){
            if(document.querySelector('#nav-transparent .nav-white-bg')){
                $('#home_link').show()
            }
            else{
                $('#home_link').hide()
            }
        })
    })
</script>

@yield('scripts')

</body>


</html>
