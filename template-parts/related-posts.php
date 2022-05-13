<div class="related-posts">
	<?php
	$categories = get_the_category();

	$rp_query = new WP_Query([
		"posts_per_page" => 2,
		"post__not_in" => [ $post->ID ],
		"cat" => !empty( $categories ) ? $categories[0]->term_id : null
	]);

	if( $rp_query->have_posts() ){
		while( $rp_query->have_posts() ){
			$rp_query->the_post();
			?>
			<div class="related-posts-element row">
                <div class="related-posts-img col-md-3">
                    <?php
                    if( has_post_thumbnail() ) {
                        the_post_thumbnail( "large" );
					}else{
                        ?>
                        <img src="<?php echo get_template_directory_uri() . '/static/assets/black-white-dummy.webp'; ?>"  alt="blogpost image" class="img-fluid">
                        <?php
				    }
				?>
                </div>
				<div class="related-posts-content col-md-9">
					<div class="related-posts-title">
						<h4>
							<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
						</h4>
					</div>
					<ul class="related-posts-meta">
                        <li><?php the_author(); ?> || </li>
                        <li><?php echo get_the_date(); ?> || </li>
						<li><?php comments_number( "0 Comments" ); ?></li>
					</ul>
					<div class="related-posts-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			<?php
		}
		wp_reset_postdata();
	}
	?>
</div>