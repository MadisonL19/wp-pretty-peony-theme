<?php 

get_header();  

$pageTitle = get_the_title();

?>

<div class="page-section container">
<h2 class="page-title"><?php echo $pageTitle?></h2>
<?php 
    while(have_posts()) {
        the_post(); 
        ?>
        <p><?php the_content(); ?></p>
        <?php }  ?>
</div>

<?php 

    get_footer();
?>
