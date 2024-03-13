<?php
if(get('id')){
    Notification::update_notification(get('id'));
    header("location:".seller_url('notification'));
}
require sview('notification');
