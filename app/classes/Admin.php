<?php


class admin
{
    public static function get_salefollow_admin(){
        global $db;
        $query = $db->prepare("SELECT TOP 5*FROM orders INNER JOIN products ON orders.productId = products.id;");
        $query ->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function get_complated_shippings_Admin(){
        global $db;
        $query = $db->prepare("SELECT * FROM shippings INNER JOIN navlun ON shippings.navlunId=navlun.id INNER JOIN  customers  ON navlun.companyId=customers.id inner join users users on customers.userId=users.id  WHERE shippings.shippingStatus in (3,4)");
        $query->execute([
        ]);
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }
    public static function get_unapproved_shippings_admin(){
        global $db;
        $query =$db->prepare("SELECT * FROM navlun WHERE navlunStatus=4 and executiveUserId=:userId and hasShipping=0");
        $query->execute([
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_pending_freight_admin(){
        global $db;
        $query =$db->prepare("SELECT * FROM orders where orders.status=3  ");
        $query->execute([
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_production_program_admin_top3(){
        global $db;
        $query = $db->prepare("SELECT TOP 3* FROM production_program where status!=0");
        $query->execute( [

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_allorders_admin(){
        global $db;
        $query = $db->prepare("SELECT products.id as productId,offers.offer as soldPrice,orders.quantity as orderQuantity,* FROM orders orders INNER JOIN countries_seller countries_seller on orders.countryId=countries_seller.countryId inner join products products on orders.productId=products.id inner join offers offers on orders.id=offers.orderId where orders.status!=0 ");
        $query->execute([

        ]);
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }
    public static function get_priceoffer_admin(){
        global $db;
        $query = $db->prepare("SELECT  o.status as orderStatus,o.quantity as quantity,offer,* from countries_seller cs inner JOIN orders o on cs.countryId=o.countryId inner JOIN offers offers on offers.orderId=o.id inner join products p on p.id=o.productId where o.status=2 and offers.offerStatus=3 ");
        $query->execute([

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_customers_admin(){
        global $db;
        $query = $db->prepare("SELECT * FROM customers INNER JOIN users ON users.id=customers.userId");
        $query->execute([

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_sent_freight_admin(){
        global $db;
        $query = $db->prepare("SELECT * from navlun WHERE navlunStatus in (7,8)  ");
        $query->execute([

        ]);
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_approved_shippings_admin(){
        global $db;
        $query = $db->prepare("SELECT shippings.id as shippingId,* FROM shippings shippings INNER JOIN navlun navlun on shippings.navlunId=navlun.id WHERE navlunStatus in(4,5,6,7,8) and shippings.shippingStatus!=0");
        $query->execute();
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }

    public static function get_production_program_admin(){
        global $db;
        $query = $db->prepare("SELECT * FROM production_program  WHERE  status!=0 ");
        $query->execute([

        ]);
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }
    public static function get_sellers_admin(){
        global $db;
        $query = $db->prepare("SELECT cs.countryName,cs.sellerName,users.email,users.phone,users.id as userid,cs.id as sellerid
 FROM countries_seller as cs JOIN users ON users.id=cs.userId where users.roles=1");
        $query->execute([

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_operations_admin(){
        global $db;
        $query = $db->prepare("select ce.id as Opid,* from countries_executive AS ce JOIN users on users.id=ce.userId WHERE users.roles=2");
        $query->execute([

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function create_seller($seller)
    {
        global $db;
        $query = $db->prepare("INSERT INTO users (uname,email,phone,password,created_at,updated_at,roles) VALUES (:name,:email,:phone,:password,:created_at,:updated_at,1)");
        $result=$query->execute( $seller);
        return $result;

    }
    public static function create_operation($seller)
    {
        global $db;
        $query = $db->prepare("INSERT INTO users (uname,email,phone,password,created_at,updated_at,roles) VALUES (:name,:email,:phone,:password,:created_at,:updated_at,2)");
        $result=$query->execute( $seller);
        return $result;

    }
    public static function user_chech($sellers)
    {
        global $db;
        $query = $db->prepare("SELECT email  from users  where users.email=:mail");
        $result=$query->execute(['mail'=>$sellers] );
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function get_sellers_admin_dbuser(){
        global $db;
        $query = $db->prepare("SELECT uname,id,email,id FROM users where users.roles=1");
        $query->execute([

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_operation_admin_dbuser(){
        global $db;
        $query = $db->prepare("SELECT uname,id,email,id FROM users where users.roles=2");
        $query->execute([

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_country(){
        global $db;
        $query = $db->prepare("SELECT * FROM countries");
        $query->execute([

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_check_country_seller($formattedData){
        global $db;
        $query = $db->prepare("SELECT * FROM countries_seller as cs where cs.userId=:userid and cs.countryId=:countryid");
        $query->execute($formattedData);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_check_country_operation($formattedData){
        global $db;
        $query = $db->prepare("SELECT * FROM countries_executive as cs where cs.userId=:userid and cs.countryId=:countryid");
        $query->execute($formattedData);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function create_country_by_seller($seller)
    {
        global $db;
        $query = $db->prepare("INSERT INTO countries_seller (countryId,countryName,sellerName,userId) VALUES (:countryid,:country,:uname,:userid)");
        $result=$query->execute( $seller);
        return $result;

    }
    public static function create_country_by_operation($formattedData)
    {
        global $db;

        // Son eklenen ID'yi al
        $lastIdQuery = $db->query("SELECT MAX(id) as last_id FROM countries_executive;");
        $lastIdResult = $lastIdQuery->fetch(PDO::FETCH_ASSOC);
        $lastId = $lastIdResult['last_id'];

        // Insert sorgusu
        $query = $db->prepare("INSERT INTO countries_executive (id,countryId, countryName, operationExecutiveName, userId) VALUES (:last_id+1,:countryId, :countryName, :operationExecutiveName, :userId)");

        // Parametreleri bind et
        $query->bindParam(':countryId', $formattedData['countryId']);
        $query->bindParam(':countryName', $formattedData['countryName']);
        $query->bindParam(':operationExecutiveName', $formattedData['operationExecutiveName']);
        $query->bindParam(':userId', $formattedData['userId']);
        $query->bindParam(':last_id', $lastIdResult['last_id']);

        // Insert sorgusunu çalıştır
        $result = $query->execute();

        return $result;
    }

    public static function get_sellername($user){

        global $db;
        $query = $db->prepare("SELECT * FROM users WHERE id=:user");
        $query->execute([
            'user'=>$user
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function get_countryname($country){

        global $db;
        $query = $db->prepare("SELECT countryName FROM countries WHERE countryId=:country");
        $query->execute([
            'country'=>$country
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function delete_country_seller($country){

        global $db;
        $query = $db->prepare("DELETE FROM countries_seller WHERE id=:id");
        $query->execute([
            'id'=>$country
        ]);
        return 1;
    }
    public static function delete_country_operation($country){

        global $db;
        $query = $db->prepare("DELETE FROM countries_executive WHERE id=:id");
        $query->execute([
            'id'=>$country
        ]);
        return 1;
    }
}
