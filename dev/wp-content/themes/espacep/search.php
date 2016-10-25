<?php
/*
Template Name: Search Page
*/

get_header(); ?>

	<section class="search section">
		<h2 class="section__title search__title">
		 <?php 
		   $count = $wp_query->found_posts;
		   $several = ($count<=1) ? '' : 's'; //pluriel

		   if ($count>0) : $output =  $count.' résultat'.$several.' pour la recherche';
		   else : $output = 'Aucun résultat pour la recherche';
		   endif;
		   
		   $output .= ' "<span class="terms_search">'. get_search_query() .'</span>"';
		   
		   echo $output;
		 ?>
		</h2>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="article" id="post-<?php the_ID(); ?>">
			   <h3 class="article__title">
			      <a class="article__title--link" href="<?php the_permalink(); ?>" title="Lire l'article &quot;<?php the_title(); ?>&quot;">
			         <?php the_title(); ?>
			      </a>
			   </h3>
			   <p class="article__excerpt">
			            <?php the_custom_excerpt(); ?>…
			   </p>
			   <footer class="article__footer">
			      <a class="article__url" href="<?php the_permalink(); ?>">
			      	Lire l'article <span class="sro"><?php the_title(); ?></span> en entier
			         <!-- <?php
			             $permalink = get_permalink();
			             
			             // si le permalien fait plus de 60 caractères de long on le coupe
			             if( strlen($permalink) > 60 ) : echo mb_substr( $permalink, 0, 60, "UTF-8" ) . '&hellip;'; 

			             // sinon on l'affiche simplement
			             else : echo $permalink;
			             endif; ?> -->
			      </a>
			      <time class="article__date" datetime="<?php the_time('Y-m-d'); ?>">
			         Posté le <?php the_time('l d F'); ?>
			      </time>
			   </footer>
			</article>
		<?php 
		endwhile; ?>
		<?php else: ?>
		<p class="search__none">
			Désolé, mais votre recherche a été infructueuse. Vous devriez réessayer avec d'autres termes.
		</p>
		<?php endif; ?>
	</section>



<?php get_footer(); ?>