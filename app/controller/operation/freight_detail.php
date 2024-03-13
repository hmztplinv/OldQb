<?php
if(get('customerId')){
    $comment=Order::get_message(get('customerId'),get('date'));

$executive=Navlun::get_executive_name();
$executivename=$executive['operationExecutiveName'];
$executiveuserid=$executive['userId'];
$company=Navlun::get_company_name_by_customer_id(get('customerId'));
$companyname=$company['companyName'];
$countryId=$company['countryId'];
$countryName=Navlun::get_country_name_by_country_id($countryId)['countryName'];
$useridbycustomerid=Navlun::get_userıd_by_customer_ıd(get('customerId'));
$useridbycustomerid=$useridbycustomerid['userId'];

if ($company['marketType']==3){
    $orders=Navlun::get_orders_by_userid_marketype3($useridbycustomerid,get('date'));
}
else{
    $orders=Navlun::get_orders_by_userid($useridbycustomerid,get('date'));
}


$ports=Navlun::get_ports_active();

}
else{
    header('location:'.operation_url('navlun'));
}

if(post('add')){

    $addcomment=Order::add_comment($_POST['comment'],post('getid'),post('getdate'));


    $orderid=$orders[count($orders)-1]['orderId'];
    $sellerinfos=Navlun::get_seller_id_and_name_by_orderid($_POST['orderId'][0]);

    $executive=Navlun::get_executive_name();
    $freight_add=[
        'companyId'=>post('companyId'),
        'executiveName'=>$executivename,
        'executiveUserId'=>$executiveuserid,
        'realFirm'=>post('realFirm'),
        'containerQuantity'=>post('containerQuantity'),
        'bookingNo'=>post('bookingNo'),
        'shippingType'=>post('shippingType'),
        'companyName'=>$companyname,
        'countryId'=>$countryId,
        'navlunPrice'=>post('navlunPrice'),
        'navlunSoldPrice'=>post('navlunSoldPrice'),
        'navlunProfit'=>post('navlunProfit'),
        'currency'=>post('currencyUnit'),
        'createdDate'=>date('d/m/Y H:i:s', time()),
        'updatedDate'=>date('d/m/Y H:i:s', time()),
        'sellerName'=>$sellerinfos[0]['sellerName'],
        'sellerUserId'=>$sellerinfos[0]['userId'],
        'countryName'=>$countryName,
        'expires'=> date('d/m/Y H:i:s', strtotime("+90 days", time())),
        'navlunStatus'=>1,
        'portType'=>post('portType'),
        'notify'=>post('notify')
    ];

   $sa= Navlun::set_navlun($freight_add);
 
    $navlunid=Navlun::get_last_inserted_navlun_id();
    $navlunid=$navlunid['id'];

    for($i=0;$i<count(post('orderId'));$i++){
        $b=Order::update_order_quantity(post('orderId')[$i],post('quantity')[$i]);

        Navlun::match_navlun_with_orderids($navlunid,post('orderId')[$i]);
        Order::update_order_status(post('orderId')[$i],5);

    }
    Notification::set_notification($company['userId'], 2);
    header("Location:".operation_url('freight_detail'));
}
require oview('freight_detail');
