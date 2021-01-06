<?php
If(isset($_POST['submit'])) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$visitor_phone = $_POST['phone'];
		$message = $_POST['message'];

		$email_from = 'bmbequette@gmail.com';
		$email_subject = "New Form Submission";
		$email_body = "Name: $name\nEmail: $visitor_email\nPhone: $visitor_phone\nMessage: $message\n";

		$to = "bmbequette@gmail.com";
		$headers = "From: $email_from \r\n";
		$headers = "Reply-To: $visitor_email \r\n";
		mail($to,$email_subject,$email_body,$headers);
		//header("Location: contact.html");

        if($name && $visitor_email && $visitor_phone && $message) {

            header('location: thanks.html');

           //or below types

           echo '<meta http-equiv="refresh" content="0;url=http://www.google.com/" />';

        }

    }

}
	
?>

