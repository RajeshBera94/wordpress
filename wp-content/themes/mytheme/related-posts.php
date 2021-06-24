<div class="two-section-heading cat">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="heading-t-box heading-genral">
                <h4>Related post</h4>
            </div>
        </div>
    </div>
</div>

<?php
$related = new WP_Query(
    array(
        'category__in'   => wp_get_post_categories($post->ID),
        'posts_per_page' => 3,
        'post__not_in'   => array($post->ID)
    )
);
?>

<div class="row">
    <div id="related-post">
        <?php if ($related->have_posts()) {
            while ($related->have_posts()) {
                $related->the_post();
        ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="full-width-related">
                        <?php $guff_image = wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                        <img src="<?php echo esc_url($guff_image[0]); ?>" alt="" class="img-responsive">

                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h1>
                    </div>
                </div>
        <?php
            }
            wp_reset_postdata();
        } ?>
    </div>
</div>