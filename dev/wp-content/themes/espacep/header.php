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
			</div>
			<nav class="header__menu">
				<h2 class="sro">Navigation principale</h2>
				<a href="" class="header__menu--link">manifeste</a>
				<a href="" class="header__menu--link">informations</a>
				<a href="" class="header__menu--link">soutenez-nous</a>
				<a href="" class="header__menu--link">contact</a>
			</nav>
			<?php if(is_front_page()): ?>
				<section class="profiles">
					<h2 class="sro">Choisissez votre profil</h2>
					<a href="" class="profiles__single">
						Je suis <span class="profiles__single--big">travailleur du sexe</span>
					</a href="">
					<a href="" class="profiles__single">
						Je suis <span class="profiles__single--big">étudiant</span>
					</a href="">
					<a href="" class="profiles__single">
						Je suis <span class="profiles__single--big">sympathisant</span>
					</a href="">
					<a href="" class="profiles__single">
						Je suis <span class="profiles__single--big">client</span>
					</a href="">
				</section>
			<?php endif; ?>
		</header>

		<section class="content">
