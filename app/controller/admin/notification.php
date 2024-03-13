<?php
$allnotifications=Notification::get_admin_notifications();
$element=['a','b','c'];
if(get('id')){
    Notification::admin_seen_notification(get('id'));
}
require aview('notification');
