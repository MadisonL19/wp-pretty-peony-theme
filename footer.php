<?php wp_footer(); ?>

<footer>
    <?php 

global $post;
$post_slug = $post->post_name;

$site_title = get_bloginfo('name');

if($post_slug !== 'home') {

?>
<!--<div class="empty-div"></div>-->
<p id="copyright-text">Copyright <span id="copyright-icon"> &copy;</span> <script>document.write(new Date().getFullYear())</script> <?php echo $site_title ?>. All Rights Reserved. <br> <span>Made with &hearts; by Madison Leopold.</span></p>
<?php $args = array(
                'theme_location' => 'social-icons',
                'container' => 'div',
                'container_class' => 'social-icons');
                wp_nav_menu($args); ?> 
<?php } ?>
</footer>

</body>
</html>