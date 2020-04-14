<?php 

// Add title tag function 

function template_files() {
    wp_enqueue_style('main_stylesheet', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('nav_js', get_theme_file_uri('/js/nav.js'), NULL, microtime(), true);
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap', false);
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Great+Vibes&display=swap', false);
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css2?family=Kreon:wght@300;400;500;600;700&display=swap', false);
    wp_enqueue_style('font_awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false);    wp_enqueue_script('nav_js', get_template_directory_uri() . '/js/nav.js', true);
   if( basename (get_page_template() ) === 'gallery.php' ):
        wp_enqueue_style('lightbox_stylesheet', get_template_directory_uri() . '/css/lightbox.min.css', '2.1.11');
    endif;
    if( basename (get_page_template() ) === 'gallery.php' ):
        wp_enqueue_script('lightbox_js', get_template_directory_uri() . '/js/lightbox-plus-jquery.min.js', array ( 'jquery' ), '1.0.10', true);
    endif;
}
function template_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_image_size('square', 350, 350, true);
}

function template_nav() {
    register_nav_menus(array ('main-menu' => 'Main Menu'));
    register_nav_menus(array ('social-icons' => 'Footer Social Icons'));
}

function widgetsInit() {
    register_sidebar( array (
        'name' => 'Sidebar',
        'id' => 'Sidebar1'
    ));
}

add_action('widgets_init', 'widgetsInit');
add_action('init', 'template_nav');

add_action('wp_enqueue_scripts', 'template_files');
add_action('after_setup_theme', 'template_setup');

?>