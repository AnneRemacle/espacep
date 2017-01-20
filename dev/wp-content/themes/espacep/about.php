<?php

    /*
        Template Name: About Page
    */

    get_header();
?>

	<section class="philo">
		<h2 class="section__title philo__title">Espace P…</h2>
		<p class="philo__text">
			<?php the_content(); ?>
		</p>
	</section>

    <?php if( have_rows('sections-about') ): ?>
    <?php while ( have_rows('sections-about') ) : the_row(); ?>
        <section class="section clearfix">
            <figure class="section__figure">
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image['url']; ?>" alt="" class="section__img" />
            </figure>
            <div class="section__content">
                <h2 class="section__title"><?php the_sub_field('titre'); ?></h2>
                <div class="section__text"><?php the_sub_field('texte'); ?></div>
                <a href="<?php the_sub_field('url'); ?>" class="section__button"><?php the_sub_field('button-text'); ?></a>
            </div>
        </section>
    <?php endwhile; endif; ?>

	<section class="socials">
		<h2 class="section__title socials__title">Suivez-nous sur les réseaux sociaux</h2>
		<a href="https://www.facebook.com/Espace-P-1166947833360506/" class="section__button socials__button">Voir notre page Faebook</span></a>
	</section>

	<div class="partners-bg">
		<section class="partners">
			<h2 class="section__title partners__title">Nos partenaires</h2>

			<?php $posts = new WP_Query( ['post_type' => 'partenaires' ] ); ?>
                    <?php if ( $posts -> have_posts() ):
                        while ( $posts -> have_posts() ):
                            $posts -> the_post(); ?>

			<a href="<?php the_field('site'); ?>" rel="external" title="Vers la page de notre partenaire <?php the_title(); ?>" class="partners__logo">
				<?php $image = get_field('logo'); ?>
				<img src="<?php echo $image['url']; ?>" alt="Logo de notre partenaire <?php the_title(); ?>" class="partners__img" />
			</a>

			<?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>

		</section>

	</div>

<?php
    get_footer();
