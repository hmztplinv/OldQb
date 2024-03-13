<?php
$deletedcarts=Order::get_deleted_carts_by_userid();
if(post('subtractorder')){
    $result= Order::deleted_carts_return(post('subtractorder'));
    $message['suc']="Başarılı";
    die();
}
require cview('cart_delete');