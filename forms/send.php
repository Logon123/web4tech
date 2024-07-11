<?php
$name =$_POST['name'];
    $email =$_POST['email'];
    $message =$_POST['message'];
    $subject =$_POST['subject'];
   
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer/Exception.php';
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.hostinger.com';                   
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'info@4techstarsolutions.com';          
    $mail->Password   = '4Techstar@2024!';                      
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    $mail->addAddress('info@4techstarsolutions.com', '4Techstar');     
    
    $mail->isHTML(true);                                  
    $mail->Subject = "$subject";
    $mail->Body    = "<br><strong>Sender - </strong>$name <br> <br><strong>Sender Email - </strong> $email <br><br> <strong> Message - </strong> $message";
   

    $mail->send();
    //echo 'Message has been sent';
    sleep(1);
    echo ("<script>location.href='https://4techstarsolutions.com/'</script>");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>