<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email']))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
// Create the email and send the message
$to = 'albarian.jess@gmail.com';
$email_subject = "Website Contact Form:  $name";
$email_body = $_POST["You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message"];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: JessieAlbarian.com' . "\r\n".
                'Reply-To: ' . $email_address . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

mail($to,$email_subject,$email_body,$headers);
return true;			
?>