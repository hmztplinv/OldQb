<?php
$sellerid=Customer::get_sellerid_by_userid();
$sellerid=$sellerid['id'];
$unapprovedorders=Order::get_order_by_sellerid_unapproved($sellerid);
$orderid=post('save');
if(post('save')){

    Order::update_order_status_zero_by_orderid($orderid);
    header("Location: ".seller_url('unapproved_customer'));
    exit;


}

require sview('unapproved_customer');
