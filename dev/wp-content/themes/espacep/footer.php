<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 */
?>

</section>

<footer class="footer">
	<div class="footer__section">
		<p class="footer__section--title">Nos antennes</p>
		<?php foreach (b_get_menu_items('antennes') as $navItem): ?>
			<a href="<?php echo $navItem -> url ?> " class="footer__section--link">
				<?php echo $navItem -> label ?>
			</a>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
	</div>
	<div class="footer__section">
		<p class="footer__section--title">Espace P…</p>
		<a href="" class="footer__section--link">Guide du client</a>
		<a href="" class="footer__section--link">Guide du client</a>
		<a href="" class="footer__section--link">Guide du client</a>
		<a href="" class="footer__section--link">Guide du client</a>
		<a href="" class="footer__section--link">Guide du client</a>
	</div>
	<div class="footer__section">
		<p class="footer__section--title">Votre profil</p>
		<a href="" class="footer__section--link">Je suis …</a>
		<a href="" class="footer__section--link">Je suis …</a>
		<a href="" class="footer__section--link">Je suis …</a>
		<a href="" class="footer__section--link">Je suis …</a>
	</div>
</footer>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-5jWhnbtrrVaFPSoanQGNsLJXDlyevuc"></script>
<?php wp_footer(); ?>

</body>
</html>
