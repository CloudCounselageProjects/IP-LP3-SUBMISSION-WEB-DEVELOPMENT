<?php
  require_once 'mailer/class.phpmailer.php'; 
  // creates object
  $mail = new PHPMailer(true); 
  if(isset($_POST['btn_send']))
  {
   $email      = strip_tags($_POST['email']);
   $subject    = strip_tags($_POST['subject']);
   $text_message    = "Hello";      
   $message  = strip_tags($_POST['message']);
 try
   {
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 1;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port        = '465';             
    $mail->AddAddress($email);
    $mail->Username   ="Your Email Id";  
    $mail->Password   ="password";            
    $mail->SetFrom('Your Email Id','xyz');
    $mail->AddReplyTo("Your Email Id","xyz");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     
     if($mail->Send())
    {
     echo '<script type="text/javascript">';
		echo ' alert("Your Message has Been Successfully Sent")';  //not showing an alert box.
		echo '</script>';
    }
   }
   catch(phpmailerException $ex)
   {
    echo "error";
   }
  } 
  
?>