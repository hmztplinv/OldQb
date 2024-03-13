<?php

$orders=Order::get_all_order_by_userid();
require cview('all_orders');
