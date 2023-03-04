<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mochi_Brother_Parent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mochi-brother-parent' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="d-flex navbar navbar-expand-lg">
			<div class="container-fluid">
				<a href="/" class="navbar-brand">
					Logo
				</a><!-- .site-branding -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#site-navigation" aria-controls="site-navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="site-navigation" class="main-navigation collapse navbar-collapse">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container'      => null,
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'navbar-nav ms-auto', // class for ul
							'depth'          => 4,
							'walker'         => new bootstrap_5_wp_nav_menu_walker()
						)
					);
					?>
				</div><!-- #site-navigation -->
			</div>
		</nav>
	</header><!-- #masthead -->
