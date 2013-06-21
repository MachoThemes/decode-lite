<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Decode
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, user-scalable = no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Icons -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png">

<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/homescreen.png">

<meta name="msapplication-TileColor" content="#E3E5E7">

<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/icon.png">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<!-- Modernizr -->
<script async type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>

<!-- Respond.js -->
<script async type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>

<!-- fastclick.js -->
<script type='application/javascript' src='<?php echo get_template_directory_uri(); ?>/js/fastclick.js'></script>

<!-- jQuery -->
<script async src="//code.jquery.com/jquery-2.0.1.min.js"></script>

<!-- jQuery Scripts -->
<script type="text/javascript">
	$(document).ready(function(){
		$(function() {
			FastClick.attach(document.body);
		});
		$('.replytrigger').click(function(){
			$('.triggered').removeClass('triggered');
			$(this).closest('.reply').addClass('triggered');
		});
		$("#sidebar_link, #sidebar_top").click(function(){
			$('#sidebar').toggleClass('visible');
		});
    });
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<img id="sidebar_link" class="SidebarLink <?php echo get_theme_mod( 'sidebar_button_position' );?> <?php echo get_theme_mod( 'show_sidebar' );?>" src="<?php echo get_template_directory_uri(); ?>/images/menu.svg">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php echo get_theme_mod( 'use_html_in_description', '' ); ?></h2>
		</div>
		<div class="sociallinks <?php echo get_theme_mod( 'show_social_icons' );?>">
			<ul> 
				<a class="sociallink TwitterLink <?php echo get_theme_mod( 'show_twitter' );?>" <?php echo 'href=https://twitter.com/' .get_theme_mod( 'twitter_username' )."\n";?>>
					<img src="<?php echo get_template_directory_uri(); ?>/images/Twitter.svg" alt="Link to Twitter profile">
				</a>
				<a class="sociallink AppNetLink <?php echo get_theme_mod( 'show_adn' );?>" <?php echo 'href=https://alpha.app.net/' .get_theme_mod( 'adn_username' )."\n";?>>
					<img src="<?php echo get_template_directory_uri(); ?>/images/ADN.svg" alt="Link to App dot net profile">
				</a>
				<a class="sociallink FacebookLink <?php echo get_theme_mod( 'show_facebook' );?>" <?php echo 'href=https://facebook.com/' .get_theme_mod( 'facebook_username' )."\n";?>>
					<img src="<?php echo get_template_directory_uri(); ?>/images/Facebook.svg" alt="Link to Facebook profile">
				</a>
			</ul>
		</div>

		<nav role="navigation" class="site-navigation main-navigation">

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	</header><!-- #masthead .site-header -->

	<div id="sidebar" class="sidebar <?php echo get_theme_mod( 'sidebar_position' );?> <?php echo get_theme_mod( 'show_sidebar' );?>">
		<div id="sidebar_top" class="SidebarTop"><img id="sidebar_close" class="SidebarClose" src="<?php echo get_template_directory_uri(); ?>/images/cross.svg"></div>
		<div class="SidebarContent">
			<?php get_sidebar(); ?>
		</div>
	</div>

	<div id="main" class="site-main">
