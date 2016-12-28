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

	<section class="left">
		<figure class="left__figure">
		<?php $image = get_field('actions_image'); ?>
			<img src="<?php echo $image['url']; ?>" alt="" class="left__img" />
		</figure>
		<div class="left__content">
			<h2 class="section__title">
				<?php the_field('actions_title'); ?>
			</h2>
			<p class="section__text">
				<?php the_field('actions_text'); ?>
			</p>
			<a href="<?php the_permalink(); ?>" class="section__button">Calendrier <span class="sro">des actions</span></a>
		</div>
		
	</section>

	<section class="right">
		<div class="right__content">
			<h2 class="section__title">
				<?php the_field('rapport_title'); ?>
			</h2>
			<p class="section__text">
				<?php the_field('rapport_text'); ?>
				
			</p>
			<a href="<?php the_permalink(); ?>" class="section__button">Lire le rapport en entier</span></a>
		</div>

		<figure class="right__figure">
		<?php $image = get_field('rapport_image'); ?>
			<img src="<?php echo $image['url']; ?>" alt="" class="right__img" />
		</figure>
		
	</section>

	<section class="left">
		<figure class="left__figure">
		<?php $image = get_field('manifeste_image'); ?>
			<img src="<?php echo $image['url']; ?>" alt="" class="left__img" />
		</figure>
		<div class="left__content">
			<h2 class="section__title">
				<?php the_field('manifeste_title'); ?>
			</h2>
			<p class="section__text">
				<?php the_field('manifeste_text'); ?>
			</p>
			<a href="<?php the_permalink(); ?>" class="section__button">Lire le manifeste</span></a>
		</div>
		
	</section>

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