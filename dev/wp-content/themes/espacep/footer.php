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
                <ul class="footer__list">
                    <p class="footer__list--title">En collaboration avec…</p>
                    <li class="footer__partner">
                        <a class="footer__logo" href="http://www.google.be">
                            <img src="http://placekitten.com/50/50" alt="Vers la page de notre partenaire xxx" rel="external" class="footer__img" />
                        </a>
                    </li>
                    <li class="footer__partner">
                        <a class="footer__logo" href="http://www.google.be">
                            <img src="http://placekitten.com/50/50" alt="Vers la page de notre partenaire xxx" rel="external" class="footer__img" />
                        </a>
                    </li>
                    <li class="footer__partner">
                        <a class="footer__logo" href="http://www.google.be">
                            <img src="http://placekitten.com/50/50" alt="Vers la page de notre partenaire xxx" rel="external" class="footer__img" />
                        </a>
                    </li>
                    <li class="footer__partner">
                        <a class="footer__logo" href="http://www.google.be">
                            <img src="http://placekitten.com/50/50" alt="Vers la page de notre partenaire xxx" rel="external" class="footer__img" />
                        </a>
                    </li>
                </ul>
                
            </section>
        </footer>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDeuwdU6TD7s_exoHvquyikKKVTFQiGC0"></script>
        <!--<?php wp_footer(); ?> <!--ne sert à rien, elle ajoute la barre d'admin dans le header -->
    </body>
</html>
