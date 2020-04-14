<?php 

get_header();  

$pageTitle = get_the_title();

$locationPagePosts = new WP_Query(array(
    'posts_per_page' => 10,
    'post_type' => 'card',
    'category_name' => 'location'));

    $count = $locationPagePosts->post_count;
?>

<h2 class="page-title" class="container"><?php echo $pageTitle?></h2>
<div class="page-section container card-gallery">
        <?php 
            while($locationPagePosts->have_posts()) {
                $locationPagePosts->the_post(); ?>
                <div class="card">
                        <div class="section-text">
                            <h4><?php the_field('header'); ?></h4>
                            <p><?php the_field('address'); ?></p>
                            <p><?php the_field('city_state_zip'); ?></p>
                            <p><?php the_field('telephone'); ?></p>
                        </div>
                </div>
            <?php } ?>
</div>

<?php 

    get_footer();
?>
