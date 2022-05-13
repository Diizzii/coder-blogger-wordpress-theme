<!-- Hero Section-->
<section class="hero section-grid">
    <?php
	if( has_post_thumbnail() ){
		the_post_thumbnail( "full", [ "class" => "single-post-image" ] );
	}else{
		?>
		<img src="<?php echo get_template_directory_uri() . '/static/assets/black-white-dummy.webp'; ?>" alt="single-post" class="single-post-image">
		<?php
	}
	?>
	<div class="container">
		<div class="hero-card">
			<h1 class="mb-4"><?php the_title(); ?></h1>
			<h5 class="hero-card-h3 mb-4"><?php the_subtitle(); ?></h5>
		</div>
	</div>
</section>