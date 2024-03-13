<?php

$customer=Customer::get_customer_by_userid();

$profits=Customer::get_profit($customer["userId"]);
$selectpage=$_GET['page'];
$countproduct=Products::get_product("customer","count",$selectpage,get('origin'),get('collection'),get('size'),get('name'),get('cins'),get('thickness'),get('reclap'),get('color'),get('matParlak'));
$pageproductcount=count($countproduct)/18;
$productsfeatures=Products::get_product("customer" ,"general",$selectpage,get('origin'),get('collection'),get('size'),get('name'),get('cins'),get('thickness'),get('reclap'),get('color'),get('matParlak'));
//damp($productsfeatures);
$allproduct=[];


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

if (post('delete_cart')){
    $sa=Order::delete_cart_status_zero(post('delete_cart'));

}
if (post('new_cart')) {

    $new_cart = $_POST['new_cart'];
    $customer = Customer::get_customer_by_userid();
    list($id, $price,$sqm) = explode(',', $new_cart);
    $productid = $id;
    $productprice = $price;

 

    $countryid = Customer::get_districtid_by_userid();
    $existcart = Order::cartExist($productid);


    if ($customer['marketType'] == 3) {
        $carts = Order::get_carts_market_3_by_userid(session('user_id'));
    } else {
        $carts = Order::get_carts_by_userid(session('user_id'));
    }

    // Cart'ta hiç ürün yoksa veya bu ürün daha önce eklenmemişse
    if (empty($carts) || !in_array($productid, array_column($carts, 'productId'))) {
        Order::add_cart($productid, $countryid['countryId'],$productprice,$sqm);
        foreach ($carts as $item) {
            if ($item['productId'] == $productid) {
                Order::add_quantity_by_carts_product_id($productid);
            }
        }
    } else {
        // Cart'ta ürün varsa ve bu ürün daha önce eklenmişse
        foreach ($carts as $item) {
            if ($item['productId'] == $productid) {
                Order::add_quantity_by_carts_product_id($productid);
            }
        }
        damp('This item has already been added to your cart');
    }

    exit();
}



require cview('new_order');