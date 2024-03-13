<?php
$alldhls=Dhl::get_dhl_by_user_id();
if(post('save')){
    $dhlinfos=Dhl::get_shipment(post('dhlnumber'));
    $exist=Dhl::dhl_exist($dhlinfos['pieceIds'][0]);
    if(empty($exist)){
        $dhl=[
            'userId' => session('user_id'),
            'pieceCount'=>count($dhlinfos['pieceIds']),
            'pieceId' => $dhlinfos['pieceIds'][0],
            'createdDate' => date('Y/m/d H:i:s',time()),
            'originAddress'=>$dhlinfos['originAddress'],
            'destinationAddress'=>$dhlinfos['destinationAddress'],
            'lastUpdatedLocation'=>$dhlinfos['lastUpdatedLocation'],
            'estimatedTimeOfDelivery'=>$dhlinfos['estimatedTimeOfDelivery'],
            'estimatedTimeOfDeliveryRemark'=>$dhlinfos['estimatedTimeOfDeliveryRemark'],
            'lastUpdatedDescription'=>$dhlinfos['lastUpdatedDescription'],
            'dhlNumber'=>post('dhlnumber')
        ];
        Dhl::set_dhl($dhl);
    }
    else{
        $dhlupdate=[
            'lastUpdateDate' => date('Y/m/d H:i:s',time()),
            'lastUpdatedLocation'=>$dhlinfos['lastUpdatedLocation'],
            'estimatedTimeOfDelivery'=>$dhlinfos['estimatedTimeOfDelivery'],
            'estimatedTimeOfDeliveryRemark'=>$dhlinfos['estimatedTimeOfDeliveryRemark'],
            'lastUpdatedDescription'=>$dhlinfos['lastUpdatedDescription'],
            'dhlNumber'=>post('dhlnumber')
        ];
        Dhl::update_dhl($dhlupdate);
    }
}


require aview('dhl');
