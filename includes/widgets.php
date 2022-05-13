<?php
function coder_blogger_widgets(){
	register_sidebar([
		"name" => __( "Coder Blogger Right Sidebar", "coder-blogger" ),
		"id" => "coder-blogger-right-sidebar",
		"description" => __( "Right Sidebar for the Coder Blogger Theme", "coder-blogger" ),
		"before_widget" => "<div class='widget'>",
		"after_widget" => "</div>",
		"before_title" => "<h5>",
		"after_title" => "</h5>"
	]);
}