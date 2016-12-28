<?php

    /*
        Template Name: Support Page
    */

    get_header();
?>

	<section class="support">
		<h2 class="section__title support__title">
			<?php the_field('titre');	 ?>
		</h2>
		<p class="section__text">
			<?php the_content(); ?>
		</p>
	</section>

	<section class="left">
		<figure class="left__figure">
			<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="left__img" />
		</figure>
		<div class="left__content">
			<h2 class="sro">
				Dernier numéro
			</h2>
			<p class="section__text">
				<?php the_field('dernier_numero'); ?>
			</p>
			<a href="<?php the_permalink(); ?>" class="section__button">Lire le <span class="sro">dernier numéro du</span> magazine</a>
		</div>
		
	</section>

	<section class="right archives">
		<div class="right__content">
			<h2 class="sro">
				Magazines précédents
			</h2>
			<p class="section__text">
				<?php the_field('archives_magazines'); ?>
				
			</p>
			<a href="<?php the_permalink(); ?>" class="section__button">Voir les archives<span class="sro">des magazines</span></a>
		</div>

		<figure class="right__figure">
			<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="right__img" />
		</figure>
		
	</section>

<?php 
	get_footer();