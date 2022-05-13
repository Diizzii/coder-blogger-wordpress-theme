<?php

function coder_blogger_customizer_misc( $wp_customize ) {
	$wp_customize->get_section( "title_tagline")->title = "General Settings";

	$wp_customize->get_section( "static_front_page")->title = "Set Homepage / Posts Page";
}