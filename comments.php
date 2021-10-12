<?php 
/**
 * Template Name: Comment
 */
?>
<?php
	//response generation function
	$response = "";
	//function to generate response
	function my_contact_form_generate_response($type, $message){
    global $response;
    if($type == "success") $response = "<div class='success'>{$message}</div>";
		else $response = "<div class='error'>{$message}</div>";
	}
	//response messages
	
	$missing_content   = '<div class="alert alert-danger" role="alert">Semua form wajib diisi</div>';
	$email_invalid   = '<div class="alert alert-danger" role="alert">Harap masukan email yang valid!</div>';
	$message_unsent  = "Pesan Anda GAGAL dikirim, silakan ulangi lagi!";
	$message_sent    = '<div class="alert alert-success" role="alert">Terima kasih, pesan Anda berhasil dikirim. Kami akan merespon pesan Anda sesegera mungkin. <em>Happy Blogging !</em></div>';

	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$message = $_POST['message_text'];

	//php mailer variables
	$to = get_option('admin_email');
	$subject = "Someone sent a message from ".get_bloginfo('name');
	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

		if(!$email == 0){
			//validate email
				if(!filter_var($email, FILTER_VALIDATE_EMAIL))
					my_contact_form_generate_response("error", $email_invalid);
				else //email is valid
					{
						//validate presence of name and message
						if(empty($name) || empty($message)){
							my_contact_form_generate_response("error", $missing_content);
						}
						else //ready to go!
						{
							$sent = wp_mail($to, $subject, strip_tags($message), $headers);
							if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
							else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
						}
					}
				
		}
		else if($_POST['submitted'])my_contact_form_generate_response("error", $missing_content);
?>

<?php get_header() ?>

<!-- KODE FORM KONTAK -->									  
<div class="p-4 contact-form w-100 h-100 bg-yellowalt">
				<div id="respond">
					<?php echo $response; ?>
					<form class="p-4 m-4 bg-white form-horizontal rounded-alt" action="<?php the_permalink(); ?>" method="post">
                        <div class="py-4 my-4 text-center">
                            <h1>Send<span class="text-yellow"> Comment</span></h1>
                        </div>
                        <div class="p-4 m-4">
                            <div class="px-4 py-3 form-group row">
                                <label for="name" class="col-md-3 col-sm-12 control-label">Nama</label>
                                <div class="col-md-9 col-sm-12">
                                    <input type="text" placeholder="Input your name" class="border-0 form-control form-text border-bottom w-100" aria-describedby="nameHelp" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"/>
                                </div>
                            </div>
                        
                            <div class="px-4 py-3 form-group row">
                                <label for="message_email" class="col-md-3 col-sm-12 control-label">Email</label>
                                <div class="col-md-9 col-sm-12">
                                    <input type="email" placeholder="Input your email" class="border-0 form-control form-text border-bottom w-100" aria-describedby="emailHelp" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"/>
                                </div>
                            </div>			

                            <div class="px-4 py-3 form-group row">
                                <label for="message_text" class=" col-md-3 col-sm-12 control-label">Comment</label>
                                <div class="col-md-9 col-sm-12">
                                    <textarea type="comment" name="message_text" placeholder="Input your comment" class="border-0 form-control form-text border-bottom w-100" rows="5"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
									</div>
										<input type="hidden" name="submitted" value="1"/>
									</div>
									<div class="form-group">
										<div class="m-4 col-sm-7">
											<button type="submit" class="px-4 btn bg-darkalt text-yellow rounded-alt">SEND</button>
										</div>
									</div>
                            </div>	
                        </div>					
					</form>
				</div>
</div> 
<!-- AKHIR KODE FORM KONTAK -->

<?php get_footer(); ?>