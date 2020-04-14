<?php
    /*
    * Template Name: Gallery
    */

get_header(); 
$pageTitle = get_the_title();
?>

<div class="page-section container">
    <?php while(have_posts()) { 
        the_post(); ?>
         <h2 class="page-title"><?php echo $pageTitle?></h2>
        <?php
            $gallery = get_post_gallery( get_the_ID(), false);
            $gallery_image_ids = explode(',', $gallery['ids']);
        ?>
         <ul class="gallery-images">
            <?php
            $i = 0;
                foreach($gallery_image_ids as $id):
                    $thumbSize = 'square';
                    $boxSize = 'large';
                    $thumbImage = wp_get_attachment_image_src($id, $thumbSize);
                    $boxImage = wp_get_attachment_image_src($id, $boxSize); ?>
                    <a href="<?php echo $boxImage[0]; ?>" data-lightbox="gallery">
                        <img src="<?php echo $thumbImage[0]; ?>" />
                    </a>
                <?php $i++; endforeach; ?>
        </ul>
        <?php } ?>
</div>

<?php

get_footer(); ?>