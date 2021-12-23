<?php  
	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lfcf8gUAAAAAAj-Om3k0Yu8GMy9KKMNXh9UiQan';
    $recaptcha_response = $_POST['recaptcha_response'];
	
    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
	//echo $recaptcha->score; exit;
    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
		//session_start();
		//error_reporting(0);
		error_reporting(1);
		//ob_start();
		//if(isset($_POST['submit']))
		//{
		// $to      = 'admin@gmail.com';
		// $fromEmail = $_REQUEST['email'] ;
		// $subject = 'Online Enquiry krypmedia.com';
		// $subject1 = 'Auto reply from krypmedia.com';
		$thankyouurl = 'https://www.krypmedia.com/thank-you.html' ;
		
		$IP =$_SERVER['REMOTE_ADDR'];
		$Name = $_POST['name'] ;
		$Email = $_POST['email'] ;
		$Phone = $_POST['phone'] ;
		$City = $_POST['city'] ;
		$Message = $_POST['message'] ;
		$http_referrer = getenv( "HTTP_REFERER" );
		
		require('phpmailer/PHPMailerAutoload.php');
		
		
		//$mail->SMTPDebug = 3;
		//$file1 = 'demo.html';
		//$strHTML1 = file_get_contents($file1);
		
		$mail = new PHPMailer();
		
		$mail->IsSMTP();
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
		$mail->Username   = "distributor@krypmedia.com"; // SMTP account username example
		$mail->Password   = "Distributor!935"; 
		$mail->IsHTML(false);	
		$mail->From = 'distributor@krypmedia.com';
		//$mail->From = "test@aarexasia.com"; //$email;
		$mail->FromName = 'Kryp Media';
		//$mail->AddReplyTo($email, $name);
		$mail->AddAddress('distributor@krypmedia.com');
		$mail->AddBCC("eclients@savit.in");
		$mail->Subject = "Distributor Enquiry krypmedia.com";
		//$file = 'demo.html';
		
		
		$message = "This message was sent from:\n" .
		"$http_referrer\n" .
		"------------------------------------------------------------\n" .
		"Name: $Name\n" .
		"Email: $Email\n" .
		"Phone: $Phone\n" .
		"City: $City\n" .
		"Message: $Message\n" .
		"IP: $IP\n" .
		
		"\n\n------------------------------------------------------------\n" .
		"Regards\n" . 
		"Kryp Media\n";
		
		$mail->Body =$message; 	
		$mail->Send();
		// if ( $mail->Send() ) {
		// echo "Success"; 
		// } else {
		// echo "Failure";
		// }
		// exit();
		
		//Thank you script
		$mail2 = new PHPMailer(true);
		$mail2->IsSMTP();
		$mail2->Host = "smtp.gmail.com";
		$mail2->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
		$mail2->SMTPAuth   = true;                  // enable SMTP authentication
		$mail2->Port       = 587;                    // set the SMTP port for the GMAIL server
		$mail2->Username   = "distributor@krypmedia.com"; // SMTP account username example
		$mail2->Password   = "Distributor!935"; 
		$mail2->IsHTML(true);	
		//$mail->From = "test@aarexasia.com";
		$mail2->From = "distributor@krypmedia.com";
		$mail2->FromName = "Kryp Media";
		$mail2->AddAddress($Email);				
		$mail2->Subject = "Thanks for your message, " . $Name . "";
		//$file1 = 'mail.html';
		$reply_message = "Dear " . $Name . ",\n";
		$reply_message .= "\n";
		$reply_message .= "Just to let you know we received your message and we will get back to you as soon as possible."."</br>";
		$reply_message .= "\n";
		$reply_message .= "Regards,"."</br>";
		$reply_message .= "Kryp Media.";
		
		$mail2->Body=$reply_message;	
		$mail2->Send(); 
		
		header('location:https://www.krypmedia.com/distributor.php');
		// } else {
		// echo "No Access!";	
		// }
	}
	else{
		header('location: https://www.krypmedia.com/');
	}
?>			



