<?php

    /*
        Template Name: Informations
    */

    get_header();
?>

<?php if( have_rows('type_info') ): ?>
<?php while ( have_rows('type_info') ) : the_row(); ?>
    <section class="section clearfix">
        <figure class="section__figure">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="" class="section__img" />
        </figure>
        <div class="section__content">
            <h2 class="section__title"><?php the_sub_field('titre'); ?></h2>
            <p class="section__small"><?php the_sub_field('anglais'); ?></p>
            <div class="section__text"><?php the_sub_field('description'); ?></div>

            <?php if( have_rows('liens') ): ?>
            <?php while ( have_rows('liens') ) : the_row(); ?>

                <a href="<?php the_sub_field('url'); ?>" class="section__link"><?php the_sub_field('titre'); ?></a>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php endwhile; endif; ?>

<?php
	get_footer();
