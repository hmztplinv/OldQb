<?php

$carts=Order::get_carts_by_userid(session('user_id'));
$add=post('add');
$reduce= post('reduce');
if(post('add')){

    Order::add_quantity_by_carts_product_id($add);
    header("Location: ".customer_url('cart'));
    exit;
}
if(post('reduce')){
    Order::reduce_quantity_by_carts_product_id($reduce);
    //damp($reduce);
    //damp($cards);
    Order::update_cart_status_zero($reduce);
    header("Location: ".customer_url('cart'));
    exit;

}
if(post('order')){
    $receiverids=Seller::get_sellers_userid_by_customer_userid();
    foreach ($receiverids as $receiverid){
        Notification::set_notification($receiverid['userId'],1);
    }
    Order::carts_order(post('deliveryType'));
    Order::update_status_zero_by_userid();

    header("Location: ".customer_url('order'));

    exit;
}

require cview('add_cart_new');
