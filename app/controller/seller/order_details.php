<?php
if (post('removeorder')) {
    $orderDetails = explode(',', post('removeorder'));
    $customerid = $orderDetails[0];
    $orderDate = $orderDetails[1];
    $orderId = $orderDetails[2];
    $deletedorder=Order::get_deleted_orders($orderId);
    $message['suc'] = 'Product is removed';
    $message['redirects'] = "seller/order_details?id={$customerid}&date={$orderDate}";

}

if(get('id')){
    $comment=Order::get_message(get('id'),get('date'));

    $offercount=Customer::get_offer_count(get('id'))['offerCount'];
    $customer=Customer::get_customer_by_customerid(get('id'));

    if ($customer['marketType']==3){
        $orders = Order::get_approval_orders_by_customer_id_markettype3(get('id'),get('date'));
        $reviseorders = Order::get_reapproval_orders_by_customer_id_markettype3(get('id'),get('date'));

    }
    else{
        $orders = Order::get_approval_orders_by_customer_id(get('id'));
        $reviseorders = Order::get_reapproval_orders_by_customer_id(get('id'),get('date'));
    }

if (empty($orders)){
    $orderid=$reviseorders[0]['orderId'];
}
else{
    $orderid=$orders[0]['orderId'];
}

    $exec=Order::get_approval_excutive_orders_by_customer_id($orderid);

    if(!empty($orders)) @$companyname= $orders[0]['companyName']; else @$companyname=$reviseorders[0]['companyName'];
    if (post('offer')) {

    $addcomment=Order::add_comment($_POST['comment'],post('getid'),post('getdate'));

     $sa=Notification::set_notification($exec[0]['userId'], 2);

        $orders = Order::get_approval_orders_by_customer_id(post('id'));

        $offercount=Customer::get_offer_count(post('customerId'))['offerCount'];
        if($offercount==post('offercount')){
            //plus 1 offerCount
            $res=Customer::update_offer_count(post('customerId'));
            //plus 1 offerCount end
            //add offer
            for ($i = 0; $i < count(post('orderId')); $i++) {
                $offer = [
                    'orderId' => post('orderId')[$i],
                    'sellerUserId' => session('user_id'),
                    'customerId' => post('customerId'),
                    'offer' => post('price')[$i],
                    'offerStatus' => 1,
                    'created_at' => date('d/m/Y H:i:s', time()),
                    'updated_at' => date('d/m/Y H:i:s', time())
                ];
                $a=Offer::add_offer($offer);
                $b=Order::update_order_quantity(post('orderId')[$i],post('quantity')[$i]);
                $updateproductprice=Order::update_order_product_price(post('orderId')[$i],post('productPrice')[$i]);
                Order::update_order_status(post('orderId')[$i], 2);
            }


            $message['suc']='Offer Succesfully Sent';
            $message['redirects']="seller/all_orders";
        }
        else
        {
            $message['err']='You Already Send Offer';
            $message['redirects']="seller/all_orders";
        }

    }

    if (post('reoffer')) {
       $sa= Notification::set_notification($exec[0]['userId'], 7);

        for ($i = 0; $i < count(post('orderId')); $i++) {
            Offer::offers_log(post('offerId')[$i]);
        }
        for ($i = 0; $i < count(post('orderId')); $i++) {
            $offer = [
                'orderId' => post('orderId')[$i],
                'sellerUserId' => session('user_id'),
                'offer' => post('price')[$i],
                'offerStatus' => 1,
                'updated_at' => date('d/m/Y H:i:s', time())
            ];
            $updateproductprice=Order::update_order_product_price(post('orderId')[$i],post('productPrice')[$i]);
            $b=Order::update_order_quantity(post('orderId')[$i],post('quantity')[$i]);
            Offer::update_offer($offer);
            Order::update_order_status(post('orderId')[$i], 4);
        }

        header("location:".seller_url('approval_customer'));
    }

}
else{
    header("location:".seller_url('approval_customer'));
}

require sview('order_details');
