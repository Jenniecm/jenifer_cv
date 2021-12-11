<?php 
require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


$email = $_POST['mailing'];

$mail = new PHPMailer();
// $mail->CharSet= 'UTF-8';

try{

    $receiver= 'test@gmail.com';
    $name = 'Name';
    //server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                 //Enable verbose debug output
    $mail->isSMTP();                                       //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                              //Enable SMTP authentication
    $mail->Username   = 'kanajeny@gmail.com';                //SMTP username
    $mail->Password   = 'kanajenytchout';                          //SMTP password
    $mail->SMTPSecure = 'ssl';       //Enable implicit TLS encryption
    $mail->Port       = 465;                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->SMTPOptions=array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    ) ; 
    //Recipients 
    $mail->setFrom('kanajeny@gmail.com', 'Jennie Tchoutezo');
    $mail->addAddress($email);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    ob_start();
    require "index.php";
    $body = ob_get_contents();
    ob_end_clean();

    $mail->Body = $body;
    $mail->send();

    if($mail->send()){
         echo 'Message has been sent';
    }
    else{
        echo 'Some error occured';
    }
   
}

catch (Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }


?>