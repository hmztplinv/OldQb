<?php

if (get('id')){

    $customer=Customer::get_customer_by_userid();

    $profit=Customer::get_profit($customer['userId']);

    if (get('currency')!=$customer['currency']){
        header("location:".customer_url('product_detail?id=').get('id').'&currency='.$customer['currency'].'&origin='.get('origin'));
    }
    $product=Products::get_product_detail(get('id'), get('currency'), get('origin'));

    $price = Order::get_product_by_api(get('id'), $product['currency'], $product['product_origin']);

    $stocks = Order::get_stock_by_api(get('id'), $product['product_origin']);

    $newprofit = [];

    foreach ($profit as $item) {
        if ($product['cins'] == $item['genus_name']) {

          array_push($newprofit,$item);

        }

    }

    //$customer['transportType'] == 'EXW' ? 0 : ($customer['transportType'] == 'FOB' && ( $price['fobStationFactor'] != NULL || $price['fobStationFactor'] != '' ) ? $price['fobStationFactor'] : ($customer['transportType'] == 'FOT' && ( $price['stationFactor'] != NULL || $price['stationFactor'] != '' ) ? $price['stationFactor'] : 0));
    $rawPrice = ( $price['price1'] * ( 1 + ($newprofit[0]['profit']/100)) ) + ($price['fobStationFactor']);

    $roundedPrice = round($rawPrice, 2); // İlk olarak, sayıyı normal şekilde yuvarla

    if ($customer['round'] == 1) {
        // Yukarı yuvarlama işlemi (ceil) burada 0.05 eklenerek yapılıyor
        $roundedPrice = ceil($roundedPrice / 0.05) * 0.05;
    } elseif ($customer['round'] == 2) {
        // Aşağı yuvarlama işlemi (floor) burada 0.05 çıkartılarak yapılıyor
        $roundedPrice = floor($roundedPrice / 0.05) * 0.05;
    }


    $newprice=$roundedPrice;
$newproduct=  $product;

    //$price=Order::get_product_by_api($product['id'],$product['currency'],$product['product_origin']);
    //damp($price);

    if(post('new_cart'))
    {

        $newprice=$roundedPrice;

        $productid = post('new_cart');
        $countryid=Customer::get_districtid_by_userid();
        $existcart=Order::cartExist($productid);
        if(empty($existcart['productId'])){
            Order::add_cart($productid,$countryid['countryId'],$newprice);}
        else{
            Order::add_quantity_by_carts_product_id($productid);
        }
        exit();
    }


}
else{
    header('location:'.site_url('customer/dene?page=1'));
}



require cview('product_detail');