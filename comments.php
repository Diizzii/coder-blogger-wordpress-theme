<?php
if ( post_password_required() ){
	return;
}
?>
<!-- Comments -->

<div id="comments">
	<h5 id="comments-title"><span><?php comments_number(); ?></span></h5>

	<!-- Comments List -->
	<?php
	if( have_comments() ){
		?>
		<ul class="comments-list">
			<?php
			foreach( $comments as $comment){
				?>
				<li class="comment-item">
                    <div class="comment-avatar">
                        <span class="comment-avatar-span">
                            <?php echo get_avatar( $comment, 60, "", "", [ "class" => "comment-avatar-img"] ) ?>
                        </span>
                    </div>

                    <div class="comment-content">
                        <div class="comment-meta">
                            <?php comment_author(); ?>
                            <span> | <?php comment_date(); ?></span>
                        </div>
                        <?php comment_text(); ?>
                    </div>
				</li>
				<?php
			}
			the_comments_pagination();
			?>

		</ul>
        <!-- Comments List End-->
		<?php
	}
	?>
	<!-- Comments Form -->
	<div id="respond" class="comments-form mt-4">
		<?php
		comment_form([
			'comment_field' => '
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea
                            name="comment"
                            cols="58"
                            rows="5"
                            class="form-control"
                        ></textarea>
                    </div>',
			'fields' => [
				'author' =>
					'<div class="form-group mb3">
                                <label>' . __( 'Name', 'coder-blogger' ) . '</label>
                                <input type="text" name="author" class="form-control"/>
                            </div>',
				'email' =>
					'<div class="form-group mb3">
                                <label>' . __( "Email", "coder-blogger" ) . '</label>
                                <input
                                    type="text"
                                    name="email"
                                    class="form-control"
                                />
                            </div>',
				'url' => '<div class="form-group mb3">
                                <label>' . __( "Website", "coder-blogger" ) . '</label>
                                <input type="text" name="url" class="form-control mb-2" />
                            </div>'
			],
			"class_submit" => "btn btn-dark text-light mt-2",
			"label_submit" => __( "Submit Comment", "coder-blogger" ),
			"title_reply" => __( "Leave a <span>Comment</span>", "coder-blogger"),
			"title_reply_before" => "<h5 class='mb-3'>",
			"title_reply_after" => "</h5>",
            "comment_notes_before" => "",
            "comment_notes_after" => ""
		]);
		?>
	</div>
	<!-- #respond end -->
</div>
<!-- #comments end -->