<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        $page = 'about';
    ?>

    <!-- Title -->
    <title>CariHosting - Tempat Cari Hosting Terbaik</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <?php
                        require('top-header-area.php');
                    ?>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="hamiNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <?php
                                    require('classynav.php');
                                ?>

                                <!-- Live Chat -->
                                <div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                    <a href="#" class="btn hami-btn live--chat--btn"><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</a>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Video Area Start -->
    <div class="hami--video--area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Selamat Datang di CariHosting</h2>
                        <p>CariHosting adalah website pencarian hosting terbaik dan terlengkap saat ini. Kami menyediakan informasi hosting dari berbagai provider di Indonesia dengan detail dan spesifikasi yang sangat lengkap dan terpercaya. Kami juga membantu client untuk menentukan pilihan dan melakukan inisialisasi deployment.</p>
                    </div>
                </div>
            </div>

            <!-- Video Content Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="video-content-area pr-3 mb-100">
                        <img src="img/bg-img/4.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=Ldd8yjjo6jA" class="video-play-btn"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="video-text pl-md-3 mb-100">
                        <h2>Kami menawarkan paket hosting terbaik, termurah, &amp; terlengkap</h2>
                        <!-- Description -->
                        <div class="video-desc mb-50">
                            <h6><i class="icon_check"></i> Tangguh, Cepat, dan Aman</h6>
                            <h6><i class="icon_check"></i> Mudah digunakan</h6>
                            <h6><i class="icon_check"></i> Gratis CPanel Management</h6>
                            <h6><i class="icon_check"></i> 24/7 Award Winning Support</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area End -->

    <!-- Team Area Start -->
    <section class="hami-team-area mb-70">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Team Kami</h2>
                        <p>Kelompok 6</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6">
                    <div class="single-team-member-area d-flex align-items-center mb-30">
                        <!-- Team Thumbnail -->
                        <div class="team-thumbnail">
                            <img src="img/bg-img/6.jpg" alt="">
                        </div>
                        <!-- Team Content -->
                        <div class="team-content">
                            <h5>Muhamad Kosim</h5>
                            <span>Leader &amp; Front End</span>
                            <p>
                                Ketua kelompok serta penanggung jawab keberhasilan CariHosting menembus pasar digital
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6">
                    <div class="single-team-member-area d-flex align-items-center mb-30">
                        <!-- Team Thumbnail -->
                        <div class="team-thumbnail">
                            <img src="img/bg-img/7.jpg" alt="">
                        </div>
                        <!-- Team Content -->
                        <div class="team-content">
                            <h5>Agustinus Bona</h5>
                            <span>Dokumentasi</span>
                            <p>
                                Penerjemah serta pembuat buku manual untuk membantu para user mengelola aplikasi mereka
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6">
                    <div class="single-team-member-area d-flex align-items-center mb-30">
                        <!-- Team Thumbnail -->
                        <div class="team-thumbnail">
                            <img src="img/bg-img/8.jpg" alt="">
                        </div>
                        <!-- Team Content -->
                        <div class="team-content">
                            <h5>Dedi Irawan</h5>
                            <span>Designer</span>
                            <p>
                                Seniman pembawa keindahan dan kerapian dalam tampilan website dan banner CariHosting
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6">
                    <div class="single-team-member-area d-flex align-items-center mb-30">
                        <!-- Team Thumbnail -->
                        <div class="team-thumbnail">
                            <img src="img/bg-img/9.jpg" alt="">
                        </div>
                        <!-- Team Content -->
                        <div class="team-content">
                            <h5>Robert Surya</h5>
                            <span>BackEnd Developer</span>
                            <p>
                                Pencipta logika di halaman belakang untuk menunjang fitur website yang kaya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Area End -->

    <!-- Testimonial Area Start -->
    <section class="hami-testimonial-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>What Clients Say?</h2>
                        <p>Our extensive expertise will make sure that yours is a SUCCESS STORY once again!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slide owl-carousel">

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/10.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Beatrice Vega</h5>
                                    <span>CEO DeerCreative</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/11.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Roy Long</h5>
                                    <span>CEO Colorlib</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/12.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Stephen Colon</h5>
                                    <span>CEO google</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/13.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Kevin Castro</h5>
                                    <span>CEO facebook</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/10.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Beatrice Vega</h5>
                                    <span>CEO DeerCreative</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/11.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Roy Long</h5>
                                    <span>CEO Colorlib</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/12.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Stephen Colon</h5>
                                    <span>CEO google</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/13.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Kevin Castro</h5>
                                    <span>CEO facebook</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/10.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Beatrice Vega</h5>
                                    <span>CEO DeerCreative</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/11.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Roy Long</h5>
                                    <span>CEO Colorlib</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/12.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Stephen Colon</h5>
                                    <span>CEO google</span>
                                </div>
                            </div>
                        </div>

                        <!-- Single Testimonial Area -->
                        <div class="single-testimonial-area">
                            <div class="testimonial-content">
                                <!-- Ratings & Quote -->
                                <div class="ratings-icon d-flex align-items-center justify-content-between">
                                    <div class="rating">
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                        <i class="icon_star" aria-hidden="true"></i>
                                    </div>
                                    <div class="quote-icon">
                                        <img src="img/core-img/quote.png" alt="">
                                    </div>
                                </div>
                                <h5>By switching to Hami Anycast DNS system we were able to decrease the worldwide app latency immensely.</h5>
                            </div>
                            <!-- Testimonial -->
                            <div class="testimonial-thumbnail-title d-flex align-items-center">
                                <div class="testimonial-thumbnail">
                                    <img src="img/bg-img/13.jpg" alt="">
                                </div>
                                <div class="testimonial-title">
                                    <h5>Kevin Castro</h5>
                                    <span>CEO facebook</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->

    <!-- Support Area Start -->
    <section class="hami-support-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="support-text">
                        <h2>Need help? Call our award-winning support team 24/7: +65 1234-6868</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Pattern -->
        <div class="support-pattern" style="background-image: url(img/core-img/support-pattern.png);"></div>
    </section>
    <!-- Support Area End -->

    <!-- Call To Action Area Start -->
    <section class="hami-cta-area">
        <div class="container">
            <div class="cta-text">
                <h2>Proudly Hosting Over <span class="counter">800,000</span> Websites Since 2000</h2>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row justify-content-between">

                    <!-- Single Footer Widget Area -->
                    <div class="col-6 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Products</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#">Shared hosting</a></li>
                                <li><a href="#">WordPress hosting</a></li>
                                <li><a href="#">Vps hosting</a></li>
                                <li><a href="#">Dedicated hosting</a></li>
                                <li><a href="#">Reseller hosting</a></li>
                                <li><a href="#">Hosting features</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-6 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Programs</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Marketing services</a></li>
                                <li><a href="#">WordPress guide</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Awards &amp; Reviews</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-6 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Products</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#">Shared hosting</a></li>
                                <li><a href="#">WordPress hosting</a></li>
                                <li><a href="#">Vps hosting</a></li>
                                <li><a href="#">Dedicated hosting</a></li>
                                <li><a href="#">Reseller hosting</a></li>
                                <li><a href="#">Hosting features</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-6 col-sm-4 col-lg-2">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Company</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Terms of service</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Subscribe Newsletter</h5>

                            <p>Subscribe to our email newsletter for useful tips and valuable resources.</p>

                            <!-- Newsletter Form -->
                            <form action="index.html" class="nl-form">
                                <input type="email" class="form-control" placeholder="Your Mail">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>

                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Kelompok 6</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Payment Methods -->
                        <div class="payments-methods d-flex align-items-center">
                            <p>Payments We Accept</p>
                            <i class="fa fa-cc-visa" aria-hidden="true"></i>
                            <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                            <i class="fa fa-cc-discover" aria-hidden="true"></i>
                            <i class="fa fa-cc-amex" aria-hidden="true"></i>
                            <i class="fa fa-cc-paypal" aria-hidden="true"></i>
                            <i class="fa fa-cc-stripe" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/hami.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>