<?php

    /*
        Template Name: Support Page
    */

    get_header();
?>

	<section class="support">
		<h2 class="support__title">
			<?php the_field('titre');	 ?>
		</h2>
		<div class="section__text support__text">
			<?php the_content(); ?>
		</div>
        <div class="support__form">
            <?php the_field( 'formulaire_magazine' ); ?>
        </div>
	</section>

    <?php if( have_rows('section') ): ?>
    <?php while ( have_rows('section') ) : the_row(); ?>
	<section class="section clearfix">
		<figure class="section__figure">
            <?php $image = get_sub_field('image'); ?>
            <img src="<?php echo $image['url']; ?>" alt="" class="section__img" />
		</figure>
		<div class="section__content">
			<h2 class="section__title">
				<?php the_sub_field('titre'); ?>
			</h2>
			<div class="section__text section__mag">
				<?php the_sub_field('contenu'); ?>
			</div>
            <?php if( have_rows('bouton') ): ?>
            <?php while ( have_rows('bouton') ) : the_row(); ?>

                <a href="<?php the_sub_field('url'); ?>" class="section__button"><?php the_sub_field('texte'); ?></a>
            <?php endwhile; endif; ?>
		</div>

	</section>
    <?php endwhile; endif; ?>

<?php
	get_footer();
