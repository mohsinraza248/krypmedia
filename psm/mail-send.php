<?php  
	$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Ldr7SgcAAAAANJCsXXARzxxQXZoC3PR9m3nF_yL';
    $recaptcha_response = $_POST['recaptcha_response'];
    
    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    
    if ($recaptcha->score >= 0.5) {
		
		error_reporting(1);
		$thankyouurl = 'https://www.experientialetc.com/thank-you.html' ;
		
		$IP =$_SERVER['REMOTE_ADDR'];
		$Name = $_POST['name'] ;
		$Email = $_POST['email'] ;
		$Phone = $_POST['phone'] ;
		$Message = $_POST['message'] ;
		$http_referrer = getenv( "HTTP_REFERER");
		
		require('phpmailer/PHPMailerAutoload.php');
		
		try{
		    $mail = new PHPMailer();
		    $mail->IsSMTP();
		    $mail->Host = "smtp.gmail.com";
		    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
		    $mail->SMTPAuth   = true;                  // enable SMTP authentication
		    $mail->Port       = 587;                    // set the SMTP port for the GMAIL server
		    $mail->Username   = "sales@experientialetc.com"; // SMTP account username example
		    $mail->Password   = "Avi@1980"; 
		    $mail->IsHTML(false);	
		    $mail->From = 'sales@experientialetc.com';
		    $mail->FromName = 'Sales Team ExperientialEtc';
		    $mail->AddAddress('sales@experientialetc.com');
		    $mail->AddBCC("sonal_mahendru@yahoo.com");
		    $mail->Subject = "New Enquiry krypmedia.com";
		    
		    
		    $message = "This message was sent from:\n";
		    $message .= "$http_referrer\n";
		    $message .= "------------------------------------------------------------\n";
		    $message .= "Name: $Name\n";
		    $message .= "Email: $Email\n";
		    $message .= "Phone: $Phone\n";
		    $message .= "Message: $Message\n";
		    $message .= "IP: $IP\n";
		    $message .= "\n\n------------------------------------------------------------\n";
		    $message .= "Regards\n";
		    $message .= "ExperientialEtc\n";
		    
		    $mail->Body =$message; 	
		    $mail->Send();
		}catch(phpmailerException $e){
		    $file = fopen('logger.txt','a');
		    $txt = "failed to send email to admin, error is: ".$e->errorMessage()."\n";
		    fwrite($file,$txt);
		    fclose($file);
		}
		
		
		try{
		    $mail->IsHTML(true);
		    $mail->AddAddress($Email);				
		    $mail->Subject = "Thanks for your message, " . $Name . "";
		    $reply_message = "Dear " . $Name . "<br><br>";
		    $reply_message .= "Just to let you know we received your message and we will get back to you as soon as possible.</br>";
		    $reply_message .= "Regards,</br>";
		    $reply_message .= "ExperientialEtc";
		    $mail->Body = $reply_message;	
		    $mail->Send(); 
		}catch(phpmailerException $e){
		    $file = fopen('logger.txt','a');
		    $txt = "failed to send email to user, error is: ".$e->errorMessage()."\n";
		    fwrite($file,$txt);
		    fclose($file);
		}
	
		header('location:https://www.experientialetc.com/index.php');

	}else{
		header('location: https://www.experientialetc.com/');
	}
?>			



