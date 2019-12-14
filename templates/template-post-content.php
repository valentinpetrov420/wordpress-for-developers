<?php /* 
*
* Template Name: Content
*
*/ ?>

<div class="post-container">
    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
    <div class="post-meta">
        <p><?php the_author() ?></p>
        <?php the_category() ?>
    </div>
    <div class="img-container">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail();
        } ?>
    </div>
    <div class="content"><?php the_content(); ?></div>
</div>