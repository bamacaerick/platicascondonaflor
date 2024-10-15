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
                            <p class="welcome-text"><span>¡Bienvenid@ a Pláticas con Doña Flor!</span></p>
                            <div class="popup-content-body">

                                <p class="text-primary-variant fw-bold text-center">¡Me alegra mucho tu visita!</p>
                                <p class="text-primary-variant text-center">Selecciona el tipo de idioma en el que prefieres navegar:</p>
                                <div class="row justify-content-between mt-3 text-center">
                                    <div class="col-5">
                                        <div class="language-option">
                                            <button type="button" class="btn btn-primary-variant-fill btn-small language language-english">English</button>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="language-option">
                                            <button type="button" class="btn btn-primary-variant-fill btn-small language language-spanish">Español</button>
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
    <div class="popup popup-language" style="display:none;">
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
                            <p class="language-text"><span>¡Excelente!</span></p>
                            <div class="popup-content-body">
                                <p class="text-primary-variant text-center mb-3">Para poder apoyarte mejor, <br> selecciona tu área de interés:</p>
                                <a href="<?php echo get_bloginfo('home');?>/#podcast" class="popup-preference-button text-start w-100  mb-1"><span class="popup-latino">Soy <strong>latinx</strong> y quiero más información sobre Pláticas con Doña Flor.</span></a>
                                <a href="<?php echo get_bloginfo('home');?>/support" class="popup-preference-button text-start w-100  mb-1"><span class="popup-professional">Soy un <strong>profesional</strong> y me interesa apoyar al programa.</span></a>
                                <a href="<?php echo get_bloginfo('home');?>/#about-me" class="popup-preference-button text-start w-100  mb-1"><span class="popup-institution">Soy un <strong>director de una institución</strong> y me interesa desarrollar un programa para la comunidad latina.</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>