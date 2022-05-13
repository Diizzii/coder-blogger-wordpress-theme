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
                <h1 class="mb-2"><?php the_title(); ?></h1>
                <h5 class="hero-card-h3 mb-2"><?php the_subtitle(); ?></h5>
                <p class="text-secondary mb-2">
                    <span class="single-hero-meta">
                        <?php echo get_the_date(); ?> |
                        <span class="single-hero-meta-light">  Categories: <?php the_category( ", " ); ?> </span>|
                        <?php comments_number( "0 Comments" ); ?> |
                        <span class="single-hero-meta-light"><a href="<?php echo get_author_posts_url( get_the_author_meta( "ID" ) ); ?>"><?php the_author(); ?></a></span>
                        <?php
                        if( has_tag() ){
                            ?>
                            <span class="single-hero-meta-dark">| Tags: <?php the_tags( "", " / ", "" ); ?></span>
                        <?php
                        }
                        ?>
                    </span>
                </p>
            </div>
        </div>
</section>
