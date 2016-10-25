<?php

    get_header();
?>

    <section class="archive">
        <h2 class="archive__title"><?php echo _e('Tous mes articles', 'portfolio'); ?> </h2>
        <div class="archive__container">
            <?php
                if ( have_posts() ):
                    while ( have_posts() ):
                        the_post(); ?>
            <article class="article">
                <h2 class="article__title"> <?php the_title(); ?> </h2>
                <div class="article__excerpt">
                    <?php the_custom_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?> " class="article__link">
                    <?php
                    the_link_content('Voir l’article %s');
                     ?>
                    <!-- _e => on affiche avec echo __ => on fait return -->
                </a>
            </article>

            <?php
                    endwhile;
                endif; ?>
        </div>
    </section>



<?php
    get_footer();
