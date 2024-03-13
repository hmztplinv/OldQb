<?php
$user = User::get_user_name();
$admin=User::get_user_name();
if (post('save')){
    user::update_phone(post('phone'));
    header("Location: ".admin_url('admin_detail'));
}
require aview('admin_detail');
