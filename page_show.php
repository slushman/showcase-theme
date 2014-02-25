<?php
/**
 * Template name: Showcase
 * 
 * The template used for displaying a showcase
 *
 * @package CEMB Showcase Series
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"><?php
			
			while ( have_posts() ) : the_post();

				if ( $post->post_content !== '' ) {

					get_template_part( 'content', 'page' );

				} // End of 

				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary --><?php

	/* Get the background image attachment ID. */
	$attachment_id 	= get_post_meta( $post->ID, '_custom_background_image_id', true );
	$parent			= get_the_title( $post->post_parent );

	/* If an attachment ID was found, get the image source. */
	if ( !empty( $attachment_id ) && $parent == 'Showcases' ) { 

		$image = wp_get_attachment_image_src( $attachment_id, 'full' ); ?>

		<div class="mobile-content">
			<a href="<?php echo esc_url( $image[0] ); ?>" class="mobile-content-link">See Show Content</a>
		</div><!-- .mobile-content --><?php

	} // End of attachment check

get_footer(); 

?>