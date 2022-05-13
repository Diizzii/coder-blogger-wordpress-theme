<?php

function coder_blogger_customizer_single( $wp_customize ){
	$wp_customize->add_panel( "coder-blogger-single", [
		"title" => __( "CB Single Post Settings", "coder-blogger" ),
		"description" => "<p>Settings for Single Posts</p>",
		"priority" => 250
	] );

	// Customization of single post elements

	$wp_customize->add_section( 'coder-blogger-single-elements',
		array(
			'title'         => __( 'Set Single Post Elements', 'coder-blogger' ),
			'priority'      => 1,
			'panel'         => 'coder-blogger-single'
		)
	);

	// Toggle related posts

	$wp_customize->add_setting( "coder_blogger_toggle_related", [
		"default" => "yes"
	] );

	$add_single_toggle_related = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_toggle_related",
		[
			"label" => __( "Display Related Posts", "coder-blogger" ),
			"section" => "coder-blogger-single-elements",
			"settings" => "coder_blogger_toggle_related",
			"type" => "checkbox",
			"choices" => [
				"yes" => "yes"
			]
		]
	);

	$wp_customize->add_control( $add_single_toggle_related );
}