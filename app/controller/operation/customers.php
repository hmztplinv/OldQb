<?php
$countries = Operation::get_countries($_SESSION['user_id']);
$countryIds = array_map(function($item) {
    return $item['countryId'];
}, $countries);

$countriesString = implode(',', $countryIds);
$countr = [
    'country' => $countriesString
];

$customer = Operation::get_customers_by_userid($countr);

$customersWarden=[];
$customersAdress=[];

foreach ($customer as $customers)
{
    array_push($customersWarden,$customers['companyName']);
    array_push($customersAdress,$customers['countryName']);

}

$customersWarden=array_unique($customersWarden);
$customersAdress=array_unique($customersAdress);

require oview('customers');
