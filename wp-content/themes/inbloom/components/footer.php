<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package In_Bloom
 */

?>

	<footer id="colophon" class="site-footer">
	
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
					<?php
				endwhile;
			endif;
		?>
		<div class="grid-container">
			<div class="hours">
				<div class="location">
					<div class="address-cell">
						<div class="icon">
							<img src="<?= home_url() ?>/wp-content/uploads/2022/06/location-white-removebg-preview.png" alt="location icon">
						</div>
						<div class="location-cell">
							<p class="address"><?="$number $street $city, $prov_terr $postal"?></p>
						</div>
					</div>
					<div class="contact-cell">
						<div class="icon">
							<img src="<?= home_url() ?>/wp-content/uploads/2022/06/phone-white-removebg-preview.png" alt="phone icon">
						</div>
						<div class="phone-numbers">
							<div class="sales-number">
								<p class="phone">sales |
									<span>
										<?="$sales"?>
									</span>
								</p>
							</div>
							<div class="service-number">
								<p class="phone">service |
									<span>
										<?="$service"?>
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Break -->
				<div class="holidays">
					<div class="title-cell">
						<p>Our sales department is open today from 9:00am - 6:00pm</p>
					</div>
					<div class="view-hours">
						<a>
						<span>view department hours</span>
						<div class="small-icon"><img src="<?= home_url() ?>/wp-content/uploads/2022/06/right-arrow-removebg-preview.png" alt="right arrow icon"></div>
						</a>
					</div>
					<div class="holiday-cell">
						<div class="holiday-hours-title">
							<p>Holiday hours</p>
						</div>
						<div class="days">
							<p>Christmas Eve: 8:00AM to 12:00PM</p>
							<p>Christmas Day: Closed</p>
							<p>Boxing day: closed</p>
							<p>New year's day: closed</p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="nav">
				<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
						)
					); 
				?> 
			</div>
				<?php 
				get_template_part('components/socials');
				?>
		</div>
		
		<div class="grid-container">
			<div class="site-info">
				<a href="<?php  echo esc_url( __( 'https://wordpress.org/', 'in-bloom' ) );   ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'in-bloom' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php 
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'in-bloom' ), 'in-bloom', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
			</div>
		</div>
		<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
