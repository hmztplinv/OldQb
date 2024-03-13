<?php
$approvedorders=Order::get_approved_orders_seller_user_id();
require sview('approved_customer');
