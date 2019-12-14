<?php /* 
*
* Template Name: About
*
*/ ?>

<div class="post-single-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <p><?php the_author() ?></p>
                <?php the_category() ?>
            </div>
            <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
            <div class="content"><?php the_content(); ?></div>
    <?php endwhile;
    endif; ?>
</div>