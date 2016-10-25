<?php

    /*
        Template Name: Informations
    */

    get_header();
?>

<section class="left infos">
	<figure class="left__figure">
		<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="left__img" />
	</figure>
	<div class="left__content">
		<h2 class="section__title">
			<?php the_field('legislation_titre'); ?>
		</h2>
		<p class="section__text">
			<?php the_field('legislation_texte'); ?>
			<span class="infos__small">Also available in English</span>
		</p>

		<?php $posts = new WP_Query( array( 'category_name' => 'legislation' ) ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="infos__link"><span class="sro">Lire l'article&nbsp;:</span><?php the_title(); ?></a>
		<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
	</div>
	
</section>

<section class="right infos">
	<div class="right__content">
		<h2 class="section__title">
			<?php the_field('sante_titre'); ?>
		</h2>
		<p class="section__text">
			<?php the_field('sante_texte'); ?>
			<span class="infos__small">Also available in English</span>
			
		</p>
		<?php $posts = new WP_Query( array( 'category_name' => 'sante' ) ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="infos__link"><span class="sro">Lire l'article&nbsp;:</span><?php the_title(); ?></a>
		<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
	</div>

	<figure class="right__figure">
		<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="right__img" />
	</figure>
	
</section>

<section class="left infos">
	<figure class="left__figure">
		<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="left__img" />
	</figure>
	<div class="left__content">
		<h2 class="section__title">
			<?php the_field('protection_titre'); ?>
		</h2>
		<p class="section__text">
			<?php the_field('protection_texte'); ?>
			<span class="infos__small">Also available in English</span>
		</p>
		<?php $posts = new WP_Query( array( 'category_name' => 'protection' ) ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="infos__link"><span class="sro">Lire l'article&nbsp;:</span><?php the_title(); ?></a>
		<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
	</div>
	
</section>

<section class="right infos">
	<div class="right__content">
		<h2 class="section__title">
			<?php the_field('brochures_titre'); ?>
		</h2>
		<p class="section__text">
			<?php the_field('brochures_texte'); ?>
			
		</p>
		<?php $posts = new WP_Query( array( 'category_name' => 'brochures' ) ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="infos__link"><span class="sro">Lire la brochure&nbsp;:</span><?php the_title(); ?></a>
		<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
	</div>

	<figure class="right__figure">
		<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="right__img" />
	</figure>
	
</section>

<section class="left infos">
	<figure class="left__figure">
		<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="left__img" />
	</figure>
	<div class="left__content">
		<h2 class="section__title">
			<?php the_field('stage_titre'); ?>
		</h2>
		<p class="section__text">
			<?php the_field('stage_texte'); ?>
			
		</p>
		<a href="http://espacep.app/contact/" class="section__button">Contactez-nous</a>
	</div>
	
</section>

<section class="right infos">
	<div class="right__content">
		<h2 class="section__title">
			<?php the_field('guide_titre'); ?>
		</h2>
		<p class="section__text">
			<?php the_field('guide_texte'); ?>
			
		</p>
		<?php $posts = new WP_Query( array( 'category_name' => 'guide' ) ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
		<a href="<?php the_permalink(); ?>" class="infos__link"><span class="sro">Lire le</span><?php the_title(); ?></a>
		<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
	</div>

	<figure class="right__figure">
		<img src="<?php echo get_template_directory_uri() . '/build/assets/images/photo.jpg'; ?>" alt="" class="right__img" />
	</figure>
	
</section>

<?php 
	get_footer();