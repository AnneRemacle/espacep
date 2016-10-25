<?php

    /*
        Template Name: Single Court Métrage
    */

    get_header();
?>
    
    <?php
        if ( have_posts() ):
            while ( have_posts() ):
                the_post(); ?>
    <section class="content single-project clearfix">
        <h2 class="single-project__title section__title">
            <?php the_field('project_title'); ?>
            <span class="single-project__type">
                Techniques utilisées&nbsp;:
                <?php
                the_field('techniques_name');
                 ?>
            </span>
        </h2>

        <?php the_content(); ?>
        <?php $image = get_field('image'); ?>
        <figure class="single-project__figure">
                        <img src="<?php echo $image['url']; ?>" alt="Capture d'écran du projet <?php the_field('project_title'); ?>" class="single-project__img" />
                    </figure>
        
        <div class="single-project__button">
            <a href="http://<?php the_field('url_site'); ?>" class="single-project__link">Voir le projet</a> - 
            <a href="http://<?php the_field('github_url'); ?>" class="single-project__link" rel="external">Repo Github</a>
        </div>

    </section>

    <?php
            endwhile;
        endif; ?>

<?php
    get_footer();
