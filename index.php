<?php
get_header();
?>
<!-- Hero Section-->
<?php
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
