<?php get_header();

if( have_posts() ){
	while( have_posts() ){
		the_post();
		global $post;
		?>

		<!-- Content Section -->
		<section class="section attachment-section">
			<div class="container">
				<div class="row">
					<div class="mb-5 pb-3 col-lg-9 container-content-row">
						<h1 class="mb-4"><?php the_title(); ?></h1>
                        <img src="<?php echo $post->guid; ?>" class="img-fluid img-image-page mb-4">
						<a href="<?php echo $post->guid; ?>" class="a-image-page"><?php _e( "Direct Download", "dkdev-basic-theme" ); ?></a>
						<?php
						the_content();
						?>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</section>
		<?php
	}
}
get_footer();
?>
