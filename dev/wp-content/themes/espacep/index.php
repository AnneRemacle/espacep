<?php
    /*
        Template Name: Homepage
    */
    get_header();
?>
		<article class="actu section">
			<?php $posts = new WP_Query( [ 'orderby' => 'date', 'number' => 1, 'order' => 'ASC', 'category_name' => 'article' ] ); ?>
			    <?php if ( $posts -> have_posts() ):
			        while ( $posts -> have_posts() ):
			            $posts -> the_post(); ?>
			<p class="actu__date">
				<?php  $dateParts = explode('-',get_the_date()); ?>
				<span class="actu__date--day"><?php echo $dateParts[0]; ?></span> <br>
				<?php echo $dateParts[1]; ?>		
			</p>
			<h2 class="actu__title" role="heading" aria-level="2"><?php the_title(); ?> </h2>
			
			<p class="actu__texte">
				<?php the_custom_excerpt(); ?>…
			</p>

			<a href="<?php the_permalink(); ?>" class="actu__button">Lire l'article <span class="sro"><?php the_title(); ?> en entier</span></a>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</article>

		<section class="portal">
			<h2 class="sro">Choisissez votre profil</h2>
			<div class="first">
				<a href="/informations" class="portal__cadre">
				<p class="portal__cadre--title">Travailleur-euse du sexe&nbsp;?</p>
				<p class="portal__cadre--description">
					Consultez toutes les informations et les documents disponibles pour vous
				</p>
				<p href="" class="portal__cadre--button">
					Voir les informations <span class="sro">disponibles pour les travailleurs du sexe</span>
				</p>
				</a>
				<a href="/informations" class="portal__cadre">
					<p class="portal__cadre--title">Étudiant&nbsp;?</p>
					<p class="portal__cadre--description">Vous cherchez des informations pour votre stage&nbsp;?</p>
					<p href="" class="portal__cadre--button">Par ici <span class="sro">vous trouverez des informations utiles pour vous</span></p>
				</a>
			</div>
			<div class="second">
				<a href="/informations" class="portal__cadre second__cadre">
				<p class="portal__cadre--title">Sympathisant&nbsp;?</p>
				<p class="portal__cadre--description">Vous êtes curieux et vous voulez vous informer?</p>
				<p href="" class="portal__cadre--button">Je m'informe <span class="sro">à propos des activités de Espace P…</span></p>
			</a>
			
			<?php $posts = new WP_Query( array( 'category_name' => 'guide' ) ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
	
			<a href="<?php the_permalink(); ?>" class="portal__cadre second__cadre">
				<p class="portal__cadre--title">Client&nbsp;?</p>
				<p class="portal__cadre--description">Consultez le guide du client, un manuel rempli d’informations</p>
				<p href="" class="portal__cadre--button">Voir le guide <span class="sro">du client</span></p>
			</a>
			</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
			
		</section>

		<section class="last section">
			<h2 class="section__title last__title" role="heading" aria-level="2">Dernièrement à Espace P…</h2>
			<?php $posts = new WP_Query( [ 'orderby' => 'date', 'order' => 'ASC', 'number' => 1, 'category_name' => 'facebook' ] ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
			<div class="last__part facebook">
				<?php the_content(); ?>
			</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>

			<?php $posts = new WP_Query( [ 'orderby' => 'date', 'order' => 'ASC', 'number' => 1, 'post_type' => 'event' ] ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
			<div class="last__part event">
				<?php $image = get_field('event_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="photo de l'évenement" class="event__img" />
				<div class="event__text">
					<p  class="event__type"><?php the_field('type'); ?></p>
					<a href="<?php the_permalink(); ?>" class="event__title"><?php the_title(); ?></a>
					<p class="event__description"><?php the_custom_excerpt(); ?></p>
					
				</div>
				
			</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</section>

<?php 
	get_footer();
