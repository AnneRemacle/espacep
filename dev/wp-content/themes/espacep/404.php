<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

	<section class="section white-pattern">
		<h1 class="section__title"><?php _e( 'Oups&nbsp;! Cette page est introuvable.', 'espacep' ); ?></h1>

		<div class="page-content">
			<p><?php _e( 'Rien n’a été trouvé à cette adresse, essayez peut-être de faire une recherche', 'espacep' ); ?></p>

			<div class="search__failed">
				<?php get_search_form(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
