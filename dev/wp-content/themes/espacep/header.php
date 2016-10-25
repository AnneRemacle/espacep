<!DOCTYPE html>
<html lang="fr">
    <head>
        <script src="https://use.fontawesome.com/81b9ac47bc.js"></script>
        <script
              src="https://code.jquery.com/jquery-2.2.4.min.js"
              integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
              crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title>
        <?php
             if ( is_search() ) :
             echo 'Résultats de recherche pour "'.get_search_query().'" | ';
             
             else :
             wp_title('|', true, 'right');
             endif;

             bloginfo('name'); 
        ?>
        </title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/build/css/styles.css'; ?>?v=0.5">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/build/assets/fonts/font-awesome/css/font-awesome.min.css'; ?>?v=0.5">
        <script src="<?php echo get_template_directory_uri() . '/build/script/script.js';?>"></script>
    </head>
    <body>
        <header class="header">
            <div class="header__up">
                <p class="header__up--text">Are you a sex worker? We have some information for you</p>
                <a href="espacep.app/informations" title="Go to the information for sex workers" class="header__up--button">This way</a>
            </div>

            <div class="header__research">
                <?php get_search_form(); ?>
            </div>

            <div class="header__middle">
                <a href="<?php echo get_home_url(); ?>" class="header__logo" title="Retour à la page d'accueil du site Espace P…">Accueil</a>

                <h1 class="header__punchline" role="heading" aria-level="1">
                    <span class="sro">Espace P…</span>
                    Vers une société prostitution admise
                </h1>
            </div>

            <nav class="header__nav">
                <h2 class="sro" role="heading" aria-level="2">Navigation principale</h2>
                <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                    <a href="<?php echo $navItem -> url ?> " class="header__link">
                        <?php echo $navItem -> label ?>
                    </a>
                <?php endforeach; ?>
                <?php wp_reset_query(); ?>
            </nav>
        </header>