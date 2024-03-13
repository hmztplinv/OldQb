<?php

$productid = post('addcart');
$countryid=Customer::get_districtid_by_userid();
$existcart=Order::cartExist($productid);
if(empty($existcart['productId'])){
    Order::add_cart($productid,$countryid['countryId']);}
else{
    Order::add_quantity_by_carts_product_id($productid);
}

header("Location: ".customer_url('new_order'));

require cview('new_order');
