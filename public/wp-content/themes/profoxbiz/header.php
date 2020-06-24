<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package profoxbiz
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
	<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}
	?>
	<a href="javascript:" id="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	<?php
	$header_option = get_theme_mod('profoxbiz_heading_layout_option', 'header_one');
	if( $header_option == 'header_one' ){
		$header_option = 'header-one';
	} elseif ($header_option == 'header_two') {
		$header_option = 'header-two';
	} elseif ($header_option == 'header_three') {
		$header_option = 'header-three';
	} elseif ($header_option == 'header_four') {
		$header_option = 'header-four';
	}
	?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'profoxbiz' ); ?></a>

		<header id="masthead" class="site-header header <?php echo esc_attr( $header_option ); ?>">
			<div class="container">			
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$profoxbiz_description = get_bloginfo( 'description', 'display' );
				if ( $profoxbiz_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo esc_html($profoxbiz_description); /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->


			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'profoxbiz' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<?php if( ( is_page() &&  ! is_front_page() ) || ( is_home() && ! is_front_page() ) ){
		?>
		<div class="page-header" style="background-image: url('<?php echo( get_header_image() ); ?>')">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>
				</div>
			</div>

		</div>
		<?php
	}
	?>

	<?php
	if ( is_front_page()) :	
		do_action('profoxbiz_bailboard_slider_cat');
	endif;
	?>
	<div id="content" class="site-content">