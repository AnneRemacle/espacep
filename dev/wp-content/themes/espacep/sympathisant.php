<?php
/**
 * Template Name: Sympathisant
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

<?php
    get_footer();
