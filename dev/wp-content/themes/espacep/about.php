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
			<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="left__img" />
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
			<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="right__img" />
		</figure>
		
	</section>

	<section class="left">
		<figure class="left__figure">
			<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="left__img" />
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
		<a href="facebook.com" class="section__button socials__button">Voir notre page Faebook</span></a>
	</section>

	<div class="partners-bg">
		<section class="partners">
			<h2 class="section__title partners__title">Nos partenaires</h2>

			<a href="http://www.google.com" class="partners__logo">
				<img src="http://www.placekitten.com/100/100" alt="Logo de notre partenaire xxx" class="partners__img" />
			</a>
			<a href="http://www.google.com" class="partners__logo">
				<img src="http://www.placekitten.com/100/100" alt="Logo de notre partenaire xxx" class="partners__img" />
			</a>
			<a href="http://www.google.com" class="partners__logo">
				<img src="http://www.placekitten.com/100/100" alt="Logo de notre partenaire xxx" class="partners__img" />
			</a>
			<a href="http://www.google.com" class="partners__logo">
				<img src="http://www.placekitten.com/100/100" alt="Logo de notre partenaire xxx" class="partners__img" />
			</a>
		</section>
	</div>

<?php
    get_footer();