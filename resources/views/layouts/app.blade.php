<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>S14Advisory</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logos/logo-shortcut.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css" id="navigation_menu">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css" id="main_styles">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
</head>

<body>
<div id="preloader">
    <div class="row loader">
        <div class="loader-icon"></div>
    </div>
</div>
<div id="top-bar" class="hidden-md-down">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-12">
                <ul class="top-bar-info">
                    <li><i class="fas fa-map-marker-alt"></i>Klongtoey, Bangkok 10100</li>
                    <li><i class="fas fa-phone-square"></i> Phone: +1-23-456789</li>
                    <li><i class="fa fa-envelope"></i>Email: info@s14advisory.com</li>
                </ul>
            </div>
            <div class="col-md-3 col-12">
                <ul class="social-icons hidden-sm">
                    <li><a href="#">EN</a></li>
                    <li><a href="#">TH</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header>
    <nav id="navigation4" class="container navigation">
        <div class="nav-header">
            <a class="nav-brand" href="/"><img src="img/logos/blackLogo.png" style="max-height: 40px;" alt="logo"
                                               id="main_logo"></a>
            <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
                <li>
                    <a href="#home">Home</a>
                </li>
                <li>
                    <a href="#about">About Us</a>
                </li>
                <li>
                    <a href="#services">Our Services</a>
                </li>
                <li>
                    <a href="#team">Our Team</a>
                </li>
                <li>
                    <a href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

@yield('content')

<footer class="footer-style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
                <h3>About Us</h3><a href="#"><img src="img/logos/logo.png" style="max-height: 75px;" alt="img"></a>
                <div class="mt-20">
                    <p>Financial Advisory Services</p>
                </div>
                <ul class="footer-style-1-social-links">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <h3>Contact Info</h3>
                <ul class="footer-style-1-contact-info">
                    <li><i class="fa fa-phone"></i> <span>+11 (0) 123 456 7890</span></li>
                    <li><i class="fa fa-envelope-open"></i> <span>info@s14advisory.com</span></li>
                    <li><i class="fa fa-map-marker-alt"></i> <span>Klongtoey, Bangkok 10100</span></li>
                    <li><i class="fa fa-phone-square"></i> <span>+11 (0) 123 456 7890</span></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <h3>Quick Links</h3>
                <ul class="footer-style-1-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Company History</a></li>
                    <li><a href="#">Recent Posts</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-style-1-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <h5>S14 Advisory Limited</h5>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <ul class="footer-style-1-bar-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>



<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>
<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/navigation.js"></script>
<script src="js/navigation.fixed.js"></script>
<script src="js/map.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).on('click', 'a[href^="#"]', function(e) {
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
        $('body, html').animate({scrollTop: pos},2000);
    });
</script>
</body>

</html>
