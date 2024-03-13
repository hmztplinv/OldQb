<?php

$pdf = new TCPDF('P', 'mm', 'A4');

$pdf->AddPage('P', 'A4');
$pdf->SetFont('dejavusans', 'B', 8);
$pdf->Cell(150, 23, "EXPORTER", 0, 3, 'R');
$pdf->Cell(150, 40, "CONSIGNEE", 0, 3, 'R');
$pdf->Cell(143, 20, "NOTIFY", 0, 3, 'R');
$pdf->Cell(28, 11, "DESTINATION", 0, 3, 'R');


$image_file = 'public/images/bienlogo.png';
$pdf->Image($image_file, 20, 13, 50, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

$pdf->Ln();
$pdf->SetFont('dejavusans', 'B', 16);
$pdf->Cell(250, 53, "PROFORMA INVOICE", 0, 3, 'L');



$pdf->SetFillColor(255, 255, 215);

$pdf->SetFont('helvetica', '', 8);

$txt4 = "Type/Number:\n Document Date:\n Purchasing Number: ";

$pdf->MultiCell(30, 25, $txt4, 1, 'R', 1, 2, 15, 70, true);
$pdf->SetFillColor(255, 255, 215);

$pdf->SetFont('helvetica', '', 8);

$txt5 = "PK \n 22.11.2022 \n TSP-BRV 027  ";

$pdf->MultiCell(30, 25, $txt5, 1, 'R', 1, 2, 45, 70, true);

$pdf->Ln(2);
$pdf->SetFont('helvetica', '', 8);
$txt7 = " 3X20\n GEMLIK-TORONTO";
$pdf->MultiCell(60, 10, $txt7, 1, 'R', 1, 2, 15, 100, true);


$pdf->SetFillColor(255, 255, 215);

$pdf->SetFont('helvetica', '', 8);

$txt = "Tile Space Inc.\n 7411 Lockport PI.suite  # Alorton,Va 22079 \n USA  22079  Amerika \n TEL: \n FAX:\n";

$pdf->MultiCell(60, 25, $txt, 1, 'R', 1, 2, 140, 25, true);
$pdf->Ln();


$pdf->SetFillColor(255, 255, 215);

$pdf->SetFont('helvetica', '', 8);

$txt1 = "Tile Space Inc.\n 7411 Lockport PI.suite  # Alorton,Va 22079 \n USA  22079  Amerika \n TEL: \n FAX:\n";

$pdf->MultiCell(60, 25, $txt1, 1, 'R', 1, 2, 140, 55, true);
$pdf->Ln();
$pdf->SetFont('helvetica', '', 8);

$txt1 = "SAME AS CONSIGNEE\n";



$pdf->Ln(40);



$pdf->SetFont('dejavusans', '', 6);

$tbl = '
<table border="1" cellpadding="2" cellspacing="2" nobr="true">
  <tr style="background-color:#FFFF00;color:#0000FF;">
  <th colspan="1" align="center"> Item</th>
  <th colspan="1" align="center">Code Number</th>
  <th colspan="1" align="center">Description </th>
  <th colspan="1" align="center">Batch</th>
  <th colspan="1" align="center">Quantity</th>
  <th colspan="1" align="center"> Unit</th>
  <th colspan="1" align="center">Pallet</th>
  <th colspan="1" align="center">Box </th>
  <th colspan="1" align="center">Unit Price</th>
  <th colspan="1" align="center">Total Price </th>

 </tr>
  <tr>
  <th colspan="1" align="center">1</th>
  <th colspan="1" align="center">p16845454686</th>
  <th colspan="1" align="center">120x180 TWILLIGHT BOOKMATCH REC-FULL LAP</th>
  <th colspan="1" align="center">XD02</th>
  <th colspan="1" align="center">1.035,18</th>
  <th colspan="1" align="center">SQM</th>
  <th colspan="1" align="center">18</th>
  <th colspan="1" align="center">486</th>
  <th colspan="1" align="center">23,65</th>
  <th colspan="1" align="center">24.482,00 US</th>

 </tr>
  

</table>
';
$pdf->writeHTML($tbl, true, false, false, false, '');

$pdf->Ln(10);


$pdf->SetFont('dejavusans', '', 6);

$tbl2 = '
<table border="1" nobr="true" >
 <tr>
 <th colspan="1" align="center"> TOTAL</th>
  <th colspan="1" align="center">2.946,96</th>
  <th colspan="1" align="center">SQM </th>
  <th colspan="1" align="center">56</th>
  <th colspan="1" align="center">70.121,29 USD</th>


 </tr>
  <tr>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center">PCS</th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>


 </tr>
   <tr>
  <th colspan="" align="center">DISCOUNTS</th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center">0,00 USD</th>


 </tr>
  <tr>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>


 </tr>
  <tr>
  <th colspan="1" align="center">GRAND TOTAL FOB GEMLIK</th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center">70.121,29 USD</th>


 </tr>
</table>
';
$pdf->writeHTML($tbl2, true, false, false, false, '');

$pdf->ln();
$tbl7 ='<table>
  <tr>
    <td>
<table border="1" nobr="true" >
 <tr>
   <td colspan="1" align="center"></td>
   <td colspan="1" align="center"><b>Account :</b>Tile Space INC <br />
  <b>BRANCH CODE:</b>  VA9-658-01-01 <br /> <b>BANK:</b> BANK OF AMERICA <br /> <b>ACCOUNT NO:</b> 846356537896<br /> <b>PAPER & ELECTRONIC</b>05048546247
  <b>WIRES:</b>0846884
   </td>
  </tr>
   <tr>
   <td colspan="1" align="center">Total Pallet:<br/>Total SQM:<br/> Total pc:<br/>Gross Weight:<br/>Net Weight:<br/>Payment Type:<br/> LC No:<br/></td>
   <td colspan="1" align="center">56<br/>2.964,96<br/>58,330 KGS<br/>59,450 KGS<br/>59,450 KGS<br/>Open Account<br/>Open Account<br/></td>
  </tr>


</table>
      </td>
    <td>
    <table border="1" cellpadding="2" cellspacing="2" align="center">
     <tr nobr="true">
      <th colspan="3">Estimate Time of Dispatch:</th>
     </tr>
     <tr nobr="true">
      <td  colspan="3">Notes :<br/>
CONTAINER NO: UACU 384422‐9 / FCIU 631126‐8 / UACU 377414‐2<br/>
BOOKING NO: 25400922<br/>
VESSEL NAME: SASKIA A 044W<br/>
ETA: 25.12.2022<br/>
GEMLIK-TORONTO<br/><br/><br/><br/><br/></td>

      </tr>
     </table>
      </td>
  </tr>
</table>';

$pdf->writeHTML($tbl7, true, false, false, false, 'R');





?>
