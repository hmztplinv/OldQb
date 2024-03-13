<?php

if(get('id')){
    $navlun=Navlun::get_navlun_by_navlun_id(get('id'));
    $orders=Navlun::get_rejeckted_orders_by_navlun_id(get('id'));
    $orderId=Navlun::get_orderid(get('id'));
    $ports=Navlun::get_ports_active();
    // Sonuçları istediğiniz formata dönüştür
    $formattedResults = array_map(function($result) {
        return $result['orderId'];
    }, $orderId);


$customer=Customer::get_customer_byuserid($orders[0]['userId']);

    $user=User::get_user_name_with_id($customer['userId']);

    if(post('reoffer')){
        if(get('booking'))
        {
            $orderIds=Navlun::get_order_id_by_navlun_id(get('id'));
            foreach ($orderIds as $order){
                Order::update_order_status($order['orderId'],8);
            }
            $status=4;
        }
        else{
            $status=1;
        }
        $updatenavlun=[
            'realFirm'=>post('realFirm'),
            'containerQuantity'=>post('containerQuantity'),
            'bookingNo'=>post('bookingNo'),
            'shippingType'=>post('shippingType'),
            'navlunPrice'=>post('navlunPrice'),
            'navlunSoldPrice'=>post('navlunSoldPrice'),
            'navlunProfit'=>post('navlunProfit'),
            'currency'=>post('currency'),
            'updatedDate'=>date('d/m/Y H:i:s', time()),
            'navlunStatus'=>$status,
            'navlunId'=>get('id'),
            'portType'=>post('portType')
        ];
        Navlun::log_navlun(get('id'));
        $res=Navlun::update_navlun($updatenavlun);
        Notification::set_notification($orders[0]['userId'], 2);
        header('location:'.operation_url('navlun'));
    }
    if(post('delete')){

        header('location:'.operation_url('index'));
    }


}
if(post('accept')){

    $navlun=Navlun::get_navlun_by_navlun_id(post('accept'));

    $orders=Navlun::get_rejeckted_orders_by_navlun_id(post('accept'));
    $customer=Customer::get_customer_byuserid($orders[0]['userId']);

    for($i=0;$i<count($formattedResults);$i++){

        $orderinfos=Order::get_order_infos(post('orderId')[$i]);
        $request['product_origin']=$orderinfos['product_origin'];
        $request['productId']=$orderinfos['productId'];
        $request['mtext']=$orderinfos['mtext'];
        $request['mtext']=$orderinfos['mtext'];
        $request['totalquantity']=$orderinfos['quantity']*$orderinfos['totalquan'];
        $request['totalprice']=$orderinfos['offer'];

        //$res=Order::set_order_in_canias($request);





    }
    $company=$customer['marketType'];
    $customermarket['marketType']=$customer['marketType'];
    $customercurrency['currency']=$customer['currency'];
    $pdf = new TCPDF('P', 'mm', 'A4');

    $pdf->AddPage('P', 'A4');
    $pdf->SetFont('dejavusans', 'B', 8);
    $pdf->Cell(150, 23, "EXPORTER", 0, 3, 'R');
    $pdf->Cell(150, 45, "CONSIGNEE", 0, 3, 'R');
    $pdf->Cell(143, 10, "NOTIFY", 0, 3, 'R');
    $pdf->Cell(28, 11, "DESTINATION", 0, 0, 'R');
    if ($customer['exporter']=='Tile Space Inc.'|| $customer['exporter']=='Tile Space Limited'){


        //Tilespace
        $exportcode='TSP';
        $image_file = 'public/images/tilespace.png';
        $pdf->Image($image_file, 20, 0, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }
    elseif ($customer['exporter']=='QUA TRADING'||'QUA GRANITE'){
        //QUA

        $exportcode='QUA';
        $image_file = 'public/images/qualogo.png';
        $pdf->Image($image_file, 20, 15, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }

    elseif ($customer['exporter']=='BIEN TRADING'|| $customer['exporter']=='BIEN YAPI'){
        //BİEN
        $exportcode='BIEN';
        $image_file = 'public/images/bienlogo.png';
        $pdf->Image($image_file, 10, 0, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }
    elseif ($customer['exporter']=='Majorca'){
        //BİEN
        $exportcode='MJR';
        $image_file = 'public/images/majorca.png';
        $pdf->Image($image_file, 10, 0, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }
    else if($customer['exporter']=='Demireks GmbH'){
        //Tilespace
        $exportcode='DMR';
        $image_file = 'public/images/demireks.png';
        $pdf->Image($image_file, 20, 0, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }



    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->SetFont('dejavusans', 'B', 16);
    $pdf->Cell(250, 35, "PROFORMA INVOICE", 0, 3, 'L');



    $pdf->SetFillColor(255, 255, 215);

    $pdf->SetFont('helvetica', '', 8);

    $txt4 = "Type/Number:\n Document Date:\n Purchasing Number: ";

    $pdf->MultiCell(30, 15, $txt4, 1, 'R', 1, 2, 15, 70, true);
    $pdf->SetFillColor(255, 255, 215);

    $pdf->SetFont('helvetica', '', 8);

    $txt5 = mb_strtoupper(substr(iconv('UTF-8', 'ASCII//TRANSLIT', $user['uname']), 0, 3))." \n  ".date('Y-m-d H:i:s')."  ".$exportcode."-".mb_strtoupper(substr(iconv('UTF-8', 'ASCII//TRANSLIT', $user['uname']), 0, 3))."-".$customer['orderCount']."  ";

    $pdf->MultiCell(30, 25, $txt5, 1, 'R', 1, 2, 45, 70, true);

    $pdf->Ln(2);
    $pdf->SetFont('helvetica', '', 8);
    $txt7 = " 3X20\n GEMLIK-TORONTO";
    $pdf->MultiCell(60, 10, $txt7, 1, 'R', 1, 2, 15, 100, true);


    $pdf->SetFillColor(255, 255, 215);

    $pdf->SetFont('helvetica', '', 8);

    if ($customer['exporter'] == 'Tile Space Limited'){
        $export = 'TILE SPACE LIMITED';
        $adress='Unit 3 Haig Road' ;
        $adress1='Parkgate Industrial Estate';
        $adress2='Knutsford, England, WA16 8XL';
        $country= 'United Kingdom';
        $regno='12146884';
    }
    else if ($customer['exporter'] == 'Tile Space Inc.'){
        $export = 'Tile Space Inc.';
        $adress='Unit 3 Haig Road' ;
        $adress1='7411 Lockport Pl Suite # A Lorton, Va 22079';
        $adress2='';
        $country= 'United States Of America';
        $regno='12146884';
    }
    else if ($customer['exporter'] == 'Demireks GmbH'){
        $export = 'Demireks GmbH';
        $adress='Sachsenfeld 4 – Haus 5 D – 20097 Hamburg' ;
        $adress1='7411 Lockport Pl Suite # A Lorton, Va 22079';
        $adress2='Ust./VAT-ID: DE 2822002236';
        $country= 'Germany';
        $regno='';
    }
    else if ($customer['exporter'] == 'QUA TRADING'){
        $export = 'QUA TRADING A.S';
        $adress='Cumhuriyet mahallesi 1955 sokak no.1/11 efeler/aydın' ;
        $adress1='efeler vd 6321060470';
        $adress2='sicil no 20352 mersis no 0632106047000001';
        $country= 'Turkey';
        $regno='6321060470';
    }
    else if ($customer['exporter'] == 'QUA GRANITE'){
        $export = 'QUA GRANITE HAYAL YAPI VE URUNLERI SANAYI TICARET ANONIM SIRKETI';
        $adress='CUMHURIYET MAHALLESI 1955 SOKAK NO:1 KAT:3 D:11' ;
        $adress1='EFELER / AYDIN / TURKEY';
        $adress2='EFELER VERGI DAIRESI:4600467618';
        $country= 'Turkey';
        $regno='4600467618';
    }
    else if ($customer['exporter'] == 'BIEN TRADING'){
        $export = 'BIEN TRADING Dis Tic. A.S';
        $adress='PELITOZU MAH. AYAZMA SK.' ;
        $adress1='BIEN YAPI SITESI NO:52';
        $adress2='BILECIK - 11100';
        $country= 'Turkey';
        $regno='Bilecikvd1700607348';
    }
    else if ($customer['exporter'] == 'Bien Yapı'){
        $export = 'Bien Yapı Ürünleri Sanayi Turizm ve Ticaret A.S';
        $adress='Pelitozukoyu Ayazma SK. No: 52 ' ;
        $adress1='11000 BILECIK';
        $adress2='Vergi Dairesİ : Ankara Kurumlar VKN: 3410264316';
        $country= 'Turkey';
        $regno='3410264316';
    }
    else if ($customer['exporter'] == 'Majorca'){
        $export = 'BMajorca';
        $adress='' ;
        $adress1='';
        $adress2='';
        $country= '';
        $regno='';
    }



    $txt = "$export\n $adress \n $adress1 \n$adress2 \n$country \n Reg No:$regno\n";

    $pdf->MultiCell(60, 25, $txt, 1, 'R', 1, 2, 140, 25, true);
    $pdf->Ln();


    $pdf->SetFillColor(255, 255, 215);

    $pdf->SetFont('helvetica', '', 8);

    $txt1 = $user['uname']."\n ".$customer['address']." \n ".$customer['postCode']." \n TEL:".$user["phone"]." \n FAX:".$customer['faxNumber']."\n";

    $pdf->MultiCell(60, 20, $txt1, 1, 'R', 1, 2, 140, 60, true);
    $pdf->Ln();
    $pdf->SetFont('helvetica', '', 8);
    $txt45=$navlun['notify'];
    $pdf->MultiCell(60, 25, $txt45, 1, 'R', 1, 2, 140, 85, true);
    $pdf->Ln();

    $txt1 = "SAME AS CONSIGNEE\n";



    $pdf->Ln(10);



    $pdf->SetFont('dejavusans', '', 6);

    $tbl = '
<table border="1" cellpadding="2" cellspacing="2" nobr="true">
  <tr style="background-color:#FFFF00;color:#0000FF;">
   <th colspan="1" align="center">Code Number</th>
  <th colspan="1" align="center"> Item Name</th>
  <th colspan="1" align="center">Production Statu </th>
  <th colspan="1" align="center">Size</th>
  <th colspan="1" align="center">Thickness</th>
 
  <th colspan="1" align="center">Box </th>
    <th colspan="1" align="center">Pallet Pcs</th>
  <th colspan="1" align="center">M2 Price</th>
   <th colspan="1" align="center">Total M2</th>
  <th colspan="1" align="center">Total Price </th>

 </tr>';
    $totals=[];
    $totals['price']=0.0;
    $totals['palletPcs']=0;
    $totals['sqm']=0.0;
    $grossweight=0;
    $netweight=0;

    $totalOffer = 0;

    foreach ($orders as $item) {

        $totalOffer += floatval($item['offer']);

        $price = Order::get_product_by_api($item['productId'], $customer['currency'], $item['product_origin']);

        $grossweight=$grossweight+$item['quantity']*$item['gross'];
        $netweight=$netweight+$item['quantity']*($item['gross']-20);
        $totals['price']+=(number_format(( ( $item['ProductPrice'] * ( 1 + ($customer['profit']/100) ) ) + ( $customer['transportType'] == 'EXW' ? 0 : ($customer['transportType'] == 'FOB' && ( $price['fobStationFactor'] != NULL || $price['fobStationFactor'] != '' ) ? $price['fobStationFactor'] : ($customer['transportType'] == 'FOT' && ( $price['stationFactor'] != NULL || $price['stationFactor'] != '' ) ? $price['stationFactor'] : 0))))*$price['totalquan'],2)*$item['quantity']);
        $totals['palletPcs']+=$item['quantity'];
        $totals['sqm']+=number_format((number_format($item['quantity'],2)*number_format($item['totalquan'],2)),2);
        $totalprice=$totalprice = $totalprice + number_format(number_format(number_format($item['productPrice'],2)*number_format($item['totalquan'],2),2)*$item['quantity'],2);
        $palletpcs=+$palletpcs+$order['quantity'];
        $tbl.='   <tr>
                     <th colspan="1" align="center">'.$item['productId'].'</th>
                  <th colspan="1" align="center">'.$item['collection'].'</th>
                  <th colspan="1" align="center">No Production</th>
                  <th colspan="1" align="center">'.$item['size'].'</th>
                  <th colspan="1" align="center">'.$item['thickness'].'</th>
                   <th colspan="1" align="center">'. str_replace('KT', 'BOX', $price['pkstext']).'</th>
                  <th colspan="1" align="center">'.$item['quantity'].'</th>
                  <th colspan="1" align="center">'.number_format((  $item['productPrice']     )  ,2).'</th>
                   <th colspan="1" align="center">'.number_format(number_format($item['totalquan'],2)*number_format($item['quantity'],2),2).' m2'.'</th>
                 
                             <th colspan="1" align="center">'.number_format(( ( $item['productPrice']     )  )*number_format($price['totalquan'],2)*number_format($item['quantity'],2),2).'</th>
                 </tr>';
    }
    $tbl.='</table>';

    $grandtotal = $navlun['navlunSoldPrice'] + $totalprice;


    $pdf->writeHTML($tbl, true, false, false, false, '');

    $pdf->Ln(10);


    $pdf->SetFont('dejavusans', '', 6);

    $tbl2 = '
<table border="1" nobr="true" >
 <tr>
 <th colspan="1" align="center"> TOTAL</th>
  <th colspan="1" align="center">'.$totals['sqm'].'</th>
  <th colspan="1" align="center">SQM </th>
  <th colspan="1" align="center">'.$totals['palletPcs'].' PLT'.'</th>
  <th colspan="1" align="center">'.$totalprice.' '.$customercurrency['currency'].'</th>


 </tr>
  <tr>
  <th colspan="1" align="center">FREIGHT: '.$navlun['navlunSoldPrice'].'</th>
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
  <th colspan="1" align="center">'.$grandtotal.'</th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center">70.121,29 USD</th>


 </tr>
</table>
';
    $pdf->writeHTML($tbl2, true, false, false, false, '');

    $pdf->ln();
    $quatradeiban='TR970001001999945543485001-TL ,TR700001001999945543485002-USD,TR430001001999945543485003-EUR,TR160001001999945543485004-GBP';
    $quagranitiban=' TR940001001999764012895001 - TL ,TR670001001999764012895002 - USD,TR400001001999764012895003 - TR830001001999764012895005 - GBP';
    $bientradeiban=' TR520001000118914250955001 - TL ,TR680001000118914250955004 - USD,TR410001000118914250955005 EUR - Tr140001000118914250955006 - GBP';
    $bienyapiiban=' TR11 0001 0001 1860 7464 0550 01 - TL ,TR81 0001 0001 1860 7464 0550 02 - USD,TR54 0001 0001 1860 7464 0550 03 EUR - TR27 0001 0001 1860 7464 0550 04 - GBP';
    if ($customer['exporter'] == 'Tile Space Inc.') {
        $account = 'Tile Space Inc.';
        $tel = ''; // Telefon numarasını ekleyin
        $vatno = ''; // VAT numarasını ekleyin
        $eorinumber = ''; // EORI numarasını ekleyin
        $acno = '435 043 597 802 '; // ACNO numarasını ekleyin
        $BIC = ''; // BIC numarasını ekleyin
        $intermediaryBıc = ''; // Intermediary BIC numarasını ekleyin
        $IBAN = ''; // IBAN numarasını ekleyin
        $Sortcode='';
        $Beneficiaryaddress='';
        $BankPaymentinstitution= '';
        $BankPaymentinstitutionaddress= '';
        $bankname =  'Bank of America';
        $branchcode = 'VA9-658-01-01';
        $brancadress = '235 Maple Ave. West Vienna, VA 22180';
        $swiftcode = 'BOFAUS3N';
        $achtransfer ='051000017';
        $sicilno = '';
        $mersisno='';
        $wiress= '026009593 ';
    } elseif ($customer['exporter'] == 'Tile Space Limited') {
        $account = 'Tile Space Limited';
        $tel = '+44(0)7444198594';
        $vatno = '331789385';
        $eorinumber = 'GB331789385000';
        $acno = '74286463';
        $BIC = 'REVOGB21';
        $intermediaryBıc = 'CHASGB2L';
        $IBAN = 'GB32REVO00996956096233';
        $Sortcode='04-29-09';
        $Beneficiaryaddress='Unit 3 Haig Road, Parkgate Industrial Estate, WA16 8XL,';
        $BankPaymentinstitution= '';
        $BankPaymentinstitutionaddress= '7 Westferry Circus, E14 4HD, London, United Kingdom';
        $bankname =  'Revolut Ltd.';
        $branchcode = '';
        $brancadress = '';
        $swiftcode = '';
        $achtransfer ='';
        $sicilno = '';
        $mersisno='';
        $wiress= '';
    } elseif ($customer['exporter'] == 'Demireks GmbH') {
        $account = 'DEMIREKS GMBH';
        $tel = '+49 040 399 039 97';
        $vatno = '2822002236';
        $eorinumber = ''; // EORI numarasını ekleyin
        $acno = ''; // ACNO numarasını ekleyin
        $BIC = ''; // BIC numarasını ekleyin
        $intermediaryBıc = 'DEUTDEDBHAM'; // Intermediary BIC numarasını ekleyin
        $IBAN = 'DE91200700240151087400';
        $Sortcode='';
        $Beneficiaryaddress='Amtsgericht Lübeck HRB 17254';
        $BankPaymentinstitution= '';
        $BankPaymentinstitutionaddress= '';
        $bankname =  '';
        $branchcode = '';
        $brancadress = '';
        $swiftcode = '';
        $achtransfer ='';
        $sicilno = '';
        $mersisno='';
        $wiress= '';
    } elseif ($customer['exporter'] == 'QUA TRADING') {
        $account = 'QUA TRADING A.S';
        $tel = ''; // Telefon numarasını ekleyin
        $vatno = ''; // VAT numarasını ekleyin
        $eorinumber = ''; // EORI numarasını ekleyin
        $acno = ''; // ACNO numarasını ekleyin
        $BIC = ''; // BIC numarasını ekleyin
        $intermediaryBıc = ''; // Intermediary BIC numarasını ekleyin
        $IBAN = $quatradeiban; // Değişkeninizi ekleyin
        $Sortcode='';
        $Beneficiaryaddress='';
        $BankPaymentinstitution= '';
        $BankPaymentinstitutionaddress= 'Cumhuriyet mahallesi 1955 sokak no.1/11 efeler/aydın';
        $bankname =  '';
        $branchcode = '';
        $brancadress = 'efeler vd 6321060470';
        $swiftcode = '';
        $achtransfer ='';
        $sicilno = '20352 mersis no 0632106047000001';
        $mersisno='';
        $wiress= '';
    } elseif ($customer['exporter'] == 'QUA GRANITE') {
        $account = 'QUA GRANITE HAYAL YAPI VE ÜRÜNLERİ SANAYİ TİCARET ANONİM ŞİRKETİ';
        $tel = ''; // Telefon numarasını ekleyin
        $vatno = ''; // VAT numarasını ekleyin
        $eorinumber = ''; // EORI numarasını ekleyin
        $acno = ''; // ACNO numarasını ekleyin
        $BIC = ''; // BIC numarasını ekleyin
        $intermediaryBıc = ''; // Intermediary BIC numarasını ekleyin
        $IBAN = $quagranitiban; // Değişkeninizi ekleyin
        $Sortcode='';
        $Beneficiaryaddress='';
        $BankPaymentinstitution= '';
        $BankPaymentinstitutionaddress= 'CUMHURİYET MAHALLESİ 1955 SOKAK NO:1 KAT:3 D:11 ';
        $bankname =  '';
        $branchcode = '';
        $brancadress = '4600467618';
        $swiftcode = '';
        $achtransfer ='';
        $sicilno = '';
        $mersisno='';
        $wiress= '';
    } elseif ($customer['exporter'] == 'BIEN TRADING') {
        $account = 'BIEN TRADING DIŞ TİC. A.Ş';
        $tel = ''; // Telefon numarasını ekleyin
        $vatno = ''; // VAT numarasını ekleyin
        $eorinumber = ''; // EORI numarasını ekleyin
        $acno = ''; // ACNO numarasını ekleyin
        $BIC = ''; // BIC numarasını ekleyin
        $intermediaryBıc = ''; // Intermediary BIC numarasını ekleyin
        $IBAN = $bientradeiban; // IBAN numarasını ekleyin
        $Sortcode='';
        $Beneficiaryaddress='';
        $BankPaymentinstitution= '';
        $BankPaymentinstitutionaddress= 'PELITOZU MAH. AYAZMA SK.';
        $bankname =  '';
        $branchcode = '1700607348';
        $brancadress = '';
        $swiftcode = '';
        $achtransfer ='';
        $sicilno = '';
        $mersisno='';
        $wiress= '';
    } elseif ($customer['exporter'] == 'BIEN YAPI') {
        $account = 'Bien Yapı Ürünleri Sanayi Tureizm ve Ticaret A.Ş';
        $tel = ''; // Telefon numarasını ekleyin
        $vatno = ''; // VAT numarasını ekleyin
        $eorinumber = ''; // EORI numarasını ekleyin
        $acno = ''; // ACNO numarasını ekleyin
        $BIC = ''; // BIC numarasını ekleyin
        $intermediaryBıc = ''; // Intermediary BIC numarasını ekleyin
        $IBAN = $bienyapiiban; // IBAN numarasını ekleyin
        $Sortcode='';
        $Beneficiaryaddress='';
        $BankPaymentinstitution= '';
        $BankPaymentinstitutionaddress= 'Pelitözüköyü Aayazma SK. No: 52 ';
        $bankname =  '';
        $branchcode = '11000';
        $brancadress = '3410264316';
        $swiftcode = '';
        $achtransfer ='';
        $sicilno = '';
        $mersisno='';
        $wiress= '';
    } else {
        $account = '';
        $tel = ''; // Telefon numarasını ekleyin
        $vatno = ''; // VAT numarasını ekleyin
        $eorinumber = ''; // EORI numarasını ekleyin
        $acno = ''; // ACNO numarasını ekleyin
        $BIC = ''; // BIC numarasını ekleyin
        $intermediaryBıc = ''; // Intermediary BIC numarasını ekleyin
        $IBAN = ''; // IBAN numarasını ekleyin
        $Sortcode='';
        $Beneficiaryaddress='';
        $BankPaymentinstitution= '';
        $BankPaymentinstitutionaddress= '';
        $bankname =  '';
        $branchcode = '';
        $brancadress = '';
        $swiftcode = '';
        $achtransfer ='';
        $sicilno = '';
        $mersisno='';
        $wiress= '';
    }

    if(empty($tel)){$rowtel='';} else {$rowtel='Tel :';}
    if(empty($regno)){$rowregno='';} else {$rowregno='Reg no:';}
    if(empty($vatno)){$rowvatno='';} else {$rowvatno='<br>VAT NO:';}
    if(empty($eorinumber)){$roweorinumber='';} else {$roweorinumber='TILE SPACE EORI NUMBER:';}
    if(empty($acno)){$rowacno='';} else {$rowacno='<br>Account number:';}
    if(empty($BIC)){$rowBIC='';} else {$rowBIC='BIC';}
    if(empty($intermediaryBıc)){$rowintermediaryBıc='';} else {$rowintermediaryBıc='<br>Intermediary BIC:';}
    if(empty($IBAN)){$rowIBAN='';} else {$rowIBAN=' IBAN:';}
    if(empty($Sortcode)){$rowSortcode='';} else {$rowSortcode=' <br>Sort Code:';}
    if(empty($Beneficiaryaddress)){$rowBeneficiaryaddress='';} else {$rowBeneficiaryaddress=' Beneficiary address: ';}
    if(empty($BankPaymentinstitution)){$rowBankPaymentinstitution='';} else {$rowBankPaymentinstitution='<br> Bank / Payment institution:';}
    if(empty($BankPaymentinstitutionaddress)){$rowBankPaymentinstitutionaddress='';} else {$rowBankPaymentinstitutionaddress=' Bank / Payment institution address:';}
    if(empty($bankname)){$rowbankname='';} else {$rowbankname=' Bank Name:';}
    if(empty($branchcode)){$rowbranchcode='';} else {$rowbranchcode='Branch Code:';}
    if(empty($wiress)){$rowwiress='';} else {$rowwiress='Wires:';}
    if(empty($swiftcode)){$rowswiftcode='';} else {$rowswiftcode='SWIFT Code :';}
    if(empty($achtransfer)){$rowachtransfer='';} else {$rowachtransfer='ACH Transfer in US- Paper & Electronic:';}
    if(empty($sicilno)){$rowsicilno='';} else {$rowsicilno='Sicil No:';}
    if(empty($mersisno)){$rowmersisno='';} else {$rowmersisno='Mersis No:';}


    $tbl7 ='<table>
  <tr>
    <td>
<table border="1" nobr="true" >
 <tr> 
  
   <td colspan="2" align="center"><b>Account :</b>'.$account.'   
  <b>'.$rowtel.'</b>  '.$tel.'   <b>'.$rowregno.'</b> '.$regno.'  <b>'.$rowvatno.'</b> '.$vatno.'  <b>'.$roweorinumber.'</b>'.$eorinumber.'
 <b>Beneficiary:</b>'.$account.'<b>'.$rowacno.'</b>'.$acno.' <b>'.$rowBIC.'</b>'.$BIC.' <b>'.$rowintermediaryBıc.' </b>'.$intermediaryBıc.' <b> '.$rowIBAN.'</b>'.$IBAN.'
  <b>'.$rowSortcode.'</b>'.$Sortcode.'  <b>'.$rowBeneficiaryaddress.'</b>'.$Beneficiaryaddress.'<b>'.$rowBankPaymentinstitution.'</b>'.$BankPaymentinstitution.'<b>
  '.$rowBankPaymentinstitutionaddress.'</b>'.$BankPaymentinstitutionaddress.'
 <b>'.$rowbankname.'</b>'.$bankname.'<b><br>'.$rowbranchcode.'</b>'.$branchcode.'<b>Branch Adress</b>'.$brancadress.'<b>'.$rowwiress.'</b>'.$wiress.'
 <b>'.$rowswiftcode.'</b>'.$swiftcode.'<b>'.$rowachtransfer.'</b>'.$achtransfer.'
 <b>'.$rowsicilno.'</b>'.$sicilno.' <b>'.$rowmersisno.'</b>'.$mersisno.'
  
   </td>
  </tr>
   <tr>
   <td colspan="1" align="center">Total Pallet:<br/>Total SQM:<br/> Total pc:<br/>Gross Weight:<br/>Net Weight:<br/>Payment Type:<br/> <br/></td>
   <td colspan="1" align="center">'.$totals['palletPcs'].'<br/>'.$totals['sqm'].'<br/><br/>'.$grossweight.' KGS<br/>'.$netweight.' KGS<br/>Open Account<br/><br/></td>
  </tr>


</table>
      </td>
    <td>
    <table border="1" cellpadding="2" cellspacing="2" align="center">
     <tr nobr="true">
      <th colspan="3">Estimate Time of Dispatch:</th>
     </tr>
     <tr nobr="true">
      <td  colspan="3">Notes :<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></td>

      </tr>
     </table>
      </td>
  </tr>
</table>';

    $pdf->writeHTML($tbl7, true, false, false, false, 'R');
    $pdf->Output();

}
else{
    //header('location:'.operation_url('index'));
}
require oview('freight_update');
