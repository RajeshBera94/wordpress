<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('title') ?></title>



    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?>

    <!-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NHF7DV');
    </script>

    <script type="text/javascript">
        var isMobile = window.innerWidth < 922;
    </script> -->



</head>

<body>

    <div id="cmn_wrap">
        <div class="container">

            <!-- ---------------------------------header----------------------------------- -->

            <header class="header site-chrome">
                <div class="top clearfix">
                    <a class="nav-link mobile">
                        <div class="nav-icon-container">
                            <div id="nav-icon" class="nav-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                    <div class="logo">
                        <?php $logoimg = get_header_image(); ?>
                        <a href="#">
                            <img src="<?php echo bloginfo('template_directory'); ?>/logo/logo-white.svg" alt="HipHopDX" class="mobile">
                            <img src="<?php echo $logoimg ?>" alt="HipHopDX" class="desktop" />
                        </a>
                    </div>
                    <div class="social-counts desktop">

                        <?php
                        //  dynamic_sidebar('smedia');

                        ?>


                        <a href="https://www.facebook.com/">
                            <i class="fa fa-facebook"></i>1.6M
                        </a>
                        <a href="https://twitter.com/">
                            <i class="fa fa-twitter"></i>692K
                        </a>
                        <a href="https://instagram.com/">
                            <i class="fa fa-instagram"></i>533K
                        </a>
                        <a href="https://www.youtube.com/">
                            <i class="fa fa-youtube-play"></i>720K
                        </a>

                    </div>
                    <span id="header-avatar" data-user-name="" data-user-email=""></span>
                    <div id="search-trigger" class="search-trigger">
                        <i class="fa fa-search"></i>
                    </div>
                </div>
                <?php

                // $searchData = '';
                // if ($_GET['title'] != "") {
                //     $searchData = $_GET['title'];
                // }
                ?>

                <form method="GET" action="/search" class="search-box">

                    <input class="search-field" name="s" type="text" placeholder="Search" />
                    <button class="search-submit" type="submit" name="submit">
                        <i class="fa fa-search"></i>
                    </button>

                </form>


                <nav class="main-nav-mobile ">
                    <ul>
                        <li class="active">
                            <a href="/" class=""><i class="fa fa-home"></i><span class="label">Home</span></a>
                        </li>
                        <li class="">
                            <a href="https://www.facebook.com/" class=""><i class="fa fa-newspaper-o"></i><span class="label">News</span></a>
                        </li>
                        <li class="">
                            <a href="/singles" class=""><i class="fa fa-headphones"></i><span class="label">Singles</span></a>
                        </li>
                        <li class="">
                            <a href="/videos" class=""><i class="fa fa-youtube-play"></i><span class="label">Videos</span></a>
                        </li>
                        <li class="">
                            <a href="/reviews" class="review-icon"><i class="dfa dfa-review-record"></i><span class="label">Reviews</span></a>
                        </li>
                        <li class="">
                            <a href="/editorials" class=""><i class="fa fa-book"></i><span class="label">Editorials</span></a>
                        </li>
                        <li class="">
                            <a href="/release-dates" class=""><i class="fa fa-calendar"></i><span class="label">Releases</span></a>
                        </li>
                    </ul>
                </nav>
                <nav class="main-nav-desktop desktop">

                    <?php

                    wp_nav_menu(array(
                        "theme_location" => "theme_primary_menu"
                    ));
                    ?>

                    <!-- <ul>
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                        <li class="">
                            <a href="/news">News</a>
                        </li>
                        <li class="">
                            <a href="/singles">Singles</a>
                        </li>
                        <li class="">
                            <a href="/videos">Videos</a>
                        </li>
                        <li class="">
                            <a href="/reviews">Reviews</a>
                        </li>
                        <li class="">
                            <a href="/editorials">Editorials</a>
                        </li>
                        <li class="">
                            <a href="/release-dates">Releases</a>
                        </li>
                    </ul> -->
                </nav>
                <nav class="secondary-nav mobile">
                    <ul>
                        <li><a href="/news">News</a></li>
                        <li><a href="/reviews">Reviews</a></li>
                        <li><a href="/release-dates">Releases</a></li>
                        <li><a href="#">DX Awards</a></li>
                        <li class="nav-link-mobile"><a href="#">More</a></li>
                    </ul>
                </nav>
            </header>