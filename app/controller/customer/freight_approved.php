<?php
$customerid=Navlun::get_customerid();
$customerid=$customerid['id'];
$navluns=Navlun::get_approved_navlun_offers_by_customer_id($customerid);

require  cview('freight_approved');