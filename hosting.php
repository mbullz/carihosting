<?php
    require('connect.php');

    $sort = $_POST['sort'] ?? '';
    $sortDirection = $_POST['sortDirection'] ?? '';

    $hosting_type = $_POST['hosting_type'] ?? '';
    $price_per_month = $_POST['price_per_month'] ?? 0;
    $price_per_month_operator = $_POST['price_per_month_operator'] ?? 0;
    $storage = $_POST['storage'] ?? 0;
    $storage_operator = $_POST['storage_operator'] ?? 0;
    $ram = $_POST['ram'] ?? 0;
    $ram_operator = $_POST['ram_operator'] ?? 0;
    $core = $_POST['core'] ?? 0;
    $core_operator = $_POST['core_operator'] ?? 0;

    if ($sort == '') $sortQuery = 'package_id ASC';
    else $sortQuery = $sort . ' ' . $sortDirection . ', package_id ASC';

    $whereQuery = '';

    if ($hosting_type != '') $whereQuery .= " AND hosting_type = '$hosting_type' ";

    if ($price_per_month_operator != 0) {
        if ($price_per_month_operator == 1) $whereQuery .= " AND price_per_month < $price_per_month";
        else if ($price_per_month_operator == 2) $whereQuery .= " AND price_per_month = $price_per_month";
        else if ($price_per_month_operator == 3) $whereQuery .= " AND price_per_month > $price_per_month";
    }

    if ($storage_operator != 0) {
        if ($storage_operator == 1) $whereQuery .= " AND storage < $storage";
        else if ($storage_operator == 2) $whereQuery .= " AND storage = $storage";
        else if ($storage_operator == 3) $whereQuery .= " AND storage > $storage";
    }

    if ($ram_operator != 0) {
        if ($ram_operator == 1) $whereQuery .= " AND ram < $ram";
        else if ($ram_operator == 2) $whereQuery .= " AND ram = $ram";
        else if ($ram_operator == 3) $whereQuery .= " AND ram > $ram";
    }

    if ($core_operator != 0) {
        if ($core_operator == 1) $whereQuery .= " AND core < $core";
        else if ($core_operator == 2) $whereQuery .= " AND core = $core";
        else if ($core_operator == 3) $whereQuery .= " AND core > $core";
    }
?>

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
                        <a class="nav-brand" href="./"><img src="./img/core-img/logo.png" alt=""></a>

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

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./"><i class="icon_house_alt"></i> Home</a></li>
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

            <!-- Form -->
            <div class="card mb-30">
                <div class="card-header">
                    Sort &amp; Filter
                </div>
                <div class="card-body">
                    <form id="form-filter" action="./hosting.php" method="post">
                        <h5 class="card-title">Sort</h5>
                        <div class="form-group row">
                            <label class="col-12 col-lg-2 col-form-label">Sort By</label>
                            <div class="col-12 col-lg-5 mb-1">
                                <select class="form-control" name="sort">
                                    <option value="">Default</option>
                                    <option value="price_per_month" <?=$sort=='price_per_month'?'selected="selected"':''?> >Price</option>
                                    <option value="storage" <?=$sort=='storage'?'selected="selected"':''?> >Disk Space</option>
                                    <option value="ram" <?=$sort=='ram'?'selected="selected"':''?> >RAM</option>
                                    <option value="core" <?=$sort=='core'?'selected="selected"':''?> >CPU(Core)</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-5 mb-1">
                                <select class="form-control" name="sortDirection">
                                    <option value="ASC" <?=$sortDirection=='ASC'?'selected="selected"':''?> >Ascending</option>
                                    <option value="DESC" <?=$sortDirection=='DESC'?'selected="selected"':''?> >Descending</option>
                                </select>
                            </div>
                        </div>

                        <h5 class="card-title">Filter</h5>
                        <div class="form-group row">
                            <label class="col-12 col-lg-2 col-form-label">Hosting Type</label>
                            <div class="col-lg-10 mb-1">
                                <select class="form-control" name="hosting_type">
                                    <option value="">All</option>
                                    <option value="Cloud" <?=$hosting_type=='Cloud'?'selected="selected"':''?> >Cloud</option>
                                    <option value="VPS" <?=$hosting_type=='VPS'?'selected="selected"':''?> >VPS</option>
                                </select>
                            </div>

                            <label class="col-12 col-lg-2 col-form-label">Price</label>
                            <div class="col-12 col-lg-2 mb-1">
                                <select class="form-control" name="price_per_month_operator">
                                    <option value="0">Operator</option>
                                    <option value="1" <?=$price_per_month_operator==1?'selected="selected"':''?> >&lt;</option>
                                    <option value="2" <?=$price_per_month_operator==2?'selected="selected"':''?> >=</option>
                                    <option value="3" <?=$price_per_month_operator==3?'selected="selected"':''?> >&gt;</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-8 mb-1">
                                <input type="number" name="price_per_month" class="form-control" value="<?=$price_per_month?>" />
                            </div>

                            <label class="col-12 col-lg-2 col-form-label">Disk Space</label>
                            <div class="col-12 col-lg-2 mb-1">
                                <select class="form-control" name="storage_operator">
                                    <option value="0">Operator</option>
                                    <option value="1" <?=$storage_operator==1?'selected="selected"':''?> >&lt;</option>
                                    <option value="2" <?=$storage_operator==2?'selected="selected"':''?> >=</option>
                                    <option value="3" <?=$storage_operator==3?'selected="selected"':''?> >&gt;</option>
                                </select>
                            </div>
                            <div class="col-10 col-lg-7 mb-1">
                                <input type="number" name="storage" class="form-control" value="<?=$storage?>" />
                            </div>
                            <label class="col-2 col-lg-1 col-form-label">GB</label>

                            <label class="col-12 col-lg-2 col-form-label">RAM</label>
                            <div class="col-12 col-lg-2 mb-1">
                                <select class="form-control" name="ram_operator">
                                    <option value="0">Operator</option>
                                    <option value="1" <?=$ram_operator==1?'selected="selected"':''?> >&lt;</option>
                                    <option value="2" <?=$ram_operator==2?'selected="selected"':''?> >=</option>
                                    <option value="3" <?=$ram_operator==3?'selected="selected"':''?> >&gt;</option>
                                </select>
                            </div>
                            <div class="col-10 col-lg-7 mb-1">
                                <input type="number" name="ram" class="form-control" value="<?=$ram?>" />
                            </div>
                            <label class="col-2 col-lg-1 col-form-label">GB</label>

                            <label class="col-12 col-lg-2 col-form-label">CPU(Core)</label>
                            <div class="col-12 col-lg-2 mb-1">
                                <select class="form-control" name="core_operator">
                                    <option value="0">Operator</option>
                                    <option value="1" <?=$core_operator==1?'selected="selected"':''?> >&lt;</option>
                                    <option value="2" <?=$core_operator==2?'selected="selected"':''?> >=</option>
                                    <option value="3" <?=$core_operator==3?'selected="selected"':''?> >&gt;</option>
                                </select>
                            </div>
                            <div class="col-12 col-lg-8 mb-1">
                                <input type="number" name="core" class="form-control" value="<?=$core?>" />
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn hami-btn btn-3 mt-15">Go</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row justify-content-center">

                <?php
                    $rs = $mysqli->query("SELECT * FROM packages a JOIN providers b ON a.provider_id = b.provider_id WHERE 1 = 1 $whereQuery ORDER BY $sortQuery");

                    while ($data = $rs->fetch_assoc()) {
                        $storage = $data['storage'];
                        $ram = $data['ram'];
                        $bandwidth = $data['bandwidth'];
                        $core = $data['core'];
                        $cpu = $data['cpu'];
                        $addon_domain = $data['addon_domain'];

                        if ($storage < 1000) $storage .= 'MB';
                        else if ($storage == 999999999) $storage = 'Unlimited';
                        else $storage = ($storage / 1000) . 'GB';

                        if ($ram == 0) $ram = 'Shared';
                        else if ($ram < 0.25) $ram = '128MB';
                        else if ($ram < 0.5) $ram = '256MB';
                        else if ($ram < 0.75) $ram = '512MB';
                        else if ($ram < 1) $ram = '768MB';
                        else $ram = number_format($ram, 0) . 'GB';

                        if ($core == 0) $core = 'Shared';
                        else if (floor($core) == $core) $core = number_format($core, 0);

                        if ($addon_domain == 999999999) $addon_domain = 'Unlimited';

                        ?>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-price-plan mb-100">
                                    <div class="price-plan-title">
                                        <h4><?=$data['provider_name']?></h4>
                                        <p><?=$data['package_name']?></p>
                                    </div>
                                    <div class="price-plan-value">
                                        <h2><?=number_format($data['price_per_month'], 0, ',', '.')?></h2>
                                        <p>/bulan</p>
                                    </div>
                                    <a href="<?=$data['link']?>" class="btn hami-btn w-100 mb-30" target="_blank">Order</a>
                                    <div class="price-plan-desc">
                                        <p><?=$data['hosting_type']?></p>
                                        <p><i class="icon_check"></i> <?=$storage?> Disk Space</p>
                                        <p><i class="icon_check"></i> <?=$ram?> RAM</p>
                                        <p><i class="icon_check"></i> <?=$core?> CPU(Core)</p>
                                        <p><i class="icon_check"></i> <?=$addon_domain?> Addon Domain</p>
                                    </div>
                                </div>
                            </div>

                        <?php
                    }
                ?>

                <!--
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-price-plan active mb-100">
                        <div class="popular-tag">
                            <i class="icon_star"></i> Best Plan <i class="icon_star"></i>
                        </div>
                        <div class="price-plan-title">
                            <h4>RumahWeb</h4>
                            <p>Paket Professional</p>
                        </div>
                        <div class="price-plan-value">
                            <h2>IDR 25k</h2>
                            <p>/bulan</p>
                        </div>
                        <a href="https://www.rumahweb.com/hosting-murah/" class="btn hami-btn w-100 mb-30" target="_blank">Lihat Detail</a>
                        <div class="price-plan-desc">
                            <p><i class="icon_check"></i> 1GB Space</p>
                            <p><i class="icon_check"></i> Unlimited Traffic Limit</p>
                            <p><i class="icon_check"></i> Unlimited Email Account &amp; MySQL</p>
                            <p><i class="icon_check"></i> 3 Add-on Domain</p>
                        </div>
                    </div>
                </div>
                -->

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