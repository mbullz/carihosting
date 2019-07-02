<?php
    require('connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
        $page = 'Live Chat';
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
                                <li class="breadcrumb-item active" aria-current="page">Live Chat</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Details Area Start -->
    <section class="hami-blog-details-area section-padding-80-0">
        <div class="container">

            <!--
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="post-content">
                        <div class="post-meta">
                            <a href="#" class="post-date">December 9, 2018</a>
                        </div>
                        <h2 class="post-title">7 Trends Dominating Content Marketing in 2018</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="post-thumbnail mb-50">
                        <img src="img/bg-img/18.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="blog-details-text">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                        <p>It sportsman earnestly ye preserved an on. Moment led family sooner cannot her window pulled any. Or raillery if improved landlord to speaking hastened differed he. Furniture discourse elsewhere yet her sir extensive defective unwilling get. Why resolution one motionless you him thoroughly. Noise is round to in it quick timed doors. Written address greatly get attacks inhabit pursuit our but. Lasted hunted enough an up seeing in lively letter. Had judgment out opinions property the supplied.</p>

                        <p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied did one admitting incommode tolerably how are.</p>

                        <blockquote class="hami-blockquote d-flex">
                            <div class="icon">
                                <img src="img/core-img/quote.png" alt="">
                            </div>
                            <div class="text">
                                <h4>“Be passionate about your company’s culture and your mission. Remain positive because it inspires others.”</h4>
                                <h5>– Arthur Vaughn</h5>
                            </div>
                        </blockquote>

                        <h2 class="mb-4">5 Easy Ways to Write an Irresistible Introduction</h2>

                        <p>It sportsman earnestly ye preserved an on. Moment led family sooner cannot her window pulled any. Or raillery if improved landlord to speaking hastened differed he. Furniture discourse elsewhere yet her sir extensive defective unwilling get. Why resolution one motionless you him thoroughly. Noise is round to in it quick timed doors.</p>

                        <ul>
                            <li><span><i class="fa fa-circle" aria-hidden="true"></i> How your staff greets them?</span> The ambience of your Salon &amp; Spa is crucial in making the first impression. The initial vibes that your customer feels when they enter is what stays with them. It’s important that you make these vibes as positive as possible as it has a sub-conscious effect on the customer.</li>

                            <li><span><i class="fa fa-circle" aria-hidden="true"></i> Humans not Robots:</span> Train your staff to treat customers like family. Take special care that their interaction with the customer isn’t robotic and the overall interaction is as human as possible.</li>

                            <li><span><i class="fa fa-circle" aria-hidden="true"></i> Remember ‘The Name’:</span> Regular customers don’t like to enter a Salon &amp; Spa and explain all their preferences again. Remember what they like, remember their dislikes, and most importantly, remember their name.</li>
                        </ul>

                        <p>Old there any widow law rooms. Agreed but expect repair she nay sir silent person. Direction can dependent one bed situation attempted. His she are man their spite avoid. Her pretended fulfilled extremely education yet. Satisfied did one admitting incommode tolerably how are.</p>
                    </div>

                    <div class="post-author-area d-flex align-items-center justify-content-between mb-50">
                        <ul class="popular-tags">
                            <li><a href="#">Agency</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>

                        <div class="author-social-info d-flex align-items-center">
                            <p>Share:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            -->

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">

                    <!-- Related News Area -->
                    <!--
                    <div class="related-news-area section-padding-80-0">
                        <h2>Relatest News</h2>

                        <div class="row justify-content-between">
                            <div class="col-12 col-sm-6 col-lg-5">
                                <div class="single-related-news mb-80">
                                    <p class="post-date">December 9, 2018</p>
                                    <a href="single-blog.html" class="post-title">Managed Hosting vs Dedicated Hosting</a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-5">
                                <div class="single-related-news mb-80">
                                    <p class="post-date">December 9, 2018</p>
                                    <a href="single-blog.html" class="post-title">The 7-Step Guide to Creating Amazing Cornerstone Content</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->

                    <!-- Comments Area -->
                    <div class="comment_area mb-50 clearfix">
                        <h2>Live Chat</h2>
                        <input type="hidden" id="last_chat_id" value="0" />
                        <input type="hidden" id="scroll_init" value="true" />

                        <ol id="chats" style="height: 500px; overflow-y: scroll;">
                            <!--
                            <li class="single_comment_area">
                                <div class="comment-content d-flex">
                                    <div class="comment-author">
                                        <img src="img/bg-img/6.jpg" alt="author">
                                    </div>
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">27 Aug 2018</a>
                                        <h5>Jerome Leonard</h5>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <div class="comment-content d-flex">
                                            <div class="comment-author">
                                                <img src="img/bg-img/7.jpg" alt="author">
                                            </div>
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">27 Aug 2018</a>
                                                <h5>Theodore Adkins</h5>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                <a href="#" class="like">Like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            -->

                            <!--
                            <li class="single_comment_area">
                                <div class="comment-content d-flex">
                                    <div class="comment-author">
                                        <img src="img/bg-img/8.jpg" alt="author">
                                    </div>
                                    <div class="comment-meta">
                                        <a class="post-date">30 JUN 2019</a>
                                        <h5>Roger Marshall</h5>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                    </div>
                                </div>
                            </li>
                            -->
                        </ol>
                    </div>

                    <!-- Leave A Reply -->
                    <div class="hami-contact-form mt-80 mb-30">
                        <h2>Leave A Comment</h2>

                        <!-- Form -->
                        <form id="form-chat" action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" id="name" name="name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" id="email" name="email" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <textarea id="message" name="message" class="form-control mb-30" placeholder="Say something..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn hami-btn btn-3 mt-15">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="./" target="_blank">Kelompok 6</a>
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

    <script type="text/javascript">
        $(function() {
            $('#form-chat').submit(function() {
                $.ajax({
                    url: 'ajax.php?mode=store_chat',
                    data: $(this).serialize(),
                    dataType: 'json',
                    method: 'POST',
                    success: function(result) {
                        $('#message').val('');
                    },
                });

                return false;
            });
        });

        var x = setInterval(function() {
            var last_chat_id = $('#last_chat_id').val();

            var force_scroll = false;

            if ($('#scroll_init').val() == 'true') {
                $('#scroll_init').val('false');
                force_scroll = true;
            }
            else {
                var distanceFromBottom = $('#chats').prop('scrollHeight') - ($('#chats').scrollTop() + 500);
                if (distanceFromBottom < 100) force_scroll = true;
            }

            $.ajax({
                url: 'ajax.php?mode=index_chat',
                data: 'last_chat_id=' + last_chat_id,
                dataType: 'json',
                method: 'POST',
                success: function(result) {
                    $.each(result.data, function(index, value) {
                        var last_chat_id = $('#last_chat_id').val();

                        if ( parseInt(value.chat_id) <= parseInt(last_chat_id) ) return;

                        $('#last_chat_id').val(value.chat_id);

                        var name = value.name;
                        var date = value.created_at;
                        var message = value.message;

                        var html = '';

                        html += '<li class="single_comment_area"><div class="comment-content d-flex"><div class="comment-author"><img src="img/bg-img/default-profile.jpg" alt="author"></div><div class="comment-meta">';
                        
                        html += '<a class="post-date">' + date + '</a>';
                        html += '<h5>' + name + '</h5>';
                        html += '<p>' + message + '</p>';
                        
                        html += '</div></div></li>';

                        $('#chats').append(html);
                    })
                },
                complete: function() {
                    if (force_scroll) $('#chats').animate({scrollTop: $('#chats').prop('scrollHeight')}, 1000);
                }
            });

            //clearInterval(x);
        }, 3000);
    </script>

</body>

</html>