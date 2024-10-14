<?php get_header(); ?>
<main id="content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!-- Breadcrumb Area S t a r t -->
      <section class="breadcrumb-section breadcrumb-bg bg-blue">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="<?php echo get_bloginfo('url'); ?>" class="single">Home</a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><span class="single">Blog </span></li>
              </ul>
            </nav>
            <p class="h1 title wow fadeInUp" data-wow-delay="0.1s">Article</p>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

      <!-- Blog-details S t a r t -->
      <section class="blog-details top-bottom-padding2">
        <div class="container">
          <div class="row gy-24">
            <div class="col-xxl-9 col-xl-8 col-lg-8">
              <div class="single-blog">
                <div class="blog-img">
                    <?php
                        // Get the URL of the featured image
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

                        // Check if the post has a featured image
                        if ($featured_image_url) {
                            // Display the featured image
                            echo '<img class="img-fluid w-100" src="' . esc_url($featured_image_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                        } else {
                            // Fallback image if no featured image is set
                            echo '<img src="assets/images/gallery/blog-7.png" class="img-fluid w-100" alt="Default Image">';
                        }
                    ?>
                </div>
                <div class="blog-info">
                  <div class="blog-info-title mb-5">
                    <div class="flex gap-16 mb-20 align-items-center">
                      <div class="donate flex gap-10 align-items-center">
                        <i class="ri-chat-3-line"></i>
                        <?php

                          $categories = get_the_category();
                          if (! empty($categories)) {
                              $category_links = array();
                              foreach ($categories as $category) {
                                  $category_links[] = '<a class="info-hiperlink" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                              }
                              echo '<p class="info">' . implode(', ', $category_links) . '</p>';
                          }
                        ?>
                      </div>
                    </div>
                    <h1 class="h4 title text-blue"><?php the_title(); ?></h1>
                    <div class="wp_editor_content">
                      <?php the_content(); ?>
                    </div>
                  </div>
                  <!-- blog info -->
                  <div class="another-blog-info">
                    <div class="d-flex res-flex justify-content-between align-items-center">
                      <div class="imp-btn flex align-items-center">
                        <?php $categories = get_the_category();
                          if (! empty($categories)) {
                              $category_links = array();
                              foreach ($categories as $category) {
                                  $category_links[] = '<a class="bg-blue badge active me-2" href="' . esc_url(get_category_link($category->term_id)) . '"><span class="subtitle">' . esc_html($category->name) . '</span></a>';
                              }
                              echo '<div class="categories">';
                              echo implode('', $category_links);
                              echo '</div>';
                          }?>
                        
                      </div>
                      <div class="share-link align-items-center">
                        <p class="title">share:</p>
                        <div class="social-link">
                          <div class="social-icon active">
                            <a href="javascript:void(0)"><i class="ri-facebook-fill"></i></a>
                          </div>
                          <div class="social-icon">
                            <a href="javascript:void(0)"><i class="ri-twitter-fill"></i></a>
                          </div>
                          <div class="social-icon">
                            <a href="javascript:void(0)"><i class="ri-linkedin-fill"></i></a>
                          </div>
                          <div class="social-icon">
                            <a href="javascript:void(0)"><i class="ri-instagram-fill"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Navigation Section -->
                   <div class="post-navigation row justify-content-between">
                    <div class="previous-post col-4">
                      <?php previous_post_link('%link', 'Previous'); ?>
                    </div>
                    <div class="next-post col-4 text-end">
                      <?php next_post_link('%link', 'Next'); ?>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-lg-4">
              <div class="right-element">

                <!-- Search Box -->
                <div class="search-section">
                  <p class="pera">Search Here</p>
                  <div class="dotted">
                    <div class="active-dot"></div>
                    <div class="inactive-dot"></div>
                  </div>
                  <div class="search-box">
                    <input type="search" class="search-input" placeholder="Enter Your Keyword">
                    <div class="search-icon">
                      <i class="ri-search-line"></i>
                    </div>
                  </div>
                </div>

                <!-- category -->
                <div class="category-section">
                  <p class="pera">Category List</p>
                  <div class="dotted">
                    <div class="active-dot"></div>
                    <div class="inactive-dot"></div>
                  </div>
                  <div class="category-box">
                      <ul class="listing">
                        <?php
                        $post_categories = get_the_category();
                        $post_category_ids = wp_list_pluck($post_categories, 'term_id');
                        $all_categories = get_categories();

                        foreach ( $all_categories as $category ) {
                            $active_class = in_array( $category->term_id, $post_category_ids ) ? 'active' : '';
                            echo '<li class="single-list ' . esc_attr( $active_class ) . '">';
                            echo '<a class="single" href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                            echo '</li>';
                        }
                        ?>
                      </ul>
                  </div>
                </div>

                <!-- Tag -->
                <div class="tag-section">
                  <p class="pera">Tags</p>
                  <div class="dotted">
                    <div class="active-dot"></div>
                    <div class="inactive-dot"></div>
                  </div>
                  <div class="tag-box">
                    <div class="tag-info">
                      <?php

                        $tags = get_the_tags();
                        if ($tags) {
                            foreach ($tags as $tag) {
                                echo '<div class="badge"><p class="subtitle">' . esc_html($tag->name) . '</p></div>';
                            }
                        }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>