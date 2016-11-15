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

        <?php if( get_field('fichier_pdf')): ?>
        <div class="document">
            <?php $pdf = get_field('fichier_pdf'); ?>
            <a href="<?php echo $pdf['url']; ?>" class="document__link">
                <?php $image = get_field('couverture'); ?>
                <img src="<?php echo $image['url']; ?>" alt="" class="document__image">
                <span class="document__title">
                    Téléchargez le <?php the_title(); ?>        
                </span>
            </a>
        </div>
    <?php endif; ?>
    </section>

   <!--  <div class="all">
        <a href="<?php echo get_home_url(); ?>/archive" class="all__link">
            Voir tous les articles <span class="sro">publiés par Espace P…</span>
        </a>   
    </div> -->

    <?php
            endwhile;
        endif; ?>

<?php
    get_footer();
