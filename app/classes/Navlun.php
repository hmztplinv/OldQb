<?php

class Navlun
{
    public static function get_navluns_by_countryId(){
        global $db;
        $query = $db->prepare("SELECT navlun.id as navlunId,* FROM navlun navlun inner join countries_executive countries_executive on navlun.countryId=countries_executive.countryId where executiveUserId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_customers_for_navlun_offer_by_countryId(){
        global $db;
        $query = $db->prepare("SELECT distinct customers.id as customerId,orders.created_at,customers.companyName,countries_executive.countryName,users.phone,users.email,customers.address,customers.taxNumber from orders orders inner join countries_executive countries_executive on orders.countryId=countries_executive.countryId inner join customers customers on orders.userId=customers.userId inner join users users on orders.userId=users.id where orders.status=2 and countries_executive.userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_navlun_offers_by_country_id(){
        global $db;
        $query = $db->prepare("SELECT *,navlun.id as navlunId FROM navlun navlun inner join countries_executive countries_executive on navlun.countryId=countries_executive.countryId inner join customers customers on navlun.companyId=customers.id inner join users users on customers.userId=users.id where navlun.navlunStatus=1 and  navlun.executiveUserId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_executive_name(){
        global $db;
        $query = $db->prepare("SELECT distinct operationExecutiveName,userId FROM countries_executive where userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function shipping_exist($id){
        global $db;
        $query = $db->prepare("SELECT * FROM shippings WHERE navlunId=:id");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_company_name_by_customer_id($customerid){
        global $db;
        $query = $db->prepare("SELECT * FROM customers WHERE id=:customerId");
        $query->execute([
            'customerId'=>$customerid
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_userıd_by_customer_ıd($customerid){
        global $db;
        $query = $db->prepare("SELECT userId FROM customers WHERE id=:customerId");
        $query->execute([
            'customerId'=>$customerid
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_customerid(){
        global $db;
        $query = $db->prepare("SELECT id FROM customers WHERE userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_orders_by_userid($userid,$date){

        global $db;
        $customer=Customer::get_customer_byuserid($userid);
        $query = $db->prepare("SELECT orders.id as orderId,orders.price as productPrice,* FROM orders orders INNER JOIN products products on orders.productId=products.id WHERE orders.status=2 and orders.userId=:userId and products.currency=:currency and products.product_origin=:marketType AND orders.created_at = CONVERT(datetime, :date, 120)");
        $query->execute([
            'userId'=>$userid,
            'currency'=>$customer['currency'],
            'marketType'=>$customer['marketType'],
            'date'=>$date
        ]);

        $result=$query->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_orders_by_userid_marketype3($userid,$date){

        global $db;
        $customer=Customer::get_customer_byuserid($userid);
        $query = $db->prepare("SELECT orders.id as orderId,orders.price as productPrice,* FROM orders orders INNER JOIN products products on orders.productId=products.id WHERE orders.status=2 and orders.userId=:userId and products.currency=:currency   AND orders.created_at = CONVERT(datetime, :date, 120)  ");
        $query->execute([
            'userId'=>$userid,
            'currency'=>$customer['currency'],
            'date'=>$date

        ]);

        $result=$query->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function set_navlun($navlunoffer)
    {

        global $db;
        $query =$db->prepare("INSERT INTO [dbo].[navlun]
           ([portType]
            ,[sellerName]
           ,[realFirm]
           ,[companyName]
           ,[bookingNo]
           ,[containerQuantity]
           ,[shippingType]
           ,[navlunPrice]
           ,[navlunSoldPrice]
           ,[navlunProfit]
           ,[currency]
           ,[companyId]
           ,[sellerUserId]
           ,[executiveName]
           ,[executiveUserId]
           ,[createdDate]
           ,[updatedDate]
           ,[navlunStatus]
           ,[countryName]
           ,[countryId]
           ,[expires]
           ,[notify])
     VALUES (:portType,:sellerName,:realFirm,:companyName,:bookingNo,:containerQuantity,
         :shippingType,:navlunPrice,:navlunSoldPrice,:navlunProfit,:currency,:companyId,:sellerUserId,:executiveName,:executiveUserId,:createdDate,:updatedDate,:navlunStatus,:countryName,:countryId,:expires
         ,:notify)");
        $result=$query->execute($navlunoffer);

        return $result;
        Log::createLog(session('user_id'),"navln","insert.navlun");
    }
    public static function get_seller_id_and_name_by_orderid($orderid){
        global $db;
        $query = $db->prepare("SELECT distinct countries_seller.userId,countries_seller.sellerName FROM offers offers inner join orders orders on offers.orderId=orders.id inner join countries_seller countries_seller on offers.sellerUserId=countries_seller.userId where orderId=:orderId");
        $query->execute([
            'orderId'=>$orderid
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_country_name_by_country_id($coutnryid){
        global $db;
        $query = $db->prepare("SELECT * FROM countries WHERE countryId=:countryId");
        $query->execute([
            'countryId'=>$coutnryid
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_last_inserted_navlun_id(){
        global $db;
        $query = $db->prepare("SELECT top 1 id FROM navlun order by id desc");
        $query->execute();
        $result=$query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function match_navlun_with_orderids($navlunid,$orderid){
        global $db;
        $query =$db->prepare("INSERT INTO [dbo].[navlun_by_order]([navlunId],[orderId],[createdDate],[updatedDate]) VALUES (:navlunId,:orderId,:createdDate,:updatedDate)");
    $result=    $query->execute([
            'navlunId'=>$navlunid,
            'orderId'=>$orderid,
            'createdDate'=>date('d/m/Y H:i:s', time()),
            'updatedDate'=>date('d/m/Y H:i:s', time())
        ]);
    return $result;
        Log::createLog(session('user_id'), "navlun", "insert.navlunbyorder");

    }
    public static function update_navlun_status_by_navlun_id($navlunid,$status){
        global $db;
        $query =$db->prepare("UPDATE navlun set navlunStatus=:status WHERE id=:id");
      $result=  $query->execute([
            'id'=>$navlunid,
            'status'=>$status
        ]);
      return $result;
        Log::createLog(session('user_id'), "navlun", "update.navlun");

    }
    public static function update_navlun_rejected($navlunid,$rejected){
        global $db;
        $query =$db->prepare("UPDATE navlun set rejected=:rejected WHERE id=:id");
        $result=  $query->execute([
            'id'=>$navlunid,
            'rejected'=>$rejected
        ]);
        return $result;
        Log::createLog(session('user_id'), "navlun", "update.navlun.rejected");

    }
    public static function update_navlun($updatenavlun){
        global $db;
        $query =$db->prepare("UPDATE [dbo].[navlun] SET [portType]=:portType, [realFirm] =:realFirm,[bookingNo] =:bookingNo,[containerQuantity] = :containerQuantity,[shippingType] =:shippingType,[navlunPrice] =:navlunPrice,[navlunSoldPrice] =:navlunSoldPrice,[navlunProfit] = :navlunProfit,[currency] = :currency,[updatedDate] =:updatedDate,[navlunStatus] = :navlunStatus WHERE id=:navlunId");
      $result=  $query->execute($updatenavlun);
      return $result;
        Log::createLog(session('user_id'), "navlun", "update.navlun");
    }

    public static function set_shipping($shipping)
    {
        global $db;
        $query = $db->prepare("INSERT INTO [dbo].[shippings] ([navlunId] ,[documentNo],[documentType],[documentDate],[matbuuNumber],[departureDate],[arrivalDate],[priceWithTax],[goods_buyer],[createdDate],[updatedDate],[shippingStatus]) VALUES(:navlunId,:documentNo,:documentType,:documentDate,:matbuuNumber,:departureDate,:arrivalDate,:priceWithTax,:goodsBuyer,:createdDate,:updatedDate,1)");
        $result=$query->execute($shipping);
        return $result;
        Log::createLog(session('user_id'), "navlun", "insert.shippings");
    }
    public static function get_navluns_for_shipping(){
        global $db;
        $query =$db->prepare("SELECT *
FROM navlun
WHERE navlunStatus = 4
    AND executiveUserId = :userId
    AND hasShipping = 0
ORDER BY createdDate DESC;
");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function update_navlun_has_shipping($navlunid){
        global $db;
        $query =$db->prepare("UPDATE navlun set hasShipping=1 where id=:navlunId");
     $result=   $query->execute([
            'navlunId'=>$navlunid
        ]);
        return $result;
        Log::createLog(session('user_id'), "navlun", "update.navlun");
    }
    public static function get_navlun_offers_by_customerid($customerid){
        global $db;
        $query = $db->prepare("SELECT distinct navlun.id as navlunId,containerQuantity, executiveName,realFirm,shippingType,navlun.createdDate,DATEDIFF ( day , navlun.createdDate , expires ) as expires  ,navlun.navlunSoldPrice,currency from navlun navlun inner join navlun_by_order navlun_by_order on navlun.id=navlun_by_order.navlunId inner join orders orders on navlun_by_order.orderId=orders.id where orders.status in (1,4) and companyId=:customerId");
        $query->execute([
            'customerId'=>$customerid
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_navlun_offers_bycustomerid($customerid){
        global $db;

        $query = $db->prepare("SELECT DISTINCT
    navlun.id AS navlunId,
    containerQuantity,
    executiveName,
    realFirm,
    shippingType,
    navlun.createdDate,
    DATEDIFF(day, navlun.createdDate, expires) AS expires,
    navlun.navlunSoldPrice,
    currency
FROM
    navlun navlun
INNER JOIN
    navlun_by_order navlun_by_order ON navlun.id = navlun_by_order.navlunId
INNER JOIN
    orders orders ON navlun_by_order.orderId = orders.id
WHERE
    orders.status IN (1, 4, 5)
    AND companyId = :customerId
ORDER BY
    navlun.createdDate DESC;
");
        $query->execute([
            'customerId'=>$customerid
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_approved_navlun_offers_by_customer_id($customerid){
        global $db;
        $query = $db->prepare("SELECT distinct navlun.id as navlunId,containerQuantity, executiveName,realFirm,shippingType,navlun.createdDate,DATEDIFF ( day , navlun.createdDate , expires ) as expires  ,navlun.navlunSoldPrice,currency from navlun navlun inner join navlun_by_order navlun_by_order on navlun.id=navlun_by_order.navlunId inner join orders orders on navlun_by_order.orderId=orders.id where orders.status=6 and navlun.navlunStatus=2 and companyId=:customerId");
        $query->execute([
            'customerId'=>$customerid
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_sent_navlun_offers(){
        global $db;
        $query = $db->prepare("SELECT * FROM navlun WHERE navlunStatus in (4,5,6,7,8)  and executiveUserId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_navlun_offers_for_bookingno_adding(){
        global $db;
        $query = $db->prepare("SELECT *
FROM navlun
WHERE navlunStatus = 2
    AND executiveUserId = :userId
ORDER BY createdDate DESC; -- id'ye göre büyükten küçüğe sıralama
");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_orders_by_navlun_id($navlunid){
        global $db;
        $query = $db->prepare("SELECT * FROM orders orders INNER JOIN navlun_by_order navlun_by_order on orders.id=navlun_by_order.orderId inner join products products on orders.productId=products.id INNER JOIN  offers offers on orders.id=offers.orderId where orders.status in (1,4) and navlun_by_order.navlunId=:navlunId");
        $query->execute([
            'navlunId'=>$navlunid
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_reason_of_rejection_by_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM reason_of_rejection where id=:id");
        $query->execute([
            'id'=>$id
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC)['name'];
        return $result;
    }
    public static function get_reason_of_rejection(){
        global $db;
        $query = $db->prepare("SELECT * FROM reason_of_rejection");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_ports(){
        global $db;
        $query = $db->prepare("SELECT * FROM ports");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_ports_byid($id){
        global $db;
        $query = $db->prepare("SELECT * FROM ports where id=:id");
        $query->execute(['id'=>$id]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_ports_active(){
        global $db;
        $query = $db->prepare("SELECT * FROM ports where status=1");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function InsertPort($port){
        global $db;
        $query =$db->prepare("INSERT INTO [dbo].[ports]([name]) VALUES (:name)");
        $result=    $query->execute([
            'name'=>$port,

        ]);
        return $result;
        Log::createLog(session('user_id'), "ports", "insert.ports");

    }
    public static function update_ports($id)
    {
        global $db;
        $query = $db->prepare("UPDATE ports SET name=:name WHERE id=:id");
        $result=$query->execute([
            'name'=>$id['name'],
            'id'=>$id['id']
        ]);
        return $result;
        Log::createLog(session('user_id'), "ports", "update.port");
    }
    public static function update_ports_status($id)
    {
        global $db;
        $query = $db->prepare("UPDATE ports SET status=:status WHERE id=:id");
        $result = $query->execute(['status' => 0, 'id' => $id]);

        if ($result) {
            Log::createLog(session('user_id'), "ports", "update.port");
        }

        return $result;
    }

    public static function set_rejection($name){
        global $db;
        $query = $db->prepare("INSERT INTO [dbo].[reason_of_rejection]([name]) VALUES(:name)");
        $query->execute([
            'name'=>$name
        ]);
        return $db->lastInsertId();
    }
    public static function get_orders_bynavlun_id($navlunid){
        global $db;
        $navlun=Navlun::get_navlun_by_navlun_id($navlunid);
        $customer=Customer::get_customer_by_customerid($navlun['companyId']);
        $query = $db->prepare("SELECT  orders.price as ProductPrice,* FROM orders orders INNER JOIN navlun_by_order navlun_by_order on orders.id=navlun_by_order.orderId inner join products products on orders.productId=products.id INNER JOIN  offers offers on orders.id=offers.orderId where orders.status in (1,4,5) and navlun_by_order.navlunId=:navlunId and products.currency=:currency and products.product_origin=:marketType");
        $query->execute([
            'navlunId'=>$navlunid,
            'currency'=>$customer['currency'],
            'marketType'=>$customer['marketType']
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_orders_bynavlun_id_markettype3($navlunid){
        global $db;
        $navlun=Navlun::get_navlun_by_navlun_id($navlunid);
        $customer=Customer::get_customer_by_customerid($navlun['companyId']);
        $query = $db->prepare("SELECT orders.price as ProductPrice,* FROM orders orders INNER JOIN navlun_by_order navlun_by_order on orders.id=navlun_by_order.orderId inner join products products on orders.productId=products.id INNER JOIN  offers offers on orders.id=offers.orderId where orders.status in (1,4,5) and navlun_by_order.navlunId=:navlunId and products.currency=:currency  ");
        $query->execute([
            'navlunId'=>$navlunid,
            'currency'=>$customer['currency'],

        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_reason_for_rejection($orderid){
        global $db;
        $query = $db->prepare("SELECT * FROM navlun_by_order INNER JOIN navlun on navlun.id=navlun_by_order.navlunId where navlun_by_order.orderId=:orderId");
        $query->execute([
            'orderId'=>$orderid
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC)['rejected'];
        return $result;
    }
    public static function get_order_ids_by_navlun_id($navlunid,$orderstatus){
        global $db;
        $query = $db->prepare("select orders.id from orders orders inner join navlun_by_order navlun_by_order on orders.id=navlun_by_order.orderId inner join products products on orders.productId=products.id where orders.status=:status and navlun_by_order.navlunId=:navlunId");
        $query->execute([
            'navlunId'=>$navlunid,
            'status'=>$orderstatus
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_order_id_by_navlun_id($navlunid){
        global $db;
        $query = $db->prepare("select orderId from navlun_by_order where navlunId=:navlunId");
        $query->execute([
            'navlunId'=>$navlunid
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_order_ids($navlunid){
        global $db;
        $query = $db->prepare("select orderId from navlun_by_order where navlunId=:navlunId");
        $query->execute([
            'navlunId'=>$navlunid
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function get_rejeckted_orders_by_navlun_id($navlunid){
        global $db;
        $query = $db->prepare("select orders.price as productPrice,* from orders orders inner join navlun_by_order navlun_by_order on orders.id=navlun_by_order.orderId inner join products products on orders.productId=products.id where orders.status in (8,6,4) and products.currency='EUR' and navlun_by_order.navlunId=:navlunId");
        $query->execute([
            'navlunId'=>$navlunid
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_orderid($navlunid){
        global $db;
        $query = $db->prepare("select orderId from orders orders inner join navlun_by_order navlun_by_order on orders.id=navlun_by_order.orderId inner join products products on orders.productId=products.id where orders.status in (8,6,4) and products.currency='EUR' and navlun_by_order.navlunId=:navlunId");
        $query->execute([
            'navlunId'=>$navlunid
        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_navlun_by_navlun_id($navlunid){
        global $db;
        $query = $db->prepare("select * from navlun where id=:navlunId and navlunStatus!=0");
        $query->execute([
            'navlunId'=>$navlunid
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_shipping_by_navlun_id($navlunid){
        global $db;
        $query = $db->prepare("select * from shippings where navlunId=:navlunId and shippingStatus!=0");
        $query->execute([
            'navlunId'=>$navlunid
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_rejected_navlun_by_operation_executive_id(){
        global $db;
        $query = $db->prepare("select distinct navlun.id as navlunId,sellerName,realFirm,customers.companyName,shippingType,navlunSoldPrice,customers.currency,executiveName,countryName,address,uname,email from navlun navlun inner join customers customers on navlun.companyId=customers.id inner join users users on customers.userId=users.id INNER JOIN navlun_by_order navlun_by_order on navlun.id=navlun_by_order.navlunId INNER JOIN orders orders on navlun_by_order.orderId=orders.id where navlun.NavlunStatus=3 and orders.status=4 and navlun.executiveUserId=:id");
        $query->execute([
            'id'=>session('user_id')
        ]);
        $result=$query->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function update_shipping($updateshipping)
    {
        global $db;
        $query = $db->prepare("UPDATE shippings SET documentNo=:documentNo,documentType=:documentType, documentDate=:documentDate,matbuuNumber=:matbuuNumber, departureDate=:departureDate, arrivalDate=:arrivalDate, priceWithTax=:priceWithTax, goods_buyer=:goodsBuyer, updatedDate=:updatedDate WHERE navlunId=:navlunId");
        $result=$query->execute($updateshipping);
        return $result;
        Log::createLog(session('user_id'), "shippings", "update.shippings");
    }

    public static function get_new(){
        global $db;
        $query = $db->prepare("select navlun.id as navlunId,* from navlun navlun inner join customers customers on navlun.companyId=customers.id inner join users users on customers.userId=users.id where navlun.NavlunStatus=3 and navlun.executiveUserId=:id");
        $query->execute([
            'id'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_approved_shippings(){
        global $db;
        $query = $db->prepare("SELECT shippings.id as shippingId, * 
FROM shippings shippings 
INNER JOIN navlun navlun ON shippings.navlunId = navlun.id 
WHERE navlunStatus IN (4, 5, 6, 7, 8) 
AND shippings.shippingStatus != 0 
AND navlun.executiveUserId = :id 
ORDER BY navlun.createdDate DESC;
");
        $query->execute([
            'id'=>session('user_id')
        ]);
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }
    public static function get_copmlated_shippings(){
        global $db;
        $query = $db->prepare("SELECT navlun.createdDate,navlun.companyName, navlun.id as NavlunId, shippings.documentType, shippings.documentNo, uname,
       shippings.priceWithTax, navlun.navlunSoldPrice, navlun.currency, shippings.goods_buyer,
       shippings.shippingStatus, navlun.navlunProfit
FROM shippings shippings
INNER JOIN navlun navlun ON shippings.navlunId = navlun.id
INNER JOIN customers customers ON navlun.companyId = customers.id 
INNER JOIN users users ON customers.userId = users.id
INNER JOIN countries_executive countries_executive ON countries_executive.countryId = navlun.countryId
WHERE shippings.shippingStatus IN (3, 4) AND countries_executive.userId = :id
ORDER BY navlun.createdDate DESC;  -- Bu kısmı ekledim
 ");
        $query->execute([
            'id'=>session('user_id')
        ]);
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }

    public static function log_navlun($navlunid){
        global $db;
        $query = $db->prepare("INSERT INTO [dbo].[navlun_log] ([navlunId],[sellerName],[realFirm],[companyName],[bookingNo],[containerQuantity],[shippingType],[navlunPrice],[navlunSoldPrice],[navlunProfit],[currency],[companyId],[sellerUserId],[executiveName],[executiveUserId],[createdDate],[updatedDate],[navlunStatus],[countryName],[countryId],[expires]) select * from navlun where id=:navlunId");
        $result=$query->execute([
            'navlunId'=>$navlunid
        ]);
        return $result;
        Log::createLog(session('user_id'), "navlun_log", "insert.navlun_log");
    }

    public static function get_navlun_profit($month){
        global $db;
        $query = $db->prepare("select sum(navlunSoldPrice) as profit from navlun where navlunStatus in (7,8) and YEAR(expires)=YEAR(GETDATE()) and MONTH(expires)=:month and executiveUserId=:userId");
        $query->execute([
            'month'=>$month,
            'userId'=>session('user_id'),

        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_navlun_profit_by_country_id($countryid,$month){
        global $db;
        $query = $db->prepare("select sum(navlunSoldPrice) as profit from navlun where navlunStatus in (7,8) and YEAR(expires)=YEAR(GETDATE()) and MONTH(expires)=:month and executiveUserId=:userId and countryId=:countryId");
        $query->execute([
            'month'=>$month,
            'countryId'=>$countryid,
            'userId'=>session('user_id'),

        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }


}
