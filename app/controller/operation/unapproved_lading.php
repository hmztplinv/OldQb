<?php
$navluns=Navlun::get_navluns_for_shipping();

if(get('id')){
    navlun::update_navlun_status_by_navlun_id(get('id'),5);
    header("location:".operation_url('unapproved_lading'));
}
require oview('unapproved_lading');
