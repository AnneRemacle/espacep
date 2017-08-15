<?php
/**
 * Template Name: TDS
 */
get_header();?>

    <div class="section__hero">
        <figure class="section__hero manifeste__hero">
            <?php $image = get_field('first_image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="" />
        </figure>
        <h2 class="section__hero--title">Vous êtes <?php the_title(); ?><span class="section__hero--subtitle"><?php the_field('subtitle'); ?></span></h2>
    </div>

    <div class="section white-pattern tds">
        <?php $posts = new WP_Query( [ 'orderby' => 'date', 'number' => 1, 'order' => 'ASC', 'category_name' => 'légal' ] ); ?>
            <?php if ( $posts -> have_posts() ):
                while ( $posts -> have_posts() ):
                    $posts -> the_post(); ?>
            <article class="article">
                <h3 class="article__title"><?php the_title(); ?></h3>
                <div class="article__content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </div>

        <?php if( have_rows('question') ):
            while ( have_rows('question') ) : the_row();?>
            <div class="section__hero tds__hero">
                <figure class="section__hero ">
                    <?php $image = get_sub_field('tds_image'); ?>
                    <img src="<?php echo $image['url'] ?>" alt="" />
                </figure>
                <div class="section__hero--title">
                    <span class="section__hero--subtitle">
                        <?php the_sub_field('question'); ?>
                        <a href="espacep.app/antenne/liege" class="button">Contactez-nous</a>
                    </span>
                </div>

            </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <section class="section">
            <h3 class="section__title">Quelques articles qui pourraient vous être utiles</h3>
            <?php $posts = new WP_Query( [ 'orderby' => 'date', 'number' => 3, 'order' => 'ASC', 'category_name' => 'santé' ] ); ?>
                <?php if ( $posts -> have_posts() ):
                    while ( $posts -> have_posts() ):
                        $posts -> the_post(); ?>
                <article class="article">
                    <h4 class="article__title--small"><?php the_title(); ?></h4>
                    <div class="article__content">
                        <?php the_custom_excerpt(); ?>…
                    </div>
                    <a href="<?php the_permalink(); ?>" class="article__more">Continuer la lecture <i class="fa fa-arrow-right"></i><span class="hidden"> de l'article <?php the_title(); ?></span></a>
                </article>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </section>

        <?php if( have_rows('sections') ):
            while ( have_rows('sections') ) : the_row();?>
            <section class="section part" >
                    <h3 class="section__title"><?php the_sub_field('title'); ?></h3>

                <div class="section__numbered--text">
                    <?php the_sub_field('content'); ?>
                </div>

            </section>
        <?php endwhile; ?>
        <?php endif; ?>

        <div class="section">
            <?php if( have_rows('formulaire_passage') ):
                while ( have_rows('formulaire_passage') ) : the_row();?>
                <section class="contact">
                    <h4 class="section__title"><?php the_sub_field('titre'); ?></h4>
                    <div class="contact__intro">
                        <?php the_sub_field('intro'); ?>
                    </div>
                    <div class="form form-passage"><?php the_sub_field('formulaire_passage'); ?></div>
                </section>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <section class="section">
            <h3 class="section__title"><?php the_field('titre', 'option') ?></h3>
            <ul class="files">
                <?php if( have_rows('brochures', 'option') ):
                    while ( have_rows('brochures', 'option') ) : the_row();
                    $file = get_sub_field('file', 'option'); ?>
                    <li class="file__single">
                        <a class="file__link" href="<?php echo $file['url']; ?>">
                            <figure class="file__logo">
                                <img src="<?php echo get_template_directory_uri() . '/build/assets/images/pdf-logo.png';?>" alt="Logo Adobe pdf" class="file__logo--img">
                            </figure>
                            <span class="file__title"><?php echo $file['title']; ?></span>
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>

        </section>



    <!-- <?php $file = get_field('client_pdf'); ?>
					<?php if( $file ): ?>
					<li class="download-pdf">

					</li>
					<?php endif; ?> -->


<?php
    get_footer();
