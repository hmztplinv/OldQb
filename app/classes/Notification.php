<?php
class Notification
{
    public static function set_notification($receiverid,$messageid){
        global $db;
        $query = $db->prepare("INSERT INTO [dbo].[notifications] ([senderUserId],[receiverUserId],[messageId],[notificationStatus],[createdAt],[updatedAt]) VALUES(:senderUserId,:receiverUserId,:messageId,1,:createdDate,:updatedDate)");
       $result= $query->execute([
            'senderUserId'=>session('user_id'),
            'receiverUserId'=>$receiverid,
            'messageId'=>$messageid,
            'createdDate'=>date('d/m/Y H:i:s',time()),
            'updatedDate'=>date('d/m/Y H:i:s',time())
        ]);
       return $result;
        Log::createLog(session('user_id'), "notficiations", "insert.notifications");
    }
    public static function update_notification($notificationid){
        global $db;
        $query = $db->prepare("UPDATE notifications set notificationStatus=2, updatedAt=:updatedDate WHERE id=:id");
       $result= $query->execute([
            'id'=>$notificationid,
            'updatedDate'=>date('d/m/Y H:i:s',time())
        ]);
        return $result;
        Log::createLog(session('user_id'), "notifications", "update.notifications");
    }
    public static function passive_notification($notificationid){
        global $db;
        $query = $db->prepare("UPDATE notifications set notificationStatus=0, updatedAt=:updatedDate  where id=:id ");
        $result=$query->execute([
            'id'=>$notificationid,
            'updatedDate'=>date('d/m/Y H:i:s',time())
        ]);
        return $result;
        Log::createLog(session('user_id'), "notifications", "update.notifications");

    }
    public static function get_notifications(){
        global $db;
        $query = $db->prepare("SELECT * FROM notifications_and_messages WHERE receiverUserId=:receiverUserId and notificationStatus=1 order by createdAt DESC");
        $query->execute([
            'receiverUserId'=>session('user_id')
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function get_notification_count(){
        global $db;
        $query = $db->prepare("SELECT count(*) as count FROM notifications WHERE receiverUserId=:receiverUserId and notificationStatus=1");
        $query->execute([
            'receiverUserId'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_admin_notifications(){
        global $db;
        $query = $db->prepare("SELECT a.uname as senderUserName,b.uname as receiverUserName,* FROM notifications_and_messages notifications_and_messages inner join users a on notifications_and_messages.senderUserId=a.id inner join users b on notifications_and_messages.receiveruserId=b.id where messageId in (4,8,10,11) and adminSeenStatus=1  order by createdAt DESC");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function admin_seen_notification($notificationid){
        global $db;
        $query = $db->prepare("UPDATE notifications set adminSeenStatus=2 where id=:id ");
        $result=$query->execute([
            'id'=>$notificationid
        ]);
        return $result;
        Log::createLog(session('user_id'), "notifications", "update.notifications");
    }
}
