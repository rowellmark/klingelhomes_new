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
				<a href="<?php echo esc_url( home_url() ) ?>" class="site-name">
					<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="Klingel Homes Real Estate Agency" class="block w-100 h-auto" width="315" height="38"> 
				</a>
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
				<ul class="flex justify-between w-100 items-center">
					<li>
						<h3>Phone</h3>
						<?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?>
					</li>
					<li>
						<h3>Email</h3>
						<?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?>
					</li>
					<li>
						<h3>Office Address</h3>
						<?= do_shortcode('[ai_client_address]')?>
					</li>
					<li>
						<h3>Social Media</h3>
						<div class="glob-smi flex items-center justify-between">
							<a href="<?= do_shortcode('[ai_client_facebook]')?>" target="_blank"><i class="ai-font-facebook"></i> Facebook</a>
							<a href="<?= do_shortcode('[ai_client_youtube]')?>" target="_blank"><i class="ai-font-youtube"></i> Youtube</a>
							<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank"><i class="ai-font-instagram"></i> instagram</a>
						</div>
					</li>
					<li>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo-white.png" alt="Homes Real Estate Agency" class="block w-100 h-auto" width="301" height="113">
					</li>
				</ul>
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
