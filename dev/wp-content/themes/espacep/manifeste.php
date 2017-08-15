<?php
/*
Template Name: Manifeste
*/

get_header(); ?>
    <div class="section__hero">
        <figure class="section__hero manifeste__hero">
            <?php $image = get_field('first_image'); ?>
            <img src="<?php echo $image['url'] ?>" alt="" />
        </figure>
        <h2 class="section__hero--title"><?php the_title(); ?><span class="section__hero--subtitle"><?php the_field('subtitle'); ?></span></h2>
    </div>

    <div class="section white-pattern manifeste">
        <?php if( have_rows('sections') ):
            while ( have_rows('sections') ) : the_row();?>
            <section class="section__numbered">

                <?php if (get_sub_field('number') === ''): ?>
                    <h3 class="section__title"><?php the_sub_field('title'); ?></h3>
                <?php else: ?>
                    <h3 class="section__numbered--title">
                        <span class="number"><?php the_sub_field('number'); ?></span>
                        <span><?php the_sub_field('title'); ?></span>
                    </h3>
                <?php endif; ?>

                <div class="section__numbered--text">
                    <?php the_sub_field('content'); ?>
                </div>
            </section>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php if( have_rows('section_sign') ):
        while ( have_rows('section_sign') ) : the_row();?>
        <section class="section__sign">
            <div class="section__hero">
                <figure class="section__hero manifeste__hero">
                    <?php $image = get_sub_field('image'); ?>
                    <img src="<?php echo $image['url'] ?>" alt="" />
                </figure>
                <h3 class="section__hero--title">
                    <?php the_sub_field('title'); ?>
                    <div class="section__hero--subtitle">
                        <?php the_sub_field('text'); ?>
                    </div>
                </h3>
            </div>

            <div class="contact sign">
                <p class="section__title"><?php the_sub_field('form_title'); ?></p>
                <div class="contact__intro"><?php the_sub_field('form_intro'); ?></div>

                 <?php comment_form($comments_args = array(
                     $fields,
                     'label_submit' => __( 'Signer le manifeste' ),
                     'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s form__button button" value="%4$s" />',
                     'comment_notes_before' => __(''),
                     'title_reply_before' => __(''),
                     'title_reply_after' => __(''),
                     'title_reply' => __(''))); ?>
            </div>

            <section class="comments section">
                <h2 class="comments__title section__title"> <?php echo (count(get_comments(array('post_id'=>get_the_ID())))); ?> personne(s) ont signé le manifeste&nbsp;!</h2>
                <?php $comment=get_comments(array(
                                'post_id'=>get_the_ID(),
                                'status' => 'approve'
                                    ));?>
                <?php foreach($comment as $key):?>
                    <div class="comment section" id="comment-<?php echo $key->comment_ID ;?>">
                        <p class="comment__author">
                            <?php echo($key->comment_author);?>
                                <?php $town = get_comment_meta($key->comment_ID, 'town', true);
                                if($town != null): ?>
                                    <span class="comment__town">de <?php echo $town; ?></span>
                                <?php endif; ?>
                                <span class="comment__date">
                                    <?php $d = "j F Y";
                                    $comment_date = get_comment_date( $d, get_comment_ID() ); ?>
                                    -&nbsp;Le <?php echo date_i18n('j F Y', strtotime($key->comment_date)); ?>
                                </span>
                        </p>
                        <p class="comment__town"></p>
                        <p class="comment__text">
                            <?php echo $key->comment_content;?>
                        </p>
                    </div>
                <?php endforeach;?>
                <?php if ( get_option( 'page_comments' ) )
                  echo paginate_comments_links(); ?>
            </section>



        </section>
    <?php endwhile; ?>
    <?php endif; ?>




<?php get_footer();
