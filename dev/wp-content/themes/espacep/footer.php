        <footer class="">
            <section class="footer">
                <h2 class="sro">Liens utiles et informations</h2>
                <ul class="footer__list links">
                    <p class="footer__list--title">Espace P…</p>
                    <?php foreach (b_get_menu_items('espacep') as $navItem): ?>
                        <li class="footer__item">
                            <a href="<?php echo $navItem -> url ?> " class="footer__link">
                                <?php echo $navItem -> label ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <?php wp_reset_query(); ?>

                </ul>

                <ul class="footer__list links">
                    <p class="footer__list--title">Nos antennes</p>
                    <?php foreach (b_get_menu_items('antennes') as $navItem): ?>
                        <li class="footer__item">
                            <a href="<?php echo $navItem -> url ?> " class="footer__link">
                                <?php echo $navItem -> label ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <?php wp_reset_query(); ?>
                </ul>
                <ul class="footer__list footer__list--partners">
                    <p class="footer__list--title">En collaboration avec…</p>
                    <?php $posts = new WP_Query( ['post_type' => 'partenaires' ] ); ?>
                    <?php if ( $posts -> have_posts() ):
                        while ( $posts -> have_posts() ):
                            $posts -> the_post(); ?>
                        <li class="footer__partner">
                            <a class="footer__logo" href="<?php the_field('site'); ?>" rel="external" title="Vers la page de notre partenaire <?php the_title(); ?>">

                                <?php $image = get_field('logo'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="Logo de notre partenaire <?php the_title(); ?>"  class="footer__img" />
                            </a>
                        </li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>                    
                </ul>
                
            </section>
        </footer>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDeuwdU6TD7s_exoHvquyikKKVTFQiGC0"></script>
        <!--<?php wp_footer(); ?> <!--ne sert à rien, elle ajoute la barre d'admin dans le header -->
    </body>
</html>
