<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'class.phpmailer.php';
/**
 * Description of avisador
 *
 * @author saul
 */
class avisador {
    function avisar($asunto, $notif)
    {
    //MANDAR UN EMAIL A LOS INTERESADOS
    $mail = new mosPHPMailer(); // defaults to using php "mail()"
    $mail->IsSMTP(); // telling the class to use SMTP
    
    $mail->FromName = "Pedro II";
    $mail->From = "user@gmail.com"; 
    $mail->Username = "user@gmail.com";
    $mail->Password = "xxxxx";
    
    $mail->Port = 465;
    $mail->IsHTML(true);
    $mail->SMTPAuth=true;
    $mail->SMTPSecure = "ssl";
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
    $mail->CharSet= "ISO-8859-1";
    //$mail->MsgHTML($body);

    $mail->ClearAllRecipients();
    $mail->Subject    =$asunto;

    $body = $notif;

    $mail->Body=$body;
    $mail->Mailer='smtp';
    # destinatarios
    $mail->AddAddress('dest1@gmail.com');
    $mail->AddAddress('dest2@gmail.com');

    $ret5=$mail->Send();
    if (!$ret5)
        {$errorMail = "Error al enviar email<br>".
            $mail->ErrorInfo.'<br />'.
            $mail->Host.'<br />'.
            $mail->From.'<br />'.
            $mail->Username.'<br />'.
            $mail->Password.'<br />';
        echo $errorMail;
        return false;
        }
    return true;
    }
}
?>