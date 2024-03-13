<?php
$alldhls=Dhl::get_dhl_by_user_id();
if(post('save')){
    $dhlinfos=Dhl::get_shipment(post('dhlnumber'));
    if(isset($dhlinfos)){
        header("Location: ".operation_url('dhl_detail')."?dhlnumber=".post('dhlnumber'));
    }
}
require oview('dhl');
