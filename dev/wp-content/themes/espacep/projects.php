<?php

    /*
        Template Name: Projects Page
    */

    get_header();
?>
 
<section class="content projects">
    <h2 class="sro" role="heading" aria-level="2">Projets réalisés par Anne Remacle</h2>
    <ul class="projects__list">
    <?php $posts = new WP_Query( [ 'orderby' => 'date', 'order' => 'ASC', 'post_type' => 'project' ] ); ?>
    <?php if ( $posts -> have_posts() ):
        while ( $posts -> have_posts() ):
            $posts -> the_post(); ?>

            
                <li class="projects__single project">
                    <?php $image = get_field('presentation_img'); ?>
                    <figure class="projects__figure">
                        <img src="<?php echo $image['url']; ?>" alt="Capture d'écran du projet <?php the_field('project_title'); ?>" class="projects__img" />
                    </figure>
                    <div class="projects__bloc">
                        <strong class="projects__title"><?php the_field('project_title'); ?></strong>
                        <p class="projects__description"><?php the_field('project_summary'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="projects__more">Voir le projet<span class="sro"> <?php the_field('project_title'); ?> </span> </a>
                    </div>
                    
                </li>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
    </ul>
</section>


<?php
    get_footer();
