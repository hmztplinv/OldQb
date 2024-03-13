<?php
if (get('id')){
    if ($_SESSION['role']=='0'){
        header("location:".customer_url('product_detail?id=').get('id').'&currency=USD&origin='.get('origin'));
    }
    $product=Products::get_product_detail(get('id'), get('currency'), get('origin'));

    //$price=Order::get_product_by_api($product['id'],$product['currency'],$product['product_origin']);
    //damp($price);
    $customer=Customer::get_customer_by_userid();
    if(post('new_cart'))
    {
        $productid = post('new_cart');
        $countryid=Customer::get_districtid_by_userid();
        $existcart=Order::cartExist($productid);
        if(empty($existcart['productId'])){
            Order::add_cart($productid,$countryid['countryId']);}
        else{
            Order::add_quantity_by_carts_product_id($productid);
        }
        exit();
    }
}
else{
    header('location:'.site_url('customer/dene?page=1'));
}
require view('product_detail');