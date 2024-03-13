<?php
if(get('id')){
    $navlun=Navlun::get_navlun_by_navlun_id(get('id'));
    if (post('addnewshipping')){
        $newshipping=[
            'navlunId'=>get('id'),
            'documentNo'=>post('documentNo'),
            'documentType'=>post('documentType'),
            'documentDate'=>date('d/m/Y H:i:s', strtotime(post('documentDate')) ),
            'matbuuNumber'=>post('matbuuNumber'),
            'departureDate'=>date('d/m/Y H:i:s', strtotime(post('departureDate')) ),
            'arrivalDate'=>date('d/m/Y H:i:s', strtotime(post('arrivalDate')) ),
            'priceWithTax'=>post('priceWithTax'),
            'goodsBuyer'=>post('goodsBuyer'),
            'createdDate'=>date('d/m/Y H:i:s', time()),
            'updatedDate'=>date('d/m/Y H:i:s', time())
        ];

        $orderids=Navlun::get_order_ids_by_navlun_id(get('id'),8);
        Navlun::update_navlun_has_shipping(get('id'));
        Navlun::update_navlun_status_by_navlun_id(get('id'),5);
        foreach ($orderids as $orderid){
            Order::update_order_status($orderid['id'],9);
        }
        Navlun::set_shipping($newshipping);
        header('location:'.operation_url('unapproved_lading'));
    }

}
else{
    header('location:'.operation_url('unapproved_lading'));
}


require oview('shipping_add');
