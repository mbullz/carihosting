<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        $page = 'index';
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
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">

        <!-- Welcome Pattern -->
        <div class="welcome-pattern">
            <img src="img/core-img/welcome-pattern.png" alt="">
        </div>

        <!-- Welcome Slide -->
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-7">
                                <div class="welcome-text mb-50">
                                    <h2 data-animation="fadeInLeftBig" data-delay="200ms" data-duration="1s">
                                        Tempat nya <br> Cari Hosting
                                    </h2>
                                    <h3 data-animation="fadeInLeftBig" data-delay="400ms" data-duration="1s">Mulai dari 6 ribuan/bulan*</h3>
                                    <p data-animation="fadeInLeftBig" data-delay="600ms" data-duration="1s">
                                        Semua INFORMASI Hosting yang kamu butuhkan ada disini!
                                    </p>
                                    <!--
                                    <a href="#" class="btn hami-btn btn-2" data-animation="fadeInLeftBig" data-delay="800ms" data-duration="1s">Get Start Now!</a>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Welcome Thumbnail -->
                <div class="welcome-thumbnail">
                    <img src="img/bg-img/1.png" alt="">
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-7">
                                <div class="welcome-text mb-50">
                                    <h2 data-animation="fadeInUpBig" data-delay="200ms" data-duration="1s">
                                        Tempat nya <br> Cari Hosting
                                    </h2>
                                    <h3 data-animation="fadeInUpBig" data-delay="400ms" data-duration="1s">Jaminan server uptime 99,98%</h3>
                                    <p data-animation="fadeInUpBig" data-delay="600ms" data-duration="1s">Everything you will EVER need to Host and Manage your Website!</p>
                                    <!--
                                    <a href="#" class="btn hami-btn btn-2" data-animation="fadeInUpBig" data-delay="800ms" data-duration="1s">Get Start Now!</a>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Welcome Thumbnail -->
                <div class="welcome-thumbnail">
                    <img src="img/bg-img/2.png" alt="">
                </div>
            </div>

        </div>

        <!-- Clouds -->
        <div class="clouds">
            <img src="img/core-img/cloud-1.png" alt="" class="cloud-1">
            <img src="img/core-img/cloud-2.png" alt="" class="cloud-2">
            <img src="img/core-img/cloud-3.png" alt="" class="cloud-3">
            <img src="img/core-img/cloud-4.png" alt="" class="cloud-4">
            <img src="img/core-img/cloud-5.png" alt="" class="cloud-5">
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Find Domain Area Start -->
    <section class="find-domain-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <div class="domain-text mb-100">
                        <h2>Cari Nama<br/>untuk WebsiteMu</h2>
                        <h6>&nbsp;</h6>
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="domain-search-form mb-100">
                        <!-- Search Form -->
                        <form id="form-domain-search" action="#" method="post" class="form-inline">
                            <input type="search" id="domainName" placeholder="Enter Your Domain Name Here">
                            <select name="domain-extension" id="domainExtension">
                                <option value=".com">.COM</option>
                                <option value=".co.id">.CO.ID</option>
                                <option value=".id">.ID</option>
                                <option value=".net">.NET</option>
                                <option value=".org">.ORG</option>
                            </select>
                            <button type="submit">Search Domain</button>
                        </form>

                        <!-- Domain Price Help -->
                        <!--
                        <div class="domain-price-help mt-50 d-flex align-items-center justify-content-between">
                            <p>.COM $5.75</p>
                            <p>.NET $9.45</p>
                            <p>.ORG $7.50</p>
                            <p>.US $5.99</p>
                            <p>.BIZ $9.99</p>
                            <p>.CO $6.0</p>
                        </div>
                        -->

                        <div id="domain-search-result" class="mt-50 text-center">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Find Domain Area End -->

    <!-- Features Area Start -->
    <section class="hami-features-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Overall Features</h2>
                        <p>Our revolutionary Cloud solution is powerful, simple, and surprisingly affordable.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature-area d-flex mb-50">
                        <div class="feature-icon">
                            <i class="icon_cloud-upload_alt"></i>
                        </div>
                        <div class="feature-text">
                            <h5>Auto Updates</h5>
                            <p>Auto Update Manager was developed exclusively in-house to keep client's websites always up-to-date and more secure.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature-area d-flex mb-50">
                        <div class="feature-icon">
                            <i class="icon_adjust-vert"></i>
                        </div>
                        <div class="feature-text">
                            <h5>Optimized Software</h5>
                            <p>Our exclusive Turbo Server option offers you the fastest hosting experience!</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature-area d-flex mb-50">
                        <div class="feature-icon">
                            <i class="icon_archive_alt"></i>
                        </div>
                        <div class="feature-text">
                            <h5>Daily Backups</h5>
                            <p>Daily back-ups are part and parcel of our cloud, WordPress, cPanel, VPS and dedicated server web hosting services.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature-area d-flex mb-50">
                        <div class="feature-icon">
                            <i class="icon_globe-2"></i>
                        </div>
                        <div class="feature-text">
                            <h5>Wide Networking</h5>
                            <p>Host your site closer to your visitors with our global data center options.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature-area d-flex mb-50">
                        <div class="feature-icon">
                            <i class="icon_shield"></i>
                        </div>
                        <div class="feature-text">
                            <h5>Protected</h5>
                            <p>Enhanced security and trust with Organization Authentication and Extended Validation.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-feature-area d-flex mb-50">
                        <div class="feature-icon">
                            <i class="icon_headphones"></i>
                        </div>
                        <div class="feature-text">
                            <h5>Free Support</h5>
                            <p>Our friendly and knowledgeable support team is available 24/7/365 to help!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Feature Pattern -->
        <div class="feature-pattern">
            <img src="img/core-img/welcome-pattern.png" alt="">
        </div>
    </section>
    <!-- Features Area End -->

    <!-- Price Plan Area Start -->
    <!--
    <section class="hami-price-plan-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Choose Your Web Hosting Plan</h2>
                        <p>You want custom hosting plan. No hidden charge.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <div class="price-plan-title">
                            <h4>Standard Hosting</h4>
                            <p>On sale - Save 50%</p>
                        </div>
                        <div class="price-plan-value">
                            <h2><span>$</span>1.99</h2>
                            <p>/per month</p>
                        </div>
                        <a href="#" class="btn hami-btn w-100 mb-30">Get Started</a>
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> Unlimited Number of Websites</p>
                            <p><i class="icon_check"></i> Unlimited Email Accounts</p>
                            <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                            <p><i class="icon_check"></i> 2X Processing Power &amp; Memory</p>
                        </div>
                        <a href="#" class="btn view-all-btn">Click here to see all features</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan active mb-100">
                        <div class="popular-tag">
                            <i class="icon_star"></i> Best Plan <i class="icon_star"></i>
                        </div>
                        <div class="price-plan-title">
                            <h4>Advanced Hosting</h4>
                            <p>On sale - Save 70%</p>
                        </div>
                        <div class="price-plan-value">
                            <h2><span>$</span>3.99</h2>
                            <p>/per month</p>
                        </div>
                        <a href="#" class="btn hami-btn w-100 mb-30">Get Started</a>
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> Unlimited Number of Websites</p>
                            <p><i class="icon_check"></i> Unlimited Email Accounts</p>
                            <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                            <p><i class="icon_check"></i> 2X Processing Power &amp; Memory</p>
                        </div>
                        <a href="#" class="btn view-all-btn">Click here to see all features</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan mb-100">
                        <div class="price-plan-title">
                            <h4>Unlimited Hosting</h4>
                            <p>On sale - Save 50%</p>
                        </div>
                        <div class="price-plan-value">
                            <h2><span>$</span>7.99</h2>
                            <p>/per month</p>
                        </div>
                        <a href="#" class="btn hami-btn w-100 mb-30">Get Started</a>
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> Unlimited Number of Websites</p>
                            <p><i class="icon_check"></i> Unlimited Email Accounts</p>
                            <p><i class="icon_check"></i> Unlimited Bandwidth</p>
                            <p><i class="icon_check"></i> 2X Processing Power &amp; Memory</p>
                        </div>
                        <a href="#" class="btn view-all-btn">Click here to see all features</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    -->
    <!-- Price Plan Area End -->

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
                            <form action="./" class="nl-form">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="./" target="_blank">Kelompok 6</a>
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
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/hami.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

    <script type="text/javascript">
        $(function() {

            $('#form-domain-search').submit(function (e) {
                var domainName = $('#domainName').val();
                var domainExtension = $('#domainExtension').val();

                domainName += domainExtension;

                $('#domain-search-result').html('<img src="img/core-img/loading.gif" width="24px" height="24px" />');

                $.ajax({
                    url: 'https://domain-availability-api.whoisxmlapi.com/api/v1',
                    data: 'apiKey=at_KF5CUn6TmfJy3sb4kd0sn4pCzSzYv&domainName=' + domainName,
                    datatype: 'json',
                    success: function(result) {
                        var domainAvailability = result.DomainInfo.domainAvailability;
                        var domainName = result.DomainInfo.domainName;
                        $('#domain-search-result').html(domainName + ' is ' + domainAvailability);
                    },
                });

                return false;
            });

        });
    </script>

</body>

</html>