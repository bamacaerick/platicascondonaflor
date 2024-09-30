</div> <!-- #wrapper .body-content -->
<footer>
      <div class="footer-wrapper footer-bg-one">
        <div class="container">
          <div class="footer-menu">
            <div class="col-lg-12">
              <div class="menu-wrapper d-flex align-items-center justify-content-between">
                <div class="header-left d-flex align-items-center justify-content-between">
                  <!-- Logo-->
                  <div class="logo">
                        <?php
                        
                            if (has_custom_logo()) {
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                                $nologo = '';
                            } elseif (has_site_icon()) {
                                $logo = get_site_icon_url();
                                $nologo = '';
                            } else {
                                $logo = '';
                                $nologo = 'no-logo';
                            }

                            echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span class="screen-reader-text" itemprop="name">' . esc_html(get_bloginfo('name')) . '</span><span id="logo-container" class="logo" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><img src="';
                                if (has_custom_logo()) {
                                    echo esc_url($logo[0]);
                                } else {
                                    echo esc_url($logo);
                                }
                            echo '" alt="' . esc_attr(get_bloginfo('name')) . '" id="logo-img" class="logo-img' . esc_attr($nologo) . '" itemprop="url" /></span></a>';
                        ?>
                    </div>
                </div>
                <!-- Footer-menu -->
                <div class="main-menu d-none d-lg-block">
                    <nav id="menu" role="navigation" itemscope
                        itemtype="https://schema.org/SiteNavigationElement">
                        <?php wp_nav_menu(
                            array( 
                                'theme_location' => 'main-menu', 
                                'container' => 'ul', 
                                'menu_class' => 'listing', 
                                'menu_id' => 'navigation', 
                                'link_before' => '<span itemprop="name">', 
                                'link_after' => '</span>',
                                'add_li_class'  => 'single-list'
                                )); 
                        ?>
                    </nav>
                </div>
                <!-- Right button -->
                <div class="cart">
                    <!-- <li class="cart-list"><a href="donate-payment.html" class="donate-btn">Donate</a></li> -->
                </div>
              </div>
            </div>
          </div>
          <hr class="footer-line">
          <div class="footer-imp-link row g-4 justify-content-between">
            <div class="col-xl-3 col-lg-3">
                <div class="footer-link">
                    <h4 class="title">Explore</h4>
                    <ul class="imp-link">
                    <li class="single-list">
                        <a class="single" href="<?php echo get_bloginfo('url'); ?>">Home</a>
                    </li>
                    <li class="single-list">
                        <a class="single" href="#">Meet flor</a>
                    </li>
                    <li class="single-list">
                        <a class="single" href="#">Podcast</a>
                    </li>
                    </ul>
                </div>
                <div class="footer-social-link mt-5 mb-4 mb-lg-0">
                    <ul class="listing">
                        <li class="single-list">
                            <a class="single" href=""><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="single-list">
                            <a class="single" href=""><i class="ri-youtube-fill"></i></a>
                        </li>
                        <li class="single-list">
                            <a class="single" href=""><i class="ri-instagram-line"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
              <div class="footer-link">
                <h4 class="title">Contact me</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-mail-fill"></i>
                      </div>
                      <a class="single" href="mailto:platicascondonaflor@gmail.com">platicascondonaflor@gmail.com</a>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-phone-fill"></i>
                      </div>
                      <a class="single" href="tel:+8456821224">+1 (845) 682-1224</a>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex align-items-center gap-10 mb-20">
                      <div class="imp-icon">
                        <i class="ri-map-pin-2-fill"></i>
                      </div>
                      <span class="single">2406 Rockwood Ave, Baltimore, MD 21209</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="footer-link">
                <h4 class="title">Latest articles</h4>
                <ul class="imp-link">
                  <li class="single-list">
                    <div class="d-flex gap-20 mb-20 align-items-center">
                      <div class="project-img">
                        <a href="donation-details.html">
                          <img src="assets/images/gallery/project-1.png" alt="image">
                        </a>
                      </div>
                      
                      <div class="project-info">
                        <p class="project-date">12.Oct.2023</p>
                        <h4 class="project-title"><a href="donation-details.html">18 Best Charity Marketing Champions</a></h4>
                      </div>
                    </div>
                  </li>
                  <li class="single-list">
                    <div class="d-flex gap-20">
                      <div class="project-img">
                        <a href="donation-details.html">
                          <img src="assets/images/gallery/project-2.png" alt="image">
                        </a>
                      </div>
                      <div class="project-info">
                        <p class="project-date">20.Oct.2023</p>
                        <h4 class="project-title"><a href="donation-details.html">Charity starts from home. You Can't Even Help,</a></h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <hr class="footer-line">
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
          <div class="container">
            <div class="footer-border">
              <div class="row">
                <div class="col-xl-12">
                  <div class="footer-copy-right text-center">
                    <p class="pera">Copyright © Estudio Dual <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>