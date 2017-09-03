<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 */

get_header(); ?>

	<section class="section white-pattern">
		<h2 class="section__title">
			<?php the_title(); ?>
		</h2>

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );


		// End the loop.
		endwhile;
		?>
	</section>


<?php get_footer(); ?>
