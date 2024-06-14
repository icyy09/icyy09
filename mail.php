<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function send_mail($recipient, $subject, $message)
{
    $mail = new PHPMailer(true); // Enable exceptions

    try {
        $mail->IsSMTP();
        $mail->SMTPDebug  = 0;  
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "briggsxavy09@gmail.com"; // Replace with your email
        $mail->Password   = "ijzq auyb dfat fleu";        // Replace with your email password

        $mail->IsHTML(true);
        $mail->AddAddress($recipient, "esteemed customer");
        $mail->SetFrom("briggsxavy09@gmail.com", "Gaming Hub"); // Replace with your email
        // $mail->AddReplyTo("reply-to-email", "reply-to-name"); // Optional
        // $mail->AddCC("cc-recipient-email", "cc-recipient-name"); // Optional
        $mail->Subject = $subject;
        $mail->MsgHTML($message); 

        if (!$mail->Send()) {
            echo "Error while sending Email: " . $mail->ErrorInfo;
            return false;
        } else {
            echo "Email sent successfully";
            return true;
        }
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        return false;
    }
}
?>
