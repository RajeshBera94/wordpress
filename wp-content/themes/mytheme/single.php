<?php

get_header();
the_post();

?>



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
            <img class="avatar" src="<?php echo $imagepath[0] ?>">
            <div class="publish-text">
                <div class="date" itemprop="datePublished" content="&quot;2021-06-10" 04:56:21&quot;=""> Published on:
                    <?php echo get_the_date(); ?>
                </div>
                <div class="author">
                    by <a href="#"><?php the_author() ?></a>
                </div>
            </div>

            <div class="article-advertisement  article-body article-news">
                <div class="body-copy  js-entry-text" itemprop="articleBody">
                    <?php the_content(); ?>
                    <?php comment_form(); ?>
                </div>
            </div>
        </div>
        <!-- ----------------------related news--------------------------- -->
        <div class="box-list small desktop">
            <div class="section-header item-header">
                <div class="title">
                    <h2>
                        Related News

                    </h2>
                </div>
            </div>


            <?php

            $allnews = array(
                'post_type' => 'newss',
                'post_status' => 'publish',
            );

            $query = new WP_Query($allnews);

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



    </div>
</div>





<!-- -------------------------------------comment---------------------------------------- -->
<div class="community">
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
    </div>
</div>


<?php
get_footer();

?>