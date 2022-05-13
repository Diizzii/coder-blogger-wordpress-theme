<!-- Contact Form -->

<!-- HTML, Js and PHP to create the form and handle form input -
WordPress functionality to process the form under /includes/form-setup.php
-->

<section class="section section-alternate pt-lg-5" id="contact-form">
	<div class="container">
		<div class="row">
			<div class="col-lg order-lg-2 mb-sm-5 section-grid move-image-left">
				<img src="<?php echo get_theme_mod( "coder_blogger_home_form_image" ) ?>" alt="content-pic" class="img-fluid section-image blur-image">
			</div>
			<div class="col-lg order-lg-1 increase-z-index small-screen-margin-top">
				<h2><?php echo get_theme_mod( "coder_blogger_home_form_heading" ) ?></h2>
				<h5 class="mb-3" id="subheading"><?php echo get_theme_mod( "coder_blogger_home_form_subheading" ) ?></h5>
                <h5 id="success-message" style="display:none;"></h5>
				<form action="" class="section-form form-alternate" id="enquiry">
					<div class="form-group mb-3">
						<label for="contactname">Name</label>
						<input type="text" name="contactname" class="form-control" id="" placeholder="Your Name">
					</div>
					<div class="form-group mb-3">
						<label for="email">Email address</label>
						<input type="email" name="email" class="form-control" id="" placeholder="Enter email">
						<small id="" class="form-text text-muted">Your email address will not be shared with anyone.</small>
					</div>
					<div class="form-group mb-3">
						<label for="message">Your Message</label>
						<textarea name="message" class="form-control" id="" rows="5"></textarea>
					</div>
					<button type="submit" class="btn btn-dark">Send Message</button>
				</form>

                <script>
                    jQuery('#enquiry').submit( function(event) {
                        event.preventDefault();
                        let endpoint = '<?php echo admin_url("admin-ajax.php"); ?>'
                        let form = jQuery('#enquiry').serialize();
                        let formdata = new FormData;
                        formdata.append('action', 'enquiry');
                        formdata.append('enquiry', form);
                        jQuery.ajax(endpoint, {
                            type: 'POST',
                            data: formdata,
                            processData: false,
                            contentType: false,
                            success: function(res){
                                jQuery('#enquiry').fadeOut(20);
                                jQuery('#subheading').fadeOut(20);
                                jQuery('#success-message').text("<?php echo get_theme_mod( "coder_blogger_home_form_success" ) ?>").show();
                                jQuery('#enquiry').trigger('reset');
                                jQuery('#enquiry').fadeIn(20);
                            },
                            error: function(err){
                                jQuery('#enquiry').fadeOut(20);
                                jQuery('#success-message').text("<?php echo get_theme_mod( "coder_blogger_home_form_failure" ) ?>").show();
                                jQuery('#enquiry').fadeIn(20);
                            }
                        })
                    })
                </script>
			</div>
		</div>
	</div>
</section>