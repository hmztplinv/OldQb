<?php
if(get('id')){
    $navlun=Navlun::get_navlun_by_navlun_id(get('id'));

    $shipping=Navlun::get_shipping_by_navlun_id(get('id'));

    if (post('updateshipping')){

        if(!post('navlunStatus')){
            Shipping::shipping_log(get('id'));
            $updateshipping=[
                'navlunId'=>get('id'),
                'documentNo'=>post('documentNo'),
                'documentType'=>post('documentType'),
                'documentDate'=>date('d/m/Y H:i:s', strtotime(post('documentDate')) ),
                'matbuuNumber'=>post('matbuuNumber'),
                'departureDate'=>date('d/m/Y H:i:s', strtotime(post('departureDate')) ),
                'arrivalDate'=>date('d/m/Y H:i:s', strtotime(post('arrivalDate')) ),
                'priceWithTax'=>post('priceWithTax'),
                'goodsBuyer'=>post('goodsBuyer'),
                'updatedDate'=>date('d/m/Y H:i:s', time())
            ];
            Navlun::update_shipping($updateshipping);
            header('location:'.operation_url('approved_lading'));
        }

        if(post('navlunStatus')){

            Shipping::shipping_log(get('id'));
            Navlun::update_navlun_status_by_navlun_id(get('id'),post('navlunStatus')-4);

            $orderids=Navlun::get_order_ids(get('id'));
            foreach ($orderids as $orderid){
                if(post('navlunStatus')==10){
                    Shipping::update_shipping_status(get('id'),2);
                    Order::update_order_status($orderid['orderId'],10);
                }
                else if (post('navlunStatus')==11){
                    Shipping::update_shipping_status(get('id'),3);
                    Order::update_order_status($orderid['orderId'],11);
                }
                else if(post('navlunStatus')==12){
                    Shipping::update_shipping_status(get('id'),4);
                  $sa= Order::update_order_status($orderid['orderId'],12);

                }
                else{
                    Shipping::update_shipping_status(get('id'),1);
                    $orderstatu=9;
                }

            }
            header('location:'.operation_url('approved_lading'));

        }
    }
}
else{
    header('location:'.operation_url('unapproved_lading'));
}
require oview('shipping_update');
