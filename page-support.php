<?php
/* template name: Support */

get_header(); ?>
<main id="content" role="main">
    <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="<?php bloginfo('url'); ?>"
                                class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><span class="single">Support</span>
                        </li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content" itemprop="mainContentOfPage">
            <div class="volunteer-details top-bottom-padding2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-11">
                            <div class="contact-section">
                                <div class="contact-list">
                                    <div class="contact-icon-list">
                                        <div class="single-icon">
                                            <i class="ri-phone-fill"></i>
                                        </div>
                                        <div class="divider-ver"></div>
                                        <div class="contact-content">
                                            <p class="subtitle"><?php the_field('phone_title'); ?></p>
                                            <a class="title" href="tel:<?php the_field('phone_number'); ?>">
                                            <?php the_field('phone_number'); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="contact-icon-list">
                                        <div class="single-icon">
                                            <i class="ri-mail-fill"></i>
                                        </div>
                                        <div class="divider-ver"></div>
                                        <div class="contact-content">
                                            <p class="subtitle"><?php the_field('email_title'); ?></p>
                                            <a class="title" href="mailto:<?php the_field('email_address'); ?>">
                                                <?php the_field('email_address'); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="contact-icon-list">
                                        <div class="single-icon">
                                            <i class="ri-map-pin-line"></i>
                                        </div>
                                        <div class="divider-ver"></div>
                                        <div class="contact-content">
                                            <p class="subtitle">Location</p>
                                            <a class="title" href="<?php the_field('link_location'); ?>">View on Google Maps</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-padding4">
                        <div class="row gy-24">
                            <div class="col-xl-6">
                                <div class="send-box">
                                    <div class="custom-form support-page">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <img class="img-fluid w-100" 
                                src="<?php the_field('principal_image') ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>