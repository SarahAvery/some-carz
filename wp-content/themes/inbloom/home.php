<?php
/**
 * Template Name: Home
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package In_Bloom
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		get_template_part('components/slider');
		get_template_part('components/cards'); 
		get_template_part('components/welcome');
		get_template_part('components/reviews');
		?>

	</main><!-- #main -->
	
	<?php
	get_footer();
  ?>

