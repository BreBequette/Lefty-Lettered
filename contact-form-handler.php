<?php 



// define variables and set to empty values

$name_error = $email_error = $phone_error = "";

$name = $email = $phone = $message = $success = "";



//form is submitted with POST method

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {

    $name_error = "Name is required";

  } else {

    $name = test_input($_POST["name"]);

    // check if name only contains letters and whitespace

    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {

      $name_error = "Only letters and white space allowed"; 

    }

  }



  if (empty($_POST["email"])) {

    $email_error = "Email is required";

  } else {

    $email = test_input($_POST["email"]);

    // check if e-mail address is well-formed

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

      $email_error = "Invalid email format"; 

    }

  }

  

  if (empty($_POST["phone"])) {

    $phone_error = "Phone is required";

  } else {

    $phone = test_input($_POST["phone"]);

    // check if e-mail address is well-formed

    if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {

      $phone_error = "Invalid phone number"; 

    }

  }


  if (empty($_POST["message"])) {

    $message = "";

  } else {

    $message = test_input($_POST["message"]);

  }

  
	//send the email
  if ($name_error == '' and $email_error == '' and $phone_error == '' ){

      $message_body = '';

      unset($_POST['submit']);

      $to = 'bmbequette@gmail.com';

      $subject = 'Lefty Lettered Contact Form Submit';
	  
	  $message_body .= "From: ".$name."\r\n";
	  $message_body .= "Email: ".$email."\r\n";
	  $message_body .= "Phone: ".$phone."\r\n";
	  $message_body .= "Message: ".$message."\r\n";

      if (mail($to, $subject, $message_body)){

		  ?>
			<script type="text/javascript">
				window.location = "https://www.leftylettered.com/thanks.html";
			</script>      
    	<?php

          $name = $email = $phone = $message = '';

      }

  }

  

}//end POST



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}