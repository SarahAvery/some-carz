<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package in_bloom
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'in-bloom' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<div class="header-logo">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="mobile-menu-button" id="toggle" >
				<svg style="color: white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 3.386719 7.164062 L 26.613281 7.164062 L 26.613281 22.40625 L 3.386719 22.40625 Z M 3.386719 7.164062 " clip-rule="nonzero" fill="white"></path></clipPath></defs><g clip-path="url(#id1)"><path fill="white" d="M 3.398438 22.40625 L 26.601562 22.40625 L 26.601562 19.867188 L 3.398438 19.867188 Z M 3.398438 16.054688 L 26.601562 16.054688 L 26.601562 13.515625 L 3.398438 13.515625 Z M 3.398438 7.164062 L 3.398438 9.703125 L 26.601562 9.703125 L 26.601562 7.164062 Z M 3.398438 7.164062 " fill-opacity="1" fill-rule="nonzero"></path></g></svg>
			</div>
			<div class="header-information">
				<div class="contact-container">
					<div class="address">
						<?php
							if (have_rows('contact')):
								while (have_rows('contact')): the_row();
									$row = get_row(true);
									$street = $row['street'];
									$street_number = $row['street_number'];
									$city = $row['city'];
									$postal = $row['postal'];
									$prov_terr = $row['prov_terr'];
									$sales = $row['sales_number'];
									$service = $row['service_number'];
									?>
									<p class="address"><?="$street_number $street $city, $prov_terr $postal"?></p>
									<p class="phone">
										<span>
											<?="sales $sales"?>
										</span>
										<span>
											<?="service & parts $service"?>
										</span>
									</p>
									<?php
								endwhile;
							endif;
						?>
					</div> <!-- address -->
					<?php 
					get_template_part('components/socials');
					?>
				</div> <!-- contact -->
			</div> <!-- header-information -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="header-logo">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="nav" id="main-nav">
				<div class="mobile-menu-button">
				<svg id="close-toggle" style="color: rgb(0, 30, 80);" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="40" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 3.386719 7.164062 L 26.613281 7.164062 L 26.613281 22.40625 L 3.386719 22.40625 Z M 3.386719 7.164062 " clip-rule="nonzero" fill="rgb(0, 30, 80)"></path></clipPath></defs><g clip-path="url(#id1)"><path fill="rgb(0, 30, 80);" d="M 3.398438 22.40625 L 26.601562 22.40625 L 26.601562 19.867188 L 3.398438 19.867188 Z M 3.398438 16.054688 L 26.601562 16.054688 L 26.601562 13.515625 L 3.398438 13.515625 Z M 3.398438 7.164062 L 3.398438 9.703125 L 26.601562 9.703125 L 26.601562 7.164062 Z M 3.398438 7.164062 " fill-opacity="1" fill-rule="nonzero"></path></g></svg>
			</div>
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php esc_html_e( 'Primary Menu', 'in-bloom' ); ?></button> -->
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->