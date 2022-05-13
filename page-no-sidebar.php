<?php
/*
 * Template Name: No Sidebar & No Form Page Template
 * Template Post Type: page
 */
get_header();

if( have_posts() ){
	while( have_posts() ){
		the_post();
		get_template_part( "template-parts/page-hero" );
		?>

		<!-- About Section -->

		<section class="section">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</section>
		<?php
	}
}

get_footer();
?>
