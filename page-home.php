<?php
/* Template Name: Homepage */
get_header();
?>
<main id="content" role="main">
    <?php get_template_part('parts/home-banner'); ?>

    <section class="about-area my-5" id="about-me">
        <div class="container">
            <div class="row g-24 justify-content-between">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-tittle mb-50">
                        <span class="sub-tittle text-capitalize font-700 text-secondary">Learn more about me...</span>
                        <h2 class="title mb-20 font-700 text-primary-variant">“Inspiring, educating, and empowering the
                            Latinx community”</h2>
                        <p class="pera">When deciding which charity to donate to, it's important to do your e search and
                            find one that aligns with your values and interests. Look for charities that are transparent
                            preventable diseases,</p>
                    </div>
                    <div class="about-info">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="d-flex gap-20">
                                    <div class="info-icon">
                                        <i class="ri-hand-heart-line text-primary-variant"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title"><button class="info-toggle text-primary-variant">My journey and contributions</button></h4>
                                        <div class="info-toggle-content">
                                            <p class="pera">With over 20 years in social work and psychotherapy, I have
                                                worked at Johns Hopkins Bayview, St. Vincent de Paul, House of Ruth
                                                Maryland, and CASA Maryland.
                                            </p><br>
                                            <p class="pera">
                                                Currently, I am an Independent Provider at AYNI, LLC, focusing on community
                                                well-being.</p>
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
                                        <h4 class="title"><button class="info-toggle text-primary-variant">Join Our Team</button></h4>
                                        <div class="info-toggle-content">
                                            <ul class="pera">
                                                <li>President of the Hispanic Commission of the Baltimore City Mayor's
                                                    Office.</li>
                                                <li>Board Member of the Maryland State Community Health Resources
                                                    Commission.</li>
                                                <li>Board Member of the Maryland Mental Health Association.</li>
                                                <li>Affiliate of the Latino Providers Network.</li>
                                                <li>Member of the Maryland Social Workers Association.</li>
                                                <li>Member of the National Association of Social Workers.</li>
                                                <li>Member of the Clinical Scholars Alumni Network.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="position-absolute about-info-image">
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
                                    <p class="about-info-card-text text-primary-variant fw-bold text-center">LCSW-C Licensed Clinical Social Worker-Clinical, MD</p>
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
                                    <p class="about-info-card-text text-primary-variant fw-bold text-center">Approved Supervisor by the Maryland Board of Social Work Examiners</p>
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
                                    <p class="about-info-card-text text-primary-variant fw-bold text-center">Certified Interpreter for the Courts in Maryland – Spanish/English</p>
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
                                    <p class="about-info-card-text text-primary-variant fw-bold text-center">Notary Public</p>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/home-helpful'); ?>
    <?php get_template_part('parts/home-testimonials'); ?>
    <?php get_template_part('parts/home-galeria'); ?>

</main>
<?php get_footer(); ?>