<?php
$user = User::get_user_name();
$operation=User::get_user_name();
if (post('save')){
    user::update_phone(post('phone'));
    header("Location: ".operation_url('operation_detail'));
}
require oview('operation_detail');
