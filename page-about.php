<?php 

get_header();  

$pageTitle = get_the_title();

$aboutPagePosts = new WP_Query(array(
    'posts_per_page' => 5,
    'post_type' => 'row',
    'category_name' => 'about'));

    $count = $aboutPagePosts->post_count;
?>

<div class="page-section">
<?php 
    while($aboutPagePosts->have_posts()) {
        $aboutPagePosts->the_post(); 
        if($aboutPagePosts->current_post == 0) { ?>

    <div class="section-row">
        <h2 class="page-title-top container"><?php echo $pageTitle?></h2>
                <div class="left-image-row row-container">
                <?php $image = get_field('image'); ?>
                <?php if($image) { ?>
                    <div class="section-image">
                    <img src="<?php echo $image ?>" alt="">
                    </div>
                    <?php  } ?>
                    <div class="section-text">
                    <h2 class="page-title-side"><?php echo $pageTitle?></h2>
                        <p><?php the_field('text'); ?></p>
                    </div>
                </div>
                </div>

       <?php } else { ?>
        <div class="section-row">
            <div class="left-image-row row-container">
            <?php $image = get_field('image'); ?>
            <?php if($image) { ?>
                <div class="section-image">
                <img src="<?php echo $image ?>" alt="">
                </div>
                <?php  } ?>
                <div class="section-text">
                    <p><?php the_field('text'); ?></p>
                </div>
            </div>
            </div>
            <?php } } ?>
</div>

<?php 

    get_footer();
?>
