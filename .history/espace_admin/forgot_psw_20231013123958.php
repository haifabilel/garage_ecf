<?php
require_once 'connexion.php';

// if(isset($_POST['email'])){
//     $password = uniqid();
//     $hashPassword = password_hash($password,PASSWORD_DEFAULT);


//     // $to ='vinccentparrot@gmail.com';
//     // $subject ='testing sendmail.exe';
//     $message ="Bonjour, voici votre nouveau mot de passe : $password";
//     $headers ='Content-Type : text/plain; charset="utf-8"'."\r\n";
//     if(mail('vinccentparrot@localhost.com', 'Mot de passe oublié',$message,'vinccentparrot@gmail.com')){
//         $sql = "UPDATE admin SET password = ? WHERE email = ?";
//         $stmt = $conn->prepare($sql);
//         $stmt->execute([$hashPassword,$_POST['email']]);
//         echo "Mail envoyé";
//     }else{
//         echo "erreur";
//     }
// }
<? php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'user@example.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<!DOCTYPE html>
<html lang="fr">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>garage</title>
        <meta name="description" content="Notre garage est parfaitement équipé, le Garage V.Parrot entretient vos véhicules et propose également des occasions toutes marques garanties. Il assure également le diagnostic et la réparation
         toutes marques de vos véhicules.">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- CSS Link -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
<div class="form-container">
    <form action="" method="POST">
        <h3>Recupération de mot de passe</h3>
        <input type="email" name="email" required placeholder="entrer votre adresse mail">
        <button type="submit" class="btn" name="recup_mdp" >Valider</button>
        
    </form>
</div>

<!-- if(mail($_POST['email'], 'Mot de passe oublié',$message, $headers)){ -->