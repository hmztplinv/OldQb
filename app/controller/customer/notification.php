<?php
if(get('id')){
    Notification::update_notification(get('id'));
    header("location:".customer_url('notification'));
}
require cview('notification');
