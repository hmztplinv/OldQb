<?php
$selectpage=$_GET['page'];
$countproduct=Products::get_product("seller","count",$selectpage,get('origin'),get('collection'),get('size'),get('name'),get('cins'),get('thickness'),get('surface'),get('reclap'),get('matParlak'),get('color'),get('quality'));
$pageproductcount=count($countproduct)/18;
$productsfeatures=Products::get_product("seller","general",$selectpage,get('origin'),get('collection'),get('size'),get('name'),get('cins'),get('thickness'),get('surface'),get('reclap'),get('matParlak'),get('color'),get('quality'));
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
require view('product');