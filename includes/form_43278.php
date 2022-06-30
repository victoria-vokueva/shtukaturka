<?php	
	if (empty($_POST['name_43278']) && strlen($_POST['name_43278']) == 0 || empty($_POST['email_43278']) && strlen($_POST['email_43278']) == 0 || empty($_POST['message_43278']) && strlen($_POST['message_43278']) == 0)
	{
		return false;
	}
	
	$name_43278 = $_POST['name_43278'];
	$email_43278 = $_POST['email_43278'];
	$message_43278 = $_POST['message_43278'];
	$optin_43278 = $_POST['optin_43278'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_43278: $name_43278 \nEmail_43278: $email_43278 \nMessage_43278: $message_43278 \nOptin_43278: $optin_43278 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_43278";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>