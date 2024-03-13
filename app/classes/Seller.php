<?php

class Seller
{
    public static function set_seller_account($sellers)
    {
        global $db;
        $query =$db->prepare("INSERT INTO dbo.[sellers] ([name],[surname],[email]) VALUES (:name,:surname,:email)");
        $result= $query->execute($sellers);

        echo $result;
        if ($result){
            Log::createLog($db->lastInsertId(),"sellers","seller_detail");
            $message['suc'] = "Başarıyla kayıt oldunuz. Yönlendiriliyorsunuz.";
            $message['redirects'] = "sales";
        }else{

            $message['err'] = "Kayıt olurken bir hatayla karşılaştınız.";
            $message['redirects'] = "index";
        }
        exit();

    }

    public static function get_customers_by_seller_user_id(){
        global $db;
        $query = $db->prepare("SELECT * FROM customers inner join countries_seller on customers.countryId=countries_seller.countryId where countries_seller.userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_seller_id_by_user_id(){
        global $db;
        $query = $db->prepare("SELECT userId FROM countries_seller  ");
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_seller_ids_by_user_countryid($id){
        global $db;
        $query = $db->prepare("SELECT userId FROM countries_seller where countryId=:id ");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }
    public static function seller_exist(){
        global $db;
        $query = $db->prepare("SELECT * FROM countries_seller WHERE userId=:userId");
        $query ->execute([
            'userId' => session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function operation_exist(){
        global $db;
        $query = $db->prepare("SELECT * FROM countries_executive WHERE userId=:userId");
        $query ->execute([
            'userId' => session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function get_production_program(){
        global $db;
        $query = $db->prepare("SELECT * FROM production_program WHERE status!=0");
        $query->execute( );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_production_program_top_3(){
        global $db;
        $query = $db->prepare("SELECT TOP 3* FROM production_program WHERE   userId=:userId ");
        $query->execute( [
            'userId' => session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function add_product_program($x)
    {
        global $db;
        $query = $db->prepare("INSERT INTO [dbo].[production_program]
           ([production_code]
           ,[description]
           ,[bantName]
           ,[ihr]
           ,[product_code]
           ,[product_name]
           ,[ean]
           ,[warehouse]
           ,[box]
           ,[start_date]
           ,[finish_date]
           ,[info]
           ,[created_date]
           ,[updated_date]
           ,[status]
           ,[start_time]
           ,[productOrigin]
           ,[finish_time])
                    VALUES(:production_code,:description,:bant_name,:ihr,:product_code,:product_name,:ean,:warehouse,:box,:start_date,:finish_date,:info,:created_date,:updated_date,1,:start_time,:product_origin,:finish_time)");
       $result= $query->execute($x);
       return $result!=NULL ? 1:0;
        Log::createLog(session('user_id'), "production_program", "insert.production_program");
    }

    public static function get_receviable_status(){
        global $db;
        $query = $db->prepare("SELECT * FROM production_program");
        $query->execute( );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_price_list(){
        global $db;
        $query = $db->prepare("SELECT orders.id as orderId,orders.userId as userId,orders.status as orderStatus,* FROM countries_seller countries_seller inner join orders orders on countries_seller.countryId=orders.countryId inner join offers offers on offers.orderId=orders.id inner join products products on products.id=orders.productId where orders.status=2 and offers.offerStatus=1 and countries_seller.userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_approve_price_list(){
        global $db;
        $query = $db->prepare("SELECT  o.status as orderStatus,o.quantity as quantity,offer,* from countries_seller cs INNER JOIN orders o on cs.countryId=o.countryId inner join offers offers on offers.orderId=o.id inner join products p on p.id=o.productId where o.status=3 and offers.offerStatus=2 and cs.userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_unapprove_price_list(){
        global $db;
        $query = $db->prepare("SELECT  o.status as orderStatus,o.quantity as quantity,offer,* from countries_seller cs inner join orders o on cs.countryId=o.countryId inner join offers offers on offers.orderId=o.id inner join products p on p.id=o.productId where o.status=2 and offers.offerStatus=3 and cs.userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function update_approved_list($productionprogram)
    {
        global $db;
        $query = $db->prepare("UPDATE production_program SET start_date=:start_date,finish_date=:finish_date,production_code=:production_code,description=:description,ihr=:ihr,product_code=:product_code,product_name=:product_name,ean=:ean,warehouse=:warehouse,box=:box,info=:info,updated_date=:updated_date where id=:id");
       $result=$query->execute($productionprogram);
       return $result;
        Log::createLog(session('user_id'), "production_program", "update.production_program");
    }

    public static function get_sellers_userid_by_customer_userid(){
        global $db;
        $query = $db->prepare("SELECT distinct countries_seller.userId FROM countries_seller countries_seller inner join customers customers on customers.countryId=countries_seller.countryId inner join users users on customers.userId=users.id where customers.userId is not NULL and customers.userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_program_by_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM production_program where id=:id ");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function update_production_program($productionprogram)
    {
        global $db;
        $query = $db->prepare("UPDATE [dbo].[production_program]
   SET [start_date] = :start_date
      ,[finish_date] = :finish_date
      ,[bantName] = :bantName
      ,[productOrigin] = :product_origin
      ,[production_code] = :production_code
      ,[description] = :description
      ,[ihr] = :ihr
      ,[product_name] = :product_name
      ,[product_code] = :product_code
      ,[ean] = :ean
      ,[warehouse] = :warehouse
      ,[box] = :box
      ,[info] = :info
      ,[updated_date] = :updated_date
      ,[finish_time] = :finish_time
      ,[start_time] = :start_time
      ,[revised] = revised+1
 WHERE id=:id");
        $result=$query->execute($productionprogram);
        return $result;
        Log::createLog(session('user_id'), "production_program", "update.production_program");
    }
    public static function passive_production_program_by_id($id)
    {
        global $db;
        $query = $db->prepare("UPDATE production_program SET status=0 where id=:id");
       $result= $query->execute([
            'id'=>$id
        ]);
       return $result;
        Log::createLog(session('user_id'), "production_program", "update.status");
    }

}
