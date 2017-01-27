<?php
    /*
        Template Name: Homepage
    */
    get_header();
?>
		<section class="portal">
			<h2 class="sro">Choisissez votre profil</h2>
            <?php if( have_rows('profils') ):
                while ( have_rows('profils') ) : the_row();?>
                <?php if( have_rows('boutton') ): ?>
					<?php while( have_rows('boutton') ): the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>" class="portal__cadre">
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image['url']; ?>" alt="" class="portal__image">
				<p class="portal__cadre--title"><?php the_sub_field('titre'); ?> </p>
				<div class="portal__cadre--description">
					<?php the_sub_field('texte'); ?>
				</div>
                <?php if( have_rows('boutton') ): ?>
					<?php while( have_rows('boutton') ): the_row(); ?>
                        <p class="portal__cadre--button">
        					<?php the_sub_field('texte'); ?>
        				</p>
                        <?php endwhile; ?>
                    <?php endif; ?>

				</a>
                <?php endwhile; ?>
            <?php endif; ?>
		</section>

        <div class="articles">
            <?php $posts = new WP_Query( [ 'orderby' => 'date', 'posts_per_page' => 3, 'order' => 'ASC' ] ); ?>
                <?php if ( $posts -> have_posts() ):
                    while ( $posts -> have_posts() ):
                        $posts -> the_post(); ?>
                <article class="actu section">
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
        		</article>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>

		<section class="last section">
			<h2 class="section__title last__title" role="heading" aria-level="2"><?php the_field('last'); ?></h2>
            
			<div class="last__part facebook">
				<?php the_field('statut'); ?>
			</div>

			<?php $posts = new WP_Query( [ 'orderby' => 'date', 'order' => 'ASC', 'number' => 1, 'post_type' => 'evenement' ] ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>
			<div class="last__part event">
				<?php $image = get_field('event_image'); ?>
				<img src="<?php echo $image['url']; ?>" alt="photo de l'évenement" class="event__img" />
				<div class="event__text">
					<p  class="event__type"><?php the_field('type'); ?></p>
					<a href="<?php the_permalink(); ?>" class="event__title"><?php the_title(); ?></a>
					<p class="event__description"><?php the_custom_excerpt(); ?>…</p>
                    <a href="<?php the_permalink(); ?> " class="event__button">Voir l'événement</a>
				</div>

			</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</section>

<?php
	get_footer();
