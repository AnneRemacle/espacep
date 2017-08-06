<?php
/**
 * Template Name: Homepage
 */
get_header();?>

<div class="section news grey-pattern">
	<?php $posts = new WP_Query( [ 'orderby' => 'date', 'posts_per_page' => 1, 'order' => 'ASC' ] ); ?>
		<?php if ( $posts -> have_posts() ):
			while ( $posts -> have_posts() ):
				$posts -> the_post(); ?>

		<article class="article">

			<figure class="article__figure">
				<?php the_post_thumbnail(medium, ['class' => 'article__figure--image', 'alt' => 'Image de l‘article']);?>
			</figure>
			<div class="news__infos">
				<?php	$cats = array();
					foreach (get_the_category($post_id) as $c) {
					$cat = get_category($c);
					array_push($cats, $cat->name);
					}

					if (sizeOf($cats) > 0) {
					$post_categories = implode(', ', $cats);
					} else {
					$post_categories = 'Not Assigned';
					}
				?>
				<p class="news__infos--category colored"><?php echo $post_categories ?></p>
				<h2 class="article__title" role="heading" aria-level="2"><?php the_title(); ?> </h2>
				<p class="news__infos--summary"><?php the_custom_excerpt(); ?>…</p>
				<a href="<?php the_permalink(); ?>" class="news__infos--link colored">Lire l'article <span class="sro"><?php the_title(); ?> en entier</span></a>
			</div>
		</article>

	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>
</div>

<section class="imaged support">
	<h2 class="imaged__title"><?php the_field('section_title'); ?></h2>
	<a href="" class="imaged__link button"><?php the_field('link_text'); ?></a>
</section>

<section class="section last">
	<h2 class="section__title">Dernièrement chez Espace P…</h2>
	<div class="last__facebook">
		<?php the_field('facebook_feed'); ?>
	</div>
</section>

<div class="frames section">
	<?php if( have_rows('frames') ):
		while ( have_rows('frames') ) : the_row();?>
		<section class="frames__section">
			<h2 class="section__title"><?php the_sub_field('title'); ?></h2>
			<?php the_sub_field('text'); ?>
			<a href="" class="frames__section--link button"><?php the_sub_field('link_text'); ?></a>
		</section>
		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
