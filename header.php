<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Template One</title>
    </head>
    <body>

    <?php 
     
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 

    $site_title = get_bloginfo('name');

    global $post;
    $post_slug = $post->post_name;

    $banner_styles = 'background-size: cover;background-repeat: no-repeat;filter: opacity(0.7);';


    if($post_slug !== 'home') {

     ?>
        <header>
            <div class="nav nav-container">
                <div class="site-name">
                    <a href="<?php echo site_url('') ?>"><?php echo $site_title ?></a>
                </div>
                <?php 
                         $args = array(
                             'theme_location' => 'main-menu',
                             'container' => 'div',
                             'container_class' => 'nav-right');
                            wp_nav_menu($args); ?>
            </div>
            <div class="mobile-nav nav-container">
                <div class="site-name">
                    <a href="<?php echo site_url('') ?>"><?php echo $site_title ?></a>
                </div>
                <?php 
                         $args = array(
                             'theme_location' => 'main-menu',
                             'container' => 'div',
                             'container_class' => 'mobile-options hide');
                            wp_nav_menu($args); ?>
                <div class="nav-icon">
                    <div></div>
                </div>
            </div>
            <div class="banner" <?php echo 'style="background: url('. $url.');'.$banner_styles.'"'; ?>>
            </div>
        </header>
        <?php } ?>