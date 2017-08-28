<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

	<article class="section article grey-pattern">
		<h2 class="section__title"><?php the_title(); ?></h2>
		<div class="article__content">
			<?php the_content(); ?>
		</div>
	</article>

	<div class="navigation">
		<?php previous_post_link('%link', 'Précédent', FALSE) ?>
		 |
		 <?php next_post_link('%link', 'Suivant', FALSE)?>
	</div>

<?php get_footer(); ?>
