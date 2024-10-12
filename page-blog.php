<?php
/* Template Name: Blog */
get_header();
?>
<main id="content" role="main">
    <!-- Breadcrumb Area S t a r t -->
    <section class="breadcrumb-section breadcrumb-bg bg-blue">
        <div class="container">
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="<?php echo get_bloginfo('url'); ?>"
                                class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><span class="single">Blog </span>
                        </li>
                    </ul>
                </nav>
                <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
    <!-- End-of Breadcrumb Area -->

    <!-- Blog S t a r t -->
    <section class="blog-section-three top-bottom-padding">
        <div class="container">
            <div class="row gy-24">
                <?php  
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $blog_query = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 9,
                        'paged' => $paged
                    ));
                    while ( $blog_query->have_posts() ) : 
                    $blog_query->the_post();
                    ?>   

                   
                <article id="post-<?php the_ID(); ?>"
                    <?php post_class('col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper'); ?>>
                    <div class="single-blog h-calc">
                        <div class="blog-img">
                            <a href="<?php the_permalink(); ?>">
                                 <?php
                                    // Get the URL of the featured image
                                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'feature_blog_listing');

                                    // Check if the post has a featured image
                                    if ($featured_image_url) {
                                        // Display the featured image
                                        echo '<img class="img-fluid w-100" src="' . esc_url($featured_image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                                    } else {
                                        // Fallback image if no featured image is set
                                        echo '<img src="assets/images/gallery/blog-7.png" class="img-fluid w-100" alt="Default Image">';
                                    }
                                    ?>
                                
                            </a>
                        </div>
                        <div class="blog-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="blog-info-title">
                                    <div class="flex mb-15 gap-16 align-items-center">
                                        <div class="donate flex gap-10 align-items-center">
                                            <i class="ri-chat-3-line"></i>
                                            <p class="info">Donation</p>
                                        </div>
                                    </div>
                                    <h4 class="title text-capitalize"><a href="<?php the_permalink(); ?>" class="text-blue"><?php the_title(); ?></a></h4>
                                    <p class="subtitle"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="button-section"><a href="<?php the_permalink(); ?>" class="btn-blue-outline">Read More</a></div>
                    </div>
                </article>
                <?php 
                    endwhile;
                    wp_pagenavi( array( 'query' => $blog_query ) );
                    wp_reset_query();
                    ?>
            </div>
            <!-- pagination -->
            <nav class="pagination-nav">
                <ul class="pagination">
                    <li class="page-item" aria-current="page"><span class="page-link active">1</span></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                    <li class="page-item">
                        <a class="page-link next" href="javascript:void(0)" rel="next" aria-label="Next »"><i
                                class="ri-arrow-right-line"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- End pagination -->
        </div>
    </section>
    <!-- End-of Blog -->

</main>
<?php get_footer(); ?>