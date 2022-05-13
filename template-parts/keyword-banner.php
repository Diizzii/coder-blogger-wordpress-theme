<?php
wp_enqueue_script( "coder_blogger_index" );
?>
<!-- Keywords Bar-->
<section class="section-bar bg-dark section-grid">
	<div class="container section-bar-container">
		<div class="d-flex justify-content-between">
			<div>
				<p class="btn btn-secondary btn-lg">
                    <?php
                    if( get_theme_mod( "coder_blogger_home_introduction" ) ){
                        echo get_theme_mod( "coder_blogger_home_introduction" );
                    }else{
                        echo "Keywords:";
                    }
                    ?>
                </p>
			</div>
			<div>
                <?php
                for( $i=1; $i<=5; $i++){
	                if( get_theme_mod( "coder_blogger_home_keyword_" . $i ) ){
		                ?>
                        <p class="text-light btn btn-lg section-bar-keyword section-bar-keyword-show"><?php echo get_theme_mod( "coder_blogger_home_keyword_" . $i ) ?></p>
		                <?php
	                }
                }
                ?>
			</div>
		</div>
	</div>
</section>