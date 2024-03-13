<?php

$features = [
    'host' => 'smtp.office365.com',         //Hangi mail sağlayıcısı kullanılacak
    'username' => "info@qtech.com.tr",      //Hangi mail adresinden mail gidecek
    'password' => "Caw50864",                 //Mail adresinin şifresi
    'smtpSecure' => 'tls',                  //Güvenlik protokolü tls,smtp,ssl vs.
    'port' => 587,                          //Port güvenlik protokolüne göre belirlenir
    'addAddress' => [
        'c.gursel@qtech.com.tr'
    ],
    'mailSubject' => 'qbdigitals Test Maili',      //Giden mailin konusu
    'mailContent' => '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">

<head>
    <link rel="stylesheet" type="text/css" hs-webfonts="true" href="https://fonts.googleapis.com/css?family=Lato|Lato:i,b,bi">
    <meta property="og:title" content="Email">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
</head>
<body bgcolor="#F5F8FA" style="width: 100%; margin: auto 0; padding:0; font-family:Lato, sans-serif; font-size:18px; color:#33475B; word-break:break-word">

<div id="email">
    <! Banner -->
    <table role="presentation" width="100%" style="text-align: center">
        <tr>
            <p>Deneme Maili Başarılı</p>
        </tr>
     </table>
    <! Banner Row -->
</div>
</body>
</html>
'    //Giden mailin içeriği HTML formatında olmalıdır.
];

mail::send($features); //aktif edilecek

