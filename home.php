<?php get_header(); ?>

<!-- Hero Section -->
<?php
get_template_part( "template-parts/archive-hero" );
?>

<!-- Blog Posts Section -->
<section class="section">
	<div class="container">
		<?php
		if( have_posts() ){
			while( have_posts() ){
				the_post();
				?>
                <article class="blogpost-short">
                    <div class="row">
                        <div class="col-lg section-grid">
                            <div class="blogpost-short-image">
                                <?php
                                if( has_post_thumbnail() ){
                                    the_post_thumbnail( "full", [ "class" => "img-fluid" ] );
                                }else{
                                    ?>
                                    <img src="<?php echo get_template_directory_uri() . '/static/assets/black-white-dummy.webp' ?>" alt="blogpost image" class="img-fluid">
                                    <?php
                                }
                                ?>
                                <div class="blogpost-short-heading">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <h5><?php echo get_the_date(); ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg p-3 px-4 blogpost-short-container">
                            <div class="blogpost-short-content">
                                <h5>
                                    <?php
                                    if( get_the_subtitle() ){
                                        the_subtitle();
                                    }else{
                                        the_title();
                                    }
                                    ?>
                                    <br>
                                    <span class="blogpost-short-content-info">
                                <?php the_category(); ?> | <?php echo get_the_date() ?> |
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( "ID" ) ); ?>" class="blogpost-short-content-author"><?php the_author(); ?></a>
                                 | <?php comments_number( "0 Comments" ); ?>
                            </span>
                                </h5>

                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-dark blogpost-short-content-button">Post lesen</a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php
			}
		}
		?>
        <div class="pagination-links">
			<?php
			next_posts_link( "&larr; Older" );
			if( get_next_posts_link() && get_previous_posts_link() ) {
				echo " || ";
			}
			previous_posts_link( "Newer &rarr;" );
			?>
        </div>
	</div>
</section>

<?php
get_template_part( "template-parts/contact-form" );
get_footer();
?>
