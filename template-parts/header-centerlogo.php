<?php
/**
 * The template part for displaying the main header full screen width
 * *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	<header class="site-header" role="banner">
		<!-- Mobile Header -->
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<div class="logo">
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo-upload' ) ); ?>' class="logo cf img-width-contain" alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>					
					</div>
				</span>
			</div>
		</div>
		<!-- Desktop Header -->
		<div class="grid-container">
			<nav class="site-navigation top-bar grid-x grid-margin-x" role="navigation">
				<div class="top-bar-left cell medium-6 large-4">
					<?php foundationpress_top_bar_l(); ?>
					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
				<div class="cell medium-6 large-4 padded centered">
<!-- 					<div class="site-desktop-title top-bar-title"> -->
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo-upload' ) ); ?>' class="logo cf img-width-contain" alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
<!-- 					</div> -->
				</div>
				<div class="top-bar-right cell medium-6 large-4">
					<?php foundationpress_top_bar_r(); ?>
					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
			
		</div>	

	</header>
