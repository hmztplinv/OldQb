<?php


class shipping{
    public static function get_aproved_shipping(){
        global $db;
        $query = $db->prepare("SELECT * FROM shippings");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_shipping_count($month){
        global $db;
        $query = $db->prepare("SELECT count (*) as count FROM shippings inner join navlun on shippings.navlunId=navlun.id INNER JOIN countries_executive on navlun.countryId=countries_executive.countryId where YEAR(arrivalDate)=YEAR(GETDATE()) and MONTH(arrivalDate)=:month AND shippings.shippingStatus in (3,4) AND countries_executive.userId=:userId ");
        $query->execute([
            'month'=>$month,
            'userId'=>session('user_id')
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_shipping_count_by_country_id($month,$countryid){
        global $db;
        $query = $db->prepare("SELECT count (*) as count FROM shippings inner join navlun on shippings.navlunId=navlun.id INNER JOIN countries_executive on navlun.countryId=countries_executive.countryId where YEAR(arrivalDate)=YEAR(GETDATE()) and MONTH(arrivalDate)=:month AND shippings.shippingStatus in (3,4) AND countries_executive.userId=:userId and countries_executive.countryId=:countryId ");
        $query->execute([
            'month'=>$month,
            'userId'=>session('user_id'),
            'countryId'=>$countryid
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);

    }
    public static function get_countries(){
        global $db;
        $query = $db->prepare("SELECT distinct countries_executive.countryId,countries_executive.countryName from countries_seller INNER JOIN countries_executive on countries_seller.countryId=countries_executive.countryId where countries_executive.userId=:userId");
        $query->execute(['userId'=>session('user_id')]);
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function get_shipping_count_bsady_month($month){
        global $db;
        $query = $db->prepare("SELECT count (*) as count FROM shippings inner join navlun on shippings.navlunId=navlun.id INNER JOIN countries_executive on navlun.countryId=countries_executive.countryId where YEAR(arrivalDate)=YEAR(GETDATE()) and MONTH(arrivalDate)=:month AND shippings.shippingStatus in (3,4) AND  countries_executive.userId=:userId ");
        $query->execute([
            'month'=>$month,
            'userId'=>session('user_id')
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function get_delivered_shipping(){
        global $db;
        $query = $db->prepare(" ");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function shipping_log($navlunid){
        global $db;
        $query = $db->prepare("INSERT INTO shippings_log  SELECT * FROM shippings WHERE navlunId=:navlunId");
       $result= $query->execute([
            'navlunId'=>$navlunid
        ]);
       return $result;
        Log::createLog(session('user_id'), "shippings_log", "insert.navlunid");
    }
    public static function approve_shipping($navlunid){
        global $db;
        $query = $db->prepare("UPDATE shippings set approved=1 WHERE navlunId=:navlunId");
        $result=$query->execute([
            'navlunId'=>$navlunid
        ]);
        return $result;
        Log::createLog(session('user_id'), "shippings", "update.approve");
    }
    public static function update_shipping_status($navlunid,$status){
        global $db;
        $query = $db->prepare("UPDATE shippings set shippingStatus=:status WHERE navlunId=:navlunId");
      $result=  $query->execute([
            'navlunId'=>$navlunid,
            'status'=>$status
        ]);
      return $result;
        Log::createLog(session('user_id'), "shippings", "update.shippingstatus");
    }
}
