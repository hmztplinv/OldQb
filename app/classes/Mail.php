<?php
require "PhpMailler/PHPMailer.php";
require "PhpMailler/SMTP.php";
require "PhpMailler/Exception.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class Mail
{
    public static function send($features)
    {
        $mail = new PHPMailer(true); //PHPMailer Sınıfı aktif ettik.
        try {

            $mail->setLanguage('tr');
            $mail->isSMTP();
            $mail->Host = 'smtp.office365.com';
            $mail->SMTPAuth = true;
            $mail->Username = $features['username'];
            $mail->Password = $features['password'];
            $mail->SMTPSecure = $features['smtpSecure'];
            $mail->Port = $features['port'];
            $mail->CharSet = 'UTF-8';
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $mail->setFrom($features['username'], $features['mailSubject']);

            foreach ($features['addAddress'] as $mailAddress) {
                $mail->addAddress($mailAddress);
            }



            $mail->isHTML(true);
            $mail->Subject = $features['mailSubject'];
            $mail->Body = $features['mailContent'];
            if (isset($features['file'])) {
                $mail->AddStringAttachment($features['file'], 'attachment.pdf', 'base64', 'application/pdf');
            }


            $sender = $mail->send();
//        echo $sender;

        } catch (Exception $e) {
            echo $e;
        }
    }
}
