<?php
    ob_start();

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $to = "ryancwilson@live.co.uk";
    $subject = "Support requested by ".test_input($_POST['name']);
    $name_field = test_input($_POST['name']);
	  $phone_field = test_input($_POST['phone']);
    $email_field = test_input($_POST['email']);
    $message = test_input($_POST['message']);

    $headers = 'From: '.test_input($_POST['email']).'' . "\r\n" .
       'Reply-To: '.test_input($_POST['email']).'' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();

    $body = 'Name: ' . $name_field . "\r\n" . 'Phone Number: ' . $phone_field . "\r\n" . 'Message: ' . $message;

    @mail($to, $subject, $body, $headers );
    header( 'Location:thankyou.php' ) ; //replace with landing page.
    exit();
?>
