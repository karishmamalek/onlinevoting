<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Online_Voting
 * @since Online Voting 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php onlinevoting_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<link rel="stylesheet" href="<?php echo VOTE_THEME_URL; ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo VOTE_THEME_URL; ?>/assets/css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<!--[if lt IE 9]>-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo VOTE_THEME_URL; ?>/assets/css/responsive.css">
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!-- loader  -->
	<div class="loader_bg">
		<div class="loader"><img src="<?php echo VOTE_THEME_URL; ?>/assets/images/loading.gif" alt="#" /></div>
	</div>
	<!-- end loader -->
	<!-- header -->
	<header>
		<!-- header inner -->
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
						<nav class="navigation navbar navbar-expand-md navbar-dark ">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarsExample04">
								<?php 
									wp_nav_menu(array(
									'menu'=> 'Primary Menu',
									'menu_id'=>'',
									'container_id'=>false,
									'depth'         => 1,
									'fallback_cb'   => false,
									'theme_location'=>'primary-menu',
									'menu_class'=> 'navbar-nav mr-auto',
								    'add_li_class'  => 'nav-item'
									)); 
								?>
							</div>
						</nav>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
						<div class="full">
							<div class="center-desk">
								<div class="logo">
									<a href="<?php echo SITE_URL;?>"><img src="<?php echo VOTE_THEME_URL; ?>/assets/images/logo.png" alt="#" /></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
						<ul class="email">
							<li><a href="#">Call: 9429436365</a></li>
							<li><a href="#">Email: karimalik26997@gmail.com</a></li>
							<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header inner -->