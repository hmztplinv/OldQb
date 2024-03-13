<?php
$customers=Customer::get_customers_by_seller_user_id();

//ajax posts
if(post('status')){
    $status=post('status');
    $customer_id=post('customer_id');
    //we check this cause ajax post wont post 0(ZERO), it post NULL and this ocur an error
    if ($status==3){
        Customer::update_profit_status(0,$customer_id,0);
        $status=0;
    }else if($status==2){
        Customer::add_profit($customer_id);
    }else{
        Customer::update_profit_status(0,$customer_id,0);
    }
    $res=Customer::update_customer_status(post('customer_id'),$status);
    damp($res);
}

//ajax posts end

require sview('customers');
