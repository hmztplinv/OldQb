<?php
$navluns=Admin::get_unapproved_shippings_admin();
$companyname=[];
$currency=[];
$realfirm=[];
foreach ($navluns as $approvedorder)
{
    array_push($companyname,$approvedorder['companyName']);
    array_push($currency,$approvedorder['currency']);
    array_push($realfirm,$approvedorder['realFirm']);
}
$companyname=array_unique($companyname);
$currency=array_unique($currency);
$realfirm=array_unique($realfirm);


require aview('unaporved_shipping');
