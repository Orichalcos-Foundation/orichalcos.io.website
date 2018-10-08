<?php
/**
 * Template Name: kyc
 * @package understrap
 */

get_header();
?>

<main>

	<section id="">
		<div class="container" >

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true ]') ?>
				</div><!--col-->
				<div class="col-md-2"></div>				
			</div><!--row-->
		</div><!--.container-->
	</section><!--section-->
</main><!-- Wrapper end -->

<?php get_footer(); ?>
