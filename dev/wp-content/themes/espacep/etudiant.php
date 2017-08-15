<?php
/**
 * Template Name: Etudiant
 */
get_header();?>

    <div class="section__hero">
        <figure class="section__hero manifeste__hero">
            <?php $image = get_field('first_image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="" />
        </figure>
        <h2 class="section__hero--title">Vous êtes <?php the_title(); ?><span class="section__hero--subtitle"><?php the_field('subtitle'); ?></span></h2>
    </div>

    <div class="section white-pattern">
        <?php if( have_rows('sections') ):
            while ( have_rows('sections') ) : the_row();?>
            <section class="part" >
                    <h3 class="section__title"><?php the_sub_field('title'); ?></h3>

                <div class="section__numbered--text">
                    <?php the_sub_field('content'); ?>
                </div>

            </section>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="section__hero etud__hero">
        <div class="section__hero--title">
            <span class="section__hero--subtitle">
                <?php the_field('question'); ?>
                <a href="espacep.app/antenne/liege" class="button">Contactez-nous</a>
            </span>
        </div>

    </div>

<?php
    get_footer();
