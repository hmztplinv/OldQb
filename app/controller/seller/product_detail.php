<?php

if (get('id')){






    $product=Products::get_product_detail(get('id'), get('currency'), get('origin'));

    $price = Order::get_product_by_api(get('id'), $product['currency'], $product['product_origin']);

    $stocks = Order::get_stock_by_api(get('id'), $product['product_origin']);


    $rawPrice = $price['price1'] ;

    $roundedPrice = round($rawPrice, 2); // İlk olarak, sayıyı normal şekilde yuvarla




    $newprice=$roundedPrice;
    $newproduct=  $product;

    //$price=Order::get_product_by_api($product['id'],$product['currency'],$product['product_origin']);
    //damp($price);




}
else{
    header('location:'.site_url('seller/dene?page=1'));
}



require sview('product_detail');