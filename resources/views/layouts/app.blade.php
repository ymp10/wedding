<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpOceans">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <title> Habibi - Wedding & Wedding Planner HTML5 Template</title>
    <link href="{{ asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/sass/style.css" rel="stylesheet">
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.gif" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->
        <!-- Start header -->
        <header id="header">
            <div class="wpo-site-header">
                <nav class="navigation navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                                <div class="mobail-menu">
                                    <button type="button" class="navbar-toggler open-btn">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar first-angle"></span>
                                        <span class="icon-bar middle-angle"></span>
                                        <span class="icon-bar last-angle"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-6">
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="{{route('home')}}">Habibi</a> 
                                    {{-- home logo --}}
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-1">
                                <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                    <button class="menu-close"><i class="ti-close"></i></button>
                                    <ul class="nav navbar-nav mb-2 mb-lg-0">
                                        <li class="menu-item-has-children">
                                            <a class="active" href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Wedding Home 1</a></li>
                                                <li><a class="active" href="index-2.html">Wedding Home 2</a></li>
                                                <li><a href="index-3.html">Announcement Home 1</a></li>
                                                <li><a href="index-4.html">Announcement Home 2</a></li>
                                                <li><a href="index-5.html">Muslim Wedding Home</a></li>
                                                <li><a href="index-6.html">Asian Wedding Home</a></li>
                                                <li><a href="index-rtl.html">Muslim Wedding Home(RTL)</a></li>
                                                <li><a href="invitation-1.html">Wedding Invitation 1</a></li>
                                                <li><a href="invitation-2.html">Wedding Invitation 2</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Event Planner Homes</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="index-7.html">Wedding Planner 1</a></li>
                                                        <li><a href="index-8.html">Wedding Planner 2</a></li>
                                                        <li><a href="index-9.html">Wedding Planner 3</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Wedding Shop Homes</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop-home.html">Bridal Shop</a></li>
                                                        <li><a href="shop-home-2.html">Wedding Bouquet Shop</a></li>
                                                        <li><a href="shop-home-video-bg.html">Bouquet Shop Video Bg</a></li>
                                                        <li><a href="shop-home-3.html">Wedding Cake Shop</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('about')}}">About</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="story.html">Our Story</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="story.html">Our Story Style 1</a></li>
                                                        <li><a href="story-2.html">Our Story Style 2</a></li>
                                                        <li><a href="story-3.html">Our Story Style 3</a></li>
                                                        <li><a href="story-4.html">Our Story Style 4</a></li>
                                                        <li><a href="story-5.html">Our Story Style 5</a></li>
                                                        <li><a href="story-6.html">Our Story Style 6</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="accomodation.html">Accomodation</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="rsvp.html">RSVP</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="rsvp.html">RSVP Style 1</a></li>
                                                        <li><a href="rsvp-2.html">RSVP Style 2</a></li>
                                                        <li><a href="rsvp-3.html">RSVP Style 3</a></li>
                                                        <li><a href="rsvp-4.html">RSVP Style 4</a></li>
                                                        <li><a href="rsvp-5.html">RSVP Style 5</a></li>
                                                        <li><a href="rsvp-6.html">RSVP Style 6</a></li>
                                                        <li><a href="rsvp-7.html">RSVP Style 7</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="planner.html">Planners</a></li>
                                                <li><a href="team-single.html">Planner Single</a></li>
                                                <li><a href="groom-bride.html">Brides & Grooms</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Serevice</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="service.html">Serevice</a></li>
                                                        <li><a href="service-s2.html">Serevice S2</a></li>
                                                        <li><a href="service-s3.html">Serevice S3</a></li>
                                                        <li><a href="service-single.html">Serevice Single</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Auth Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="login.html">Login</a>
                                                        </li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="forgot.html">Forgot Password</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="coming.html">Coming Soon</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="portfolio-grid.html">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                                                <li><a href="portfolio-masonary.html">Portfolio Masonary</a></li>
                                                <li><a href="portfolio-masonary-s2.html">Portfolio Masonary S2</a></li>
                                                <li><a href="portfolio-masonary-s3.html">Portfolio Masonary S3</a></li>                                     
                                                <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="blog.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog right sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Blog fullwidth</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Blog details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-single.html">Blog details right sidebar</a>
                                                        </li>
                                                        <li><a href="blog-single-left-sidebar.html">Blog details left
                                                                sidebar</a></li>
                                                        <li><a href="blog-single-fullwidth.html">Blog details
                                                                fullwidth</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div><!-- end of nav-collapse -->
                            </div>
                            <div class="col-lg-2 col-md-2 col-2">
                                <div class="header-right">
                                    <div class="header-search-form-wrapper">
                                        <div class="cart-search-contact">
                                            <button class="search-toggle-btn"><i
                                                    class="fi flaticon-search"></i></button>
                                            <div class="header-search-form">
                                                <form>
                                                    <div>
                                                        <input type="text" class="form-control"
                                                            placeholder="Search here...">
                                                        <button type="submit"><i
                                                                class="fi flaticon-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini-cart">
                                        <button class="cart-toggle-btn"> <i class="fi flaticon-shopping-cart"></i>
                                            <span class="cart-count">2</span></button>
                                        <div class="mini-cart-content">
                                            <button class="mini-cart-close"><i class="ti-close"></i></button>
                                            <div class="mini-cart-items">
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img
                                                                src="assets/images/shop/mini-cart/img-1.jpg" alt></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Wedding Gown</a>
                                                        <span class="mini-cart-item-price">$20.15 x 1</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i
                                                                    class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                                <div class="mini-cart-item clearfix">
                                                    <div class="mini-cart-item-image">
                                                        <a href="shop.html"><img
                                                                src="assets/images/shop/mini-cart/img-2.jpg" alt></a>
                                                    </div>
                                                    <div class="mini-cart-item-des">
                                                        <a href="shop.html">Bridal Flower</a>
                                                        <span class="mini-cart-item-price">$13.25 x 2</span>
                                                        <span class="mini-cart-item-quantity"><a href="#"><i
                                                                    class="ti-close"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mini-cart-action clearfix">
                                                <span class="mini-checkout-price">Subtotal:
                                                    <span>$215.14</span></span>
                                                <div class="mini-btn">
                                                    <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                                    <a href="cart.html" class="view-cart-btn">View Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of container -->
                </nav>
            </div>
        </header>
        <!-- end of header -->
        <!-- start of hero -->
       @yield('content')

        <!-- start of wpo-site-footer-section -->
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Links</h3>
                                </div>
                                <div class="link-wrap">
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="rsvp.html">RSVP</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="index.html">Get Quote</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-6 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <a class="logo" href="index.html">Habibi</a>
                                </div>
                                <p>We can’t wait to see all of our beloved friends
                                    and relative s at our wedding.</p>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-xl-3  col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <div class="contact-ft">
                                    <p>Habibi@wpoceans.com</p>
                                    <p>4517 Washington Ave. Manchester,
                                        Kentucky 39495</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright"> &copy; Copyright 2023 | <a href="{{route('home')}}">Habibi</a> | All right
                                reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-shape-1">
                <img src="assets/images/footer-shape-1.svg" alt="">
            </div>
            <div class="ft-shape-2">
                <img src="assets/images/footer-shape-2.svg" alt="">
            </div>
        </footer>
        <!-- end of wpo-site-footer-section -->
        <!-- color-switcher -->
        <div class="color-switcher-wrap">
            <div class="color-switcher-item">
                <div class="color-toggle-btn">
                    <i class="fa fa-cog"></i>
                </div>
                <ul id="switcher">
                    <li class="btn btn1" id="Button1"></li>
                    <li class="btn btn2" id="Button2"></li>
                    <li class="btn btn3" id="Button3"></li>
                    <li class="btn btn4" id="Button4"></li>
                    <li class="btn btn5" id="Button5"></li>
                    <li class="btn btn6" id="Button6"></li>
                    <li class="btn btn7" id="Button7"></li>
                    <li class="btn btn8" id="Button8"></li>
                    <li class="btn btn9" id="Button9"></li>
                    <li class="btn btn10" id="Button10"></li>
                    <li class="btn btn11" id="Button11"></li>
                    <li class="btn btn12" id="Button12"></li>
                    <li class="btn btn13" id="Button13"></li>
                    <li class="btn btn14" id="Button14"></li>
                    <li class="btn btn15" id="Button15"></li>
                </ul>
            </div>
        </div>

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/moving-animation.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>