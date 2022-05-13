<?php

function coder_blogger_customizer_footer( $wp_customize ) {
	$wp_customize->add_panel( "coder-blogger-footer-elements", [
		"title" => __( "CB Footer Elements", "coder-blogger" ),
		"description" => "<p>Custom Footer Elements</p>",
		"priority" => 260
	] );

	// Footer Text

	$wp_customize->add_section( 'coder-blogger-footer-text',
		array(
			'title'         => __( 'Footer Text', 'coder-blogger' ),
			'priority'      => 1,
			'panel'         => 'coder-blogger-footer-elements'
		)
	);

	$wp_customize->add_setting( "coder-blogger-footer-text-input", [
		"default" => "Your text will be displayed here"
	] );

	$add_footer_text = new WP_Customize_Control(
		$wp_customize,
		"coder-blogger-footer-text-input",
		[
			"label" => __( "Footer Text Input", "coder-blogger" ),
			"section" => "coder-blogger-footer-text",
			"settings" => "coder-blogger-footer-text-input",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_footer_text );

	// Footer Links

	$wp_customize->add_section( 'coder-blogger-footer-elements',
		array(
			'title'         => __( 'Page Links', 'coder-blogger' ),
			'priority'      => 2,
			'panel'         => 'coder-blogger-footer-elements'
		)
	);

	// Footer Link 1
	$wp_customize->add_setting( "coder-blogger-footer-link-1", [
		"default" => 0
	] );

	$add_footer_link_1 = new WP_Customize_Control(
		$wp_customize,
		"coder-blogger-footer-link-1",
		[
			"label" => __( "Footer Link 1", "coder-blogger" ),
			"section" => "coder-blogger-footer-elements",
			"settings" => "coder-blogger-footer-link-1",
			"type" => "dropdown-pages"
		]
	);

	$wp_customize->add_control( $add_footer_link_1 );

	$wp_customize->add_setting( "coder-blogger-footer-link-1-label", [
		"default" => "Link 1"
	] );

	$add_footer_link_1_label = new WP_Customize_Control(
		$wp_customize,
		"coder-blogger-footer-link-1-label",
		[
			"label" => __( "Footer Link 1 Label", "coder-blogger" ),
			"section" => "coder-blogger-footer-elements",
			"settings" => "coder-blogger-footer-link-1-label",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_footer_link_1_label );

	// Footer Link 2
	$wp_customize->add_setting( "coder-blogger-footer-link-2", [
		"default" => 0
	] );

	$add_footer_link_2 = new WP_Customize_Control(
		$wp_customize,
		"coder-blogger-footer-link-2",
		[
			"label" => __( "Footer Link 2", "coder-blogger" ),
			"section" => "coder-blogger-footer-elements",
			"settings" => "coder-blogger-footer-link-2",
			"type" => "dropdown-pages"
		]
	);

	$wp_customize->add_control( $add_footer_link_2 );

	$wp_customize->add_setting( "coder-blogger-footer-link-2-label", [
		"default" => "Link 2"
	] );

	$add_footer_link_2_label = new WP_Customize_Control(
		$wp_customize,
		"coder-blogger-footer-link-2-label",
		[
			"label" => __( "Footer Link 2 Label", "coder-blogger" ),
			"section" => "coder-blogger-footer-elements",
			"settings" => "coder-blogger-footer-link-2-label",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_footer_link_2_label );
}