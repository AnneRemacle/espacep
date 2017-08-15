<?php
/**
 * The template for displaying search results pages.
 */

get_header(); ?>

	<div class="section white-pattern">

			<h2 class="section__title"><?php printf( __( 'Résultats de recherche pour&nbsp;: %s', 'espacep' ), get_search_query() ); ?></h2>

			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>

			<article class="article <?php post_class(); ?>" id="post-<?php the_ID(); ?>" >
				<?php the_title( sprintf( '<h3 class="article__title--small"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
					<?php if(the_custom_excerpt() != null): ?>
						<div class="article__content">
							<?php the_custom_excerpt(); ?>…
						</div>
					<?php endif; ?>
					<a href="<?php the_permalink(); ?>" class="article__more">Continuer la lecture <i class="fa fa-arrow-right"></i><span class="hidden"> de l'article <?php the_title(); ?></span></a>
			</article>
			<?php endwhile; ?>



			<?php // Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Suivant', 'espacep' ),
				'next_text'          => __( 'Précédent', 'espacep' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'espacep' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else : ?>
			<p class="search__none">
				Malheureusement, nous n'avons rien trouvé qui corresponde à votre recherche. Vous devriez réessayer avec d'autres termes
			</p>
			<div class="search__failed">
				<?php get_search_form(); ?>
			</div>


		<?php endif;
		?>
	</div>

<?php get_footer(); ?>
