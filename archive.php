<?php get_header(); ?>
<div class="posts-container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/template-post-content'); ?>	
   <?php endwhile; endif; ?> 
</div>
<?php get_footer(); ?>