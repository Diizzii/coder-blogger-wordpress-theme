<?php

function coder_blogger_customizer_home_elements( $wp_customize ) {
	$wp_customize->add_panel( "coder-blogger-home-elements", [
		"title" => __( "CB Front Page Elements", "coder-blogger" ),
		"description" => "<p>Elements for the \"page-home\" Template</p>",
		"priority" => 250
	] );

	// Customization of Hero Section Elements

	$wp_customize->add_section( 'coder-blogger-home-elements-hero',
		array(
			'title'         => __( 'Hero Section', 'coder-blogger' ),
			'priority'      => 1,
			'panel'         => 'coder-blogger-home-elements'
		)
	);

	$wp_customize->add_setting( "coder_blogger_home_hero_text", [
		"default" => "Dummy Text"
	] );

	$add_hero_text_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_hero_text",
		[
			"label" => __( "Hero Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-hero",
			"settings" => "coder_blogger_home_hero_text",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_hero_text_object );

	// Customization of About Section

	$wp_customize->add_section( 'coder-blogger-home-elements-about',
		array(
			'title'         => __( 'About Section', 'coder-blogger' ),
			'priority'      => 2,
			'panel'         => 'coder-blogger-home-elements'
		)
	);

	// About Section Card

	$wp_customize->add_setting( "coder_blogger_about_heading", [
		"default" => "About Heading"
	] );

	$add_about_heading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_about_heading",
		[
			"label" => __( "About Heading", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-about",
			"settings" => "coder_blogger_about_heading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_heading_object );

	$wp_customize->add_setting( "coder_blogger_about_subheading", [
		"default" => "About Subheading"
	] );

	$add_about_subheading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_about_subheading",
		[
			"label" => __( "About Subheading", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-about",
			"settings" => "coder_blogger_about_subheading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_subheading_object );

	$wp_customize->add_setting( "coder_blogger_about_text", [
		"default" => "About Text"
	] );

	$add_about_text_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_about_text",
		[
			"label" => __( "About Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-about",
			"settings" => "coder_blogger_about_text",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_text_object );

	$wp_customize->add_setting( "coder_blogger_about_button", [
		"default" => "About Button Text"
	] );

	$add_about_button_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_about_button",
		[
			"label" => __( "About Button Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-about",
			"settings" => "coder_blogger_about_button",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_button_object );

	$wp_customize->add_setting( "coder_blogger_about_link", [
		"default" => 0
	] );

	$add_about_link_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_about_link",
		[
			"label" => __( "About Button Link", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-about",
			"settings" => "coder_blogger_about_link",
			"type" => "dropdown-pages"
		]
	);

	$wp_customize->add_control( $add_about_link_object );

	$dummy_image = get_template_directory_uri() . '/static/assets/black-white-dummy.webp';

	$wp_customize->add_setting( "coder_blogger_about_img", [
		"default" => $dummy_image
	] );

	$add_about_img_object = new WP_Customize_Image_Control(
		$wp_customize,
		"coder_blogger_about_img",
		[
			"label" => __( "About Section Image", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-about",
			"settings" => "coder_blogger_about_img",
		]
	);

	$wp_customize->add_control( $add_about_img_object );

	// Customization of Content Section

	$wp_customize->add_section( 'coder-blogger-home-elements-content',
		array(
			'title'         => __( 'Content Section', 'coder-blogger' ),
			'priority'      => 4,
			'panel'         => 'coder-blogger-home-elements'
		)
	);

	// Content Section Card

	$wp_customize->add_setting( "coder_blogger_content_heading", [
		"default" => "Content Heading"
	] );

	$add_content_heading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_content_heading",
		[
			"label" => __( "Content Heading", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_heading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_content_heading_object );

	$wp_customize->add_setting( "coder_blogger_content_subheading", [
		"default" => "Content Subheading"
	] );

	$add_content_subheading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_Content_subheading",
		[
			"label" => __( "Content Subheading", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_subheading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_content_subheading_object );

	$wp_customize->add_setting( "coder_blogger_content_li1", [
		"default" => "List Item 1"
	] );

	$add_about_li1_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_content_li1",
		[
			"label" => __( "List Item 1", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_li1",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_li1_object );

	$wp_customize->add_setting( "coder_blogger_content_li2", [
		"default" => "List Item 2"
	] );

	$add_about_li2_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_content_li2",
		[
			"label" => __( "List Item 2", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_li2",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_li2_object );

	$wp_customize->add_setting( "coder_blogger_content_li3", [
		"default" => "List Item 3"
	] );

	$add_about_li3_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_content_li3",
		[
			"label" => __( "List Item 3", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_li3",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_li3_object );

	$wp_customize->add_setting( "coder_blogger_content_li4", [
		"default" => "List Item 4"
	] );

	$add_about_li4_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_content_li4",
		[
			"label" => __( "List Item 4", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_li4",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_li4_object );

	$wp_customize->add_setting( "coder_blogger_content_li5", [
		"default" => "List Item 5"
	] );

	$add_about_li5_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_content_li5",
		[
			"label" => __( "List Item 5", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_li5",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_about_li5_object );

	$wp_customize->add_setting( "coder_blogger_content_button", [
		"default" => "Content Button Text"
	] );

	$add_content_button_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_content_button",
		[
			"label" => __( "Content Button Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_button",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_content_button_object );

	$wp_customize->add_setting( "coder_blogger_content_link", [
		"default" => 0
	] );

	$add_content_link_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_content_link",
		[
			"label" => __( "Content Button Link", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_link",
			"type" => "dropdown-pages"
		]
	);

	$wp_customize->add_control( $add_content_link_object );

	// Content Section Image

	$wp_customize->add_setting( "coder_blogger_content_img", [
		"default" => $dummy_image
	] );

	$add_content_img_object = new WP_Customize_Image_Control(
		$wp_customize,
		"coder_blogger_content_img",
		[
			"label" => __( "Content Section Image", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-content",
			"settings" => "coder_blogger_content_img",
		]
	);

	$wp_customize->add_control( $add_content_img_object );

	// Customization of Card Section

	$wp_customize->add_section( 'coder-blogger-home-elements-cards',
		array(
			'title'         => __( 'Cards Section', 'coder-blogger' ),
			'priority'      => 13,
			'panel'         => 'coder-blogger-home-elements'
		)
	);

	// Toggle Cards Section

	$wp_customize->add_setting( "coder_blogger_home_toggle_cards", [
		"default" => "yes"
	] );

	$add_form_toggle_cards = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_toggle_cards",
		[
			"label" => __( "Display Cards Section", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_home_toggle_cards",
			"type" => "checkbox",
			"choices" => [
				"yes" => "yes"
			]
		]
	);

	$wp_customize->add_control( $add_form_toggle_cards );

	// Card 1

	$wp_customize->add_setting( "coder_blogger_card1_heading", [
		"default" => "Heading 1"
	] );

	$wp_customize->add_setting( "coder_blogger_card1_text", [
		"default" => "Text 1"
	] );

	$wp_customize->add_setting( "coder_blogger_card1_button", [
		"default" => "Button 1"
	] );

	$wp_customize->add_setting( "coder_blogger_card1_link", [
		"default" => 0
	] );

	$add_card1_heading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card1_heading",
		[
			"label" => __( "Card 1 Heading", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card1_heading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card1_heading_object );

	$add_card1_text_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card1_text",
		[
			"label" => __( "Card 1 Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card1_text",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card1_text_object );

	$add_card1_button_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card1_button",
		[
			"label" => __( "Card 1 Button Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card1_button",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card1_button_object );

	$add_card1_link_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card1_link",
		[
			"label" => __( "Card 1 Page Link", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card1_link",
			"type" => "dropdown-pages"
		]
	);

	$wp_customize->add_control( $add_card1_link_object );

	// Card 2

	$wp_customize->add_setting( "coder_blogger_card2_heading", [
		"default" => "Heading 2"
	] );

	$wp_customize->add_setting( "coder_blogger_card2_text", [
		"default" => "Text 2"
	] );

	$wp_customize->add_setting( "coder_blogger_card2_button", [
		"default" => "Button 2"
	] );

	$wp_customize->add_setting( "coder_blogger_card2_link", [
		"default" => 0
	] );

	$add_card2_heading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card2_heading",
		[
			"label" => __( "Card 2 Heading", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card2_heading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card2_heading_object );

	$add_card2_text_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card2_text",
		[
			"label" => __( "Card 2 Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card2_text",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card2_text_object );

	$add_card2_button_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card2_button",
		[
			"label" => __( "Card 2 Button Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card2_button",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card2_button_object );

	$add_card2_link_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card2_link",
		[
			"label" => __( "Card 2 Page Link", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card2_link",
			"type" => "dropdown-pages"
		]
	);

	$wp_customize->add_control( $add_card2_link_object );

	// Card 3

	$wp_customize->add_setting( "coder_blogger_card3_heading", [
		"default" => "Heading 3"
	] );

	$wp_customize->add_setting( "coder_blogger_card3_text", [
		"default" => "Text 3"
	] );

	$wp_customize->add_setting( "coder_blogger_card3_button", [
		"default" => "Button 3"
	] );

	$wp_customize->add_setting( "coder_blogger_card3_link", [
		"default" => 0
	] );

	$add_card3_heading_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card3_heading",
		[
			"label" => __( "Card 3 Heading", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card3_heading",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card3_heading_object );

	$add_card3_text_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card3_text",
		[
			"label" => __( "Card 3 Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card3_text",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card3_text_object );

	$add_card3_button_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card3_button",
		[
			"label" => __( "Card 3 Button Text", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card3_button",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_card3_button_object );

	$add_card3_link_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_card3_link",
		[
			"label" => __( "Card 3 Page Link", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-cards",
			"settings" => "coder_blogger_card3_link",
			"type" => "dropdown-pages"
		]
	);

	$wp_customize->add_control( $add_card3_link_object );

	// Customization of Keyword Section Elements

	$wp_customize->add_section( 'coder-blogger-home-elements-keywords',
		array(
			'title'         => __( 'Keywords Section', 'coder-blogger' ),
			'priority'      => 3,
			'panel'         => 'coder-blogger-home-elements'
		)
	);

	// Toggle Keyword Banner

	$wp_customize->add_setting( "coder_blogger_home_toggle_keywords", [
		"default" => "yes"
	] );

	$add_form_toggle_keywords = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_toggle_keywords",
		[
			"label" => __( "Display Keyword Banner", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-keywords",
			"settings" => "coder_blogger_home_toggle_keywords",
			"type" => "checkbox",
			"choices" => [
				"yes" => "yes"
			]
		]
	);

	$wp_customize->add_control( $add_form_toggle_keywords );

	// Introduction

	$wp_customize->add_setting( "coder_blogger_home_introduction", [
		"default" => "Keywords:"
	] );

	$add_introduction_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_introduction",
		[
			"label" => __( "Introduction", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-keywords",
			"settings" => "coder_blogger_home_introduction",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_introduction_object );

	// Keyword 1

	$wp_customize->add_setting( "coder_blogger_home_keyword_1", [
		"default" => ""
	] );

	$add_keyword_1_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_keyword_1",
		[
			"label" => __( "Keyword 1", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-keywords",
			"settings" => "coder_blogger_home_keyword_1",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_keyword_1_object );

	// Keyword 2

	$wp_customize->add_setting( "coder_blogger_home_keyword_2", [
		"default" => ""
	] );

	$add_keyword_2_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_keyword_2",
		[
			"label" => __( "Keyword 2", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-keywords",
			"settings" => "coder_blogger_home_keyword_2",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_keyword_2_object );

	// Keyword 3

	$wp_customize->add_setting( "coder_blogger_home_keyword_3", [
		"default" => ""
	] );

	$add_keyword_3_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_keyword_3",
		[
			"label" => __( "Keyword 3", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-keywords",
			"settings" => "coder_blogger_home_keyword_3",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_keyword_3_object );

	// Keyword 4

	$wp_customize->add_setting( "coder_blogger_home_keyword_4", [
		"default" => ""
	] );

	$add_keyword_4_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_keyword_4",
		[
			"label" => __( "Keyword 4", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-keywords",
			"settings" => "coder_blogger_home_keyword_4",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_keyword_4_object );

	// Keyword 5

	$wp_customize->add_setting( "coder_blogger_home_keyword_5", [
		"default" => ""
	] );

	$add_keyword_5_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_keyword_5",
		[
			"label" => __( "Keyword 5", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-keywords",
			"settings" => "coder_blogger_home_keyword_5",
			"type" => "text"
		]
	);

	$wp_customize->add_control( $add_keyword_5_object );

	// Customization of Form Section Elements

	$wp_customize->add_section( 'coder-blogger-home-elements-form',
		array(
			'title'         => __( 'Form Section', 'coder-blogger' ),
			'priority'      => 25,
			'panel'         => 'coder-blogger-home-elements'
		)
	);

	// Toggle Form
	$wp_customize->add_setting( "coder_blogger_home_toggle_form", [
		"default" => "yes"
	] );

	$add_form_toggle_object = new WP_Customize_Control(
		$wp_customize,
		"coder_blogger_home_toggle_form",
		[
			"label" => __( "Display Contact Form", "coder-blogger" ),
			"section" => "coder-blogger-home-elements-form",
			"settings" => "coder_blogger_home_toggle_form",
			"type" => "checkbox",
			"choices" => [
				"yes" => "yes"
			]
		]
	);

	$wp_customize->add_control( $add_form_toggle_object );

}