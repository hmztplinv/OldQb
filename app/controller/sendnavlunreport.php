<?php

if(get('id'))
{
    $navlun=Navlun::get_navlun_by_navlun_id(get('id'));
    if($navlun['navlunStatus']==4){
        $status="Booking No Girildi";
    }
    else if($navlun['navlunStatus']==5){
        $status="Henüz Yola Çıkmadı";
    }
    else if($navlun['navlunStatus']==6){
        $status="Yola Çıktı";
    }
    else if($navlun['navlunStatus']==7){
        $status="Limana Ulaştı";
    }
   else if($navlun['navlunStatus']==8){
    $status="Fatura Kesildi";
    }


    $pdf = new TCPDF('P', 'mm', 'A4');

    $pdf->AddPage('P', 'A4');

    $image_file = 'public/images/albat.png';
    $pdf->Image($image_file, 20, 18, 55, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    $pdf->SetFont('dejavusans', '', 9);
    $pdf->Cell(180, 13, "Döküman No:16", 0, 3, 'R');


    $pdf->SetFont('dejavusans', 'B', 16);
    $pdf->Cell(130, 33, "NAVLUN TEKLİFİ", 0, 3, 'L');

    $pdf->ln();
    $pdf->SetFont('dejavusans', '', 6);
//'.$customers['sellerName'].'
    $tbl = ' 
<table border="1" cellpadding="2" cellspacing="2" nobr="true" align="left">
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Bölge Müdürü</td>
     <td colspan="1" align="center">'.$navlun['sellerName'].'</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Çıkış Yapılan Firma</td>
     <td colspan="1" align="center">'.$navlun['realFirm'].'</td>4
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Müşteri İsmi</td>
     <td colspan="1" align="center">'.$navlun['companyName'].'</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Tarih</td>
     <td colspan="1" align="center">'.$navlun['createdDate'].'</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Booking No</td>
     <td colspan="1" align="center">'.$navlun['bookingNo'].'</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Konteyner Adet</td>
     <td colspan="1" align="center"> '.$navlun['containerQuantity'].'</td>
  </tr>
 <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Gönderim Şekli</td>
     <td colspan="1" align="center"> '.$navlun['shippingType'].'</td>
  </tr>

  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Anlaşılan Tutar</td>
     <td colspan="1" align="center">'.$navlun['navlunSoldPrice'].'</td>
  </tr>
  
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Para Birimi </td>
     <td colspan="1" align="center">'.$navlun['currency'].'</td>
  </tr>
    <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Navlun Statüsü</td>
     <td colspan="1" align="center">'.$status.'</td>
  </tr>


</table>
';
    $pdf->writeHTML($tbl, true, false, false, false, 'L');
    $attachment = $pdf->Output( 'file.pdf','S');





    $features = [
        'host' => 'smtp.office365.com',         //Hangi mail sağlayıcısı kullanılacak
        'username' => "info@qtech.com.tr",      //Hangi mail adresinden mail gidecek
        'password' => "Caw50864",                 //Mail adresinin şifresi
        'smtpSecure' => 'tls',                  //Güvenlik protokolü tls,smtp,ssl vs.
        'port' => 587,                          //Port güvenlik protokolüne göre belirlenir
        'addAddress' => [
            'g.sekercisoy@qtech.com.tr','l.gurses@qtech.com.tr','b.kactim@qtech.com.tr'
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
                                        <img src="data:image/png;base64,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" alt="Logo" style="display: block; border: 0;">
                                    </td>
                                </tr>
                                <tr>
                                    <td height="30"></td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <h1 style="font-family: Arial, sans-serif; font-size: 28px; font-weight: bold; color: #333333; margin: 0;">Örnek E-posta Başlığı</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20"></td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <p style="font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5; color: #666666; margin: 0;">
                                            Merhaba, <br>
                                            <br>
                                            Bu örnek bir e-postadır.
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
</html>',    //Giden mailin içeriği HTML formatında olmalıdır.
        'file' => $attachment
    ];
mail::send($features);
header('location:'.operation_url('send_navlun'));
}
else{
    header('location:'.operation_url('index'));
}
