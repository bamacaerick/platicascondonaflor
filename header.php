<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="<?php if (is_single()) {
        echo wp_strip_all_tags(get_the_excerpt(), true);
    } else {
        bloginfo('description');
    } ?>" />
    <meta name="keywords"
        content="<?php echo implode(', ', wp_get_post_tags(get_the_ID(), array( 'fields' => 'names' ))); ?>" />
    <meta property="og:image" content="<?php if (is_single() && has_post_thumbnail()) {
        the_post_thumbnail_url('full');
    } elseif (has_site_icon()) {
        echo get_site_icon_url();
    } ?>" />
    <meta name="twitter:card" content="photo" />
    <meta name="twitter:site" content="<?php bloginfo('name'); ?>" />
    <meta name="twitter:title" content="<?php if (is_single()) {
        the_title();
    } else {
        bloginfo('name');
    } ?>" />
    <meta name="twitter:description" content="<?php if (is_single()) {
        echo wp_strip_all_tags(get_the_excerpt(), true);
    } else {
        bloginfo('description');
    } ?>" />
    <meta name="twitter:image" content="<?php if (is_single() && has_post_thumbnail()) {
        the_post_thumbnail_url('full');
    } elseif (has_site_icon()) {
        echo get_site_icon_url();
    } ?>" />
    <meta name="twitter:url" content="<?php if (is_single()) {
        esc_url(the_permalink());
    } else {
        echo esc_url(home_url()) . '/';
    } ?>" />
    <meta name="twitter:widgets:theme" content="light" />
    <meta name="twitter:widgets:link-color" content="blue" />
    <meta name="twitter:widgets:border-color" content="#fff" />
    <link rel="canonical"
        href="https://<?php echo $_SERVER["HTTP_HOST"]; ?><?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>" />
    <script type="application/ld+json">
    {
        "@context": "https://www.schema.org/",
        "@type": "WebSite",
        "name": "<?php bloginfo('name'); ?>",
        "url": "<?php echo esc_url(home_url()); ?>/"
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://www.schema.org/",
        "@type": "Organization",
        "name": "<?php bloginfo('name'); ?>",
        "url": "<?php echo esc_url(home_url()); ?>/",
        "logo": "<?php if (has_custom_logo()) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            echo esc_url($logo[0]);
        } ?>",
        "image": "<?php if (has_site_icon()) {
            echo get_site_icon_url();
        } ?>",
        "description": "<?php bloginfo('description'); ?>"
    }
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header>
            <div class="header-area <?php echo is_page('home') ? "header-transparent" : "header-sticky";?>">
                <div class="main-header header-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-wrapper d-flex align-items-center justify-content-between">
                                    <div class="header-left d-flex align-items-center justify-content-between"
                                        itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                        <!-- Logo-->
                                        <!-- <div class="logo logo-large light-logo">
                                            <a href="index.html"><img src="assets/images/logo/Logo-charitfix.png"
                                                    alt="logo"></a>
                                        </div> -->
                                        <!-- Logo Mobile-->
                                        <!-- <div class="logo logo-mobile light-logo">
                                            <a href="index.html"><img src="assets/images/icon/favicon.png"
                                                    alt="img"></a>
                                        </div> -->
                                        <?php 
                                            if (is_front_page() || is_home() || is_front_page() && is_home()) {
                                                echo '<h1 class="logo light-logo">';
                                            } 
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
                                            if (is_front_page() || is_home() || is_front_page() && is_home()) {
                                                echo '</h1>';
                                            }
                                        ?>
                                        <div class="sr-only" id="site-description" <?php if (!is_single()) {
                                        echo ' itemprop="description"';
                                        } ?>><?php bloginfo('description'); ?></div>
                                    </div>

                                    <div class="search-container">
                                        <!-- <input type="text" id="searchField" class="search-field"
                                            placeholder="Search..."> -->
                                        <?php get_search_form(); ?>
                                    </div>

                                    <!-- Main-menu for desktop -->
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

                                    <div class="header-right">
                                        <div class="cart">
                                            <a href="javascript:void(0)" class="rounded-btn search-bar"><i
                                                    class="ri-search-line"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mobile Menu -->
                                <div class="div">
                                    <div class="mobile_menu d-block d-lg-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('parts/popup'); ?>
        </header>
    <div class="body-content">