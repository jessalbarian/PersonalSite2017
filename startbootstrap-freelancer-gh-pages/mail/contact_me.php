<?php
if(isset($_POST['submit'])) {
    $email_to = "albarian.jess@gmail.com";
    $email_subject = "Email from JessieAlbarian.com";

    $email = $_POST['email'];
    $yourname =$_POST['name'];
    $message = $_POST['message'];

        $email_message = $yourname . '<br/>';
        $email_message .= $message;

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: JessieAlbarian.com' . "\r\n".
                'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
} else {
    echo "Error occurred";
}
?>