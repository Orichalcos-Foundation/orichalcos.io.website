<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<footer>
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row link">
			<div class="col-md-12">
				<ul>
					
					<li><a href="https://medium.com/@orichalcos" target="_blank"><i class="fab fa-medium-m"></i></a></li>
					<li><a href="https://twitter.com/OrichalcosOrg" target="_blank"><i class="fab fa-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/Orichalcos-239406276641957/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.linkedin.com/company/orichalcos-foundation/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="mailto:Help@Orichalcos.io"><i class="far fa-envelope"></i></a></li>
				</ul>
			</div>
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-12">

				<span>&copy; Orichalcos Foundation</span>
				<a href="">Disclaimer</a> - 
				<a href="">TG Terms</a> - 
				<a href="">Privacy</a>  - 
				<a href="">Cookie</a> 

			</div><!--col end -->

		</div><!-- row end -->
	</div><!-- container end -->
</footer><!-- wrapper end -->


</div><!-- #page we need this extra closing tag here -->
<script>
	AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll

  // Settings that can be overriden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});	
	

	
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script type='text/javascript' src="<?php echo get_stylesheet_directory_uri(); ?>/js/Chart.min.js"></script>

<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/main.js'></script>

<?php wp_footer(); ?>

</body>

</html>

