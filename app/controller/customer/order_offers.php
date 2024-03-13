<?php
$orders=Order::get_offers();

$productName=[];
$productOffer=[];
foreach ($orders as $approvedorder)
{
    array_push($productName,$approvedorder['collection']);
    array_push($productOffer,$approvedorder['size']);
}
$productName=array_unique($productName);
$productOffer=array_unique($productOffer);
if (post('approve')){
    Order::update_order_status(post('approve'),3);
    Order::update_offer_status(post('approve'),2);
    $receiverids=Seller::get_sellers_userid_by_customer_userid();
    foreach ($receiverids as $receiverid){
        Notification::set_notification($receiverid['userId'],4);
    }
    die();
}
if (post('reject')){
    Order::update_order_status(post('reject'),2);
    Order::update_offer_status(post('reject'),3);
    $receiverids=Seller::get_sellers_userid_by_customer_userid();
    foreach ($receiverids as $receiverid){
        Notification::set_notification($receiverid['userId'],3);
    }
    die();
}

require cview('order_offers');
