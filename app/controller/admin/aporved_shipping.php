<?php


$shippingsadmin=Admin::get_approved_shippings_admin();
$companynameSearch=[];
$currencySearch=[];
$sstatusSearch=[];
foreach ($shippingsadmin as $approvedorder)
{
    array_push($companynameSearch,$approvedorder['companyName']);
    array_push($currencySearch, $approvedorder['currency']);
    array_push($sstatusSearch,$approvedorder['shippingStatus']);


}
$companynameSearch=array_unique($companynameSearch);
$currencySearch=array_unique($currencySearch);
$sstatusSearch=array_unique($sstatusSearch);
require aview('aporved_shipping');
