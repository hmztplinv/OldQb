<?php
$approvedorders=Order::get_all_orders_by_seller_user_id();

require sview('all_orders');
