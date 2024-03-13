<?php


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

$tbl = '
<table border="1" cellpadding="2" cellspacing="2" nobr="true" align="left">
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Bölge Müdürü</td>
     <td colspan="1" align="center"> Ahmet Can</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Çıkış Yapılan Firma</td>
     <td colspan="1" align="center"> X FİRMA</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Müşteri İsmi</td>
     <td colspan="1" align="center"> Ali Yılmaz</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Tarih</td>
     <td colspan="1" align="center"> 07.12.2022</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Booking No</td>
     <td colspan="1" align="center"> 07122022</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;"> Konteyner Adet</td>
     <td colspan="1" align="center"> 50</td>
  </tr>
 <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Gönderim Şekli</td>
     <td colspan="1" align="center"> FOB</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Navlun</td>
     <td colspan="1" align="center"> 1000</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Müşteriye Satılan Tutar</td>
     <td colspan="1" align="center"> 1100</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Toplam Karlılık</td>
     <td colspan="1" align="center"> 100</td>
  </tr>
  <tr>
    <td colspan="1" align="center" style="background-color:#D3D3D3;color:#000000; font-weight:bold;">Para Birimi </td>
     <td colspan="1" align="center"> Pound</td>
  </tr>
 

</table>
';
$pdf->writeHTML($tbl, true, false, false, false, 'L');


$pdf->Output();


?>
