<?php

$productionprogram=Admin::get_production_program_admin_top3();
$approvedorders=Admin::get_salefollow_admin();
$countshipping=Admin::get_complated_shippings_Admin();
$countunapproved=Admin::get_unapproved_shippings_admin();
$countpendingfreight=Admin::get_pending_freight_admin();


if(post('notcount')){
    echo count(Notification::get_admin_notifications());
    die();
}
require aview('index');
