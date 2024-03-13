<?php

if (post('signup')) {
    $message = User::signUp(post('username'), post('email'), post('password'), post('customerNo'), post('customerNoBien'));
    if ($message['suc']) {
        $userid = User::get_userid_by_mail(post('username'), post('email'))['id'];
        $url = "https://qbdigitals.com/login?id=" . $userid;
        $features = [
            'host' => 'smtp.office365.com',         //Hangi mail sağlayıcısı kullanılacak
            'username' => "info@qtech.com.tr",      //Hangi mail adresinden mail gidecek
            'password' => "Caw50864",                 //Mail adresinin şifresi
            'smtpSecure' => 'tls',                  //Güvenlik protokolü tls,smtp,ssl vs.
            'port' => 587,                          //Port güvenlik protokolüne göre belirlenir
            'addAddress' => [
                post('email')
            ],
            'mailSubject' => 'QBDigitals Mail Doğrulama',      //Giden mailin konusu
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
 <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #f4f4f4;">
        <tr>
            <td align="center" valign="top">
                <table cellpadding="0" cellspacing="0" border="0" width="600" style="background-color: #ffffff;">
                    <tr>
                        <td colspan="2" height="20"></td>
                    </tr>
                    <tr>
                        <td width="20"></td>
                        <td>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td align="center">
                                        <img src="' . public_url('/images/qbdigitals.png') . '" alt="Logo" style="display: block; border: 0; width: 50px;height: 50px">
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30"></td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <h1 style="font-family: Arial, sans-serif; font-size: 28px; font-weight: bold; color: #333333; margin: 0;">Mail Doğrulama</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20"></td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <p style="font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5; color: #666666; margin: 0;">
                                             Merhaba,

                                                Mail adresinizi doğrulamak için için aşağıdaki linke tıklayabilirsiniz:
                                               <a href="' . $url . '">[Mail DoğrulamaLinki]</a>
                                                
                                                Link yukarıdaki gibi çalışmıyorsa, tarayıcınızın adres çubuğuna şu adresi kopyalayabilirsiniz: <br> ' . $url . '<br>
                                                
                                                Bu işlemi yaparken herhangi bir sorun yaşarsanız, lütfen bizimle iletişime geçin.
                                                
                                                Saygılarımızla,
                                                
                                               QBDigitals
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="40"></td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <p style="font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5; color: #666666; margin: 0;">
                                            İyi günler dileriz.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30"></td>
                                </tr>
                            </table>
                        </td>
                        <td width="20"></td>
                    </tr>
                    <tr>
                        <td colspan="2" height="20"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <! Banner Row -->

</div>
</body>
</html>'    //Giden mailin içeriği HTML formatında olmalıdır.
        ];
        mail::send($features);


    }
}

require view('signup');