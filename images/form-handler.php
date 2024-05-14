<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from =   'aryanahuja0880@gmail.com';
$email_subject = 'New Form Submission'
$email_body ="user name:$name.\n".
            "user email:$visitor_email.\n".
            "subject:$subject.\n".
            "user Message:$message.\n".

$to ='payalahuja9706@gmail.com';
$header = "From: $email_from\r\n";
$header = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
$header.="Reply-to:$visitor_email\r\n";

?>