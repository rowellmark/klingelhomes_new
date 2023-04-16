<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( has_action( 'aios_seotools_gtm_body' ) ) { do_action('aios_seotools_gtm_body'); } ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header") ) : ?><?php endif ?>

	<div id="main-wrapper">


    <?php do_action('aios_landing_page_header'); ?>
    <?php do_action('aios_neighborhoods_header'); ?>


	<header class="header fixed w-100">
		<div class="header-container flex justify-between items-center w-100 default-container">
			<div class="logo">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header: Logo") ) : ?><?php endif ?>
			</div><!-- end of logo -->

			<nav class="navigation">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav', 'theme_location' => 'primary-menu', 'menu_class' => 'flex items-center' ) ); ?>
			</nav><!-- end of navigation -->

			<div class="expanded-menu-bttn">
				<span></span>
				<span></span>
			</div><!-- end of expanded bttn -->
		</div><!-- end of header container -->
	</header>

	<header class="expandedMenuWrapper fixed h-100 w-100">
		<div class="expandedOutside absolute"></div>
		<div class="expandedMenuClose absolute">
			<i class="ai-font-close-a"></i>
		</div>
		<div class="expandedMenuContainer h-100 absolute">
			
			<div class="expandedMenu-navigation">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'expanded-nav', 'theme_location' => 'secondary-menu', 'menu_class' => 'flex items-start flex-wrap-wrap' ) ); ?>
			</div><!-- end of expanded navigation -->

			<div class="expandedMenu-info w-100">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Expanded Menu: Contact Info") ) : ?><?php endif ?>
			</div><!-- end of expanded-info -->
		</div>
	</header>

	<main>
		<h2 class="aios-starter-theme-hide-title">Main Content</h2>

		<!-- ip banner goes here -->
    <?php
    if ( ! is_home() && !is_page_template( 'template-homepage.php' ) && is_custom_field_banner( get_queried_object() ) && is_active_sidebar('aios-inner-pages-banner')) {
      dynamic_sidebar('aios-inner-pages-banner');
    }
    ?>
		<!-- ip banner goes here -->


		<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>

		<div id="inner-page-wrapper">
			<div class="container">

		<?php endif ?>
