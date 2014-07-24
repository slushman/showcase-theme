<?php
/**
 * Template name: Media Page
 * 
 * The template used for displaying a showcase
 *
 * @package CEMB Showcase Series
 */

get_header(); ?>

	<div id="primary" class="content-area media-content">
		<main id="main" class="site-main" role="main"><?php
			
			while ( have_posts() ) {

				the_post();

				if ( $post->post_content !== '' ) {

					get_template_part( 'content', 'media_page' );

				} // End of empty content check

				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template();
				}

			} // End of while loop ?>
		</main><!-- #main -->
	</div><!-- #primary --><?php

get_footer(); 

?>