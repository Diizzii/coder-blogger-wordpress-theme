<?php

// Setup
const theme_in_development = true;

// Includes
include( get_theme_file_path( "/includes/enqueue.php") );
include( get_theme_file_path( "/includes/theme-setup.php") );
include( get_theme_file_path( "/includes/customizer-misc.php") );
include( get_theme_file_path( "/includes/customizer-home-elements.php") );
include( get_theme_file_path( "/includes/customizer-form.php" ) );
include( get_theme_file_path( "/includes/customizer-single.php") );
include( get_theme_file_path( "/includes/customizer-footer.php") );
include( get_theme_file_path( "/includes/widgets.php" ) );
include( get_theme_file_path( "/includes/form-setup.php") );

// Action Hooks
add_action( "wp_enqueue_scripts", "coder_blogger_enqueue_styles_and_js" );
add_action( "after_setup_theme", "coder_blogger_theme_setup" );
add_action( "customize_register", "coder_blogger_customizer_misc" );
add_action( "customize_register", "coder_blogger_customizer_form" );
add_action( "customize_register", "coder_blogger_customizer_single" );
add_action( "customize_register", "coder_blogger_customizer_footer" );
add_action( "customize_register", "coder_blogger_customizer_home_elements" );
add_action( "widgets_init", "coder_blogger_widgets" );
add_action( "wp_ajax_enquiry", "enquiry" );
add_action( "wp_ajax_nopriv_enquiry", "enquiry" );

// Filter Hooks
add_filter('walker_nav_menu_start_el', 'tps_primary_menu_anchor_class', 10, 4);
add_filter('wp_nav_menu_objects', 'tps_primary_menu_li_class', 10, 2);