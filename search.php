<?php get_header(); ?>

<!-- Hero Section-->
<section class="hero-search section-grid">
	<div class="container">
		<div class="hero-card">
            <h1><?php _e( "Search Results for: ", "coder-blogger" ) . the_search_query(); ?></h1>
		</div>
	</div>
</section>

<!-- Search Section -->
<section class="main-search-section">
    <div class="container">
        <div class="main-search-form">
            <h5 class="main-search-title mb-3">
	            <?php _e( "What are you searching for today?", "" ); ?>
            </h5>
            <div class="search-body">
	            <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="results-col col-lg-9">
		        <?php
		        if( have_posts() ){
			        while( have_posts() ){
				        the_post();
				        ?>
                        <article class="p-3 blogpost-short search-result">
                            <div class="blogpost-short-container">
                                <div>
                                    <h4>
								        <?php
								        the_title();
								        ?>
                                    </h4>
                                    <h5>
                                        <span class="blogpost-short-content-info">
                                            <?php
                                            if( get_the_category() ){
	                                            the_category();
	                                            echo " | ";
                                            }
                                            ?>
	                                        <?php echo get_the_date() ?> |
                                            <a href="<?php echo get_author_posts_url( get_the_author_meta( "ID" ) ); ?>" class="blogpost-short-content-author"><?php the_author(); ?></a>
                                             | <?php comments_number( "0 Comments" ); ?>
                                        </span>
                                    </h5>
							        <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-dark blogpost-short-content-button">Read Post</a>
                                </div>
                            </div>
                        </article>
				        <?php
			        }
		        }else{
                    ?>
                    <h4 class="mt-5">Sorry, there are no results matching your query, please try another search term!</h4>
                    <?php
                }
		        ?>
                <div class="pagination-links">
			        <?php
			        next_posts_link( "&larr; Older" );
			        echo " ";
			        previous_posts_link( "Newer &rarr;" );
			        ?>
                </div>
            </div>

            <div class="sidebar-col col-lg-3">
		        <?php get_sidebar(); ?>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>
