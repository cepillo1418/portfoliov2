<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;


    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
    $mail->SMTPAuth = true;
//to view proper logging details for success and error messages
// $mail->SMTPDebug = 1;
    $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
    $mail->Username = 'azgame58@gmail.com';   //email
    $mail->Password = 'snkpwfclqvmluvmk';   //16 character obtained from app password created
    $mail->Port = 465;                    //SMTP port
    $mail->SMTPSecure = "ssl";
    $mail->charSet = "UTF-8";

    

    $name = trim(stripslashes($_POST['name']));
    $email = trim(stripslashes($_POST['email']));
    $subject = trim(stripslashes($_POST['subject']));
    $contact_message = trim(stripslashes($_POST['message']));

    // Check Name
    if (strlen($name) < 2) {
        $error['name'] = "Veuillez saisir votre nom.";
    }
    // Check Email
    if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
        $error['email'] = "Veuillez saisir une adresse e-mail valide.";
    }
    // Check Message
    if (strlen($contact_message) < 15) {
        $error['message'] = "Veuillez saisir votre message. Il doit comporter au moins 15 caractères.";
    }
    // Subject
    if ($subject == '') {
        $subject = "Contact Form Submission";
    }



    $mail->setFrom($email, $name);
//receiver email address and name
    $mail->addAddress('maxime.heintze@laposte.net', 'maxime');

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "<pre>".$contact_message."</pre>";

// Send mail

if (!isset($error)) {
    if (!$mail->send()) {
        echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
    } else {
        echo 'OK';
    }
} # end if - no validation error

else {

    $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
    $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
    $response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;

    echo $response;

} # end if - there was a validation error
   
    $mail->smtpClose();