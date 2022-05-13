<?php
function coder_blogger_enqueue_styles_and_js(){
	$uri = get_theme_file_uri();
	$mode = theme_in_development? time() : false;

	wp_register_style( "coder_blogger_bootstrap", $uri . "/static/css/bootstrap.min.css", [], $mode );
	wp_register_style( "coder_blogger_custom_style", $uri . "/static/css/coder-blogger.min.css", [], $mode );

	wp_enqueue_style('dashicons');
	wp_enqueue_style( "coder_blogger_bootstrap" );
	wp_enqueue_style( "coder_blogger_custom_style" );

	wp_register_script( "coder_blogger_bootstrap", $uri . "/static/js/bootstrap.min.js", [], $mode, true );
	wp_register_script( "coder_blogger_index", $uri . "/static/js/index.js", [], $mode, true );

	wp_enqueue_script( "jquery" );
	wp_enqueue_script( "coder_blogger_bootstrap" );
}