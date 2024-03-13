<?php
$orders=Order::get_delivered_order_by_userid();



$productName=[];
$productOffer=[];
$productQuantity=[];
foreach ($orders as $approvedorder)
{
    array_push($productName,$approvedorder['collection']);
    array_push($productOffer,$approvedorder['size']);
    array_push($productQuantity,$approvedorder['applicationarea']);
}
$productName=array_unique($productName);
$productOffer=array_unique($productOffer);
$productQuantity=array_unique($productQuantity);
require cview('delivered_orders');
