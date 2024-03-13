<?php
$user = User::get_user_name();
$exist = Seller::seller_exist();
if($exist)
{
    $sellers=User::get_user_name();
}
if (post('save')){
    user::update_phone(post('phone'));
    header("Location: ".seller_url('seller_detail'));

}



require sview('seller_detail');
