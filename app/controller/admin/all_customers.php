<?php
$customers=Admin::get_customers_admin();
$companyNameSearch=[];
$customerAdressSearch=[];

foreach ($customers as $approvedorder)
{
    array_push($companyNameSearch,$approvedorder['companyName']);
    array_push($customerAdressSearch,$approvedorder['address']);

}
$companyNameSearch=array_unique($companyNameSearch);
$customerAdressSearch=array_unique($customerAdressSearch);



require aview('all_customers');
