<?php
/*
Template Name: Support
*/

get_header(); ?>

    <div class="section white-pattern magazine">
        <h2 class="section__title"><?php the_title(); ?></h2>
        <div class="section__text">
            <?php the_field('presentation_magazine'); ?>
        </div>

        <section>
            <h3 class="section__title"><?php the_field('abonnement'); ?></h3>
            <?php if( have_rows('steps') ):
                while ( have_rows('steps') ) : the_row();?>
                <div class="magazine__step">
                    <p class="section__subtitle"><?php the_sub_field('titre'); ?></p>
                    <div class="section__text"><?php the_sub_field('texte'); ?></div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>

        <div class="frames">
            <?php if( have_rows('plans') ):
                while ( have_rows('plans') ) : the_row();?>
                <section class="frames__section">
                    <p class="section__title"><?php the_sub_field('titre'); ?></p>
                    <?php the_sub_field('prix'); ?>
                    <?php the_sub_field('texte'); ?>
                    <a href="mailto:anne.m.remacle@gmail.com" class="frames__section--link button"><?php the_sub_field('bouton'); ?></a>
                </section>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


<?php get_footer();
