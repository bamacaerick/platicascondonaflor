<?php
/* Template Name: Homepage */
get_header();
?>
<main id="content" role="main">
    <!-- Banner content -->
    <?php get_template_part('parts/home-banner'); ?>
<?php 
    $query_history = new WP_Query( array( 'pagename' => 'home' ) ); 
?>

 <?php if ($query_history->have_posts()): ?>
 <?php while ($query_history->have_posts()): $query_history->the_post(); ?>

    <!-- Home content -->
    <section class="about-area my-5" id="about-me">
        <div class="container">
            <div class="row g-24 justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-tittle mb-50 about-info">
                        <span class="sub-tittle text-capitalize font-700 text-secondary wp_editor_content">
                            <?php the_field('legend_about_me'); ?>
                        </span>
                        <h2 class="title mb-20 font-700 text-primary-variant">
                            <?php the_field('principal_title'); ?>
                        </h2>
                        <div class="para wp_editor_content">
                            <?php the_field('principal_content'); ?>
                        </div>
                    </div>
                    <div class="about-info">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-hand-heart-line text-primary-variant"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">
                                            <button class="info-toggle text-primary-variant fw-bold">
                                                <?php the_field('first_title_section'); ?>    
                                            </button>
                                        </h4>
                                        <div class="info-toggle-content">
                                            <div class="pera wp_editor_content">
                                                <?php the_field('first_content_section'); ?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="py-3"></div>
                            </div>
                            <div class="col-lg-10 mb-20">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-user-line text-primary-variant"></i>
                                    </div>

                                    <div class="info-content">
                                        <h4 class="title"><button class="info-toggle text-primary-variant fw-bold">
                                            <?php the_field('second_title_section'); ?>
                                        </button></h4>
                                        <div class="info-toggle-content">
                                            <div class="pera wp_editor_content">
                                                <?php the_field('section_content_section') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-info-image">
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/about.png"
                            alt="image">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-5 about-cards-content">
                <div class="col-8">
                    <div class="row">
                        <div class="col-12 col-lg-6 p-3 wow fadeInUp" data-wow-delay="0.4s">
                          <div class="about-info-card h-100 w-100 d-flex">
                            <div class="row align-items-center w-100">
                                <div class="col-auto">
                                  <img src="<?php echo get_template_directory_uri(); ?>/images/icons/card-one-icon.png; ?>" alt="">
                                </div>
                                <div class="col">
                                    <p class="about-info-card-text text-primary-variant fw-bold text-center">
                                    <?php the_field('first_title_card') ?>
                                    </p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 p-3 wow fadeInUp" data-wow-delay="0.4s">
                          <div class="about-info-card h-100 w-100 d-flex">
                            <div class="row align-items-center w-100">
                                <div class="col-auto">
                                  <img src="<?php echo get_template_directory_uri(); ?>/images/icons/card-two-icon.png; ?>" alt="">
                                </div>
                                <div class="col">
                                    <p class="about-info-card-text text-primary-variant fw-bold text-center">
                                        <?php the_field('second_title_card') ?>
                                    </p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 p-3 wow fadeInUp" data-wow-delay="0.4s">
                          <div class="about-info-card h-100 w-100 d-flex">
                            <div class="row align-items-center w-100">
                                <div class="col-auto">
                                  <img src="<?php echo get_template_directory_uri(); ?>/images/icons/card-three-icon.png; ?>" alt="">
                                </div>
                                <div class="col">
                                    <p class="about-info-card-text text-primary-variant fw-bold text-center">
                                        <?php the_field('third_title_card') ?>
                                    </p>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6 p-3 wow fadeInUp" data-wow-delay="0.4s">
                          <div class="about-info-card h-100 w-100 d-flex">
                            <div class="row align-items-center w-100">
                                <div class="col-auto">
                                  <img src="<?php echo get_template_directory_uri(); ?>/images/icons/card-four-icon.png; ?>" alt="">
                                </div>
                                <div class="col">
                                    <p class="about-info-card-text text-primary-variant fw-bold text-center">
                                        <?php the_field('Fourth_card_titles') ?>
                                    </p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
    <!-- Cards content -->
    <?php get_template_part('parts/home-helpful'); ?>
    <!-- Podcasst content -->
    <?php get_template_part('parts/home-testimonials'); ?>
    <!-- Latest episodes content -->
    <?php get_template_part('parts/home-galeria'); ?>
  <?php endwhile; ?>
 <?php endif; ?>
 <?php wp_reset_postdata(); ?>

</main>
<?php get_footer(); ?>