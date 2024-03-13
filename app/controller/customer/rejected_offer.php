<?php
$approvedorders=Order::get_rejected_orders_by_user_id();
require cview('rejected_offer');
