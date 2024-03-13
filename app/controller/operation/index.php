<?php
$shippings=Navlun::get_copmlated_shippings();
$navluns=Navlun::get_navluns_for_shipping();
$customers=Navlun::get_customers_for_navlun_offer_by_countryId();
$countries=Shipping::get_countries();
if(post('notcount')){
    echo Notification::get_notification_count()['count'];
    die();
}

if(post('updateChart')){
    $values=" ";
    for ($i=1;$i<=12;$i++){
        $value=Shipping::get_shipping_count_by_country_id($i,post('updateChart'))['count'];
        $values.=$value.",";
    }
    echo $values;
    die();
}
if(post('updateProfit')){
    $values=" ";
    for ($i=1;$i<=12;$i++){
        $value=Navlun::get_navlun_profit_by_country_id(post('updateProfit'),$i)['profit'];
        $values.=$value.",";
    }
    echo $values;
    die();
}

require oview('index');
