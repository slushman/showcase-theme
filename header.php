<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CEMB Showcase Series
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="author" href="http://slushman.com">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="icons/favicon.ico" type="icons/x-icon" />
<link rel="apple-touch-icon" href="icons/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="57x57" href="icons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="icons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="114x114" href="icons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="144x144" href="icons/apple-touch-icon-152x152.png" />
<meta name="msapplication-square70x70logo" content="icons/smalltile.png" />
<meta name="msapplication-square150x150logo" content="icons/mediumtile.png" />
<meta name="msapplication-wide310x150logo" content="icons/widetile.png" />
<meta name="msapplication-square310x310logo" content="icons/largetile.png" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="logocontainer">
			<div class="logowrap">
				<div class="bulogo"></div>
			</div>
		</div>
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>


		<?php /*
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'showcase-series' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'showcase-series' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		*/ ?>

		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'showcase-series' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
