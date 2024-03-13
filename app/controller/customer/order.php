<?php

$orders=Order::get_orders_for_offer();
if (post('addorder')){
    Order::add_order(post('addorder'));
    die();
}
if (post('subtractorder')){
    Order::subtract_order(post('subtractorder'));
    $quantity=Order::get_order_quantity_by_order_id(post('subtractorder'));
    if($quantity['quantity']==0){
        Order::update_order_status(post('subtractorder'),0);
        echo "0";
        die();
    }
    die();
}
if (post('deleteorder')){
    Order::update_order_status(post('deleteorder'),0);
    die();
}
require cview('order');
