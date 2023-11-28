@extends('layouts.app')

@section('content')
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>About Us</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="index.html">Home</a></li>
                        <li>About</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->
<!-- start wpo-about-section -->
<section class="wpo-about-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                <div class="wpo-section-title">
                    <span>Who We Are?</span>
                    <h2>We are The World Best Wedding Agency</h2>
                </div>
            </div>
        </div>
        <div class="wpo-about-wrap">
            <div class="row align-items-center">
                <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-text wow fadeInLeftSlow" data-wow-duration="1000ms">
                        <p><small></small>{{$about->description}}</p>
                        <div class="about-info">
                            <h5>Kristin Watson</h5>
                            <span>- CEO of the company</span>
                        </div>
                        <div class="about-sign">
                            <img src="assets/images/about/signature.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="wpo-about-img wow fadeInRightSlow" data-wow-duration="1000ms">
                        <div class="about-right-img">
                            <img src="assets/images/about/img-2.jpg" alt="">

                            <div class="about-right-img-inner">
                                <img src="assets/images/about/img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end Service-section -->

<!-- start wpo-fun-fact-section -->
<section class="wpo-fun-fact-section section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-fun-fact-grids clearfix">
                    <div class="grid">
                        <div class="info">
                            <div class="flower"><img src="assets/images/funfact/1.svg" alt=""></div>
                            <h3><span class="odometer" data-count="3210">00</span>+</h3>
                            <p>Happy Couples</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="info">
                            <div class="flower"><img src="assets/images/funfact/2.svg" alt=""></div>
                            <h3><span class="odometer" data-count="230">00</span>+</h3>
                            <p>Location</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="info">
                            <div class="flower"><img src="assets/images/funfact/3.svg" alt=""></div>
                            <h3><span class="odometer" data-count="3325">00</span>+</h3>
                            <p>Wedding</p>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="info">
                            <div class="flower"><img src="assets/images/funfact/4.svg" alt=""></div>
                            <h3><span class="odometer" data-count="526">00</span>+</h3>
                            <p>Decoration</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end wpo-fun-fact-section -->

<!-- start wpo-service-section -->
<section class="wpo-service-section-s2 section-padding" id="Service">
    <div class="container-fluid">
        <div class="wpo-section-title-s2">
            <span>Our Services</span>
            <h2>What We Offer For You</h2>
        </div>
        <div class="wpo-service-wrap">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="wpo-service-item wow fadeInUp" data-wow-duration="1000ms">
                        <div class="wpo-service-img">
                            <img src="assets/images/service/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-service-text">
                            <a href="service-single.html">Wedding Dress</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="wpo-service-item wow fadeInUp" data-wow-duration="1200ms">
                        <div class="wpo-service-img">
                            <img src="assets/images/service/img-2.jpg" alt="">
                        </div>
                        <div class="wpo-service-text">
                            <a href="service-single.html">Accessories</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="wpo-service-item wow fadeInUp" data-wow-duration="1400ms">
                        <div class="wpo-service-img">
                            <img src="assets/images/service/img-3.jpg" alt="">
                        </div>
                        <div class="wpo-service-text">
                            <a href="service-single.html">Flower Bouquet</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="wpo-service-item wow fadeInUp" data-wow-duration="1600ms">
                        <div class="wpo-service-img">
                            <img src="assets/images/service/img-4.jpg" alt="">
                        </div>
                        <div class="wpo-service-text">
                            <a href="service-single.html">Wedding Cake</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end Service-section -->

<!--Start wpo-testimonial-section-->
<section class="wpo-testimonial-section-s2 pb-0">
    <div class="container">
        <div class="wpo-testimonial-wrap">
            <div class="row">
                <div class="col col-lg-12">
                    <div class="wpo-testimonial-items">
                        <div class="wpo-section-title">
                            <span>Testimonials</span>
                            <h2>What Our Client Says</h2>
                        </div>
                        <div class="wpo-testimonial-active">
                            <div class="wpo-testimonial-item">
                                <div class="wpo-testimonial-text">
                                    <p>Suspendisse dui a hac ultricies integer. In mollis cras sollicitudin orci
                                        eget. Pellentesque et urna arcu pulvinar amet. Pretium aliquam nam
                                        imperdiet augue magna id nec aliquet consequat. Amet senectus faucibus
                                        urna integer ac elementum est purus venenatis.</p>
                                    <div class="wpo-testimonial-text-btm">
                                        <div class="tsm-img">
                                            <img src="assets/images/testimonial/thumb-1.jpg" alt="">
                                        </div>
                                        <h3>Marlin & Williamson</h3>
                                        <span>Wedding- 23.05.2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="wpo-testimonial-item">
                                <div class="wpo-testimonial-text">
                                    <p>Suspendisse dui a hac ultricies integer. In mollis cras sollicitudin orci
                                        eget. Pellentesque et urna arcu pulvinar amet. Pretium aliquam nam
                                        imperdiet augue magna id nec aliquet consequat. Amet senectus faucibus
                                        urna integer ac elementum est purus venenatis.</p>
                                    <div class="wpo-testimonial-text-btm">
                                        <div class="tsm-img">
                                            <img src="assets/images/testimonial/thumb-2.jpg" alt="">
                                        </div>
                                        <h3>Rihanna & William</h3>
                                        <span>Wedding- 08.12.2022</span>
                                    </div>
                                </div>
                            </div>
                            <div class="wpo-testimonial-item">
                                <div class="wpo-testimonial-text">
                                    <p>Suspendisse dui a hac ultricies integer. In mollis cras sollicitudin orci
                                        eget. Pellentesque et urna arcu pulvinar amet. Pretium aliquam nam
                                        imperdiet augue magna id nec aliquet consequat. Amet senectus faucibus
                                        urna integer ac elementum est purus venenatis.</p>
                                    <div class="wpo-testimonial-text-btm">
                                        <div class="tsm-img">
                                            <img src="assets/images/testimonial/thumb-3.jpg" alt="">
                                        </div>
                                        <h3>Sarah & Daniel</h3>
                                        <span>Wedding- 12.08.2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End wpo-testimonial-section-->

<!-- start wpo-portfolio-section -->
<section class="wpo-portfolio-section-s4 section-padding pb-0">
    <h2 class="hidden">some</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-grids gallery-container clearfix gallery-slide">
                    <div class="grid s1">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/18.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/18.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s2">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/19.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/19.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s3">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/20.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/20.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s4">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/21.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/21.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s5">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/22.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/22.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s6">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/23.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/23.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s7">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/24.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/24.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s8">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/25.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/25.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s9">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/29.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/29.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-grids gallery-container clearfix gallery-slide2">
                    <div class="grid s10">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/24.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/24.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s11">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/25.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/25.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s12">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/26.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/26.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s13">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/27.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/27.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s14">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/28.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/28.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s15">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/29.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/29.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s16">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/18.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/18.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s17">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/19.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/19.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="grid s18">
                        <div class="img-holder">
                            <a href="assets/images/portfolio/20.jpg" class="fancybox"
                                data-fancybox-group="gall-1">
                                <img src="assets/images/portfolio/20.jpg" alt class="img img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-portfolio-section -->

<!-- start wpo-team-section -->
<section class="wpo-team-section-s2 section-padding">
    <div class="container">
        <div class="wpo-section-title">
            <span>Our Organizer</span>
            <h2>Awesome Team Members</h2>
        </div>
        <div class="wpo-team-wrap">
            <div class="row">
                <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="wpo-team-item wow fadeInUp" data-wow-duration="1000ms">
                        <div class="wpo-team-img-wrap">
                            <div class="wpo-team-img">
                                <div class="wpo-team-img-inner">
                                    <img src="assets/images/team/img-5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="wpo-team-text">
                            <h3><a href="team-single.html">Jenny Wilson</a></h3>
                            <span>Wedding Planner</span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="wpo-team-item wow fadeInUp" data-wow-duration="1200ms">
                        <div class="wpo-team-img-wrap">
                            <div class="wpo-team-img">
                                <div class="wpo-team-img-inner">
                                    <img src="assets/images/team/img-6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="wpo-team-text">
                            <h3><a href="team-single.html">Robert Fox</a></h3>
                            <span>Dress Designer</span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="wpo-team-item wow fadeInUp" data-wow-duration="1400ms">
                        <div class="wpo-team-img-wrap">
                            <div class="wpo-team-img">
                                <div class="wpo-team-img-inner">
                                    <img src="assets/images/team/img-7.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="wpo-team-text">
                            <h3><a href="team-single.html">Annette Black</a></h3>
                            <span>Makeup Artist</span>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="wpo-team-item wow fadeInUp" data-wow-duration="1600ms">
                        <div class="wpo-team-img-wrap">
                            <div class="wpo-team-img">
                                <div class="wpo-team-img-inner">
                                    <img src="assets/images/team/img-8.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="wpo-team-text">
                            <h3><a href="team-single.html">Jenefer Abram</a></h3>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-team-section -->

<!-- start wpo-partners-section -->
<section class="wpo-partners-section section-padding pt-0">
    <h2 class="hidden">Partners</h2>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="partner-grids partners-slider owl-carousel">
                    <div class="grid">
                        <img src="assets/images/partners/1.png" alt="">
                    </div>
                    <div class="grid">
                        <img src="assets/images/partners/2.png" alt="">
                    </div>
                    <div class="grid">
                        <img src="assets/images/partners/3.png" alt="">
                    </div>
                    <div class="grid">
                        <img src="assets/images/partners/4.png" alt="">
                    </div>
                    <div class="grid">
                        <img src="assets/images/partners/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end wpo-partners-section-->
@endsection