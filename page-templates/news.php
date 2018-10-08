<?php
/**
 * Template Name: News
 * @package understrap
 */

get_header();
?>

<main>
	<section id="hero">
		<div class="container" >
			<div class="row">
				<div class="col-md-12">
					<h1>LATEST UPDATES</h1>
					
				</div>
			</div><!-- .row -->
		</div><!--.container-->
	</section><!--section-->	
	<section id="news" style="display:none">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h4>In the News</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					
				<?php 
						$args=array(
							'post_type' => 'companynews',
							'posts_per_page' => 6,
							'order' => 'desc'

					);
					$the_query = new WP_Query($args);
					?>
					<?php if ( $the_query->have_posts() ) : ?>
						<ul>
							<?php  ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<li>				
									<a href="<?php the_field('news_url') ?>" target="_blank">
										<?php the_title(); ?>
									</a>
								</li>
							<?php endwhile; ?>
						<?php else : ?>
							<?php get_template_part( 'loop-templates/content', 'none' ); ?>
						</ul>
					<?php endif; ?>
				<?php wp_reset_query(); ?>
				</div>
				<div class="col-md-6">
					
				<?php 
						$args=array(
							'post_type' => 'companynews',
							'posts_per_page' => 6,
							'order' => 'asdescc',
							'offset' => 6
					);
					$the_query = new WP_Query($args);
					?>
					<?php if ( $the_query->have_posts() ) : ?>
						<ul>
							<?php /* Start the Loop */ ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<li>				
									<a href="<?php the_field('news_url') ?>" target="_blank">
										<?php the_title(); ?>
									</a>
								</li>
							<?php endwhile; ?>
						<?php else : ?>
							<?php get_template_part( 'loop-templates/content', 'none' ); ?>
						</ul>
					<?php endif; ?>
				<?php wp_reset_query(); ?>
				</div><!--col-->
			</div><!--row-->
		</div><!--.container-->
	</section><!--section-->

	<section id="medium">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h4>Medium Blog</h4>
				</div>
			</div>
			<div class="row">
					
				<?php 
						$args=array(
							'post_type' => 'medium',
							'posts_per_page' => 3,
							'order' => 'desc'

					);
					$the_query = new WP_Query($args);
					?>
					<?php if ( $the_query->have_posts() ) : ?>
					
							<?php /* Start the Loop */ ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<div class="col-md-12">
								<div class="item" style="background:url('<?php echo get_the_post_thumbnail_url() ?>') #000;">
									<h5><a href="<?php the_field('medium_url') ?>" target="_blank">
										<?php the_title(); ?>
									</a></h5>
								</div>

							</div>
							<?php endwhile; ?>
						<?php else : ?>
							<?php get_template_part( 'loop-templates/content', 'none' ); ?>
			
					<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div><!--.container-->
	</section><!--section-->
	<section id="video">
		<div class="container" >
			<div class="row section-title">
				<div class="col-md-12">
					<h4>Videos</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<style> .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>

					<div class="embed-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto;"><iframe src='https://player.vimeo.com/video/293496958' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
				</div>
				<div class="col-md-1"></div>
			</div>
			
		</div><!--.container-->
	</section><!--section-->


</main><!-- Wrapper end -->

<?php get_footer(); ?>
