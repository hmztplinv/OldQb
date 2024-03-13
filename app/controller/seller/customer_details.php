<?php
$sellerid=Seller::get_seller_id_by_user_id();
$sellerid=$sellerid['id'];
$customers=Customer::get_customers_by_seller_id($sellerid);
Customer::procedure($sellerid);

require sview('customer_detail');
