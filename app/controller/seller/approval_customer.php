<?php
$customers=Order::get_active_orders_customers_byseller_userid(session('user_id'));

require sview('approval_customer');
