<div class="gallery-area pb-5 mb-5 podcast-gallery">
    <h3 class="text-center text-primary-variant mb-5 fw-bold">Latest episodes</h3>
    <div class="gallery-slider d-flex">
        <?php
        $args = array(
            'post_type' => 'podcast', // Nombre del custom post type
            'posts_per_page' => -1,    // Número de posts a traer (-1 para todos)
        );

        $podcasts_query = new WP_Query($args);

        if ($podcasts_query->have_posts()) :
            while ($podcasts_query->have_posts()) : $podcasts_query->the_post(); ?>
                <a href="<?php echo esc_attr(get_field('link_to_podcast')); ?>" class="gallery-img podcast-gallery-slide" target="_blank">
                    <img src="<?php echo$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'podcast'); ?>" alt="img">
                    <div class="podcast-gallery-data wow">
                        <h4 class="podcast-gallery-data-episode text-uppercase"><?php the_title(); ?></h4>
                        <p class="podcast-gallery-data-title text-uppercase">
                            <?php the_field('legend_-_podcast'); ?>
                        </p>
                    </div>
                </a>
        <?php endwhile;
            else :
                echo 'No podcasts available.';
            endif;
            wp_reset_postdata();
        ?>

    </div>
</div>


