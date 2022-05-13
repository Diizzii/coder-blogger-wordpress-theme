<?php
/*
 * Template Name: Home Page Template
 * Template Post Type: page
 */
get_header();
if( have_posts() ){
    while( have_posts() ){
        the_post();
        ?>

<?php
get_template_part( "template-parts/home-page-hero" );
?>

<!-- About Section -->

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-lg order-lg-2 section-grid move-image-left">
                <img src="<?php echo get_theme_mod( "coder_blogger_about_img" ); ?>" alt="about-pic" class="img-fluid section-image blur-image">
			</div>
			<div class="col-lg section-grid order-lg-1 increase-z-index">
				<div class="section-card section-card-alternate">
					<h2>
                        <?php echo get_theme_mod( "coder_blogger_about_heading" ); ?>
                    </h2>
					<h5 class="mb-4">
						<?php echo get_theme_mod( "coder_blogger_about_subheading" ); ?>
                    </h5>
					<p>
						<?php echo get_theme_mod( "coder_blogger_about_text" ); ?>
                    </p>
					<a href="<?php the_permalink( get_theme_mod( "coder_blogger_about_link" ) ); ?>" class="btn btn-dark btn-lg btn-card">
						<?php echo get_theme_mod( "coder_blogger_about_button" ); ?>
                    </a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
        if( get_theme_mod( "coder_blogger_home_toggle_keywords" ) ){
	        get_template_part( "template-parts/keyword-banner" );
        }
?>

<!-- Content Section -->
<section class="section section-alternate">
	<div class="container">
		<div class="row">
			<div class="col-lg section-grid">
                <img src="<?php echo get_theme_mod( "coder_blogger_content_img" ); ?>" alt="about-pic" class="img-fluid section-image blur-image">
			</div>
			<div class="col-lg section-grid increase-z-index move-card-left">
				<div class="section-card">
					<h2><?php echo get_theme_mod( "coder_blogger_content_heading" ); ?></h2>
					<h5 class="mb-4">
						<?php echo get_theme_mod( "coder_blogger_content_subheading" ); ?>
                    </h5>
					<ul>
                        <?php
                        for($i=1; $i<=5; $i++){
                            if( get_theme_mod( "coder_blogger_content_li" . $i ) ){
                                ?>
                                <li><?php echo get_theme_mod( "coder_blogger_content_li" . $i ) ?></li>
                                <?php
                            };
                        }
                        ?>
					</ul>
					<a href="<?php the_permalink( get_theme_mod( "coder_blogger_content_link" ) ); ?>" class="btn btn-dark text-light btn-lg">
                        <?php echo get_theme_mod( "coder_blogger_content_button" ); ?>
                    </a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
if( get_theme_mod( "coder_blogger_home_toggle_cards" ) ){
    ?>
    <!-- Card Section -->
    <section class="bg-dark p-5">
        <div class="container">
            <div class="row">
                <?php
                for( $i=1; $i<=3; $i++){
                    $src = get_theme_file_uri() . "/static/assets/card" . $i . ".svg";
                    ?>
                    <div class="col-md mb-2">
                        <div class="card text-center">
                            <img class="card-img-top w-25 mx-auto mt-3 mb-2" src="<?php echo $src; ?>" alt="help icon">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo get_theme_mod( "coder_blogger_card" . $i . "_heading" ); ?></h5>
                                <p class="card-text"><?php echo get_theme_mod( "coder_blogger_card" . $i . "_text" ); ?></p>
                                <a href="<?php the_permalink ( get_theme_mod( "coder_blogger_card" . $i . "_link" ) ); ?>" class="btn btn-dark btn-card"><?php echo get_theme_mod( "coder_blogger_card" . $i . "_button" ); ?></a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <?php
        }
    }
}

if( get_theme_mod( "coder_blogger_home_toggle_form" ) ){
	get_template_part( "template-parts/contact-form" );
}

get_footer();
?>
