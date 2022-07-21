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
		<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
