<?php get_header(); ?>

<!-- Hero Section-->
<section class="hero hero-404 section-grid">
	<div class="container">
		<div class="hero-card">
			<h1 class="mb-1">Error 404</h1>
			<h4 class="hero-card-h2 mb-3">Nothing To See Here, Please Move On!</h4>
			<p class="mb-4">The page you requested does not exist, sorry!</p>
			<a href="<?php echo home_url( "/" ); ?>" class="btn btn-dark btn-lg text-light">Back Home</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>