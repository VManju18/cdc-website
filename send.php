<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send']))
{
    $mail=new PHPMailer(true);

    $mail->isSMTP();                                    
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;                              
    $mail->Username = 'manjuv180220@gmail.com';                
    $mail->Password = 'momg kqfc hcfo vjuc';                           
    $mail->SMTPSecure = 'tls';                           
    $mail->Port = 587;                                    

    $mail->setFrom('manjuv180220@gmail.com', 'Manju V');
    $mail->addAddress($_POST['email']);     

    $mail->addReplyTo('manjuv180220@gmail.com');
    $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);    
    
    $mail->isHTML(true);                                  
    $message = '
    <div>
        <p>Dear Sir/Madam,</p>                
        <br>
        <p>Thank you for applying Your Summar Vacation<br> </p>
        <p>Kindly click the below button to proceed further.
        <a href="https://vit.ac.in"> Apply Here</a></p>
        <br />
        <p>
            Thanks & Regards
            <br />
            ABC Company.
            Vellore.
            <br /><br />
        </p>
    </div>
';
$mail->isHTML(true);
$mail->Subject = 'Confirmation for Summar Vacation';
$mail->Body    =  $message;

    if(!$mail->send())

    $mail->send();

    echo "<script> 
    alert ('Sended');
    document.location.href='index.php';
    </script>";

    
}