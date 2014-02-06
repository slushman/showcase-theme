<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CEMB Showcase Series
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-wrap">

			<div class="footer_left footer_block"><?php

				do_action( 'footer_left' );

			?></div><!-- .footer_left -->
			<div class="site-info footer_block"><?php

				do_action( 'site_info' );

			?></div><!-- .site-info -->
			<div class="site-credits footer_block"><?php

				do_action( 'site_credits' );

			?></div><!-- .site-credits -->
		
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>