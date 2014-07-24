<?php

if ( class_exists( 'Simple_BG_Slides' ) ) {

	$custom	= get_post_custom();
	$sbgs 	= Simple_BG_Slides::get_instance();

	if ( !empty( $custom['_sbgs_uploader_slides'][0] ) ) {

		$images	= explode( ',', $custom['_sbgs_uploader_slides'][0] );

	}

	$count = $sbgs->get_images_count( $images );

	if ( $count === 1 ) {

		$atts 	= $sbgs->get_image_atts( $images );
		$id 	= $atts[0]['id'];
	
		//echo '<pre>'; print_r( $atts ); echo '</pre>';

		?><style>
@media only screen and (max-width:600px){.sbgs_featured.sbgs_slide_<?php echo $id; ?>{background-image:url(<?php echo $atts[0]['sizes']['medium']['url']; ?>);}}
@media only screen and (min-width:601px) and (max-width:800px) {.sbgs_featured.sbgs_slide_<?php echo $id; ?>{background-image:url(<?php echo $atts[0]['sizes']['large']['url']; ?>);}}
		</style>

		<div class="sbgs_slide sbgs_slide_<?php echo $id; ?> sbgs_featured" title="<?php echo $atts[0]['title']; ?>"></div><?php

	} // End of count check

} // End of class check

?>