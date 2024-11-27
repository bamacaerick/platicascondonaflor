<?php if(is_page_template('page-home.php')) :?>
<div class="popup-wrapper">
    <!-- Welcome Popup -->
    <div class="popup popup-welcome">
        <div class="popup-content position-relative">
            <img class="popup-welcome-image" src="<?php echo get_template_directory_uri(); ?>/images/welcome-popup-image.png" alt="">
            <button class="popup-close">
                <span class="sr-only">Close</span>
            </button>
            <div class="popup-inner">
                <div class="popup-content-wrapper">
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <div class="text-center">
                            <p class="welcome-text"><span>¡Welcome to Pláticas con Doña Flor!</span></p>
                            <div class="popup-content-body">

                                <p class="text-primary-variant fw-bold text-center">I’m so glad you’re here!</p>
                                <p class="text-primary-variant text-center">Please select the language you prefer to navigate in:</p>
                                <div class="row justify-content-between mt-3 text-center">
                                    <div class="col-5">
                                        <div class="language-option">
                                            <button type="button" class="btn btn-primary-variant-fill btn-small language language-en">English</button>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="language-option">
                                            <button type="button" class="btn btn-primary-variant-fill btn-small language language-es">Español</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Configuration Popup -->
    <div class="popup popup-language" id="en" style="display:none;">
        <div class="popup-content position-relative">
            <img class="popup-language-image" src="<?php echo get_template_directory_uri(); ?>/images/language-popup-image.png" alt="">
            <button class="popup-back">
                <span class="sr-only">Back</span>
            </button>
            <button class="popup-close">
                <span class="sr-only">Close</span>
            </button>
            <div class="popup-inner">
                <div class="popup-content-wrapper">
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <div class="text-center p-3">
                            <p class="language-text"><span>Excellent!</span></p>
                            <div class="popup-content-body">
                                <p class="text-primary-variant text-center mb-3">To support you better,<br> please select your area of interest:</p>
                                <a href="<?php echo get_bloginfo('url');?>/#podcast" class="popup-preference-button text-start w-100  mb-1"><span class="popup-latino">I’m <strong>Latinx</strong> and want more information about Talks with Doña Flor.</span></a>
                                <a href="<?php echo get_bloginfo('url');?>/support" class="popup-preference-button text-start w-100  mb-1"><span class="popup-professional">I’m a <strong>professional</strong> interested in supporting a program.</span></a>
                                <a href="<?php echo get_bloginfo('url');?>/#about-me" class="popup-preference-button text-start w-100  mb-1"><span class="popup-institution">I’m a <strong>director of an institution</strong> and interested in developing a program for the community.</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popup popup-language" id="es" style="display:none;">
        <div class="popup-content position-relative">
            <img class="popup-language-image" src="<?php echo get_template_directory_uri(); ?>/images/language-popup-image.png" alt="">
            <button class="popup-back">
                <span class="sr-only">Back</span>
            </button>
            <button class="popup-close">
                <span class="sr-only">Close</span>
            </button>
            <div class="popup-inner">
                <div class="popup-content-wrapper">
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <div class="text-center p-3">
                            <p class="language-text"><span>Excelente</span></p>
                            <div class="popup-content-body">
                                <p class="text-primary-variant text-center mb-3">Para poder apoyarte mejor,<br> selecciona tu área de interés:</p>
                                <a href="<?php echo get_bloginfo('url');?>/#podcast" class="popup-preference-button text-start w-100  mb-1"><span class="popup-latino">Soy <strong>latinx</storng> y quiero más información sobre Pláticas con Doña Flor.</span></a>
                                <a href="<?php echo get_bloginfo('url');?>/support" class="popup-preference-button text-start w-100  mb-1"><span class="popup-professional">Soy un <strong>profesional</strong> y me interesa apoyar al programa.</span></a>
                                <a href="<?php echo get_bloginfo('url');?>/#about-me" class="popup-preference-button text-start w-100  mb-1"><span class="popup-institution">Soy un <strong>director de una institución</strong> y me interesa desarrollar un programa para la comunidad latina.</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>