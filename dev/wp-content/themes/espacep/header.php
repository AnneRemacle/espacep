<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Espace P…</title>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/build/css/styles.css'; ?>?v=0.5">
		<script src="https://use.fontawesome.com/1712970157.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<script
              src="https://code.jquery.com/jquery-2.2.4.min.js"
              integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
              crossorigin="anonymous">
        </script>
		<script src="<?php echo get_template_directory_uri() . '/build/script/script.js';?>"></script>
	</head>
	<body>
		<header class="header">
			<div class="header__disclaimer">
				<p class="header__disclaimer--text">Are you a sexworker? We have some information for you</p>
				<a href="" class="header__disclaimer--link button">Click here</a>
				<a href="#" class="header__disclaimer--close" title="Fermer le bandeau"><i class="fa fa-times-circle-o"></i></a>
			</div>
			<div class="header__main">
				<a href="<?php echo get_home_url(); ?>" class="header__logo">
					<img src="<?php echo get_template_directory_uri() . '/build/assets/images/logo-blue.png';?>" alt="Logo d'Espace P…" class="header__logo--img">
				</a>
				<h1 class="sro">Espace P…</h1>
				<p class="header__main--text">Vers une société prostitution admise</p>
				<div class="header__search">
					<?php get_search_form(); ?>
				</div>

			</div>
			<nav class="header__menu">
				<h2 class="sro">Navigation principale</h2>
				<?php foreach (b_get_menu_items('header') as $navItem): ?>
                    <a href="<?php echo $navItem -> url ?> " class="header__menu--link">
                        <?php echo $navItem -> label ?>
                    </a>
                <?php endforeach; ?>
                <?php wp_reset_query(); ?>
			</nav>
		</header>

		<?php if(is_front_page()): ?>
			<section class="profiles">
				<h2 class="sro">Choisissez votre profil</h2>
				<?php foreach (b_get_menu_items('profils') as $navItem): ?>
					<a href="<?php echo $navItem -> url ?> " class="profiles__single">
						Je suis
						<span class="profiles__single--big"><?php echo $navItem -> label ?></span>
					</a>
				<?php endforeach; ?>
				<?php wp_reset_query(); ?>
			</section>
		<?php endif; ?>

		<section class="content">
