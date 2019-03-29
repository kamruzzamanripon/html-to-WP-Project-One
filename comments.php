<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dizital
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
                    <!--section title-->
                    <div class="comments-area">
                        <div class="comment-box">
                            <div class="comment">
                                <ul>
                                    <?php
                                    wp_list_comments();
                                    ?>
                                </ul>
                             </div>
                        </div>
                    </div>

                    <div class="form-box">
                        <div class="group-title">
                            <h2><?php _e('Leave A Reply','dizital') ?></h2>
                        </div>
                    <!--section title-->

					<?php
					$dizital_comment_fields = array();
					$dizital_name_field_placeholder = __('Name','dizital');
					$dizital_email_field_placeholder = __('Email','dizital');
					$dizital_url_field_placeholder = __('Website','dizital');
					$dizital_comment_field_placeholder = __('Comment....','dizital');
					$dizital_send_field_placeholder = __('Send','dizital');


					$dizital_comment_field = <<<EOD
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
        <textarea id="comment" name="comment"  placeholder="{$dizital_comment_field_placeholder}"></textarea>
    </div>
EOD;

					$dizital_comment_fields['author']=<<<EOD
    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
        <input type="text" id="author" name="author" placeholder="{$dizital_name_field_placeholder}" required>
    </div>  
EOD;
					$dizital_comment_fields['email'] = <<<EOD
	<div class="col-lg-4 col-md-6 col-sm-12 form-group">
        <input type="email" id="email" name="email" placeholder="{$dizital_email_field_placeholder}" required>
    </div>
EOD;
					$dizital_comment_fields['url'] = <<<EOD
    <div class="col-lg-4 col-md-12 col-sm-12 form-group">
        <input type="text" id="url" name="url" placeholder="$dizital_url_field_placeholder" required>
    </div>
EOD;

					$dizital_comment_submit_button = <<<EOD
    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Submit</button>
    </div>
</div>
EOD;

					$dizital_comment_form_arguments = array(
						'comment_field'=>$dizital_comment_field,
						'fields'=>$dizital_comment_fields,
						'submit_button'=>$dizital_comment_submit_button,
						/*'class_form'=>'comments-form text-left',*/
						/*'comment_notes_before'=>'<p></p>',*/
						/*'comment_notes_after'=>'<p>'.__('Your email address will not be published. Required fields are dizitaled','dizital').' *</p>',*/
						'title_reply'=>''
					);

					comment_form($dizital_comment_form_arguments);
					?>

                    </div>
</div><!-- #comments -->

