<?php

class Order
{
    public static function get_carts_by_userid($id){
        global $db;
        $customer=Customer::get_customer_byuserid($id);

        $query = $db->prepare("SELECT DISTINCT p.id as productId, c.id as cardId,* FROM products p inner join carts c on c.productId=p.id INNER JOIN users u on u.id=c.userId where c.status=1 and u.id=:id and p.currency=:currency and p.product_origin=:marketType");

        $query->execute([
                'id' => $id,
                'currency'=>$customer['currency'],
                'marketType'=>$customer['marketType']
            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_carts_market_3_by_userid($id){
        global $db;
        $customer=Customer::get_customer_byuserid($id);

        $query = $db->prepare("SELECT DISTINCT p.id as productId, c.id as cardId,* FROM products p inner join carts c on c.productId=p.id INNER JOIN users u on u.id=c.userId where c.status=1 and u.id=:id and p.currency=:currency  ");

        $query->execute([
                'id' => $id,
                'currency'=>$customer['currency'],

            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_deleted_carts_by_userid(){
        global $db;
        $query = $db->prepare("SELECT * FROM products p inner join carts c on c.productId=p.id INNER JOIN users u on u.id=c.userId where c.status=0 and u.id=:id");
        $query->execute([
                'id' => session('user_id')
            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }    public static function get_deleted_orders_by_userid(){
        global $db;
        $query = $db->prepare("SELECT * FROM products p inner join orders o on o.productId=p.id INNER JOIN users u on u.id=o.userId where o.status=0 and u.id=:id");
        $query->execute([
                'id' => session('user_id')
            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function add_cart($id,$countryId,$price,$sqm)
    {

        global $db;
        $query = $db->prepare("INSERT INTO carts VALUES(:userid,:id,1,1,:countryId,:created_at,:updated_at,:price,:sqm)");
        $query->execute([
            'userid' => session('user_id'),
            'id' => $id,
            'price' => $price,
            'countryId'=> $countryId,
            'sqm'=>$sqm,
            'created_at' => date('d/m/Y H:i:s',time()),
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        damp($db);
        Log::createLog(session('user_id'),"carts","new.carts");
    }
    public static function add_quantity_by_carts_product_id($id)
    {

        global $db;
        $query = $db->prepare("UPDATE dbo.[carts] SET [quantity]=[quantity]+1,[updated_at]=:updated_at WHERE [productId]=:id and [status]=1 and [userId]=:uId");
        $query->execute([
            'id' => $id,
            'uId' => session('user_id'),
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        Log::createLog(session('user_id'),"carts","updated.carts");

    }
    public static function add_order_count($id)
    {
        global $db;
        $query = $db->prepare("UPDATE dbo.[customers] SET [orderCount]=[orderCount]+1 WHERE [id]=:id");
        $query->execute([
            'id' => $id
        ]);
        Log::createLog(session('user_id'),"carts","add.orderCount");
    }
    public static function reduce_quantity_by_carts_product_id($id)
    {
        global $db;
        $query = $db->prepare("UPDATE carts SET quantity=quantity-1,updated_at=:updated_at WHERE productId=:id and status=1 and userId=:userId");
        $query->execute([
            'id' => $id,
            'userId'=> session('user_id'),
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        Log::createLog(session('user_id'),"carts","updated.carts");
    }
    public static function text_quantity_by_carts_product_id($id,$text)
    {
        global $db;
        $textint=intval($text);
        $query = $db->prepare("UPDATE carts SET quantity=$textint,updated_at=:updated_at WHERE productId=:id and status=1 and userId=:userId");
        $query->execute([
            'id' => $id,
            'userId'=> session('user_id'),
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        Log::createLog(session('user_id'),"carts","updated.carts");
    }

    public static function update_cart_status_zero($id)
    {
        global $db;
        $query = $db->prepare("UPDATE carts SET status=0,updated_at=:updated_at WHERE productId=:id and userId=:userId and quantity=0");
        $query->execute([
            'id' => $id,
            'userId'=> session('user_id'),
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        Log::createLog(session('user_id'),"carts","updated.carts");

    }
    public static function delete_cart_status_zero($id)
    {
        global $db;
        $query = $db->prepare("UPDATE carts SET status=0,updated_at=:updated_at WHERE id=:id and userId=:userId");
        $query->execute([
            'id' => $id,
            'userId'=> session('user_id'),
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        Log::createLog(session('user_id'),"carts","updated.carts");

    }
    public static function deleted_carts_return($id)
    {
        global $db;
        $query = $db->prepare("UPDATE carts SET status=1,updated_at=:updated_at,quantity=1 WHERE productId=:id and userId=:userId");
        $result=$query->execute([
            'id' => $id,
            'userId'=> session('user_id'),
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        return $result;
        Log::createLog(session('user_id'),"carts","updated.carts");

    }


    public static function cartExist($productId){
        global $db;
        $query = $db->prepare("SELECT * FROM carts WHERE productId=:productId and status=1 and userId=:userId");
        $query ->execute([
            'productId' => $productId,
            'userId' => session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function carts_order($deliveryType)
    {

        global $db;
        $query = $db->prepare("INSERT INTO orders (productId,userId,countryId,quantity,status,created_at,updated_at,orderCode,deliveryType,price,sqm) select carts.productId,carts.userId,carts.districtId,carts.quantity,carts.status,:created_at,:updated_at,:orderCode,:deliveryType,carts.price,carts.sqm from carts carts where carts.status=1 and carts.userId=:id");
        $result=$query->execute([
            'id' => session('user_id'),
            'created_at' => date('d/m/Y H:i:s',time()),
            'updated_at' => date('d/m/Y H:i:s',time()),
            'orderCode'=> date('YmdHis').session('user_id'),
            'deliveryType'=>$deliveryType
        ]);
        return $result;
            Log::createLog(session('user_id'),"orders","new.order");
    }
    public static function update_status_zero_by_userid()
    {
        global $db;
        $query = $db->prepare("UPDATE carts SET status=0,updated_at=:updated_at WHERE userId=:userId");
        $query->execute([
            'userId'=> session('user_id'),
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        Log::createLog(session('user_id'),"carts","new.carts");

    }
    public static function fill_order_by_userid(){
        global $db;
        $query = $db->prepare("SELECT Distinct quantity,quality,measure,collectionname, collection, size,color,surface,boxm2,boxkg,palletm2,palletkg,areaofuse,applicationarea, productfeatures,surfacetexture,price,currency from products p inner join orders o on o.productId=p.id where o.userId=:userId and o.status=1");
        $query ->execute([
            'userId' => session('user_id')

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_all_order_by_userid(){
        global $db;
        $query = $db->prepare("SELECT
    MAX(o.id) AS orderId,
    MAX(p.name) AS name,
    SUM(quantity) AS totalQuantity,
    MAX(o.status) AS orderStatus,
    MAX(offerStatus) AS offerStatus,
    MAX(quality) AS quality,
    MAX(collection) AS collection,
    MAX(size) AS size,
    MAX(color) AS color,
    MAX(surface) AS surface,
    o.created_at
FROM
    products p
INNER JOIN
    orders o ON o.productId = p.id
LEFT JOIN
    offers offers ON o.id = offers.orderId
WHERE
    o.status != 0
    AND o.userId = :userId
GROUP BY 
    o.created_at
ORDER BY
    MAX(o.id) DESC;

");
        $query ->execute([
            'userId' => session('user_id')

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_order_details($date){

        global $db;
        $query = $db->prepare("SELECT DISTINCT
    o.id AS OrderId,
    o.userId,
    o.created_at AS OrderCreatedAt,
	o.price,
	o.quantity,
	o.productId,
	p.cins,
	p.collection,
	p.color, 
	p.matParlak,
    s.arrivalDate,
	p.name,
	p.collection,
	p.size,
	s.arrivalDate,
	s.departureDate,
	s.documentDate,
	s.documentNo,
	s.documentType,
	s.goods_buyer,
	s.matbuuNumber,
	o.status as orderStatus,
	offers.offerStatus,
	navlun.bookingNo
FROM 
    orders o
INNER JOIN 
    navlun_by_order nbo ON nbo.orderId = o.id
INNER JOIN 
    shippings s ON s.navlunId = nbo.navlunId
        
INNER JOIN 
    products p ON p.id = o.productId
        INNER JOIN
	navlun  ON navlun.id=nbo.navlunId
LEFT JOIN
    offers offers ON o.id = offers.orderId
WHERE 
    o.userId =:userId
    AND o.created_at = CONVERT(DATETIME, :date, 120);

");
        $query ->execute([
            'userId' => session('user_id'),
            'date'=> $date

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_order_details_alone($date){

        global $db;
        $query = $db->prepare("SELECT DISTINCT
    o.id AS OrderId,
    o.userId,
    o.created_at AS OrderCreatedAt,
	o.price,
	o.quantity,
	o.productId,
	p.cins,
	p.collection,
	p.color, 
	p.matParlak,
	p.name,
	p.collection,
	p.size,
	o.status as orderStatus,
	offers.offerStatus
FROM 
    orders o
 
INNER JOIN 
    products p ON p.id = o.productId
LEFT JOIN
    offers offers ON o.id = offers.orderId
WHERE 
    o.userId =:userId
    AND o.created_at = CONVERT(DATETIME, :date, 120);

");
        $query ->execute([
            'userId' => session('user_id'),
            'date'=> $date

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_delivered_order_by_userid(){
        global $db;
        $query = $db->prepare("SELECT Distinct quantity,quality,measure,collectionname, collection, size,color,surface,boxm2,boxkg,palletm2,palletkg,areaofuse,applicationarea, productfeatures,surfacetexture,price,currency from products p inner join orders o on o.productId=p.id where o.userId=:userId and o.status=2");
        $query ->execute([
            'userId' => session('user_id')

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_order_infos($id){
        global $db;
        $customer=Customer::get_customer_by_userid();
        $query = $db->prepare("select * from offers offers inner join orders orders on offers.orderId=orders.id inner join products products on orders.productId=products.id where offers.orderId=:orderId and products.currency=:currency and products.product_origin=:marketType");
        $query ->execute([
            'orderId' => $id,
            'currency'=>$customer['currency'],
            'marketType'=>$customer['marketType']
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function set_order_in_canias($order){
        $payment=$order['paymentMethod'];
        if( $order['product_origin'] == 1){
            $veritabani='HAYAL';
            $veritabanicode='06';
            $customerno=$order['customerNo'];
            $plant='01';
        }else{
            $veritabani='BIEN';
            $veritabanicode='03';
            $customerno=$order['customerNoBien'];
            $plant='02';
        }
        $url = 'http://212.175.89.13:40259/api/Sale/CreateSale';
        $headers = array(
            'accept: */*',
            'Database: '.$veritabani,
            'Language: T',
            'Company: '.$veritabanicode,
            'username: caniasuserapi',
            'password: Z~pvK0Se',
            'Content-Type: application/json'
        );

        $data = array(
            'client' => '00',
            'company' => $veritabanicode,
            'dbname' => $veritabani,
            'langu' => 'T',
            'username' => 'caniasuserapi',
            'password' => 'Z~pvK0Se',
            'customer' => $customerno,
            'doctype' => 'T3',
            'name1' => $order['companyName'],
            'name2' => $order['companyName'],
            'currency' => $order['currency'],
            'exchrate' => 0,
            'docdate' => date('Y-m-d\TH:i:s.u\Z'),
            'telnum' => $order['phone'],
            'email' => $order['email'],
            'grcName1' => '',
            'grcName2' => '',
            'grcAdrline1' => '',
            'grcAdrline2' => '',
            'grcZipstreet' => '',
            'grcCountry' => $order['countryCode'],
            'grcCity' => 'İzmir',
            'grcDistrinct' => 'Bornova',
            'grcTelnum' => '',
            'note' => '',
            'createSaleItem' => array(
                array(
                    'plant' => $plant,
                    'itemnum' => 0,
                    'isset' => 0,
                    'setItemnum' => 0,
                    'commissioner' => '',
                    'commisionrate' => 0,
                    'material' => $order['productId'],
                    'mtext' => $order['mtext'],
                    'price' => floatval($order['totalprice']),
                    'discount' => 0,
                    'quantity' => floatval($order['totalquantity']),
                    'qunit' => 'M2',
                    'vatkey' => '20',
                    'note' => 'test'
                )
            ),
            'createPayment' => array(
                'paytype' => $payment==1 ? 'N' : ($payment==2 ? 'M' : ($payment==3 ? 'V' :($payment==4 ? 'C' :($payment==5 ? 'A' : 'H')))),
                'payAmount' => floatval($order['totalprice']),
                'currency' => $order['currency'],
                'exchrate' => '',
                'bankid' => '',
                'installment' => 0,
                'creditcard' => '',
                'isBonus' => 0,
                'accessCode' => ''
            )
        );
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $response =json_decode($response,true);
        curl_close($ch);

        return $response;

    }
    public static function get_top_five_populer_product(){
        global $db;
        $query = $db->prepare("SELECT TOP 6 COUNT(o.productId) as siparisadet, o.productId, p.collection, p.size, p.product_origin
FROM orders o
INNER JOIN products p ON o.productId = p.id
GROUP BY o.productId, p.collection, p.size, p.product_origin
ORDER BY siparisadet DESC;
");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_montly_sqm(){
        global $db;
        $query = $db->prepare("WITH AllMonths AS (
    SELECT 1 AS month_number
    UNION SELECT 2
    UNION SELECT 3
    UNION SELECT 4
    UNION SELECT 5
    UNION SELECT 6
    UNION SELECT 7
    UNION SELECT 8
    UNION SELECT 9
    UNION SELECT 10
    UNION SELECT 11
    UNION SELECT 12
)

SELECT 
    m.month_number AS ay,
    COALESCE(SUM(o.quantity * o.sqm), 0) AS total_sqm
FROM 
    AllMonths m
LEFT JOIN 
    orders o ON MONTH(o.created_at) = m.month_number AND o.userId =:userId AND YEAR(o.created_at) = YEAR(GETDATE())
GROUP BY 
    m.month_number
ORDER BY 
    m.month_number;");
        $query->execute([
            'userId'=> session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_montly_gain(){
        global $db;
        $query = $db->prepare("WITH AllMonths AS (
    SELECT 1 AS month_number
    UNION SELECT 2
    UNION SELECT 3
    UNION SELECT 4
    UNION SELECT 5
    UNION SELECT 6
    UNION SELECT 7
    UNION SELECT 8
    UNION SELECT 9
    UNION SELECT 10
    UNION SELECT 11
    UNION SELECT 12
)

SELECT 
    m.month_number AS ay,
    COALESCE(SUM((o.price * o.sqm )* o.quantity), 0) AS total_price
FROM 
    AllMonths m
LEFT JOIN 
    orders o ON MONTH(o.created_at) = m.month_number AND o.userId = :userId AND YEAR(o.created_at) = YEAR(GETDATE())
GROUP BY 
    m.month_number
ORDER BY 
    m.month_number;
");
        $query->execute([
            'userId'=> session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_succes(){
        global $db;
        $query = $db->prepare("SELECT 
    COUNT(*) AS total_orders,
    SUM(CASE WHEN status =11 THEN 1 ELSE 0 END) AS orders_with_status_9,
    (SUM(CASE WHEN status = 11 THEN 1 ELSE 0 END) * 100.0 / COUNT(*)) AS percentage_with_status_9,
    (SUM(CASE WHEN status = 11 THEN 0 ELSE 1 END) * 100.0 / COUNT(*)) AS percentage_without_status_9
FROM 
    orders
WHERE 
    userId = :userId


");

        $query->execute([
            'userId'=> session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_booking_no_by_order_id($id){
        global $db;
        $query = $db->prepare("SELECT bookingNo FROM navlun navlun INNER JOIN navlun_by_order navlun_by_order on navlun.id=navlun_by_order.navlunId INNER JOIN orders orders on navlun_by_order.orderId=orders.id where orders.id=:id");
        $query->execute(['id'=>$id]);
        return $query->fetch(PDO::FETCH_ASSOC)['bookingNo'];
    }

    public static function get_productname(){
        global $db;
        $query = $db->prepare("SELECT *  FROM products ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function get_orders(){
        global $db;
        $query = $db->prepare("SELECT Distinct quantity,quality,measure,collectionname, collection, size,color,surface,boxm2,boxkg,palletm2,palletkg,areaofuse,applicationarea, productfeatures,surfacetexture,price,currency from products p inner join orders o on o.productId=p.id where o.status=1 ");
        $query ->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_orders_for_offer(){
        global $db;
        $query = $db->prepare("SELECT orders.id as orderId,orders.quantity as orderQuantity,* from orders orders inner join products products on orders.productId=products.id where orders.quantity!=0 and orders.status=1 and orders.userId=:userId");
        $query ->execute([
            'userId'=> session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_deleted_orders($id){

        global $db;
        $query = $db->prepare("DELETE FROM orders WHERE  id = :id;");
        $query ->execute([
           'id'=>$id,

        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function get_approved_orders(){
        global $db;
        $query = $db->prepare("SELECT Distinct quantity,quality,measure,collectionname, collection, size,color,surface,boxm2,boxkg,palletm2,palletkg,areaofuse,applicationarea, productfeatures,surfacetexture,price,currency from products p inner join orders o on o.productId=p.id where o.status=3 ");
        $query ->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_order_by_sellerid($id){
        global $db;
        $query = $db->prepare("SELECT *,o.id as orderId,p.id as productId,o.quantity as orderQuantity, o.status as status FROM orders o inner join sellertodistrict s on s.districtId=o.districtId inner join products p on p.id=o.productId where s.sellerId=:sellerId");
        $query ->execute([
            'sellerId'=>$id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function get_order_by_sellerid_unapproved($id){
        global $db;
        $query = $db->prepare("SELECT *,o.id as orderId,p.id as productId,o.quantity as orderQuantity FROM orders o inner join sellertodistrict s on s.districtId=o.districtId inner join products p on p.id=o.productId inner join customers c on c.userId=o.userId inner join users u on u.id=c.userId where s.sellerId=:sellerId  and o.status=1");
        $query ->execute([
            'sellerId'=>$id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_active_orders_customers_by_seller_userid($id){
        global $db;
        $query = $db->prepare("SELECT distinct customers.companyName,users.phone,users.email,users.uname,customers.id FROM orders orders left join offers offers on orders.id=offers.orderId inner join countries_seller  countries_seller on orders.countryId=countries_seller.countryId inner join customers customers on customers.userId=orders.userId inner join users users on customers.userId=users.id where orders.status in (2,3) and countries_seller.userId=:userId");
        $query ->execute([
            'userId'=>$id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_active_orders_customers_byseller_userid($id){
        global $db;
        $query = $db->prepare("SELECT distinct orders.updated_at as update_date, orders.created_at as create_at,customers.companyName,users.phone,users.email,users.uname,customers.id FROM orders orders left join offers offers on orders.id=offers.orderId inner join countries_seller  countries_seller on orders.countryId=countries_seller.countryId inner join customers customers on customers.userId=orders.userId inner join users users on customers.userId=users.id where orders.status in (1,3) and countries_seller.userId=:userId");
        $query ->execute([
            'userId'=>$id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_order_by_sellerid_invoic_created($id){
        global $db;
        $query = $db->prepare("SELECT *,o.id as orderId,p.id as productId,o.quantity as orderQuantity FROM orders o  INNER JOIN sellertodistrict s on s.districtId=o.districtId inner join products p on p.id=o.productId inner join customers c on c.userId=o.userId inner join users u on u.id=c.userId where s.sellerId=:sellerId  and o.status=4");
        $query ->execute([
            'sellerId'=>$id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function update_order_status_zero_by_orderid($id)
    {
        global $db;
        $query = $db->prepare("UPDATE orders  SET status=0,updated_at=:updated_at WHERE id=:id");
        $query->execute([
            'id'=> $id,
            'updated_at' => date('d/m/Y H:i:s',time())
        ]);
        Log::createLog(session('user_id'),"carts","new.carts");

    }
    public static function get_all_order_count_by_userid(){
        global $db;
        $query = $db->prepare("SELECT count(*) as totalOrder from orders o LEFT JOIN users u on u.id=o.userId WHERE u.id=:userId");
        $query ->execute([
            'userId' => session('user_id')

        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_approved_order_count_by_userid(){

        global $db;
        $query = $db->prepare("SELECT COUNT(*) AS totalOrder FROM orders WHERE userId = :userId AND status <= 9;
");
        $query ->execute([
            'userId' => session('user_id')

        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_delivered_order_count_by_userid(){
        global $db;
        $query = $db->prepare("SELECT COUNT(*) AS totalOrder FROM orders WHERE userId = :userId AND status >9;
");
        $query ->execute([
            'userId' => session('user_id')

        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function orders_in_progress_by_sellers_id(){
        global $db;
        $query = $db->prepare("SELECT * FROM orders inner join countries_seller on orders.countryId=countries_seller.countryId where orders.status not in (11,12) and countries_seller.userId=:userId");
        $query->execute([
                'userId' => session('user_id')
            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function orders_completed_by_sellers_id(){
        global $db;
        $query = $db->prepare("SELECT * FROM orders inner join countries_seller on orders.countryId=countries_seller.countryId where orders.status in (11,12) and countries_seller.userId=:userId");
        $query->execute([
                'userId' => session('user_id')
            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function orders_by_seller_user_id(){
        global $db;
        $query = $db->prepare("SELECT * FROM orders inner join countries_seller on orders.countryId=countries_seller.countryId where countries_seller.userId=:userId");
        $query->execute([
                'userId' => session('user_id')
            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_reason_of_rejection($orderid){
        global $db;
        $query = $db->prepare("SELECT name FROM reason_of_rejection WHERE  id=:id");
        $query->execute([
                'id' => $orderid
            ]
        );
        return $query->fetch(PDO::FETCH_ASSOC)['name'];
    }
    public static function get_approval_orders_by_customer_id($customerid){
        global $db;
        $customer=Customer::get_customer_by_customerid($customerid);
        $query = $db->prepare("SELECT products.id as productId,customers.id as customerId,orders.id as orderId,products.id as productId,orders.price as productPrice,* FROM orders orders inner join products products on orders.productId=products.id inner join users users on orders.userId=users.id inner join customers customers on users.id=customers.userId  where orders.status=1 and customers.id=:customerId and products.currency=:currency and products.product_origin=:marketType");
        $result=$query ->execute([
            'customerId'=>$customerid,
            'currency'=>$customer['currency'],
            'marketType'=>$customer['marketType']

        ]);
        if ($result!=NULL){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            return 0;
        }
    }
    public static function get_approval_excutive_orders_by_customer_id($customerid){
        global $db;

        $query = $db->prepare("select  ce.userId from orders as o JOIN countries_executive as ce on ce.countryId=o.countryId where o.id=:customerId ");
        $result=$query ->execute([
            'customerId'=>$customerid,


        ]);
        if ($result!=NULL){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            return 0;
        }
    }
    public static function get_approval_orders_by_customer_id_markettype3($customerid,$date){
        global $db;

        $customer=Customer::get_customer_by_customerid($customerid);
        $query = $db->prepare("SELECT products.id as productId,customers.id as customerId,orders.id as orderId,products.id as productId,orders.price as productPrice,* FROM orders orders inner join products products on orders.productId=products.id inner join users users on orders.userId=users.id inner join customers customers on users.id=customers.userId  where orders.status=1 and customers.id=:customerId and products.currency=:currency 
 AND orders.created_at = CONVERT(datetime, :date, 120)");
        $result=$query ->execute([

            'customerId'=>$customerid,
            'currency'=>$customer['currency'],
            'date'=>$date,


        ]);
        if ($result!=NULL){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            return 0;
        }
    }
    public static function get_product_by_api($material, $currency, $origin){

        if ($origin==1){
            $veritabani='HAYAL';
            $company='06';
        }else{
            $veritabani='BIEN';
            $company='03';
        }
        $url = 'http://212.175.89.13:40259/PriceListNew/Detail?material=' . urlencode($material);

        $headers = array(
            'accept: application/json',
            'Database: '.$veritabani,
            'Language: T',
            'Company: '.$company,
            'username: caniasuserapi',
            'password: Z~pvK0Se'
        );

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true
        );

        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);
        $response = json_decode($response,true);

        curl_close($ch);
        if ($response==NULL)    {
            return 0;
        }
        foreach ($response as $item){
            if( $item['currency']==$currency ){
                return $item;
            }
        }
    }
    public static function get_stock_by_api($material, $origin){
        if ($origin==1){
            $veritabani='HAYAL';
            $company='06';
        }else{
            $veritabani='BIEN';
            $company='03';
        }
        $url = 'http://212.175.89.13:40259/Stock/ById?material=' . urlencode($material);

        $headers = array(
            'accept: application/json',
            'Database: '.$veritabani,
            'Language: T',
            'Company: '.$company,
            'username: caniasuserapi',
            'password: Z~pvK0Se'
        );

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true
        );

        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);
        $response = json_decode($response,true);

        curl_close($ch);
        if ($response==NULL)    {
            return 0;
        }

return $response;


    }
    public static function get_box_with_api( $material, $origin){

        if ($origin==1){
            $veritabani='HAYAL';
            $company='06';
        }else{
            $veritabani='BIEN';
            $company='03';
        }
        $url = 'http://212.175.89.13:40259/Box/ById?custgrp=' . urlencode($material);

        $headers = array(
            'accept: application/json',
            'Database: '.$veritabani,
            'Language: T',
            'Company: '.$company,
            'username: caniasuserapi',
            'password: Z~pvK0Se'
        );

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true
        );

        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);
        $response = json_decode($response,true);

        curl_close($ch);
        if ($response==NULL)    {
            return 0;
        }

        return $response;

    }
    public static function get_boxname_with_api( $material, $origin){

        if ($origin==1){
            $veritabani='HAYAL';
            $company='06';
        }else{
            $veritabani='BIEN';
            $company='03';
        }
        $url = 'http://212.175.89.13:40259/BoxName/ById?custgrp=' . urlencode($material);

        $headers = array(
            'accept: application/json',
            'Database: '.$veritabani,
            'Language: T',
            'Company: '.$company,
            'username: caniasuserapi',
            'password: Z~pvK0Se'
        );

        $options = array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true
        );

        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $response = curl_exec($ch);
        $response = json_decode($response,true);

        curl_close($ch);
        if ($response==NULL)    {
            return 0;
        }

        return $response;

    }
    public static function geriDon($kosul, $rounded) {
        $rounded=number_format($rounded,2);
        $ondalikSayi=explode('.', strval($rounded))[1]%10;

        if ($ondalikSayi == 0 || $ondalikSayi == 5 || $kosul == 0) {

            return $rounded;

        } else {
            if ( $kosul == 1 && $ondalikSayi>0 && $ondalikSayi<5 ){
                return number_format($rounded+((5-$ondalikSayi)/100),2);
            }
            else if ( $kosul == 1 && $ondalikSayi>5 && $ondalikSayi<10 ){

                return ($rounded+((10-$ondalikSayi)/100));

            }
            else if( $kosul == 2 && $ondalikSayi>0 && $ondalikSayi<5 ){

                return number_format($rounded-(($ondalikSayi)/100),2);

            }
            else if( $kosul == 2 && $ondalikSayi>5 && $ondalikSayi<10 ){

                return number_format($rounded-(($ondalikSayi%5)/100),2);

            }
        }
    }



    public static function get_reapproval_orders_by_customer_id($customerid){

        $customer=Customer::get_customer_by_customerid($customerid);

        global $db;
        $query = $db->prepare("SELECT offers.id as offerId,customers.id as customerId,orders.id as orderId,products.id as productId,orders.price as productPrice,* FROM orders orders inner join products products on orders.productId=products.id inner join users users on orders.userId=users.id inner join customers customers on users.id=customers.userId inner join offers offers on offers.orderId=orders.id where orders.status=3 and customers.id=:customerId and products.product_origin=:product_origin and products.currency = :currency");
        $query ->execute([
            'customerId'=>$customerid,
            'product_origin'=>$customer['marketType'],
            'currency'=>$customer['currency']
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_reapproval_orders_by_customer_id_markettype3($customerid,$date){

        $customer=Customer::get_customer_by_customerid($customerid);

        global $db;
        $query = $db->prepare("SELECT offers.id as offerId,customers.id as customerId,orders.id as orderId,products.id as productId,orders.price as productPrice,* FROM orders orders inner join products products on orders.productId=products.id inner join users users on orders.userId=users.id inner join customers customers on users.id=customers.userId inner join offers offers on offers.orderId=orders.id where orders.status=3 and customers.id=:customerId  and products.currency = :currency AND orders.created_at = CONVERT(datetime, :date, 120) ");
        $result=$query ->execute([

            'customerId'=>$customerid,
            'currency'=>$customer['currency'],
            'date'=>$date,
        ]);

        if ($result!=NULL){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            return 0;
        }
    }

    public static function update_order_status($orderid,$status)
    {
        global $db;
        $query = $db->prepare("UPDATE orders  SET status=:status,updated_at=:updated_at WHERE id=:orderId");
        $query->execute([
            'orderId'=> $orderid,
            'updated_at' => date('d/m/Y H:i:s',time()),
            'status'=>$status
        ]);
        Log::createLog(session('user_id'),"carts","new.carts");
    }
    public static function update_order_reject($orderid,$reject)
    {
        global $db;
        $query = $db->prepare("UPDATE orders  SET rejected=:reject,updated_at=:updated_at WHERE id=:orderId");
        $query->execute([
            'orderId'=> $orderid,
            'updated_at' => date('d/m/Y H:i:s',time()),
            'reject'=>$reject
        ]);
        Log::createLog(session('user_id'),"carts","new.carts");
    }
    public static function update_order_product_price($orderid,$productprice)
    {
        global $db;
        $query = $db->prepare("UPDATE orders  SET price=:price,updated_at=:updated_at WHERE id=:orderId");
        $query->execute([
            'orderId'=> $orderid,
            'updated_at' => date('d/m/Y H:i:s',time()),
            'price'=>$productprice
        ]);
        Log::createLog(session('user_id'),"carts","new.carts");
    }
    public static function get_offers(){
        global $db;
        $query = $db->prepare("SELECT orders.id as orderId,orders.userId as userId,orders.status as orderStatus,* from orders orders inner join users users on orders.userId=users.id inner join products products on products.id=orders.productId left join offers offers on orders.id=offers.orderId where orders.status=2 and offerStatus=1 and orders.userId=:userId");
        $query ->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_rejected_name($orderid){
        global $db;
        $query = $db->prepare("select distinct (navlun_by_order.orderId),rejected,reason_of_rejection.name from navlun inner join navlun_by_order on navlun.id=navlun_by_order.navlunId INNER JOIN reason_of_rejection on navlun.rejected=reason_of_rejection.id WHERE navlun_by_order.orderId=:id");
        $query ->execute([
            'id'=>$orderid
        ]);
        return $query->fetch(PDO::FETCH_ASSOC)['name'];
    }
    public static function update_offer_status($orderid,$status)
    {
        global $db;
        $query = $db->prepare("UPDATE offers set offerStatus=:status,updated_at=:updated_at where orderId=:orderId");
        $query->execute([
            'orderId'=> $orderid,
            'updated_at' => date('d/m/Y H:i:s',time()),
            'status'=>$status
        ]);
        Log::createLog(session('user_id'),"offer","update.offers");
    }
    public static function order_search($column){
        global $db;
        $query = $db->prepare("SELECT DISTINCT ".$column." FROM orders");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_all_orders_by_seller_user_id(){
        global $db;
        $query = $db->prepare("SELECT
    customers.companyName,
    products.id AS productId,
    offers.offer AS soldPrice,
    orders.quantity AS orderQuantity,
    orders.id AS OrderId,
    *
FROM
    orders
INNER JOIN
    countries_seller ON orders.countryId = countries_seller.countryId
INNER JOIN
    products ON orders.productId = products.id
INNER JOIN
    offers ON orders.id = offers.orderId
INNER JOIN
    customers ON orders.userId = customers.userId
WHERE
    orders.status != 0
    AND countries_seller.userId = :id
ORDER BY
    orders.id DESC; -- orders.id'ye göre büyükten küçüğe sıralama
");
        $query->execute([
            'id'=>session('user_id')
        ]);
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }
    public static function get_approved_orders_seller_user_id(){
        global $db;
        $query = $db->prepare("SELECT distinct orders.id as orderId, products.id as productId, offers.offer as soldPrice, orders.quantity as orderQuantity,countries_seller.countryId, products.*,customers.companyName FROM orders INNER JOIN countries_seller ON orders.countryId=countries_seller.countryId INNER JOIN products ON orders.productId=products.id INNER JOIN offers ON orders.id=offers.orderId inner join customers customers on orders.userId=customers.userId WHERE offers.offerStatus=2 AND countries_seller.userId=:id");
        $query ->execute([
            'id'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function add_order($orderid){
        global $db;
        $query = $db->prepare("UPDATE orders set quantity=quantity+1 where id=:orderId");
       $result= $query ->execute([
            'orderId'=>$orderid
        ]);
       return $result;
        Log::createLog(session('user_id'), "orders", "update.orders");
    }
    public static function subtract_order($orderid){
        global $db;
        $query = $db->prepare("UPDATE orders set quantity=quantity-1 where id=:orderId");
       $result= $query ->execute([
            'orderId'=>$orderid
        ]);
       return $result;
        Log::createLog(session('user_id'), "orders", "update.quantity");
    }
    public static function get_order_quantity_by_order_id($orderid){
        global $db;
        $query = $db->prepare("SELECT quantity from orders where id=:orderId");
        $query ->execute([
            'orderId'=>$orderid
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_rejected_orders_by_user_id(){
        global $db;

        $query = $db->prepare("SELECT * FROM orders orders inner join offers offers on orders.id=offers.orderId inner join products products on orders.productId=products.id where orders.status=2 and offers.offerStatus=3 and orders.userId=:userId");
        $query ->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_card_by_cardid($result){
        global $db;
        $customer=Customer::get_customer_byuserid(session('user_id'));
        $string="SELECT * FROM carts carts INNER JOIN products products on carts.productId=products.id where products.product_origin=".$customer['marketType']." AND products.currency='".$customer['currency']."' and carts.id in (".$result.")";
        $query = $db->prepare($string);
        $query ->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_card_by_cardid_markettype3($result){
        global $db;
        $customer=Customer::get_customer_byuserid(session('user_id'));
        $string="SELECT * FROM carts carts INNER JOIN products products on carts.productId=products.id where   products.currency='".$customer['currency']."' and carts.id in (".$result.") and carts.quantity>0 ";
        $query = $db->prepare($string);
        $query ->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function update_order_quantity($id,$quantity)
    {
        global $db;
        $query = $db->prepare("UPDATE orders  SET quantity=:quantity WHERE id=:id");
        $query->execute([
            'id'=> $id,
            'quantity' => $quantity
        ]);
        Log::createLog(session('user_id'),"carts","new.carts");

    }
    public static function get_montly_sqm_seller(){
        global $db;
        $query = $db->prepare("SELECT
    MONTH(orders.created_at) AS orderMonth,
    SUM(orders.sqm * orders.quantity) AS monthly_total_sqm
FROM
    orders
INNER JOIN
    countries_seller ON orders.countryId = countries_seller.countryId
INNER JOIN
    customers ON orders.userId = customers.userId
WHERE
    orders.status != 0
    AND countries_seller.userId = :userId
    AND orders.sqm IS NOT NULL -- Bu satırı ekleyin
GROUP BY
    MONTH(orders.created_at)
ORDER BY
    orderMonth DESC;
;");
        $query->execute([
            'userId'=> session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_montly_total_order_seller(){
        global $db;
        $query = $db->prepare("SELECT
    MONTH(orders.created_at) AS orderMonth,
    COUNT(*) AS monthly_order_count
FROM
    orders
INNER JOIN
    countries_seller ON orders.countryId = countries_seller.countryId
WHERE
    countries_seller.userId = :userId
    AND YEAR(orders.created_at) = YEAR(GETDATE()) -- Mevcut yılı filtrele
GROUP BY
    MONTH(orders.created_at)
ORDER BY
    orderMonth;
");
        $query->execute([
            'userId'=> session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function add_comment($message, $id, $date)
    {

        global $db;


            $query = $db->prepare("INSERT INTO [dbo].[commentsoffer]
([message], [userId], [date], [senderName], [created])
VALUES (:message, :id, CONVERT(DATETIME, :date, 120), :user_name, :createddate);
");

            $query->execute([
                'message' => $message,
                'id' => $id,
                'date' => $date,
                'user_name' => session('user_name'),
                'createddate'=>date('Y-m-d H:i:s')
            ]);

            $result = $query;

            return $result;

    }
    public static function get_message($id,$date){
        global $db;
        $query = $db->prepare("SELECT * FROM commentsoffer
WHERE userId = :id
AND CONVERT(DATETIME, :date, 120) = date;
");
        $query ->execute([
            'id' => $id,
            'date' => $date
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}
