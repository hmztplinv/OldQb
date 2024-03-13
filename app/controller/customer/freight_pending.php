<?php
$customerid=Navlun::get_customerid();

$customerid=$customerid['id'];

$navluns=Navlun::get_navlun_offers_bycustomerid($customerid);


require cview('freight_pending');