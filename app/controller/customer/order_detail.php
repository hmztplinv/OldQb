<?php
if (get('date')){

   $order= Order::get_order_details(get('date'));
    if (empty($order))
    {
        $order= Order::get_order_details_alone(get('date'));
    }

}
if(post('purchase')){

    $order= Order::get_order_details(post('purchase'));
    if (empty($order))
    {
        $order= Order::get_order_details_alone(post('purchase'));
    }
    $user=User::get_user_name();
    $customermarket=Customer::get_customer_by_userid();
    $customercurrency=Customer::get_customer_by_userid();

    $customer=Customer::get_customer_by_userid();
    $company=$customermarket['marketType'];
    $product = post('product');

    $price = post('price');
    $product_arrays = array_map(function($item) {
        return explode(',', $item);
    }, $product);
    $price_arrays = array_map(function($item) {
        return explode(',', $item);
    }, $price);
    $merged = array_merge(...$product_arrays);
    $merged1 = array_merge(...$price_arrays);

    $result = implode(',', post('product'));




    $pdf = new TCPDF('P', 'mm', 'A4');

    $pdf->AddPage('P', 'A4');
    $pdf->SetFont('dejavusans', 'B', 8);
    $pdf->Cell(150, 20, "EXPORTER", 0, 3, 'R');
    $pdf->Cell(150, 44, "CONSIGNEE", 0, 3, 'R');
    $pdf->Cell(145, 16, "NOTIFY", 0, 3, 'R');
    $pdf->Cell(28, 0, "DESTINATION", 0, 0, 'R');
    if ($customer['exporter']=='QUA TRADING'|| $customer['exporter']=='QUA GRANITE'){
        //QUA
        $exportcode='QUA';
        $image_file = 'public/images/qualogo.png';
        $pdf->Image($image_file, 20, 15, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }
    elseif ($customer['exporter']=='BIEN TRADING'|| $customer['exporter']=='BIEN YAPI'){
        //BİEN
        $exportcode='BIEN';
        $image_file = 'public/images/bienlogo.png';
        $pdf->Image($image_file, 20, 15, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }
    elseif ($customer['exporter']=='Majorca'){
        //BİEN
        $exportcode='MJR';
        $image_file = 'public/images/majorca.png';
        $pdf->Image($image_file, 20, 15, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }
    else if($customer['exporter']=='Tile Space Inc.'|| $customer['exporter']=='Tile Space Limited'){
        //Tilespace
        $exportcode='TSP';
        $image_file = 'public/images/tilespace.png';
        $pdf->Image($image_file, 20, 0, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }else if($customer['exporter']=='Demireks GmbH'){
        //Tilespace
        $exportcode='DMR';
        $image_file = 'public/images/demireks.png';
        $pdf->Image($image_file, 20, 0, 75, '', 'PNG', '', 'T', false, 60, 'L', false, false, 0, false, false, false);

    }



    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->SetFont('dejavusans', 'B', 16);
    $pdf->Cell(250, 65, "PURCHASE ORDER", 0, 3, 'L');



    $pdf->SetFillColor(255, 255, 215);

    $pdf->SetFont('helvetica', '', 8);

    $txt4 = "Type/Number:\n Document Date:\n Purchasing Number: ";

    $pdf->MultiCell(30, 15, $txt4, 1, 'R', 1, 2, 15, 70, true);
    $pdf->SetFillColor(255, 255, 215);

    $pdf->SetFont('helvetica', '', 8);
    $anlikTarih = date("dmyHi");
    $txt5 = mb_strtoupper(substr(iconv('UTF-8', 'ASCII//TRANSLIT', $user['uname']), 0, 3)).$anlikTarih." \n  ".date('Y-m-d H:i:s')." ".$exportcode."-".mb_strtoupper(substr(iconv('UTF-8', 'ASCII//TRANSLIT', $user['uname']), 0, 3))." ".$customer['orderCount']."  ";
    $pdf->MultiCell(30, 15, $txt5, 1, 'R', 1, 2, 45, 70, true);
    $pdf->Ln(2);
    $pdf->SetFont('helvetica', '', 8);
    $txt7 = " GEMLIK-TORONTO";
    $pdf->MultiCell(60, 10, $txt7, 1, 'R', 1, 2, 15, 90, true);


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
        $export = 'BIEN TRADING DIS TIC. A.S';
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
    $pdf->MultiCell(60, 25, $txt, 1, 'R', 1, 2, 140, 22, true);
    $pdf->Ln();


    $pdf->SetFillColor(255, 255, 215);

    $pdf->SetFont('helvetica', '', 8);

    $txt1 = $user['uname']."\n ".$customer['address']." \n ".$customer['postCode']." \n TEL:".$user["phone"]." \n FAX:".$customer['faxNumber']."\n";
    $pdf->MultiCell(60, 25, $txt1, 1, 'R', 1, 2, 140, 55, true);
    $pdf->Ln();
    $txt45='';
    $pdf->MultiCell(60, 25, $txt45, 1, 'R', 1, 2, 140, 85, true);
    $pdf->Ln();
    $pdf->SetFont('helvetica', '', 8);

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
  <th colspan="1" align="center">Total SQM</th>
  <th colspan="1" align="center">Box </th>
  <th colspan="1" align="center">Pallet PCS</th>
 
  <th colspan="1" align="center">SQM Price</th>
   
  <th colspan="1" align="center">Total Price </th>

 </tr>';
    $totals=[];
    $totals['price']=0.0;
    $totals['palletPcs']=0;
    $totals['sqm']=0.0;
    $grossweight=0;
    $netweight=0;

    foreach ($order as $navlun) {
        $sa= products::get_product_by_just_id($navlun['productId']);
        $price=Order::get_product_by_api($navlun['productId'],$sa['currency'],$sa['product_origin']);
        $profits=Customer::get_profit($customer['userId']);
        $product=Products::get_product_detail($navlun['productId'], $navlun['currency'], $navlun['product_origin']);

        $newprofit = [];

        foreach ($profits as $profit){ if($profit["genus_name"]==$navlun['cins']){ $profit_price= $profit["profit"];} }
        $price = Order::get_product_by_api($navlun['productId'], $customercurrency['currency'], $item['product_origin']);

        $grossweight=$grossweight+($item['quantity']*$item['gross']);
        $netweight=$netweight+($item['quantity']*($item['gross']-20));

        $totals['palletPcs']+=$navlun['quantity'];
        $totals['sqm']+=(number_format($navlun['quantity'],2)*number_format($price['totalquan'],2));
        $rawPrice = number_format($price['price1'] + ($price['price1'] * $profit_price / 100), 2) + $price['fobStationFactor'];

        $roundedPrice = round($rawPrice, 2);

        if ($customer['round'] == 1) {
            // Yukarı yuvarlama işlemi (ceil) burada 0.05 eklenerek yapılıyor
            $roundedPrice = ceil($roundedPrice / 0.05) * 0.05;
        } elseif ($customer['round'] == 2) {
            // Aşağı yuvarlama işlemi (floor) burada 0.05 çıkartılarak yapılıyor
            $roundedPrice = floor($roundedPrice / 0.05) * 0.05;
        }
        $totals['price']+=number_format(number_format($price['totalquan'],2)*number_format($roundedPrice,2),2)*$navlun['quantity'];

        $tbl.='   <tr>
                     <th colspan="1" align="center">'.$navlun['productId'].'</th>
                  <th colspan="1" align="center">'.$navlun['collection'].'</th>
                  <th colspan="1" align="center">No Production</th>
                  <th colspan="1" align="center">'.$navlun['size'].'</th>
                  <th colspan="1" align="center">'.$navlun['thickness'].'</th>
                  <th colspan="1" align="center">'.$price['totalquan']*$navlun['quantity'].' m2'.'</th>
                  <th colspan="1" align="center">'. str_replace('KT', 'BOX', $price['pkstext']) .'</th>
                       <th colspan="1" align="center">'.$navlun['quantity'].'</th>
                  <th colspan="1" align="center">'.number_format($navlun['price'],2).'</th>
                 
                  <th colspan="1" align="center">'.(number_format($price['totalquan'],2)*number_format($navlun['price'],2))*$navlun['quantity'].'</th>
                 </tr>';
    }

    $tbl.='</table>';

    $pdf->writeHTML($tbl, true, false, false, false, '');

    $pdf->Ln();


    $pdf->SetFont('dejavusans', '', 6);

    $tbl2 = '
<table border="1" nobr="true" >
 <tr>
 <th colspan="1" align="center"> TOTAL</th>
  <th colspan="1" align="center">'.$totals['sqm'].'</th>
  <th colspan="1" align="center">SQM </th>
  <th colspan="1" align="center">'.$totals['palletPcs'].' PLT'.'</th>
  <th colspan="1" align="center">'.$totals['price'].' '.$customercurrency['currency'].'</th>


 </tr>
  <tr>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center">PCS</th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
 </tr>
  <tr>
  <th colspan="1" align="center">Incoterms - FOB - GEMLIK</th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>
  <th colspan="1" align="center"></th>


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




//    $Sortcode=($customer['exporter'] == 'Tile Space Limited') ? '04-29-09' : ($customer['exporter'] == 'Tile Space Inc.') ? '' : '';
//    $Beneficiaryaddress=($customer['exporter'] == 'Tile Space Limited') ? 'Unit 3 Haig Road, Parkgate Industrial Estate, WA16 8XL, Knutsford,United Kingdom' : ($customer['exporter'] == 'Tile Space Inc.') ? '' : ($customer['exporter'] == 'QUA TRADING') ? 'Cumhuriyet mahallesi 1955 sokak no.1/11 efeler/aydın' : ($customer['exporter'] == 'QUA GRANITE') ? 'CUMHURİYET MAHALLESİ 1955 SOKAK NO:1 KAT:3 D:11  EFELER / AYDIN / TURKEY ' : ($customer['exporter'] == 'BIEN TRADING') ? 'PELITOZU MAH. AYAZMA SK. BIEN YAPI SİTESİ NO:52' : ($customer['exporter'] == 'BIEN YAPI') ? 'Pelitözüköyü Aayazma SK. No: 52 ' : '';;
//    $BankPaymentinstitution=($customer['exporter'] == 'Tile Space Limited') ? 'Revolut Ltd' : ($customer['exporter'] == 'Tile Space Inc.') ? '' : ($customer['exporter'] == 'Demireks GmbH') ? '' : 'Gökmen Kösele';
//    $BankPaymentinstitutionaddress=($customer['exporter'] == 'Tile Space Limited') ? '7 Westferry Circus, E14 4HD, London, United Kingdom' : ($customer['exporter'] == 'Tile Space Inc.') ? '' : '';
//    $bankname = ($customer['exporter'] == 'Tile Space Limited') ? '' : ($customer['exporter'] == 'Tile Space Inc.') ? 'Bank of America' : ($customer['exporter'] == 'Demireks GmbH') ? 'DEUTDEDBHAM' : '';
//    $branchcode = ($customer['exporter'] == 'Tile Space Limited') ? '' : ($customer['exporter'] == 'Tile Space Inc.') ? 'VA9-658-01-01' : '';
//    $brancadress = ($customer['exporter'] == 'Tile Space Limited') ? '' : ($customer['exporter'] == 'Tile Space Inc.') ? '235 Maple Ave. West Vienna, VA 22180' : ($customer['exporter'] == 'Demireks GmbH') ? 'Amtsgericht Lübeck HRB 17254' : ($customer['exporter'] == 'QUA TRADING') ? 'efeler vd 6321060470' :($customer['exporter'] == 'QUA GRANITE') ? 'EFELER VERGI DAIRESI:4600467618' : ($customer['exporter'] == 'BIEN TRADING') ? 'Bilecik vd 1700607348' : ($customer['exporter'] == 'BIEN YAPI') ? 'Ankara Kurumlar VKN: 3410264316' : '';
//    $swiftcode = ($customer['exporter'] == 'Tile Space Limited') ? '' : ($customer['exporter'] == 'Tile Space Inc.') ? ' BOFAUS3N ' : '';
//    $achtransfer = ($customer['exporter'] == 'Tile Space Limited') ? '' : ($customer['exporter'] == 'Tile Space Inc.') ? '  051000017 ' : '';
//    $sicilno = ($customer['exporter'] == 'QUA TRADING') ? '20352' : '';
//    $mersisno= ($customer['exporter'] == 'QUA TRADING') ? '0632106047000001' : '';
//    $wiress= ($customer['exporter'] == 'Tile Space Inc.') ? '026009593  ' : '';
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
<table border="1" style="padding: 5px" nobr="true" >
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
   <td colspan="1" align="center">Total Pallet:<br/>Total SQM:<br/> Total pc:<br/>Gross Weight:<br/>Net Weight:<br/>Payment Type:<br/> LC No:<br/></td>
   <td colspan="1" align="center">'.$totals['palletPcs'].'<br/>'.$totals['sqm'].'<br/><br/>'.$grossweight.' KGS<br/>'.$netweight.' KGS<br/>Open Account<br/><br/></td>
  </tr>


</table>
      </td>
    <td>
    <table border="1" cellpadding="2" cellspacing="2" align="center">
     <tr nobr="true">
      <th colspan="3">Notes :</th>
     </tr>
     <tr nobr="true">
      <td  colspan="3"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></td>

      </tr>
     </table>
      </td>
  </tr>
</table>';

    $pdf->writeHTML($tbl7, true, false, false, false, 'R');


    $pdf->Output();






}
require cview('order_detail');