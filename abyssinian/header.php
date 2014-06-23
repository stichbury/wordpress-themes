<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Onesie Pro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php global $theme_options; $theme_options = get_option( gpp_get_current_theme_id() . '_options' ); ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php if ( ! empty ( $theme_options[ 'favicon' ] ) ) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url( $theme_options[ 'favicon' ] ); ?>" />
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php $header_image = get_header_image();
if ( ! empty( $header_image ) ) { ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="site-header">
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
	</a>
<?php } ?>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header block" role="banner">
		<div class="site-branding">
			<?php if ( ! empty( $theme_options['logo'] ) ) : ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img class="site-title" src="<?php echo esc_url( $theme_options['logo'] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				</a>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr( bloginfo( 'name' ) ); ?></a></h1>
			<?php endif; ?>

			<?php if ( is_home() ) : ?>
				<p class="site-message">
				<?php if ( ! empty( $theme_options['message'] ) ) : ?>
					<?php
						$message = stripslashes_deep( $theme_options['message'] );
						echo $message;
				?>
				<?php else : ?>
					<?php bloginfo( 'description' ); ?>
				<?php endif; ?>
				</p>
				
			<?php endif; ?>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><span class="genericon genericon-menu"></span> <?php _e( 'Menu', 'onesie_pro' ); ?></h1>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->