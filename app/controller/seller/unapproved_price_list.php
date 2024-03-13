<?php
$getpricelist=Seller::get_unapprove_price_list();

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
require sview('unapproved_price_list') ;
