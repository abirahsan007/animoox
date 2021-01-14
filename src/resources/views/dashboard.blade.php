
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Animoox</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('css/imagebg.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body class="boxed_wrapper">

<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->

<!-- main header -->
<header class="main-header home-1">
    <div class="outer-container">
        <div class="container">
            <div class="main-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img src="{{ url('images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Lottie</a></li>
                                <li><a href="#">Why us</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="{{ url('contact-us')  }}">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="index.html"><img src="{{url('images/small-logo.png')}}" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="{{url('images/logo.png')}}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->


<!-- banner-section -->
<section class="banner-section">
    <div class="bg-layer" style="background-image: url({{ url('images/icons/banner-1.png') }});"></div>
    <div class="pattern-bg" style="background-image: url({{ url('website/images/icons/vactor-1.png') }});"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <h1>Your GO-TO Solution For Interractive Animation</h1>
                    <div class="text">The collapse of the online-advertising market in 2001 made marketing on the Internet seem even less compelling.</div>
                    <div class="btn-box"><a href="#">Order Now</a></div>
                    <div class="text">Scroll to explore |</div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box float-bob-y clearfix">
                    <figure class="image image-1 wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms"><img src="{{ url('images/resource/phone-1.png') }}" alt=""></figure>
                    <figure class="image image-2 wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="1500ms"><img src="{{ url('images/resource/phone-2.png') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->


<!-- feature-section -->
<section class="feature-section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                <div id="iamge_block_01">
                    <div class="image-box float-bob-y">
                        <figure class="image wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/phone-3.png" alt=""></figure>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div id="content_block_01">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>Our Service</h2>
                        </div>
                        <div class="inner-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="bg-layer" style="background-image: url({{ url('images/resource/case-1.png') }});"></div>
                                        <div class="icon-box"><i class="flaticon-app-1"></i></div>
                                        <h5><a href="#">Our Service</a></h5>
                                        <div class="text">Integer quis mollis lacus maecenas in ornare ex sed scelerisque nec elit nec vehicula duis pretium libero</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                    <div class="single-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="bg-layer" style="background-image: url({{ url('images/resource/case-1.png') }});"></div>
                                        <div class="icon-box"><i class="flaticon-target"></i></div>
                                        <h5><a href="#">Our Service</a></h5>
                                        <div class="text">Integer quis mollis lacus maecenas in ornare ex sed scelerisque nec elit nec vehicula duis pretium libero</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                    <div class="single-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="bg-layer" style="background-image: url({{ url('images/resource/case-1.png') }});"></div>
                                        <div class="icon-box"><i class="flaticon-shipping"></i></div>
                                        <h5><a href="#">Our Service</a></h5>
                                        <div class="text">Integer quis mollis lacus maecenas in ornare ex sed scelerisque nec elit nec vehicula duis pretium libero</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                    <div class="single-item wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="bg-layer" style="background-image: url({{ url('images/resource/case-1.png') }});"></div>
                                        <div class="icon-box"><i class="flaticon-dashboard"></i></div>
                                        <h5><a href="#">Our Service</a></h5>
                                        <div class="text">Integer quis mollis lacus maecenas in ornare ex sed scelerisque nec elit nec vehicula duis pretium libero</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                    <div class="single-item wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="bg-layer" style="background-image: url({{ url('images/resource/case-1.png') }});"></div>
                                        <div class="icon-box"><i class="flaticon-dashboard"></i></div>
                                        <h5><a href="#">Our Service</a></h5>
                                        <div class="text">Integer quis mollis lacus maecenas in ornare ex sed scelerisque nec elit nec vehicula duis pretium libero</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                                    <div class="single-item wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="bg-layer" style="background-image: url({{ url('images/resource/case-1.png') }});"></div>
                                        <div class="icon-box"><i class="flaticon-dashboard"></i></div>
                                        <h5><a href="#">Our Service</a></h5>
                                        <div class="text">Integer quis mollis lacus maecenas in ornare ex sed scelerisque nec elit nec vehicula duis pretium libero</div>
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
<!-- feature-section -->



<!-- feature-style-three -->
<section class="feature-style-three">
    <div class="container">
        <div class="inner-container">
            <div class="inner-box">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div id="content_block_02">
                            <div class="content-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="sec-title"><h2>Why Animoox?</h2></div>
                                <div class="text">
                                    <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div id="iamge_block_02">
                            <div class="image-box">
                                <div class="bg-layer" style="background-image: url({{ url('images/icons/image-shap-1.png') }});"></div>
                                <figure class="image image-1 wow slideInRight" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="images/resource/dashbord-1.jpg" alt=""></figure>
                                <figure class="image image-2 wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/dashbord-2.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-style-three -->

<!-- testimonial-section -->
<section class="testimonial-section centred">
    <div class="image-layer" style="background-image: url({{ url('images/icons/testimonial-bg.png') }});"></div>
    <div class="container">
        <div class="sec-title center">
            <h2>What Our Client Say ?</h2>
            <p>Trusted by more than 9,000 businesses in 140 countries.<br />all of our resources are free</p>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="testimonial-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ url('images/resource/testimonial-1.png') }}" alt=""></figure>
                                <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                                <div class="author-info">
                                    <h5 class="name">TeamSnap</h5>
                                    <span class="designation">VP of Customer Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ url('images/resource/testimonial-2.png') }}" alt=""></figure>
                                <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                                <div class="author-info">
                                    <h5 class="name">Steven smith</h5>
                                    <span class="designation">Programmer Doritibe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ url('images/resource/testimonial-2.png') }}" alt=""></figure>
                                <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                                <div class="author-info">
                                    <h5 class="name">Steven smith</h5>
                                    <span class="designation">Programmer Doritibe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ url('images/resource/testimonial-1.png') }}" alt=""></figure>
                                <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                                <div class="author-info">
                                    <h5 class="name">TeamSnap</h5>
                                    <span class="designation">VP of Customer Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ url('images/resource/testimonial-1.png') }}" alt=""></figure>
                                <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                                <div class="author-info">
                                    <h5 class="name">TeamSnap</h5>
                                    <span class="designation">VP of Customer Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 testimonial-block">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{ url('images/resource/testimonial-2.png') }}" alt=""></figure>
                                <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                                <div class="author-info">
                                    <h5 class="name">Steven smith</h5>
                                    <span class="designation">Programmer Doritibe</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->

<!-- subscribe-section -->
<section class="subscribe-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="iamge_block_05">
                    <div class="image-box wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <figure class="image float-bob-y"><img src="{{ url('images/resource/subscribe-1.png') }}" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_06">
                    <div class="content-box">
                        <div class="sec-title"><h2>Let's work Together </h2></div>
                        <div class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui vel tristique purus justo</div>
                        <form action="#" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="Name" placeholder="Enter Your Name" required="">
                                <input type="email" name="email" placeholder="Enter Your Email" required="">
                                <button type="submit" class="theme-btn-two">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-section end -->


<!-- main-footer -->
<footer class="main-footer">
    <div class="image-layer" style="background-image: url(images/icons/footer-bg.png);"></div>
    <div class="container">
        <div class="footer-top">
            <div class="widget-section">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="about-widget footer-widget">
                            <figure class="footer-logo"><a href="index.html"><img src="{{ url('images/footer-logo.png') }}" alt=""></a></figure>
                            <div class="text">Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim lorem sed do eiusmod.</div>
                            <ul class="social-links">
                                <li><h6>Follow Us :</h6></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget footer-widget">
                            <h4 class="widget-title">Support</h4>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Submit a Ticket</a></li>
                                    <li><a href="#">Visit Knowledge Base</a></li>
                                    <li><a href="#">Support System</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Professional Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget footer-widget">
                            <h4 class="widget-title">Links</h4>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Price Plan</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><i class="fas fa-map-marker-alt"></i>25 Bedford St.<br />New York City, N.Y.</li>
                                    <li>
                                        <i class="fas fa-phone-volume"></i>
                                        <a href="tel:+0665184575181">(+066) 518 - 457 - 5181</a><br />
                                        <a href="tel:+0665184575182">(+066) 518 - 457 - 5182</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="copyright">&copy; 2020 <a href="#">appway</a>. All rights reserved</div>
        </div>
    </div>
</footer>
<!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


<!-- jequery plugins -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/scrollbar.js') }}"></script>
<script src="{{ asset('js/tilt.jquery.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->
</html>
