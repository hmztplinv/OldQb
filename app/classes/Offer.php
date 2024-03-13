<?php

class Offer
{
    public static function add_offer($offer)
    {
        global $db;
        $query = $db->prepare("INSERT INTO offers values(:orderId,:sellerUserId,:customerId,:offer,:offerStatus,:created_at,:updated_at)");
        $result = $query->execute($offer);
        if ($result==NULL){
            return 0;
        }
        else{
            return 1;
        }
        Log::createLog(session('user_id'), "offers", "insert.offers");
    }

    public static function update_offer($offer)
    {
        global $db;
        $query = $db->prepare("UPDATE offers set offer=:offer,offerStatus=:offerStatus,updated_at=:updated_at,sellerUserId=:sellerUserId where orderId=:orderId");
        $result = $query->execute($offer);
        return $result;
        Log::createLog(session('user_id'), "offer", "update.offers");
    }

    public static function offers_log($id)
    {
        global $db;
        $query = $db->prepare("INSERT INTO offers_log SELECT * FROM offers WHERE id=:id");
        $result = $query->execute([
            'id' => $id
        ]);
        return $result;
        Log::createLog(session('user_id'), "offers_log", "insert.offers_log");
    }
}
