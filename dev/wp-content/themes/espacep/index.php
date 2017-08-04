<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 */
get_header();?>

<section class="section news">
	<figure class="news__figure">
		<img src="" alt="" class="news__figure--img" />
	</figure>
	<div class="news__infos">
		<p class="news__infos--category colored">Santé</p>
		<h2 class="news__infos--title">Je suis le titre</h2>
		<p class="news__infos--summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		<a href="" class="news__infos--link colored">Lire l'article <span class="sro">titre de l'article</span></a>
	</div>
</section>

<section class="imaged support">
	<h2 class="imaged__title">Soutenez-nous en vous abonnant à notre page Facebook</h2>
	<a href="" class="imaged__link button">Abonnez-vous</a>
</section>

<section class="section last">
	<h2 class="section__title">Dernièrement chez Espace P…</h2>
	<div class="last__facebook">
		<p>Statut Facebook</p>
	</div>
</section>

<div class="frames section">
	<section class="frames__section">
		<h2 class="section__title">Signez notre manifeste</h2>
		<p class="frames__section--text">Pour une approche plus juste des métiers du sexe</p>
		<a href="" class="frames__section--link button">Lire et signer</a>
	</section>
	<section class="frames__section">
		<h2 class="section__title">Abonnez-vous au magazine</h2>
		<p class="frames__section--text">Nous éditons un magazine destiné aux travailleurs du sexe ainsi qu’à nos sympathisants et aux personnes qui souhaitent s’informer.</p>
		<a href="" class="frames__section--link button">S"abonner</a>
	</section>
</div>

<?php get_footer(); ?>
