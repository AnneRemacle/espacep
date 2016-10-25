<?php

    get_header();
?>

    <section class="error">
        <h2 class="error__title">Oups!</h2>
        <p class="error__description">
            La page demandée n'a pas été trouvée… Peut-être que l'URL fournie est erronée.
        </p>
        <p class="error__back">
            Vous pouvez retourner à <a href="<?php echo home_url('/'); ?>" rel="home"> page d'accueil</a>.
        </p>
    </section>

<?php
    get_footer();
