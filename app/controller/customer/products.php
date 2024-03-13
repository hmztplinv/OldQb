<?php

//$veritabani='HAYAL';
//$products=Products::get_products_by_api($veritabani);
//foreach ($products as $product){
//    if($veritabani=='BIEN'){
//        $type=2;//BIEN
//    }else{
//        $type=1;//QUA
//    }
//    $material=[
//        'material' =>$product['material'],
//        'currency' =>$product['currency'],
//        'price' =>$product['price1'],
//        'shipping' =>$product['shipping'],
//        'station' =>$product['station'],
//        'stationFactor' =>$product['stationFactor'],
//        'mtext' =>$product['mtext'],
//        'collection' =>$product['mtext'],
//        'pcUnit' =>$product['pcUnit'],
//        'brutweight'=>$product['brutWeight'],
//        'size'=>$product['ebat'],
//        'name'=>$product['isim'],
//        'cins'=>$product['cins'],
//        'thickness'=>$product['kalinlik'],
//        'surface'=>$product['yuzey'],
//        'reclap'=>$product['reclap'],
//        'matParlak'=>$product['matParlak'],
//        'color'=>$product['renk'],
//        'quality'=>$product['kalite'],
//        'totalStock'=>$product['totalStock'],
//        'reservestock'=>$product['reservestock'],
//        'fobStationFactor'=>$product['fobStationFactor'],
//        'paletKodu'=>$product['paletKodu'],
//        'pkstext'=>$product['pkstext'],
//        'squareinpack'=>$product['squareinpack'],
//        'packamount'=>$product['packamount'],
//        'totalquan'=>$product['totalquan'],
//        'product_origin'=>$type,
//    ];
//    $res=Products::set_material($material);
//}
$products=Products::get_all_products();


require cview('products');

