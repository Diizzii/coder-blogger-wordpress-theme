<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="text/html; charset=<?php bloginfo( "charset" ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
	<div class="container">
		<?php
		if( has_custom_logo() ){
			?>
                <div id="logo">
                    <?php the_custom_logo(); ?>
                </div>
			<?php
		}else{
			?>
                <div id="no-logo">
                    <a href="<?php echo home_url( "/" ); ?>" class="navbar-brand"><?php bloginfo( "name" ); ?></a>
                </div>
			<?php
		};
		?>

		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navmenu"
		>
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navmenu">
            <?php
                if( has_nav_menu( "primary") ){
                    wp_nav_menu([
                        "theme_location" => "primary",
                        "container" => false,
                        "fallback_cb" => false,
                        "menu_class" => "navbar-nav ms-auto",
                        "depth" => 1
                    ]);
                }
            ?>
		</div>
	</div>
</nav>