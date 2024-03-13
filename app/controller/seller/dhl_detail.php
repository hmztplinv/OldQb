<?php
if(get('dhlnumber')){
    $message=Dhl::get_shipment(get('dhlnumber'));

    $exist=Dhl::dhl_exist($message['pieceIds'][0]);
    if(post('save')){

        $dhl=Dhl::get_shipment(get('dhlnumber'));

        $exist=Dhl::dhl_exist($dhl['pieceIds'][0]);

        if(empty($exist)){
            $dhl=[
                'userId' => session('user_id'),
                'pieceCount'=>count($dhl['pieceIds']),
                'pieceId' => $dhl['pieceIds'][0],
                'createdDate' => date('d/m/Y H:i:s',time()),
                'lastUpdateDate'=>date('d/m/Y H:i:s',time()),
                'originAddress'=>$dhl['originAddress'],
                'destinationAddress'=>$dhl['destinationAddress'],
                'lastUpdatedLocation'=>$dhl['lastUpdatedLocation'],
                'estimatedTimeOfDelivery'=>$dhl['estimatedTimeOfDelivery'],
                'estimatedTimeOfDeliveryRemark'=>$dhl['estimatedTimeOfDeliveryRemark'],
                'lastUpdatedDescription'=>$dhl['lastUpdatedDescription'],
                'dhlNumber'=>get('dhlnumber'),
                'customerName'=>post('customer_name'),
                'description'=>post('description')
            ];
            $res=Dhl::set_dhl($dhl);
            if(isset($dhl)){
                header("Location: ".seller_url('dhl_detail')."?dhlnumber=".get('dhlnumber'));
            }
        }
        else{

            $dhlupdate=[
                'lastUpdateDate' => date('d/m/Y H:i:s',time()),
                'lastUpdatedLocation'=>$dhl['lastUpdatedLocation'],
                'estimatedTimeOfDelivery'=>$dhl['estimatedTimeOfDelivery'],
                'estimatedTimeOfDeliveryRemark'=>$dhl['estimatedTimeOfDeliveryRemark'],
                'lastUpdatedDescription'=>$dhl['lastUpdatedDescription'],
                'dhlNumber'=>get('dhlnumber'),
                'customerName'=>post('customer_name'),
                'description'=>post('description')
            ];

            $ress=Dhl::update_dhl($dhlupdate);

            if(isset($dhl)){
                header("Location: ".seller_url('dhl_detail')."?dhlnumber=".post('dhlnumber'));
            }
        }
    }
}
else{
    header("Location: ".seller_url('dhl'));

}
require sview('dhl_detail');
