<?php
/**
 * Template Name: Guide
 */
get_header();?>

    <div class="section__hero">
        <figure class="section__hero manifeste__hero">
            <?php $image = get_field('first_image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="" />
        </figure>
        <h2 class="section__hero--title"><?php the_title(); ?><span class="section__hero--subtitle"><?php the_field('subtitle'); ?></span></h2>
    </div>

    <div class="section white-pattern guide" id="top">
        <?php if( have_rows('sections') ):
            while ( have_rows('sections') ) : the_row();?>
            <section class="section__numbered" >

                <?php if (get_sub_field('number') === ''): ?>
                    <h3 class="section__title"><?php the_sub_field('title'); ?></h3>
                <?php else: ?>
                    <h3 class="section__numbered--title"  id="<?php the_sub_field('number'); ?>">
                        <span class="number"><?php the_sub_field('number'); ?>.</span>
                        <span><?php the_sub_field('title'); ?></span>
                    </h3>
                <?php endif; ?>

                <div class="section__numbered--text">
                    <?php the_sub_field('content'); ?>
                </div>

                <?php if( have_rows('question') ):
                    while ( have_rows('question') ) : the_row();?>
                    <div class="question">
                        <p class="question__title"><?php the_sub_field('question'); ?></p>
                        <div class="question__answer"><?php the_sub_field('reponse'); ?></div>
                        <span class="question__open"><i class="fa fa-angle-down"></i></span>
                        <span class="question__close"><i class="fa fa-angle-up"></i></span>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>

            </section>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="scroll__button">
        <a href="#top" class="scroll__top"><i class="fa fa-arrow-up scroll__top--icon"></i><span class="sro">Remonter</span></a>
    </div>


<?php
    get_footer();
