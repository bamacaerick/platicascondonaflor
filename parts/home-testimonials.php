<section class="testimonial-section-three section-padding" id="podcast">
        <div class="container">
          <div class="row gy-24 align-items-center">
            <div class="col-xl-4">
              <!-- Section Tittle -->
              <div class="section-tittle">
                <span class="sub-tittle text-capitalize font-600 text-secondary">
                  <?php the_field('legend_page_'); ?>
                </span>
                 <h2 class="title font-700 text-primary-variant">
                   <?php the_field('title_content'); ?>
                 </h2>
                 <div class="pera wp_editor_content">
                    <?php the_field('content'); ?>
                 </div>
                <a href="<?php the_field('button_i_want_to_participe'); ?>" class="btn-primary-fill mt-4">Participate!</a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-9">
              <div class="position-relative">
                <div class="testimonial-slider-three-active flex">
                  <div class="quote-with-img">
                    <div class="testimonial-images">
                      <img class="w-100" src="<?php the_field('inspirational_stories_-_image_1'); ?>" alt="image">
                    </div>
                  </div>
                  <div class="testimonial-images">
                    <img class="w-100" src="<?php the_field('inspirational_stories_-_image_2'); ?>">
                  </div>
                  <div class="testimonial-images">
                    <img class="w-100" src="<?php the_field('inspirational_stories_-_image_3'); ?>" alt="image">
                  </div>
                </div>
                <div class="position-card d-none d-lg-block">
                  <div class="single-testimonial-three">
                        <p class="single-testimonial-three-text mb-2 fst-italic fw-bolder">
                          <?php the_field('purple_card_-_title'); ?>
                        </p>
                        <div class="d-flex mb-2">
                            <i class="ri-calendar-line"></i>
                            <p class="ms-2 single-testimonial-three-text">
                              <?php the_field('purple_card_-_date'); ?></p>
                        </div>
                        <div class="d-flex">
                            <i class="ri-time-line"></i>
                            <p class="ms-2 single-testimonial-three-text">
                              <?php the_field('purple_card_-_hour'); ?></p>
                        </div>
                  </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-lg-4">
                        <p><?php echo get_field('text_below_pictures'); ?></p>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="d-flex mb-2">
                            <i class="ri-map-pin-fill text-secondary"></i>
                            <p class="ms-2"><?php the_field('address'); ?></p>
                        </div>
                        <div class="d-flex">
                            <i class="ri-calendar-line text-secondary"></i>
                            <p class="ms-2 single-testimonial-three-text">
                              <?php the_field('date'); ?></p>
                            <i class="ms-4 ri-time-line text-secondary"></i>
                            <p class="ms-2 single-testimonial-three-text">
                              <?php the_field('hour'); ?></p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>