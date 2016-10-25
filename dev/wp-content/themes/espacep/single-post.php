<?php

    /*
        Template Name: Single Article
    */

    get_header();
?>

    <?php
        if ( have_posts() ):
            while ( have_posts() ):
                the_post(); ?>
    <section class="post article">
        <h2 class="post__title article__title"> <?php the_title(); ?> </h2>
        <p class="post__date">Publié le <?php  the_date(); ?> à <?php the_time(); ?></p>
        <div class="post__content">
            <?php the_content(); ?>
        </div>
    </section>

    <?php
            endwhile;
        endif; ?>

<?php
    get_footer();
