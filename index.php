<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);


?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php include("title.php"); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> 
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
        <div class="header-area header_area">
            <div class="main-header">
             <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                </div>
                <div class="header-left  d-flex f-right align-items-center">
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav> 
                            <ul id="navigation">                                                                                                                                     
                                <li><a href="index.php">Home</a></li>
                                <li><a href="login_user.php">Seller</a></li>
                                <li><a href="login.php">Bidder</a></li>
                                <!--<li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>-->
                            </ul>
                        </nav>
                    </div>
                    <!-- left Btn -->
                    <div class="header-right-btn f-right d-none d-lg-block  ml-30">
                        <a href="login_admin.php" class="header-btn">Admin</a>
                    </div>
                </div>          
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!--? slider Area Start-->
    <div class="slider-area  position-relative ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative hero-overly slider-height  d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                <div class="container">
                 <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <div class="hero-caption">
                            <img class="rotateme" src="" alt="" data-animation="zoomIn" data-delay="1s">
                            <h1 data-animation="fadeInLeft" data-delay=".4s">Join the Auction Excitement!</h1>
                            <p data-animation="fadeInLeft" data-delay=".6s">Find exclusive items up for bid. Participate in thrilling auctions and win your desired treasures.</p>
                            <!-- Hero Btn -->
                            <a href="login.php" class="btn"  data-animation="fadeInLeft" data-delay=".8s" >Browse Auctions</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left img -->
            <div class="hero-img">
                <img src="assets/img/hero/h1_hero1.png" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
            </div>
        </div>
        <!-- Single Slider -->
        <div class="single-slider position-relative hero-overly slider-height  d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
            <div class="container">
             <div class="row">
                 <div class="col-xl-6">
                    <div class="hero-caption">
                        <img class="rotateme" src="assets/img/hero/hero-icon.png" alt="" data-animation="zoomIn" data-delay="1s">
                        <h1 data-animation="fadeInLeft" data-delay=".4s">Join the Auction Excitement!</h1>
                        <p data-animation="fadeInLeft" data-delay=".6s">Find exclusive items up for bid. Participate in thrilling auctions and win your desired treasures.</p>
                        <!-- Hero Btn -->
                        <a href="login.php" class="btn"  data-animation="fadeInLeft" data-delay=".8s" >Browse Auctions</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Left img -->
        <div class="hero-img">
            <img src="assets/img/hero/h1_hero1.png" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
        </div>
    </div>
</div>
</div>
<!-- slider Area End-->
<!--? Clients Offers Start -->
<!-- Product Auction Section Start -->
<div class="product-auction section-padding40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-offer mb-50 wow fadeInUp" data-wow-delay=".2s">
                    <div class="offer-img">
                        <img src="assets/img/gallery/offer1.png" alt="">
                    </div>
                    <div class="offer-content">
                        <span>1</span>
                        <h3><a href="product.html">Exclusive Collectibles</a></h3>
                        <p>Discover rare and unique collectibles from around the world. Bid on items that stand out in any collection.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-offer mb-50 wow fadeInUp" data-wow-delay=".4s">
                    <div class="offer-img">
                        <img src="assets/img/gallery/offer2.png" alt="">
                    </div>
                    <div class="offer-content">
                        <span>2</span>
                        <h3><a href="product.html">Tech Gadgets</a></h3>
                        <p>Stay ahead of the curve with cutting-edge tech gadgets. Bid on the latest innovations and must-have devices.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-offer mb-50 wow fadeInUp" data-wow-delay=".6s">
                    <div class="offer-img">
                        <img src="assets/img/gallery/offer3.png" alt="">
                    </div>
                    <div class="offer-content">
                        <span>3</span>
                        <h3><a href="product.html">Luxurious Jewelry</a></h3>
                        <p>Elevate your style with exquisite jewelry pieces. Bid on stunning designs and timeless classics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Auction Section End -->

<!-- About Auction House Section Start -->
<section class="about-auction-house section-padding40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="auction-house-content">
                    <h2>About Our Auction House</h2>
                    <p>Experience the thrill of bidding in our prestigious online auction house.</p>
                    <a href="#" class="btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Auction House Section End -->

<!-- Why Choose Us Section Start -->
<section class="why-choose-us section-padding40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-title text-center">
                    <h2>Why Choose Us?</h2>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-advantage wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="icon">
                        <img src="assets/img/icon/advantage1.svg" alt="">
                    </div>
                    <h4>Wide Selection</h4>
                    <p>Explore a diverse range of high-quality items.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-advantage wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="icon">
                        <img src="assets/img/icon/advantage2.svg" alt="">
                    </div>
                    <h4>Convenience</h4>
                    <p>Bid on items from the comfort of your own home.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-advantage wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                    <div class="icon">
                        <img src="assets/img/icon/advantage3.svg" alt="">
                    </div>
                    <h4>Secure Transactions</h4>
                    <p>Bid with confidence using our secure payment options.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-advantage wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                    <div class="icon">
                        <img src="assets/img/icon/advantage4.svg" alt="">
                    </div>
                    <h4>Real-Time Bidding</h4>
                    <p>Track your bids and stay updated on the action in real-time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="instagram-area fix pb-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                <div class="section-tittle text-center mb-80">
                    <h2>Follow us on Instagram</h2>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-instagram mb-30">
                    <img src="assets/img/gallery/instra1.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-instagram">
                    <img src="assets/img/gallery/instra2.png" alt="">
                    <a href="#"><i class="ti-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- instagram-social End -->
</main>
<footer>
    <div class="footer-wrapper section-bg2 pl-100"  data-background="assets/img/gallery/footer-bg.png">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        
                                    </div>
                                    <ul class="mb-40">
                                        <li class="number"><a href="#">(80) 783 367-3904</a></li>
                                        <li class="number2"><a href="#">(80) 783 367-3904</a></li>
                                    </ul>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Our solutions</h4>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <?php include("title.php"); ?> <i class="fa fa-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
                                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Footer End-->
          <!-- Map -->
          <div class="map-area">
            <img src="assets/img/gallery/map.png" alt="">
        </div>
    </div>
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>