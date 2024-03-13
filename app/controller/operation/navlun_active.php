<?php
$customers=Navlun::get_navlun_offers_by_country_id();
if(post('approve')){
    Navlun::update_navlun_status_by_navlun_id(post('approve'),2);
    header('location:'.operation_url('navlun_active'));
}
require oview('navlun_active');
