<?php

    /*
        Template Name: Single Antenne
    */

    get_header();
?>

<section class="antennes section white-pattern">

        <div class="antennes__intro">
            <?php the_field('intro', 'option'); ?>
        </div>

		<h2 class="section__title">Choisissez votre antenne</h2>



		<nav class="antennes__nav" id="nav">
			<h3 class="sro">Navigation secondaire</h3>
			<ul class="antennes__list" itemscope itemtype="http://schema.org/Organization">

			<?php $posts = new WP_Query( [ 'post_type' => 'antenne' ] ); ?>
		    <?php if ( $posts -> have_posts() ):
		        while ( $posts -> have_posts() ):
		            $posts -> the_post(); ?>

				<li class="antennes__item">
					<a class="antennes__tab <?php echo get_query_var('antenne')==get_field('slug')?'antennes__tab--active':''; ?>" href="<?php the_permalink(); ?>" itemprop="location">
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
			<div class="coordonnees" itemscope itemtype="http://schema.org/Organization">
				<p class="section__title">
					<span itemprop="location"> Espace P… </span>à <span itemprop="location"><?php the_title(); ?></span>
				</p>
                <div class="coordonnees__left">
                    <p class="coordonnees__text">
    					<?php the_field('details'); ?>
    				</p>
    				<p class="coordonnees__text" itemprop="member">
    					<span class="coordonnees__text--title">Coordinateur </span>
                        <?php the_field('coordinateur'); ?>
    				</p>
    				<p class="coordonnees__text" itemprop="address">
    					<span class="coordonnees__text--title">Adresse </span>
                        <?php the_field('adresse'); ?>
    				</p>
                </div>
                <div class="coordonnees__right">
                    <?php if (get_field('telephone') != ''): ?>
    					<p class="coordonnees__text" itemprop="telephone">
    						<span class="coordonnees__text--title">Téléphone </span>
                            <?php the_field('telephone'); ?>
    					</p>
    				<?php endif; ?>
    				<?php if (get_field('gsm') != ''): ?>
    					<p class="coordonnees__text" itemprop="telephone">
    						<span class="coordonnees__text--title">G.S.M. </span>
                            <?php the_field('gsm'); ?>
    					</p>
    				<?php endif; ?>
    				<?php if (get_field('fax') != ''): ?>
    					<p class="coordonnees__text" itemprop="faxNumber">
    						<span class="coordonnees__text--title">Fax </span>
                            <?php the_field('fax'); ?>
    					</p>
    				<?php endif; ?>
                </div>

			</div>
			<?php $location = get_field('carte'); ?>
			<div class="map" id="gmap">
				<?php the_field('carte'); ?>
				<div class="marker" id="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				</div>
			</div>

            <div class="contact">
                <div class="contact__intro">
                    <?php the_field('intro_formulaire', 'option'); ?>
                </div>
                <div class="form form-antenne"><?php the_field('formulaire_antenne'); ?></div>
            </div>

		</div>

		<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>

	</section>

<?php
	get_footer();
