<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Solutions &amp; Business Services Responsive HTML5 Bootstrap5  Website Template">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- fav icon -->
    <link rel="icon" href="assets/images/fav-icon/fav-icon.png">

    <!-- bootstarp -->
    <link rel="stylesheet" href="css/vendors/bootstrap.min.css">

    <!-- animate.css file -->
    <link rel="stylesheet" href="css/vendors/animate.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="css/vendors/swiper-bundle.min.css">

    <!-- flaticon -->
    <link rel="stylesheet" href="css/vendors/flaticon/flaticon.css">

    <!-- fontAwesome -->
    <link rel="stylesheet" href="css/vendors/all.min.css">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css">

    <!-- Fancybox -->
    <link rel="stylesheet" href="css/vendors/jquery.fancybox.min.css">

    <!-- fonts site preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- fonts site preconnect -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Family -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">

    <!-- main-LTR -->
    <link rel="stylesheet" href="css/main-LTR.css">
    <title> CCV | Where Imagination Meets Web Proficiency</title>
</head>

<body class=" dark-theme ">
    <!--Start Page Header-->
    <header class=" page-header   header-basic" id="page-header">
        <div class="header-search-box">
            <div class="close-search"></div>
            <form class="nav-search search-form" role="search" method="get" action="index.html#">
                <div class="search-wrapper">
                    <label class="search-lbl">Search for:</label>
                    <input class="search-input" type="search" placeholder="Search..." name="searchInput"
                        autofocus="autofocus" />
                    <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
                </div>
            </form>
        </div>
        <div class="container">
            <nav class="menu-navbar">
                <div class="header-logo"><a class="logo-link" href="index.html#"><img class="logo-img light-logo"
                            loading="lazy" src="assets/images/logo/logo_white.png" alt="logo" /><img
                            class="logo-img  dark-logo" loading="lazy" src="assets/images/logo/log0-dark.png"
                            alt="logo" /></a></div>
                <div class="links menu-wrapper ">
                    <ul class="list-js links-list">
                        <li class="menu-item has-sub-menu"><a class="menu-link   active" href="index.html#0">home</a>
                        </li>
                        <li class="menu-item"><a class="menu-link  " href="about-us.html">about us </a></li>
                        <li class="menu-item has-sub-menu"><a class="menu-link  " href="index.html#0">services</a></li>
                        <li class="menu-item has-sub-menu"><a class="menu-link  " href="index.html#0">portfolio</a>
                        </li>
                        <li class="menu-item has-sub-menu"><a class="menu-link  " href="index.html#0">blog</a> </li>
                        <li class="menu-item has-sub-menu"><a class="menu-link  " href="index.html#0">pages</a> </li>
                        <li class="menu-item"><a class="menu-link  " href="contact-us.html">contact us </a></li>
                    </ul>
                </div>
                <div class="controls-box">
                    <!--Menu Toggler button-->
                    <div class="control  menu-toggler"><span></span><span></span><span></span></div>
                    {{-- <!--search Icon button-->
                    <div class="control header-search-btn"><i class="bi bi-search icon"></i></div>
                    <!--Dark/Light mode button-->
                    <div class="mode-switcher ">
                        <div class="switch-inner go-light " title="Switch To Light Mode "><i
                                class="bi bi-sun icon "></i></div>
                        <div class="switch-inner go-dark" title="Switch To Dark Mode "><i class="bi bi-moon icon "></i>
                        </div>
                    </div>
                    <!--mini shoping cart--> --}}
                </div>
            </nav>
        </div>
    </header>
    <!--End Page Header-->
    <!--==============================
    Heros Section
    ============================== -->
    @include('visitors.guest.welcomePage.heros_section')
    <!--==============================
    services Section
    ============================== -->

    <!--==============================
    about section
    ============================== -->
    @include('visitors.guest.welcomePage.about_section')

    <!--==============================
    stats Section
    ============================== -->
    @include('visitors.guest.welcomePage.stats_section')

    <!--==============================
    portfolio-slider Section
    ============================== -->
    @include('visitors.guest.welcomePage.portfolio_slider_section')

    <!--==============================
    our-clients Section
    ============================== -->
    @include('visitors.guest.welcomePage.our_client_section')

    <!--==============================
    Price Section
    ============================== -->
    @include('visitors.guest.welcomePage.price_section')

    <!--==============================
    Testimonial section
    ============================== -->
    @include('visitors.guest.welcomePage.testimonial_section')

    <!--==============================
    blog Section
    ============================== -->
    @include('visitors.guest.welcomePage.blog_section')

    <!-- Start  page-footer Section-->
    <footer class="page-footer dark-color-footer" id="page-footer">
        <div class="overlay-photo-image-bg" data-bg-img="assets/images/sections-bg-images/footer-bg-1.jpg"
            data-bg-opacity=".25"></div>
        <div class="container">
            <div class="row footer-cols">
                <div class="col-12 col-md-8 col-lg-4  footer-col "><img class="img-fluid footer-logo" loading="lazy"
                        src="assets/images/logo/logo-colored.png" alt="logo" />
                    <div class="footer-col-content-wrapper">
                        <p class="footer-text-about-us ">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Voluptatibus facere modi possimus dignissimos,
                            aliquam nobis eaque? Voluptatem magnam quisquam rem.

                        </p>
                    </div>
                    <div class="form-area ">
                        <div class="mailchimp-form ">
                            <form class="one-field-form" method="post" action="index.html#0">
                                <div class="field-group ">
                                    <label class="email-label" for="email-input"> Subscribe to our news letter</label>
                                    <input class="email-input " type="email" value="" name="EMAIL"
                                        id="email-input" placeholder="Email Address" autocomplete="off" />
                                    <div class="cta-area">
                                        <input class="btn-solid subscribe-btn" type="submit" value="Subscribe"
                                            name="subscribe" />
                                    </div>
                                </div><span class="email-notice">*we will not share your personal info</span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2  footer-col ">
                    <h2 class=" footer-col-title    ">useful links</h2>
                    <div class="footer-col-content-wrapper">
                        <ul class="footer-menu ">
                            <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a
                                    class="footer-menu-link" href="index.html#0">Google</a>
                            </li>
                            <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a
                                    class="footer-menu-link" href="index.html#0">Dribbble</a>
                            </li>
                            <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a
                                    class="footer-menu-link" href="index.html#0">linkedIn</a>
                            </li>
                            <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a
                                    class="footer-menu-link" href="index.html#0">wikipedia</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-lg-2 footer-col ">
                    <h2 class=" footer-col-title    ">Resources</h2>
                    <div class="footer-col-content-wrapper">
                        <ul class="footer-menu">
                            <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a
                                    class="footer-menu-link" href="index.html#0">support</a>
                            </li>
                            <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a
                                    class="footer-menu-link" href="index.html#0">dashboard</a>
                            </li>
                            <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a
                                    class="footer-menu-link" href="index.html#0">drivers</a>
                            </li>
                            <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a
                                    class="footer-menu-link" href="index.html#0">projects</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12     col-lg-4 footer-col ">
                    <h2 class=" footer-col-title    ">contact information</h2>
                    <div class="footer-col-content-wrapper">
                        <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a
                                class="text-lowercase  info" href="mailto:example@support.com">example@support.com</a>
                        </div>
                        <div class="contact-info-card"><i class="bi bi-geo-alt icon"></i><span
                                class="text-lowercase  info">5 Xyz st., Abc, alexandria, egypt.</span></div>
                        <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info"
                                href="tel:+20123456789">+20123456789 </a></div>
                        <div class="contact-info-card">
                            <div class="social-icons">
                                <div class="sc-wrapper dir-row sc-size-32">
                                    <ul class="sc-list">
                                        <li class="sc-item " title="Facebook"><a class="sc-link" href="index.html#0"
                                                title="social media icon"><i
                                                    class="fab fa-facebook-f sc-icon"></i></a></li>
                                        <li class="sc-item " title="youtube"><a class="sc-link" href="index.html#0"
                                                title="social media icon"><i class="fab fa-youtube sc-icon"></i></a>
                                        </li>
                                        <li class="sc-item " title="instagram"><a class="sc-link"
                                                href="index.html#0" title="social media icon"><i
                                                    class="fab fa-instagram sc-icon"></i></a></li>
                                        <li class="sc-item " title="twitter"><a class="sc-link" href="index.html#0"
                                                title="social media icon"><i class="fab fa-twitter sc-icon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights ">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex justify-content-start">
                        <p class="creadits">


                            &copy; 2023
                            Created by:

                            <a class="link" href="index.html#0">amin-themes</a>
                        </p>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-end">
                        <div class="terms-links"><a href="index.html#0">Terms of Use </a>
                            | <a href="index.html#0">Privacy Policy.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  page-footer Section-->
    <!-- Start loading-screen Component-->
    <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span
            class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span>
    </div>
    <!-- End loading-screen Component-->
    <!-- Start back-to-top Component-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <!-- End back-to-top Component-->

    <!--     JQuery     -->
    <script src="js/vendors/jquery-3.6.1.min.js"></script>

    <!--     appear     -->
    <script src="js/vendors/appear.min.js"></script>

    <!--     bootstrap     -->
    <script src="js/vendors/bootstrap.bundle.min.js"></script>

    <!--     countTo     -->
    <script src="js/vendors/jquery.countTo.js"></script>

    <!--     wow     -->
    <script src="js/vendors/wow.min.js"></script>

    <!--     swiper     -->
    <script src="js/vendors/swiper-bundle.min.js"></script>

    <!--     particles     -->
    <script src="js/vendors/particles.min.js"></script>

    <!--     Vanilla-tilt     -->
    <script src="js/vendors/vanilla-tilt.min.js"></script>

    <!--     isotope     -->
    <script src="js/vendors/isotope-min.js"></script>

    <!--     fancybox     -->
    <script src="js/vendors/jquery.fancybox.min.js"></script>

    <!--     main     -->
    <script src="js/main.js"></script>
</body>

</html>
