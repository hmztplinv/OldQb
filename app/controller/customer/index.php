<?php

if (get('proforma')==1){
    $message['suc']='Proforma has been created please check your tabs';
    $message['redirects']="customer/index";
}
$populer=Order::get_top_five_populer_product();
$customer=Customer::get_customer_by_userid();
$montlysqm=Order::get_montly_sqm();
$montlygain=Order::get_montly_gain();
$succes=Order::get_succes();


$allordercount=Order::get_all_order_count_by_userid();
$totalorder=$allordercount['totalOrder'];


$approvedorder=Order::get_approved_order_count_by_userid();

$approvedorder=$approvedorder['totalOrder'];



$deliveredorder=Order::get_delivered_order_count_by_userid();
$deliveredorder=$deliveredorder['totalOrder'];
$productionprogram=Seller::get_production_program();

if(post('notcount')){
    echo Notification::get_notification_count()['count'];
    die();
}
require cview('index');
