<?php
    ob_start();
    $to = "ryancwilson@live.co.uk";
    $subject = "Support requested by ".$_POST['name'];
    $name_field = $_POST['name'];
	$phone_field = $_POST['phone'];
    $email_field = $_POST['email'];
    $message = $_POST['message'];
    
    $headers = 'From: '.$_POST['email'].'' . "\r\n" .
       'Reply-To: '.$_POST['email'].'' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();
    
    $body = 'Name: ' . $name_field . "\r\n" . 'Message: ' . $message . "\r\n" . 'Phone Number: ' . $phone_field;
    
    @mail($to, $subject, $body, $headers );
    header( 'Location:thankyou.php' ) ; //replace with landing page.
    exit();
?>
