<?php

function coder_blogger_customizer_form( $wp_customize ){
	$wp_customize->add_panel( "coder-blogger-form-settings", [
		"title" => __( "CB Form Settings", "coder-blogger" ),
		"description" => "<p>Page-wide form settings</p>",
		"priority" => 240
	] );

	// Customization of form elements

	$wp_customize->add_section( 'coder-blogger-form-elements',
		array(
			'title'         => __( 'Globally Set Form Elements', 'coder-blogger' ),
			'priority'      => 1,
			'panel'         => 'coder-blogger-form-settings'
		)
	);

	// Form Section Heading

	$wp_customize->add_setting( "coder_blogger_home_form_heading", [
		"default" => "Get In Touch!"
	] );

	$add_form_heading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_form_heading",
		[
			"label" => __( "Form Heading", "coder-blogger" ),
			"section" => "coder-blogger-form-elements",
			"settings" => "coder_blogger_home_form_heading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_form_heading_object );

	// Form Section Subheading

	$wp_customize->add_setting( "coder_blogger_home_form_subheading", [
		"default" => "We Look Forward To Hearing From You"
	] );

	$add_form_subheading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_form_subheading",
		[
			"label" => __( "Form Subheading", "coder-blogger" ),
			"section" => "coder-blogger-form-elements",
			"settings" => "coder_blogger_home_form_subheading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_form_subheading_object );

	// Form Section Success Message

	$wp_customize->add_setting( "coder_blogger_home_form_success", [
		"default" => "Thank you for reaching out, I will be in touch!"
	] );

	$add_form_success_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_form_success",
		[
			"label" => __( "Form Success Message", "coder-blogger" ),
			"section" => "coder-blogger-form-elements",
			"settings" => "coder_blogger_home_form_success",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_form_success_object );

	// Form Section Failure Message

	$wp_customize->add_setting( "coder_blogger_home_form_failure", [
		"default" => "That did not work, please try again!"
	] );

	$add_form_failure_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_form_failure",
		[
			"label" => __( "Form Failure Message", "coder-blogger" ),
			"section" => "coder-blogger-form-elements",
			"settings" => "coder_blogger_home_form_failure",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_form_failure_object );

	// Form Section Image
	$dummy_image = get_template_directory_uri() . '/static/assets/black-white-dummy.webp';

	$wp_customize->add_setting( "coder_blogger_home_form_image", [
		"default" => $dummy_image
	] );

	$add_form_image_object = new WP_Customize_Image_Control(
		$wp_customize,
		"coder_blogger_home_form_image",
		[
			"label" => __( "Form Image", "coder-blogger" ),
			"section" => "coder-blogger-form-elements",
			"settings" => "coder_blogger_home_form_image",
		]
	);

	$wp_customize->add_control( $add_form_image_object );

}