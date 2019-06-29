<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        $page = 'hosting';
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
                                <li class="breadcrumb-item active" aria-current="page">Hosting</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Price Plan Area Start -->
    <section class="hami-price-plan-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Pilih Paket HostingMu yang Paling Sempurna</h2>
                        <p>Tidak ada yang aneh-aneh</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>RumahWeb</h4>
                            <p>Paket Personal</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>IDR 11k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.rumahweb.com/hosting-murah/" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 100MB Space</p>
                            <p><i class="icon_check"></i> 5GB Traffic Limit</p>
                            <p><i class="icon_check"></i> Unlimited Email Account &amp; MySQL</p>
                            <p><i class="icon_check"></i> 0 Add-on Domain</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan active mb-100">
                        <!-- Popular Tag -->
                        <div class="popular-tag">
                            <i class="icon_star"></i> Best Plan <i class="icon_star"></i>
                        </div>
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>RumahWeb</h4>
                            <p>Paket Professional</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>IDR 25k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.rumahweb.com/hosting-murah/" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 1GB Space</p>
                            <p><i class="icon_check"></i> Unlimited Traffic Limit</p>
                            <p><i class="icon_check"></i> Unlimited Email Account &amp; MySQL</p>
                            <p><i class="icon_check"></i> 3 Add-on Domain</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>RumahWeb</h4>
                            <p>Paket Enterprise</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>IDR 140k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.rumahweb.com/hosting-murah/" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 3GB Space</p>
                            <p><i class="icon_check"></i> Unlimited Traffic Limit</p>
                            <p><i class="icon_check"></i> Unlimited Email Account &amp; MySQL</p>
                            <p><i class="icon_check"></i> 5 Add-on Domain</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>DewaWeb</h4>
                            <p>Paket Hunter</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>IDR 40k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.dewaweb.com/hosting-murah" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 2GB Storage</p>
                            <p><i class="icon_check"></i> 1 Core</p>
                            <p><i class="icon_check"></i> 256MB Memory</p>
                            <p><i class="icon_check"></i> 3 Add-on Domain</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan active mb-100">
                        <!-- Popular Tag -->
                        <div class="popular-tag">
                            <i class="icon_star"></i> Best Plan <i class="icon_star"></i>
                        </div>
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>DewaWeb</h4>
                            <p>Paket Warrior</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>IDR 90k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.dewaweb.com/hosting-murah" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 3GB Storage</p>
                            <p><i class="icon_check"></i> 1 Core</p>
                            <p><i class="icon_check"></i> 512MB Memory</p>
                            <p><i class="icon_check"></i> 6 Add-on Domain</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>DewaWeb</h4>
                            <p>Paket Guardian</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>IDR 140k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.dewaweb.com/hosting-murah" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 6GB Storage</p>
                            <p><i class="icon_check"></i> 1.5 Core</p>
                            <p><i class="icon_check"></i> 1024MB Memory</p>
                            <p><i class="icon_check"></i> 10 Add-on Domain</p>
                        </div>
                        <!-- View All Feature Button -->
                        <a href="#" class="btn view-all-btn">Click here to see all features</a>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>NiagaHoster</h4>
                            <p>Standard</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>IDR 350k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.niagahoster.co.id/cloud-hosting" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 40GB Disk Space</p>
                            <p><i class="icon_check"></i> 4GB RAM</p>
                            <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                            <p><i class="icon_check"></i> 3 CPU Core</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan active mb-100">
                        <!-- Popular Tag -->
                        <div class="popular-tag">
                            <i class="icon_star"></i> Best Plan <i class="icon_star"></i>
                        </div>
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>NiagaHoster</h4>
                            <p>Premium</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>IDR 600k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.niagahoster.co.id/cloud-hosting" class="btn hami-btn w-100 mb-30" target="_blank">Get Started</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 60GB Disk Space</p>
                            <p><i class="icon_check"></i> 6GB RAM</p>
                            <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                            <p><i class="icon_check"></i> 6 CPU Core</p>
                        </div>
                    </div>
                </div>

                <!-- Single Price Plan -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <!-- Title -->
                        <div class="price-plan-title">
                            <h4>NiagaHoster</h4>
                            <p>Corporate</p>
                        </div>
                        <!-- Value -->
                        <div class="price-plan-value">
                            <h2>1200k</h2>
                            <p>/bulan</p>
                        </div>
                        <!-- Button -->
                        <a href="https://www.niagahoster.co.id/cloud-hosting" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <!-- Description -->
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 120GB Disk Space</p>
                            <p><i class="icon_check"></i> 10GB RAM</p>
                            <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                            <p><i class="icon_check"></i> 8 CPU Core</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Price Plan Area End -->

    <!-- Call To Action Area Start -->
    <!--
    <section class="hami-call-to-action">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="cta-thumbnail pr-3 mb-100">
                        <img src="img/bg-img/3.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="cta--content pl-3 mb-100">
                        <h2>Optimized Hosting For WordPress</h2>
                        <p>Deploy your service infrastructure on our fully redundant, high performance cloud platform and benefit from its high reliability, security and enterprise feature set. Easily enhance the performance, security and reliability of your services with one of our managed cloud hosting products, free data migration included.</p>
                        <a href="#" class="btn hami-btn mt-50">Get Start Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!-- Call To Action Area End -->

    <!-- Call To Action Area Start -->
    <section class="hami-call-to-action bg-gray section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="cta-thumbnail mb-100">
                        <img src="img/bg-img/2.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="cta--content mb-100">
                        <h2>Up to 70% Discount with FREE Domain Name Registration Included!</h2>
                        <!-- Description -->
                        <div class="cta-desc mb-50">
                            <h6><i class="icon_check"></i> FREE Domain Name</h6>
                            <h6><i class="icon_check"></i> FREE Email Address</h6>
                            <h6><i class="icon_check"></i> Plenty of Disk Space</h6>
                            <h6><i class="icon_check"></i> FREE Website Builder</h6>
                            <h6><i class="icon_check"></i> FREE Marketing Tools</h6>
                            <h6><i class="icon_check"></i> 1-Click WordPress Install</h6>
                        </div>
                        <!-- Button -->
                        <!--
                        <a href="#" class="btn hami-btn">Get Start Now!</a>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Support Area Start -->
    <section class="hami-support-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="support-text">
                        <h2>Need help? Call our award-winning support team 24/7: +62 822-9721-7939</h2>
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
                            <?php require('social-info.php'); ?>
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