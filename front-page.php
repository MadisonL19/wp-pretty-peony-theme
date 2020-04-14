<?php

get_header(); ?>

<?php while(have_posts()):
         the_post(); 
         $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

<div class="home-banner" <?php echo 'style="background: url('. $url.')"'; ?>>
    <div class="banner-outline">
         <div class="banner-container">
            <?php the_content(); ?>
            <button><a href="<?php echo site_url('/about') ?>">learn more</a></button>
        </div>
    </div>
</div>

<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer(); ?>