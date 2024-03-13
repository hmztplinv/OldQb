<?php
$getpricelist=Seller::get_price_list();

$productName=[];
$productOffer=[];
$productQuantity=[];
foreach ($getpricelist as $approvedorder)
{
    array_push($productName,$approvedorder['collectionname']);
    array_push($productOffer,$approvedorder['offer']);
    array_push($productQuantity,$approvedorder['quantity']);
}
$productName=array_unique($productName);
$productOffer=array_unique($productOffer);
$productQuantity=array_unique($productQuantity);
if(post('approve')){

    Order::update_order_status(post('approve'),3);
    Order::update_offer_status(post('approve'),2);
    header("Location: ".seller_url('approved_price_list'));
}
require sview('price_list');

