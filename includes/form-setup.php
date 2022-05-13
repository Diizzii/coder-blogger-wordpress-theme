<?php

/* Function to handle form input - find the form itself and the js handling
the form under /template-parts/contact-form.php */

function enquiry(){
	$formdata = [];
	wp_parse_str( $_POST[ "enquiry" ], $formdata );

	$admin_email = get_option("admin_email");


	$headers[] = "Content-Type: text/html; charset=UTF-8";
	$headers[] = "From:" . $admin_email;
	$headers[] = "Reply-to:" . $formdata["email"];
	$to = $admin_email;
	$site = parse_url( get_site_url(), PHP_URL_HOST );

	$subject = "Enquiry from: " . htmlentities($formdata["contactname"]) . " on " . $site;
	$message = "";

	if($formdata["url"] || str_contains($formdata["email"], "eric.jones")){
		return;
	}

	$message .= "Email: " . htmlentities($formdata["email"]) . "<br>";
	$message .= "Message: " . htmlentities($formdata["message"]) . "<br>";

	try {
		if( wp_mail($to, $subject, $message, $headers) ){
			wp_send_json_success("Email sent");
		}
		else{
			wp_send_json_error("Email error");
		}
	} catch (Exception $e) {
		wp_send_json_error($e->getMessage());
	}
}