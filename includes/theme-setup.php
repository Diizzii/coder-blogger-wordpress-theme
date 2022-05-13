<?php
function coder_blogger_theme_setup(){
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
	add_theme_support( "custom-logo" );
	add_theme_support( "html5", array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menu( "primary", __( "Primary Menu", "coder-blogger" ) );
}

function tps_primary_menu_anchor_class($item_output, $item, $depth, $args) {
	$item_output = preg_replace('/<a /', '<a class="nav-link" ', $item_output, 1);
	return $item_output;
}

function tps_primary_menu_li_class($objects, $args) {
	foreach($objects as $key => $item) {
		$objects[$key]->classes[] = 'nav-item';
	}
	return $objects;
}