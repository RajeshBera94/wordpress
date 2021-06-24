<?php

get_header();
// the_post();
?>

<!-- 
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
                    <a href="#">
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
                        <a href="#">
                            <?php the_title(); ?></a>
                    </li>
                <?php } ?>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</div> -->

<!-- ----------------------------------------side1---------------------------- -->
<div class="content  with-sidebars">

    <div id="article-header" class="article-header">

        <?php
        $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
        ?>
        <div class="image large">
            <img src="<?php echo $imagepath[0] ?>" alt="Diddy &amp; J. Cole Re-Enact Infamous Fight At 2013 VMAs After-Party" class="large" />

        </div>
        <div class="title">
            <h1 class="headline__title"><?php the_title() ?></h1>
        </div>



        <div class="publish-info">
            <!-- <img class="avatar" src="<?php echo $imagepath[0] ?>"> -->
            <div class="publish-text">
                <div class="date" itemprop="datePublished" content=&quot;2021-06-10 03:26:03&quot;>
                    <!-- <?php echo get_the_date(); ?> -->
                </div>
                <div class="author">
                    <meta itemprop="name" content="Joe Walker" />
                    <!-- by <a href="#"><?php the_author(); ?></a> -->
                </div>
            </div>

        </div>
    </div>
</div>

<!-- -------------------------------------comment---------------------------------------- -->
<!-- <div class="community">
    <div id="comment-widget" class="comments-widget">
        <div class="heading">
            <h2>
                DX <span>COMMUNITY</span>
            </h2>
            <h4 class="comment-widget-title">
                <span id="comment-num-bottom" class="comment-num">1 Readers Joined the Discussion</span>
            </h4>
        </div>
        <div class="card form">
            <section id="respond">
                <form class="reply-form comment-form form" method="POST">
                    <div class="error-container undefined">
                        <div class="error-state"><i class="fa fa-lg fa-exclamation-circle"></i>
                            <div class="message">false</div>
                        </div>
                    </div>
                    <div class="form-fields">
                        <div class="form-group undefined"><textarea rows="6" aria-required="true" class="form-control" placeholder="Join the discussion"></textarea></div>
                    </div>
                    <div class="form-row">
                        <div class="col-1">
                            <div class="form-group undefined"><input type="text" class="form-control" placeholder="Name"></div>
                        </div>
                        <div class="col-1">
                            <div class="form-group undefined"><input type="text" class="form-control" placeholder="E-mail"></div>
                        </div>
                        <div class="col-1 rating-control">
                            <div class="form-group">
                                <div class="rating-input">
                                    <div class="rating-image-container"><img src="https://static.hiphopdx.com/2021/06/diddy-j-cole-e1623317911154-250x142.png"></div>
                                    <div class="dropdown">
                                        <div class="drop-arrow"><i class="fa fa-chevron-down dropdown-indicator"></i></div><label for="rating"><select name="rating">
                                                <option value="0">No Rating</option>
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="1">5</option>
                                            </select></label>
                                    </div>
                                    <div class="rating-information">
                                        <h5>Your Rating</h5>
                                        <div>Diddy &amp; J. Cole Re-Enact Infamous Fight At 2013 VMAs After-Party</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row"><button type="button" name="submit" class="comment-submit">Post Comment</button></div>
                    </div>
                </form>
            </section>
        </div>
        <div class="comment-list">
            <a name="comments"></a>
            <div class="comment-feed" id="comment-feed">
                <div class="card sort-comments"><span class="desktop-only">Order Comments By</span><a class="active"><i class="dfa dfa-clock"></i>Latest</a><span class="separator"></span><a class="undefined"><i class="dfa dfa-fire_1"></i>Fire</a></div>
                <div>
                    <div class="card comment depth-undefined" id="comment-3163640">
                        <div><img src="https://gravatar.com/avatar/5176629189f0810a948d23c9badbbfd6/?s=80&amp;d=https://static.hiphopdx.com/assets/prod/img/avatar3.png" class="avatar pull-left">
                            <div class="information">
                                <h4 class="username media-heading">kennyken</h4><time><a><span>June 10, 2021 | 4:02 AM</span></a></time>
                            </div>
                        </div>
                        <div>
                            <h6 class="rating rating-null">Gave the null/5</h6>
                            <div class="comment-body">Cool. They are showing us they’re good now.</div>
                            <div class="comment-interaction">
                                <div class="interaction"><a class="reply undefined" id="reply-comment-3163640" data-parent-id="reply-comment-0"><i class="fa fa-mail-reply"></i> Reply</a><a class="fire undefined"><i class="dfa dfa-fire_1"></i> <span class="score score-0">0</span></a>
                                    <div class="initial"><a class="flag undefined"><i class="fa undefined"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="form-reply-comment-3163640"></div>
                </div>
                <div class="card more-comments " id="loadMoreComments">Load More Comments</div>
            </div>
        </div>
    </div>
</div> -->
<?php
get_footer();

?>
