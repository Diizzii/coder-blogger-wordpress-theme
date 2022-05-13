<?php
/*
 * Template Name: Sidebar Page Template
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
                <div class="row">
                    <div class="col-lg-9 container-content-row">
	                    <?php the_content(); ?>
                    </div>
                    <div class="col-lg-3">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
			</div>
		</section>
		<?php
	}
}

get_footer();
?>
