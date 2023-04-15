<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Prem Mehandi Art :<?= $title ?></title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="<?= site_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/custom-animate.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/fancybox.min.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/imp.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/scrollbar.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/swiper.min.css">

    <!-- Module css -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/header-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/banner-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/about-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/blog-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/fact-counter-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/faq-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/contact-page.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/breadcrumb-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/team-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/partner-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/testimonial-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/services-section.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/module-css/footer-section.css">

    <link href="<?= site_url() ?>assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= site_url() ?>assets/css/responsive.css">
    <!-- Favicon -->
   
   
</head>
<body>
    
    <div class="boxed_wrapper ltr">
        <!-- Main header-->
        <header class="main-header header-style-one">

            <!--Start Header-->
            <div class="header">
                <div class="auto-container">
                    <div class="outer-box">

                        <!--Start Header Left-->
                        <div class="header-left">
                            <div class="main-logo-box">
                                <a href="<?= site_url() ?>">
                                    <img src="<?= site_url() ?>assets/images/prem/logo.png" alt="Awesome Logo" title="">
                                </a>
                            </div>
                            <div class="header-social-link">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#"><i class="icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-pinterest"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End Header Left-->

                        <!--Start Header Middle-->
                        <div class="header-middle">
                            <div class="nav-outer style1 clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <div class="inner">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div>
                                </div>
                                <!-- Main Menu -->
                                <nav class="main-menu style1 navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li><a href="<?= site_url('home') ?>"><span>Home</span></a></li>
                                            <li><a href="<?= site_url('about') ?>">   <span>About Us</span></a></li>
                                            <li class="dropdown"><a href="<?= site_url('services') ?>"><span>Services</span></a>
                                                <ul>
                                                    <li><a href="<?= site_url('bridal-mehandi') ?>">Bridal Mehandi</a></li>
                                                    <li><a href="<?= site_url('stylish-mehandi') ?>">Stylish Mehandi</a></li>
                                                    <li><a href="<?= site_url('foot-mehandi') ?>">Foot Mehandi</a></li>
                                                    <li><a href="<?= site_url('normal-mehandi') ?>">Normal Mehandi</a></li>
                                                    <li><a href="<?= site_url('arabic-mehandi') ?>">Arabic Mehandi</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="<?= site_url('gallery') ?>"><span>Gallery</span></a></li>
                                            <li><a href="<?= site_url('contact') ?>"><span>Contact</span></a></li>
                                            <li><a href="<?= site_url('appoint') ?>"><span>Appoinment</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                        </div>
                        <!--End Header Middle-->

                    </div>
                </div>
            </div>
            <!--End header-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="clearfix">
                        <!--Logo-->
                        <div class="logo float-left">
                            <a href="<?= site_url() ?>" class="img-responsive">
                                <img src="<?= site_url() ?>assets/images/resources/sticky-logo.png" alt="" title="">
                            </a>
                        </div>
                        <!--Right Col-->
                        <div class="right-col float-right">
                            <!-- Main Menu -->
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="<?= site_url() ?>"><img src="<?= site_url() ?>assets/images/prem/logo.png"
                                alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>


     