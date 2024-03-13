<?php
$approvedorders=Order::get_approved_orders();

$productsfeatures=Products::get_productname();



$productName=[];
$productOffer=[];
$productQuantity=[];
foreach ($approvedorders as $approvedorder)
{
    array_push($productName,$approvedorder['collection']);
    array_push($productOffer,$approvedorder['size']);
    array_push($productQuantity,$approvedorder['applicationarea']);
}
$productName=array_unique($productName);
$productOffer=array_unique($productOffer);
$productQuantity=array_unique($productQuantity);
require cview('complated_orders');
