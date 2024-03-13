<?php




$selectpage=$_GET['page'];
$countproduct=Products::get_product("seller","count",$selectpage,2,get('collection'),get('size'),get('name'),get('cins'),get('thickness'),get('reclap'),get('color'),get('matParlak'));
$pageproductcount=count($countproduct)/40;
$productsfeatures=Products::get_product_admin("seller" ,"general",$selectpage,2,get('collection'),get('size'),get('name'),get('cins'),get('thickness'),get('reclap'),get('color'),get('matParlak'));

$allproduct=[];

////aşağısı sorulacak
//foreach ($productsfeatures as $item) {
//
//    $allproductpriceandstock=Order::get_product_by_api($item['id'],$item['currency'],$item['product_origin']);
//    array_push($allproduct,$allproductpriceandstock);
//}

//yukarısı sorulacak

$origon=Products::get_filter("product_origin");
$collection=Products::get_filter("collection");
$size = Products::get_filter("size");
$name = Products::get_filter("name");
$cins = Products::get_filter("cins");
$thickness = Products::get_filter("thickness");
$surface =   Products::get_filter("surface") ;
$reclap =   Products::get_filter("reclap") ;
$matParlak =   Products::get_filter("matParlak") ;
$color = Products::get_filter("color");
$quality = Products::get_filter("quality");

require aview('overdue');