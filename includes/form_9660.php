<?php	
	if (empty($_POST['name_9660']) && strlen($_POST['name_9660']) == 0 || empty($_POST['email_9660']) && strlen($_POST['email_9660']) == 0)
	{
		return false;
	}
	
	$name_9660 = $_POST['name_9660'];
	$email_9660 = $_POST['email_9660'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_9660: $name_9660 \nEmail_9660: $email_9660 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_9660";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>