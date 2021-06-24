<?php
//Template Name:mainh
get_header();
?>



<div class="herobox">
    <div class="herobox-container">
        <?php
        $post_args = array(
            'post_type' => 'newss',
            'post_status' => 'publish',
            'posts_per_page' => 1,

            'tax_query' => array(array(
                'taxonomy' => 'news_category',
                'field' => 'slug',
                'terms' => 'banner',

            ))
        );

        $query = new WP_Query($post_args);

        while ($query->have_posts()) {
            $query->the_post();
            $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

        ?>
            <div id="main-post">
                <a href="<?php the_permalink(); ?>" class="post" alt="">
                    <div class="post-image-wrapper">
                        <img src="<?php echo $imagepath[0] ?>" alt="OMB Peezy: His Side Of The Story" width="100%" height="auto" />
                        <div class="hashtag hashtag-box"><?php the_excerpt(); ?></div>
                    </div>
                </a>
                <a href="<?php the_permalink(); ?>" class="post" alt="">
                    <div class="text-wrap">
                        <h2 class="title"><?php the_title() ?></h2>
                    </div>
                </a>
            </div>
        <?php } ?>

        <!-- -------------------------------------------------1st------------------------------------ -->
        <div class="secondary-posts">
            <div id="highlights">

                <div class="herobox-mobile red-line"></div>

                <div class="column-posts">

                    <?php

                    // $newsCat = get_terms([
                    //     'taxonomy' => 'news_category', 'hide_empty' => false, 'orderby' => 'name',
                    //     'order' => 'ASC'
                    // ]);

                    // $categories = get_categories($newsCat);
                    // foreach ($newsCat as $news) {
                    // echo $news->name;

                    $post_args = array(
                        'post_type' => 'newss',
                        'post_status' => 'publish',
                        'posts_per_page' => 2,

                        'tax_query' => array(array(
                            'taxonomy' => 'news_category',
                            'field' => 'slug',
                            'terms' => 'newshighlight',

                        ))
                    );

                    $query = new WP_Query($post_args);

                    while ($query->have_posts()) {
                        $query->the_post();
                        $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

                    ?>
                        <div class="news-info">
                            <a href="<?php the_permalink(); ?>" class="post" alt="">
                                <div class="post-image-wrapper">
                                    <img src="<?php echo $imagepath[0] ?>" alt="New Music Friday &#8211; New Albums From Lil Baby + Lil Durk, Lloyd Banks, Sleepy Hallow + More" width="100%" height="auto" />
                                    <div class="hashtag hashtag-box"><?php the_excerpt(); ?></div>
                                </div>

                            </a>
                            <a href="<?php the_permalink(); ?>" class="post" alt="">
                                <div class="text-wrap">
                                    <p class="title"><?php the_title() ?></p>
                                </div>
                            </a>
                        </div>
                        <!-- the_title(); 
                           the_excerpt(); -->

                    <?php }
                    wp_reset_postdata();

                    ?>
                </div>
            </div>

            <!-- ------------------------------------------------LINE-------------------------------- -->

            <div class="herobox-desktop red-line"></div>

            <div class="secondary-posts secondary-desktop">
                <?php
                $post_args = array(
                    'post_type' => 'newss',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,

                    'tax_query' => array(array(
                        'taxonomy' => 'news_category',
                        'field' => 'slug',
                        'terms' => 'highlight2',

                    ))
                );

                $query = new WP_Query($post_args);

                while ($query->have_posts()) {
                    $query->the_post();
                    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

                ?>


                    <div class="news-info">
                        <a href="<?php the_permalink(); ?>" class="post" alt="">
                            <div class="post-image-wrapper">
                                <img src="<?php echo $imagepath[0] ?>" alt="Bone Thugs-n-Harmony&#8217;s Flesh Says Eazy-E Used To Have PCP Delivered To The Studio" width="100%" height="auto" />
                            </div>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <div class="text-wrap">
                                <p class="title"><?php the_title() ?></p>
                                <!-- <p class="sub-label hashtag">#Wow</p> -->
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- --------------------------------------------news headline------------------------------------ -->
<div class="content home  with-sidebars">



    <div id="newsbox" class="desktop">
        <div class="section-header item-header">
            <div class="title">
                <h2>
                    News: <span>Today&#039;s Headlines</span>
                </h2>
            </div>
        </div>

        <div class="newscol right">

            <?php
            $post_args = array(
                'post_type' => 'newss',
                'post_status' => 'publish',
                'posts_per_page' => 5,

                'tax_query' => array(array(
                    'taxonomy' => 'news_category',
                    'field' => 'slug',
                    'terms' => 'headline',

                ))
            );

            $query = new WP_Query($post_args);

            while ($query->have_posts()) {
                $query->the_post();
                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

            ?>

                <ul class="list">
                    <li><a href="<?php the_permalink(); ?>" title=""><?php the_title() ?></a></li>
                </ul>

            <?php } ?>
        </div>


        <div class="newscol">

            <?php
            $post_args = array(
                'post_type' => 'newss',
                'post_status' => 'publish',
                'posts_per_page' => 5,

                'tax_query' => array(array(
                    'taxonomy' => 'news_category',
                    'field' => 'slug',
                    'terms' => 'headline2',

                ))
            );

            $query = new WP_Query($post_args);

            while ($query->have_posts()) {
                $query->the_post();
                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

            ?>
                <ul class="list">
                    <li><a href="<?php the_permalink(); ?>" title=""><?php the_title() ?></a></li>

                </ul>
            <?php } ?>
        </div>


        <div class="clear"></div>
        <a href="/news" class="uni-link">More News Stories &nbsp;<i class="fa fa-angle-right"></i></a>
    </div>

    <!-- ---------------------------------------------hiphop exclisive------------------------------ -->

    <div class="box-list small desktop">
        <div class="section-header item-header">
            <div class="title">
                <h2>
                    Hot In Juba <span>Exclusives</span>

                </h2>
            </div>
        </div>


        <?php
        $post_args = array(
            'post_type' => 'newss',
            'post_status' => 'publish',
            'posts_per_page' => 4,

            'tax_query' => array(array(
                'taxonomy' => 'news_category',
                'field' => 'slug',
                'terms' => 'exclusive',

            ))
        );

        $query = new WP_Query($post_args);

        while ($query->have_posts()) {
            $query->the_post();
            $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

        ?>
            <div class="story">
                <a href="<?php the_permalink(); ?>" data-id="more-on" data-type="image">
                    <img src="<?php echo $imagepath[0] ?>" itemprop="thumbnailUrl" src="https://static.hiphopdx.com/assets/prod/img/blank150.png?v11" />
                </a>

                <p class="title">
                    <a href="<?php the_permalink(); ?>" data-id="more-on" data-type="text">
                        <?php the_title() ?>
                    </a>
                </p>
            </div>
        <?php } ?>
    </div>

    <!-- ---------------------------------------------hiphop dx---------------------------- -->

    <div class="section-header item-header">
        <div class="title">
            <h2>
                Hot In Juba <span>Now</span>
            </h2>
        </div>
    </div>
    <div class="wire">
        <div class="secondary-posts">

            <?php
            $post_args = array(
                'post_type' => 'newss',
                'post_status' => 'publish',
                'posts_per_page' => 10,

                'tax_query' => array(array(
                    'taxonomy' => 'news_category',
                    'field' => 'slug',
                    'terms' => 'dxnow',

                ))
            );

            $query = new WP_Query($post_args);

            while ($query->have_posts()) {
                $query->the_post();
                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

            ?>

                <div class="news-info  ">
                    <div class="post-image-wrapper">
                        <a href="<?php the_permalink(); ?>">
                            <img class="post-image rectangle" src="<?php echo $imagepath[0] ?>" itemprop=" thumbnailUrl" src="https://static.hiphopdx.com/assets/prod/img/blank150.png?v11" />
                        </a>
                    </div>
                    <div class="text-wrap">
                        <a href="<?php the_permalink(); ?>">
                            <p class="title"><?php the_title(); ?>
                            </p>
                            <p class="sub-label">
                                <?php echo get_the_date(); ?> </p>
                        </a>
                    </div>
                </div>

            <?php } ?>
            <!-- <script type="text/javascript">
                if (!isMobile) {
                    cmnUNT('100x100', tile_num++);
                }
            </script> -->

            <div class="mobile innerAdHatch">
                <div id="contentUnit1" class="adUnits"></div>
            </div>
            <script type='text/javascript'>
                if (isMobile) {
                    CMNUNT.load('content-b', {
                        containerid: 'contentUnit1',
                        keywords: 'section_archive_instream1',
                        lazyLoad: true
                    });
                }
            </script>


            <div class="pagination">
                <a href="<?php the_permalink(98) ?>" class="next" rel="next">more<i class="fa fa-angle-right"></i></a>
            </div>
            <div class="mobile innerAdHatch">
                <div id="contentUnit1000" class="adUnits"></div>
            </div>
            <script type='text/javascript'>
                if (isMobile) {
                    CMNUNT.load('content-b', {
                        containerid: 'contentUnit1000',
                        zone: 'homepage_archive_end',
                        lazyLoad: true
                    });
                }
            </script>
        </div>
    </div>

</div>
<!-- ---------------------------------------hiphop singles------------------------------------------ -->

<!-- <div class="sidebars desktop">
    <div class="desktop side-ad">
        <div id="cmn_ad_tag_aside"></div>
        <script>
            if (!isMobile) {
                CMNUNT.load('aside', {
                    containerId: 'cmn_ad_tag_aside'
                });
            }
        </script>
    </div>
    <div class="sidebar tracks">
        <div class="section-header item-header">
            <div class="title">
                <h1>
                   Hot In Juba <span>Singles</span>
                </h1>
            </div>
        </div>
        <ul>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <div>
                        <i class="fa fa-headphones"></i>
                    </div>
                    <div>
                        <strong>Moneybagg Yo - </strong>Rookie Of The Year
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <div>
                        <i class="fa fa-headphones"></i>
                    </div>
                    <div>
                        <strong>The Avalanches f. MF DOOM - </strong>Tonight May Have To Last Me All My Life
                        (MF DOOM Mix)
                    </div>
                </a>
            </li>

        </ul>
        <a class="uni-link" href="/singles">More Singles &nbsp;<i class="fa fa-angle-right"></i></a>
    </div> -->


<!-- ------------------------------------------hiphop videos---------------------------------------- -->


<br />
<div class="sidebar videos">
    <div class="section-header item-header">
        <div class="title">
            <h1>
                Hot In Juba <span>Videos</span>
            </h1>
        </div>
    </div>
    <table>

        <?php


        $videoCat = array(
            'post_type' => 'videoss',
            'post_status' => 'publish'
        );

        $videoquery = new WP_Query($videoCat);

        while ($videoquery->have_posts()) {
            $videoquery->the_post();
            $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
        ?>

            <tr>
                <td>
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $imagepath[0] ?>" alt="Jim Jones, Jay Worthy &amp; Curren$y &#039;Say A Prayer&#039;" width="75" height="75" />
                    </a>
                </td>
                <td>
                    <p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <!-- <p class="excerpt">Say A Prayer</p> -->
                    <a href="##comment-widget" class="comments comments-widget hidden" data-post="541806"><i class="fa fa-comment-o"></i> <span class="counter">0</span></a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
    <a class="uni-link" href="<?php the_permalink(25) ?>">More Videos &nbsp;<i class="fa fa-angle-right"></i></a>
</div>
<!-- ---------------------------ad block----------------- -->

<div class="desktop side-ad">


    <?php dynamic_sidebar('sidebar'); ?>
</div>

<!-- -----------------------------------------------reviews--------------------------------------------- -->

<!-- <br />
    <div class="sidebar reviews">
        <div class="section-header item-header">
            <div class="title">
                <h2>
                    Reviews <span></span>
                </h2>
            </div>
        </div>
        <ul class="vidlist">
            <li class="clearfix">
                <a href="<?php the_permalink(); ?>"><img src="https://static.hiphopdx.com/2021/05/DMXExodusAlbumCover-142x142.png" alt="DMX&#039;s &#039;Exodus&#039; Is A Painful Reminder The Ruff Ryders Legend Wasn&#039;t Done Here"></a>
                <a href="<?php the_permalink(); ?>"><img src="https://static.hiphopdx.com/2021/06/j-cole-the-off-season-cover-art-142x142.jpg" alt="‘The Off-Season’ Is J. Cole’s Lyrical Prime, Artistic Wall"></a>
                <a href="<?php the_permalink(); ?>"><img src="https://static.hiphopdx.com/2021/06/yg-mozzy-kommunity-service-142x142.png" alt="YG &amp; Mozzy Bring The Crimson Tide On Joint Album &#039;Kommunity Service&#039;"></a>
            </li>

            <li class="clearfix">
                <a href="<?php the_permalink(); ?>"><img src="https://static.hiphopdx.com/2021/06/morray-street-sermons-142x142.jpg" alt="&#039;Quicksand&#039; Rapper Morray Speaks His Soul On Debut &#039;Street Sermons&#039;"></a>
                <a href="<?php the_permalink(); ?>"><img src="https://static.hiphopdx.com/2021/05/640x640-142x142.jpeg" alt="Toosii Can&#039;t Break Free From Monotony On &#039;Thank You For Believing&#039; Album"></a>
                <a href="<?php the_permalink(); ?>"><img src="https://static.hiphopdx.com/2021/05/dj-khaled-khaled-album-142x142.jpg" alt="DJ Khaled&#039;s &#039;Khaled Khaled&#039; Album Proves He&#039;s NOTHot In Juba&#039;s Quincy Jones"></a>
            </li>


        </ul>
        <a href="/reviews" class="uni-link">More Reviews &nbsp;<i class="fa fa-angle-right"></i></a>
    </div>


</div> -->

<!-- -------------------------------------------hiphop editor choice------------------------- -->

<div class="box-list large desktop">
    <div class="section-header item-header">
        <div class="title">
            <h2>
                Hot In Juba: <span>Editor&#039;s Choice</span>
            </h2>
        </div>
    </div>

    <?php
    $post_args = array(
        'post_type' => 'newss',
        'post_status' => 'publish',
        'posts_per_page' => 4,

        'tax_query' => array(array(
            'taxonomy' => 'news_category',
            'field' => 'slug',
            'terms' => 'editorchoise',

        ))
    );

    $query = new WP_Query($post_args);

    while ($query->have_posts()) {
        $query->the_post();
        $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

    ?>


        <div class="story">
            <a href="<?php the_permalink(); ?>" data-id="more-on" data-type="image" data-url="#" data-section="more-on" data-value="The Best R&amp;#038;B Albums Of 2021 &amp;#8230;(so far)">
                <img src="<?php echo $imagepath[0] ?>" itemprop="thumbnailUrl" src="https://static.hiphopdx.com/assets/prod/img/blank150.png?v11" />
            </a>
            <p class="title">
                <a href="<?php the_permalink(); ?>" data-id="more-on" data-type="text" data-url="#" data-section="more-on" data-value="The Best R&amp;#038;B Albums Of 2021 &amp;#8230;(so far)">
                    <?php the_title() ?>
                </a>
            </p>
        </div>
    <?php } ?>

</div>
<script>
    (function() {

        window.cToolbarInit = function() {

            cToolbar.load({
                mobileRightButton: 'youtube',
                facebookUsername: 'hiphopdx',
                facebookName: 'HiphopDX',
                twitterHandle: 'hiphopdx',
                twitterName: 'HipHopDX',
                youtubeChannel: 'hiphopdx',
                youtubeChannelName: 'HipHopDX',
                desktopBackground: 'solid',
                desktopSocialButtons: ["twitter", "facebook"],
                channel: '',
                disableMobile: true
            });

        };

        window.onload = function() {
            if (window.jQuery) {
                var socialLinks = $('a.tb-btn-url');
                if (socialLinks.length > 0) {
                    var socialLinks = $('a.tb-btn-url');
                    socialLinks.each(function(i, e) {
                        var linkHref = e.href;
                        var linkNewHref = linkHref.replace("http://", "https://");
                        e.href = linkNewHref;
                    })

                }
            }
        }

        var ns = document.createElement('script');
        ns.type = 'text/javascript';
        ns.async = true;
        ns.src = '//toolbar.complex.com/dist/ctoolbar.min.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ns, s);

    })();
</script>
<?php
get_footer();

?>