<?php

    /*
        Template Name: Single Antenne
    */

    get_header();
?>

<section class="antennes">
		<h2 class="section__title antennes__title">Choisissez votre antenne</h2>

		<nav class="antennes__nav" id="nav">
			<h3 class="sro">Navigation secondaire</h3>
			<ul class="antennes__list">

			<?php $posts = new WP_Query( [ 'post_type' => 'antenne' ] ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
			
				<li class="antennes__item">
					<a class="antennes__tab <?php echo get_query_var('antenne')==get_field('slug')?'antennes__tab--active':''; ?>" href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</li>
			
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>	
			</ul>
		</nav>
		<?php $posts = new WP_Query( [ 'post_type' => 'antenne', 'name'=>get_query_var('antenne') ] ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>

		<div class="tabcontent " id="<?php the_field('slug'); ?>">
			<div class="coordonnees">
				<p class="coordonnees__title">
					Espace P… à <?php the_title(); ?>
				</p>
				<p class="coordonnees__text">
					<?php the_field('details'); ?>
				</p>
				<p class="coordonnees__text">
					Coordinateur: <?php the_field('coordinateur'); ?>
				</p>
				<p class="coordonnees__text">
					<?php the_field('adresse'); ?>
				</p>
				<?php if (get_field('telephone') != ''): ?>
					<p class="coordonnees__text">
						Tel&nbsp;: <?php the_field('telephone'); ?>
					</p>
				<?php endif; ?>
				<?php if (get_field('gsm') != ''): ?>
					<p class="coordonnees__text">
						G.S.M.&nbsp;: <?php the_field('gsm'); ?>
					</p>
				<?php endif; ?>
				<?php if (get_field('fax') != ''): ?>
					<p class="coordonnees__text">
						Fax&nbsp;: <?php the_field('fax'); ?>
					</p>
				<?php endif; ?>
				<a href="maitlo:<?php the_field('email'); ?>" class="coordonnees__text coordonnees__mail"><?php the_field('email'); ?></a>	

			</div>
			<?php $location = get_field('carte'); ?>
			<div class="map" id="gmap">
				<?php the_field('carte'); ?>
				<div class="marker" id="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				</div>
			</div>

		</div>

		<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
	
	</section>

<?php 
	get_footer();