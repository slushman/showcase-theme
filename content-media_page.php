<?php
/**
 * The template used for displaying page content on the media page
 *
 * @package CEMB Showcase Series
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'media_page' ); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<section class="entry-content"><?php

		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'showcase-series' ),
			'after'  => '</div>',
		) );
		edit_post_link( __( 'Edit', 'showcase-series' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' );
	?></section><!-- .entry-content -->

</article><!-- #post-## -->
