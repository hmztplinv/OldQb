<?php
$shippings=Navlun::get_approved_shippings();

if(get('id')){
    Shipping::approve_shipping(get('id'));
    header("location:".operation_url('approved_lading'));
}

require oview('approved_lading');
