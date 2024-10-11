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
                                            <p class="subtitle">Phone</p>
                                            <a class="title" href="tel:8456821224">+1 (845) 682-1224</a>
                                        </div>
                                    </div>
                                    <div class="contact-icon-list">
                                        <div class="single-icon">
                                            <i class="ri-mail-fill"></i>
                                        </div>
                                        <div class="divider-ver"></div>
                                        <div class="contact-content">
                                            <p class="subtitle">Email</p>
                                            <a class="title" href="javascript:void(0)">platicascondonaflor@gmail.com</a>
                                        </div>
                                    </div>
                                    <div class="contact-icon-list">
                                        <div class="single-icon">
                                            <i class="ri-map-pin-line"></i>
                                        </div>
                                        <div class="divider-ver"></div>
                                        <div class="contact-content">
                                            <p class="subtitle">Location</p>
                                            <a class="title" href="#">View on Google Maps</a>
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
                                    <!-- <form action="#" class="custom-form support-page">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label class="custom-label text-green"
                                                        for="exampleFormControlInput1">Full
                                                        Name</label>
                                                    <input type="text" class="form-control custom-input"
                                                        id="exampleFormControlInput1" placeholder="Alex Jordan">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label class="custom-label text-green"
                                                                for="exampleFormControlInput5">Phone number</label>
                                                            <input type="text" class="form-control custom-input"
                                                                id="exampleFormControlInput5" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="form-group">
                                                            <label class="custom-label text-green"
                                                                for="exampleFormControlInput2">Email
                                                                address</label>
                                                            <input type="email" class="form-control custom-input"
                                                                id="exampleFormControlInput2"
                                                                placeholder="name@example.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label class="custom-label text-green">If you want to support the Latino
                                                    community, select an option: </label>
                                                <select class="form-control custom-input">
                                                    <option value="0">I want to participate - As a guest in the program
                                                        “Pláticas con Doña Flor”.</option>
                                                    <option value="1">I want to sponsor - An episode of the program
                                                        “Pláticas con Doña Flor”.</option>
                                                    <option value="2">I want to hire -  The services of “Doña Flor”.
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label class="custom-label text-green"
                                                    for="exampleFormControlTextarea1">Message</label>
                                                <textarea class="form-control custom-textarea"
                                                    id="exampleFormControlTextarea1"
                                                    placeholder="Type You message here"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn-green-fill">Send Message</button>
                                    </form> -->
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <iframe class="map-frame"
                                    src="https://www.google.com/maps/embed/v1/place?q=Dhaka,+Bangladesh&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                                    width="600" height="450" style="border: 15px" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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