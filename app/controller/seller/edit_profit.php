<?php
if(get('id')){
    $profit=Customer::get_profit(get('id'));
    $customer=Customer::get_customer_byuserid($profit[0]['customer_id']);

    if (post("editProfit")) {
        foreach ($profit as $item){
            Customer::update_profit($item["id"],post($item["id"]));
        }
        $message['suc'] = "You have successfully";
        $message['redirects'] = "seller/customer_detail?id=".base64_encode($customer['id']);
    }
    require sview('edit_profit');
}else{
    require sview('customers');
}
