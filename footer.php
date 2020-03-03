<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_1.0
 */

?>
		 <div id="google-reviews"></div>
		 <script>
jQuery(document).ready(function($) {
   $("#google-reviews").googlePlaces({
  
   });

  

});
</script>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="footer-flex">

			<div class="contact-form">
				<h3 class="light-text">Get in touch</h3>
				<?php echo do_shortcode( '[contact-form-7 id="77" title="START"]' ); ?>

			</div>
			

			<div class="site-info">
				<div class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cluettlogo.svg"/>
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>
				<div class="site-info-wrap">
				<div class="site-info-column">
					<h5>Title A</h5>
					<a href="link">title A</a>
					<a href="link">title A</a>
					<a href="link">title A</a>
				</div>
				<div class="site-info-column">
					<h5>Title B</h5>
					<a href="link">title B</a>
					<a href="link">title B</a>
					<a href="link">title B</a>
				</div>

				<div class="site-info-column">
					<h5>Title C</h5>
					<a href="link">title C</a>
					<a href="link">title C</a>
					<a href="link">title C</a>
				</div>
				</div>

			</div><!-- .site-info -->

			<div class="break"></div>

		</div><!-- footer-flex-->
		<div class="social-links">
		<a href="https://en-gb.facebook.com/cluettcarpentry">
			<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg"/>
		</a>
		<a href="https://www.instagram.com/CluettCarpentry/?hl=en">
			<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg"/>
		</a>


		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>

