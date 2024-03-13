<?php
$shippings=Navlun::get_copmlated_shippings();

$companyname=[];
$documentTypeSearch=[];
$documentNo=[];
foreach ($shippings as $approvedorder)
{
    array_push($companyname,$approvedorder['companyName']);
    array_push($documentTypeSearch,$approvedorder['documentType']);
    array_push($documentNo,$approvedorder['documentNo']);


}
$companyname=array_unique($companyname);
$documentTypeSearch=array_unique($documentTypeSearch);
$documentNo=array_unique($documentNo);
require oview('complated_lading');
