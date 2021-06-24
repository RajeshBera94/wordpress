<?php
// Template Name:allvideo
get_header();

?>
<div class="sidebars desktop">
    <div class="sidebar-box clearfix">
        <h4>Breaking News</h4>
        <ul class="list">

            <?php
            $post_args = array(
                'post_type' => 'newss',
                'post_status' => 'publish',
                'posts_per_page' => 10,

                'tax_query' => array(array(
                    'taxonomy' => 'news_category',
                    'field' => 'slug',
                    'terms' => 'breakingnews',

                ))
            );

            $query = new WP_Query($post_args);

            while ($query->have_posts()) {
                $query->the_post();
                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

            ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
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



    <!-- ---------------------------pp-------------------------------- -->


    <div class="sidebar-box clearfix">
        <h4>Most Discussed News</h4>
        <div class='sidebar-tabs tabs' id="most_discussed">

            <ul class="list">

                <?php
                $post_args = array(
                    'post_type' => 'newss',
                    'post_status' => 'publish',
                    'posts_per_page' => 10,

                    'tax_query' => array(array(
                        'taxonomy' => 'news_category',
                        'field' => 'slug',
                        'terms' => 'breakingnews',

                    ))
                );

                $query = new WP_Query($post_args);

                while ($query->have_posts()) {
                    $query->the_post();
                    $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');

                ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a>
                    </li>
                <?php } ?>
            </ul>

            <div class="clear"></div>
        </div>
    </div>
</div>


<!-- ------------------------------------------p------------------------------ -->
<div class="content  with-sidebars">
    <div class="section-header item-header">
        <div class="title">
            <h1>
                Hip Hop <span>Videos</span>
            </h1>
        </div>
    </div>
    <div class="wire">
        <div class="secondary-posts">
            <?php

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $allvideo = array(
                'post_type' => 'videoss',
                'post_status' => 'publish',
                'paged' => $paged
            );

            $newsquery = new WP_Query($allvideo);

            while ($newsquery->have_posts()) {
                $newsquery->the_post();
                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');


            ?>

                <div class="news-info  ">
                    <div class="post-image-wrapper">
                        <a href="<?php the_permalink(); ?>">
                            <img class="post-image rectangle" src="<?php echo $imagepath[0] ?>" itemprop="thumbnailUrl" src="" />
                        </a>
                    </div>
                    <div class="text-wrap">
                        <a href="<?php the_permalink() ?>">
                            <p class="title"><?php the_title(); ?></p>
                            <p class="sub-label">
                                <?php echo get_the_date(); ?> </p>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="pagination">
                <?php
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $newsquery->max_num_pages,
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;'
                ));
                ?>
            </div>
            <?php wp_reset_postdata(); ?>


            <!-- <script type="text/javascript">
                if (!isMobile) {
                    cmnUNT('100x100', tile_num++);
                }
            </script>

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
            </script> -->

            <div class="mobile innerAdHatch">
                <div id="contentUnit1000" class="adUnits"></div>
            </div>
            <script type='text/javascript'>
                if (isMobile) {
                    CMNUNT.load('content-b', {
                        containerid: 'contentUnit1000',
                        zone: 'news_archive_end',
                        lazyLoad: true
                    });
                }
            </script>
        </div>
    </div>
</div>










<?php get_footer(); ?>