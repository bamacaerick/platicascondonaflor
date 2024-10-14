<?php
add_action('after_setup_theme', 'generic_setup');
function generic_setup()
{
    load_theme_textdomain('generic', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array( 'search-form' ));
    add_theme_support('woocommerce');
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array( 'main-menu' => esc_html__('Main Menu', 'generic') ));
}
add_action('wp_enqueue_scripts', 'generic_enqueue');
function generic_enqueue()
{
    wp_enqueue_style('generic-style', get_stylesheet_uri());
    wp_enqueue_style( 'plugin',  get_template_directory_uri() .'/css/plugin.css', array(), null, 'all' );
    wp_enqueue_style( 'remixicon',  get_template_directory_uri() .'/css/remixicon.css', array(), null, 'all' );
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/js/popper.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-5.3.0.min', get_template_directory_uri() . '/js/bootstrap-5.3.0.min.js', array( 'popper.min' ), '1.0.0', true );
    wp_enqueue_script( 'plugin', get_template_directory_uri() . '/js/plugin.js', array( 'bootstrap-5.3.0.min' ), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'plugin' ), '1.0.0', true );
}
add_action('wp_footer', 'generic_footer');
function generic_footer()
{
    ?>
<script>
jQuery(document).ready(function($) {
    var deviceAgent = navigator.userAgent.toLowerCase();
    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
        $("html").addClass("ios");
    }
    if (navigator.userAgent.search("MSIE") >= 0) {
        $("html").addClass("ie");
    } else if (navigator.userAgent.search("Chrome") >= 0) {
        $("html").addClass("chrome");
    } else if (navigator.userAgent.search("Firefox") >= 0) {
        $("html").addClass("firefox");
    } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
        $("html").addClass("safari");
    } else if (navigator.userAgent.search("Opera") >= 0) {
        $("html").addClass("opera");
    }
    $(".menu-toggle").on("keypress click", function(e) {
        if (e.which == 13 || e.type === "click") {
            e.preventDefault();
            $("#menu").toggleClass("toggled");
        }
    });
    $(document).keyup(function(e) {
        if (e.keyCode == 27) {
            if ($("#menu").hasClass("toggled")) {
                $("#menu").toggleClass("toggled");
            }
        }
    });
    $("img.no-logo").each(function() {
        var alt = $(this).attr("alt");
        $(this).replaceWith(alt);
    });
});
</script>
<?php
}
add_filter('document_title_separator', 'generic_document_title_separator');
function generic_document_title_separator($sep)
{
    $sep = '|';
    return $sep;
}
add_filter('the_title', 'generic_title');
function generic_title($title)
{
    if ($title == '') {
        return '...';
    } else {
        return $title;
    }
}
function generic_schema_type()
{
    $schema = 'https://schema.org/';
    if (is_single()) {
        $type = "Article";
    } elseif (is_author()) {
        $type = 'ProfilePage';
    } elseif (is_search()) {
        $type = 'SearchResultsPage';
    } else {
        $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . $schema . $type . '"';
}
add_filter('nav_menu_link_attributes', 'generic_schema_url', 10);
function generic_schema_url($atts)
{
    $atts['itemprop'] = 'url';
    return $atts;
}
if (!function_exists('generic_wp_body_open')) {
    function generic_wp_body_open()
    {
        do_action('wp_body_open');
    }
}
add_action('wp_body_open', 'generic_skip_link', 5);
function generic_skip_link()
{
    echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'generic') . '</a>';
}
add_filter('the_content_more_link', 'generic_read_more_link');
function generic_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">' . sprintf(__('...%s', 'generic'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}

// Custom function to limit the excerpt by characters
function custom_excerpt_length($excerpt) {
    $limit = 100; // Set the character limit
    if (strlen($excerpt) > $limit) {
        $excerpt = substr($excerpt, 0, $limit) . '...';
    }
    return $excerpt;
}


/**COODIGO PEROSONALIZADOOOOOOOOOOOOOOO */
add_action('init', 'themePostTypes');

function themePostTypes()
{
  
    $banner = array(
            'name' => _x('Banner', 'post type general name'),
            'singular_name' => _x('Banner', 'post type singular name'),
            'add_new' => _x('Añadir Nuevo', 'Banner'),
            'add_new_item' => __('Añadir Nuevo Banner'),
            'edit_item' => __('Editar Banner'),
            'new_item' => __('Añadir Banner'),
            'view_item' => __('Ver Banner'),
            'search_items' => __('Buscar Banner'),
            'not_found' =>  __('Banner no existente.'),
            'not_found_in_trash' => __('No se encontraron Banners en la papelera.'),
            'parent_item_colon' => '',
            'menu_name' => 'Banner'
        );

    register_post_type(
        'Banner',
        array('labels' => $banner,
            'description' => 'Banner',
            'publicly_queryable' => true,
            'public' => true,
            'show_ui' => true,
            'hierarchical' => true, // like posts
            'supports' => array(
                'title',
                'page-attributes',
                'editor',
                'thumbnail',
            ),
        )
    );

}



/****PODCAST POSTYPE*7 */
function create_podcast_post_type() {
    $labels = array(
        'name'                  => _x('Podcasts', 'Post type general name'),
        'singular_name'         => _x('Podcast', 'Post type singular name'),
        'menu_name'             => _x('Podcasts', 'Admin Menu text'),
        'name_admin_bar'        => _x('Podcast', 'Add New on Toolbar'),
        'add_new'               => __('Add New Podcast'),
        'add_new_item'          => __('Add New Podcast'),
        'new_item'              => __('New Podcast'),
        'edit_item'             => __('Edit Podcast'),
        'view_item'             => __('View Podcast'),
        'all_items'             => __('All Podcasts'),
        'search_items'          => __('Search Podcasts'),
        'parent_item_colon'     => __('Parent Podcasts:'),
        'not_found'             => __('No podcasts found.'),
        'not_found_in_trash'    => __('No podcasts found in Trash.'),
        'featured_image'        => _x('Podcast Cover Image', 'Overrides the “Featured Image” phrase for this post type.'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase.'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase.'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase.'),
        'archives'              => __('Podcast archives'),
        'insert_into_item'      => __('Insert into podcast'),
        'uploaded_to_this_item' => __('Uploaded to this podcast'),
        'filter_items_list'     => __('Filter podcasts list'),
        'items_list_navigation' => __('Podcasts list navigation'),
        'items_list'            => __('Podcasts list'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'podcast'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true,
    );

    register_post_type('podcast', $args);
}

add_action('init', 'create_podcast_post_type');
// Apply the custom function to the excerpt
add_filter('get_the_excerpt', 'custom_excerpt_length');

add_filter('excerpt_more', 'generic_excerpt_read_more_link');
function generic_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' . sprintf(__('...%s', 'generic'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}


// Add custom image size
function custom_theme_setup()
{
    add_image_size('feature_blog_listing', 800, 600, true); // Width: 800px, Height: 600px, Crop: true
}
add_action('after_setup_theme', 'custom_theme_setup');


add_action('widgets_init', 'generic_widgets_init');
function generic_widgets_init()
{
    register_sidebar(array(
    'name' => esc_html__('Sidebar Widget Area', 'generic'),
    'id' => 'primary-widget-area',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ));
}
add_action('wp_head', 'generic_pingback_header');
function generic_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s" />' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('comment_form_before', 'generic_enqueue_comment_reply_script');
function generic_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
function generic_custom_pings($comment)
{
    ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?>
</li>
<?php
}
add_filter('get_comments_number', 'generic_comment_count', 0);
function generic_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments('status=approve&post_id=' . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}


function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_link_atts($atts)
{
    $atts['class'] = "single";
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts');


