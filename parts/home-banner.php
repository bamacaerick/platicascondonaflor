<section class="banner">
    <div class="urgent-area-slide">
        <?php
            // Define el query personalizado
            $args = array(
                'post_type' => 'banner', // Custom post type
                'posts_per_page' => -1   // Muestra todos los posts
            );

            $banner_query = new WP_Query($args); 

           if ($banner_query->have_posts()) :
                while ($banner_query->have_posts()) : $banner_query->the_post();
                    ?>
               
        <div class="banner-img hero-area-two"
            style="background-image: 
            url('<?php echo $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')">
            <div class="single-slider hero-padding-two">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 my-auto">
                            <div class="hero-caption mb-20">
                                <p class="key-title font-700 wow fadeInUp" data-wow-delay="0.0s">
                                    <?php the_field('home_banner_subtitle'); ?>
                                </p>
                                <h1 class="title font-700 wow fadeInUp mb-2" data-wow-delay="0.1s">
                                    <?php  the_title(); ?>
                                </h1>
                                <div class="pera mx-width-700 wow fadeInUp" data-wow-delay="0.2s">
                                    <?php the_content(); ?>
                                </div>
                                <div class="d-flex gap-20 flex-wrap">
                                    <a href="<?php the_field("home_banner_link_boton"); ?>" class="btn-primary-fill hero-btn wow fadeInUp"
                                        data-wow-delay="0.3s">
                                        <?php the_field('home_banner_text_button') ?>    
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No hay banners disponibles.';
            endif;
            ?>
    </div>
</section>