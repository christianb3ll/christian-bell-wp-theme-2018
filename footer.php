<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Christian_Bell
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">

			<!-- Social Icons -->
			<div class="social-footer-links">
				<a href="https://www.facebook.com/christian.p.bell.7"><i class="fab fa-facebook"></i></a>
				<a href="https://twitter.com/piiego"><i class="fab fa-twitter-square"></i></a>
				<a href="https://www.instagram.com/piiego/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.linkedin.com/in/christian-bell-512934195/"><i class="fab fa-linkedin"></i></a>
				<a href="https://www.imdb.com/name/nm2908513/?ref_=nv_sr_7"><i class="fab fa-imdb"></i></a>
				<a href="https://github.com/christianb3ll"><i class="fab fa-github-square"></i></a>
			</div><!-- social-footer-links -->

			<!-- copyright -->
			<div class="copyright">
				<small>&copy; <?php echo date('Y'); ?> </small><span class="copyright-logo">Christian Bell</span>
			</div><!-- copyright -->

		</div><!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/common.js"></script>

</body>
</html>
