<?php get_header();

if ( have_posts() ){
    while( have_posts() ){
        the_post();
        get_template_part( "template-parts/single-post-hero" );
        ?>

        <!-- Content Section -->
        <section class="section">
            <div class="container">
                <div class="mb-5">
                    <?php
                    the_content();
                    wp_link_pages();
                    ?>
                </div>

                <?php
                if( comments_open() || get_comments_number() ){
                    comments_template();
                }
                if( get_theme_mod( "coder_blogger_toggle_related" ) ){
                    get_template_part( "template-parts/related-posts" );
                }
                ?>
            </div>
        </section>
    <?php
        }
    }
get_footer();