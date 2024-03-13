<?php

class Customer
{
    public static function add_profit($id){
        global $db;
        $sql=$db->prepare("SELECT CASE WHEN COUNT(*) > 0 THEN 'true' ELSE 'false' END AS durum FROM product_profit where customer_id=".$id);
        $sql->execute();
        if($sql->fetch(PDO::FETCH_ASSOC)["durum"]=="false"){
            $genus=$db->prepare("SELECT DISTINCT cins FROM products");
            $genus->execute();
            foreach ($genus->fetchAll(PDO::FETCH_ASSOC) as $item){
                $query = $db->prepare("INSERT INTO product_profit (customer_id,genus_name) VALUES (".$id.",'".$item["cins"]."')");
                $query->execute();
                $query->fetch(PDO::FETCH_ASSOC);
            }
        }else{
            Customer::update_profit($id,1);
        }
    }
    public static function update_profit_status($id,$status){
        global $db;
        $query = $db->prepare("UPDATE product_profit SET status=".$status." where customer_id=".$id);
        $query->execute();
        $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function update_profit($id,$profit){
        global $db;
        $query = $db->prepare("UPDATE product_profit SET profit=".$profit." where id=".$id);
        $query->execute();
        $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_profit($id){
        global $db;
        $query = $db->prepare("SELECT * FROM product_profit where customer_id=:id");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function customers(){
        global $db;
        $query = $db->prepare("SELECT * FROM customers ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_customer_by_userid(){
        global $db;
        $query = $db->prepare("SELECT * FROM customers where userId=:id");
        $query->execute([
            'id'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_customer_byuserid($id){
        global $db;
        $query = $db->prepare("SELECT * FROM customers where userId=:id");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function set_customer_account($customers)
    {
        global $db;
        $query =$db->prepare("INSERT INTO dbo.[customers] ([isQuaCustomerCreated],[isBienCustomerCreated],[customerNo],[userId],[countryId],[companyName],[address],[faxNumber],[taxAdministration],[taxNumber],[bankname],[bankBranchName],[ibanNumber],[postCode],[currency],[transportType],[marketType],[created_at],[updated_at]) VALUES (:isQuaCustomerCreated,:isBienCustomerCreated,:customerNo,:userId,:countryId,:companyName,:address,:faxNumber,:taxAdministration,:taxNumber,:bankName,:bankBranchName,:ibanNumber,:postCode,:currency,:transportType,:marketType,:created_at,:updated_at)");
        $result= $query->execute($customers);
        Log::createLog($db->lastInsertId(),"customers","customer_detail");
        if ($result!=NULL){
            return 1;
        }
        else{
            return 0;
        }
    }
    public static function update_customer_account($customers)
    {
        global $db;
        $query =$db->prepare("UPDATE dbo.[customers] SET [countryId]=:countryId,[companyName]=:companyName,[address]=:address,[faxNumber]=:faxNumber,[taxAdministration]=:taxAdministration,[taxNumber]=:taxNumber,[bankname]=:bankName,[bankBranchName]=:bankBranchName,[ibanNumber]=:ibanNumber,[postCode]=:postCode,[currency]=:currency,[transportType]=:transportType,[marketType]=:marketType,[updated_at]=:updated_at WHERE [userId]=:userId");
        $result= $query->execute($customers);

        Log::createLog($db->lastInsertId(),"customers","update.customer");
        return $result==NULL?0:1;
    }
    public static function update_customer_by_companyid($customers)
    {
        global $db;
        $query =$db->prepare("UPDATE dbo.[customers] SET  [exporter]=:exporter, [portType]=:portType,[isProductionShown]=:isProductionShown,[paymentMethod]=:paymentMethod, [customerNo]=:customerNo,[customerNoBien]=:customer_NoBien,[isNew]=:isNew,[isDueDate]=:isDueDate,[dueDate]=:dueDate,[verified]=2,[round]=:round,[countryId]=:countryId,[companyName]=:companyName,[address]=:address,[faxNumber]=:faxNumber,[taxAdministration]=:taxAdministration,[taxNumber]=:taxNumber,[bankname]=:bankName,[bankBranchName]=:bankBranchName,[ibanNumber]=:ibanNumber,[postCode]=:postCode,[currency]=:currency,[transportType]=:transportType,[marketType]=:marketType,[updated_at]=:updated_at,[paymentTermDay]=:paymentTermDay,[paymentTerm]=:paymentTerm,[productionDate]=:isProductiondate WHERE [id]=:companyId");
        $result= $query->execute($customers);
        Log::createLog($db->lastInsertId(),"customers","update.customer");
        return $result==NULL?0:1;
    }
    public static function create_customer_via_api($customerInfo)
    {
        $url = 'http://212.175.89.13:40259/api/Customer/AddNewCustomer';

        $data = array(
            'client' => '00',
            'company' => $customerInfo['company'],
            'dbname' => $customerInfo['dbname'],
            'langu' => 'T',
            'username' => '',
            'password' => '',
            'isperson' => true,
            'name' => $customerInfo['companyName'],
            'email' => $customerInfo['email'],
            'telnum' => $customerInfo['phone'],
            'addressline' => $customerInfo['address'],
            'city' => 'İzmir',
            'district' => 'Bornova',
            'country' => $customerInfo['country'],
            'tckimlik' => $customerInfo['taxNumber'],
            'taxnum' => $customerInfo['taxNumber'],
            'taxOffice' => $customerInfo['taxAdministration'],
            'custgrp' => 'I'
        );

        $headers = array(
            'Accept: */*',
            'Database: '.$customerInfo['dbname'],
            'Language: T',
            'Company: '.$customerInfo['company'],
            'username: caniasuserapi',
            'password: Z~pvK0Se',
            'Content-Type: application/json'
        );
        //damp(json_encode($data));

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);
            // Handle the error
        } else {
            return json_decode($response,true);
            // Handle the response
        }
        curl_close($ch);
    }
    public static function update_customer_created($market,$id)
    {
        global $db;
        if ($market==1){
            $query =$db->prepare("UPDATE dbo.[customers] SET isQuaCustomerCreated=1 WHERE [id]=:companyId");
        }
        else if($market==2){
            $query =$db->prepare("UPDATE dbo.[customers] SET isBienCustomerCreated=1 WHERE [id]=:companyId");
        }
        $result= $query->execute([
            'companyId'=>$id
        ]);
        Log::createLog($db->lastInsertId(),"customers","update.customer");
        return $result==NULL?0:1;
    }
    public static function update_customer_no($market,$id,$customerno)
    {
        global $db;
        if ($market==1){
            $query =$db->prepare("UPDATE dbo.[customers] SET customerNo=:cNo WHERE [id]=:companyId");
        }
        else if($market==2){
            $query =$db->prepare("UPDATE dbo.[customers] SET customerNoBien=:cNo WHERE [id]=:companyId");
        }
        $result= $query->execute([
            'companyId'=>$id,
            'cNo'=>$customerno
        ]);
        Log::createLog($db->lastInsertId(),"customers","update.customer");
        return $result==NULL?0:1;
    }

    public static function update_customer_status($customer_id,$status)
    {
        global $db;
        $query =$db->prepare("UPDATE customers SET verified=:status WHERE id=:customerId");
        $result= $query->execute([
            'customerId'=>$customer_id,
            'status'=>$status
        ]);
        Log::createLog($db->lastInsertId(),"customers","update.customerstatus");
        return $result==NULL?0:1;
    }
    public static function customer_exist($userId){
        global $db;
        $query = $db->prepare("SELECT * FROM customers WHERE userId=:userId");
        $query ->execute([
            'userId' => $userId
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function is_customer_verified(){
        global $db;
        $query = $db->prepare("SELECT verified FROM customers WHERE userId=:userId");
        $query ->execute([
            'userId' => session('user_id')
        ]);
        $result=$query->fetch(PDO::FETCH_ASSOC);
        if(empty($result)){
            return 0;
        }else{
            if($result['verified']==2){
                return 2;
            }
            else{
                return 1;
            }
        }
    }
    public static function get_offer_count($customerid){
        global $db;
        $query = $db->prepare("SELECT offerCount FROM customers WHERE id=:customerId");
        $query ->execute([
            'customerId' => $customerid
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function update_offer_count($customerid){
        global $db;
        $query = $db->prepare("UPDATE customers SET offerCount=offerCount+1 WHERE id=:customerId");
        $query ->execute([
            'customerId' => $customerid
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_country_name(){
        global $db;
        $query = $db->prepare("SELECT countryName FROM countries");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_customer_by_customerid($customerid){

        global $db;
        $query = $db->prepare("select customers.customerNo as ccustomerNo,customers.customerNoBien as ccustomerNoBien, users.customerNo as ucustomerNo,* from customers customers INNER JOIN users users on customers.userId=users.id left join countries countries on customers.countryId=countries.countryId where customers.id=:customerId");
        $query->execute([
            'customerId'=>$customerid
        ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_customer_userid($customerid){

        global $db;
        $query = $db->prepare("select customers.customerNo as ccustomerNo,customers.customerNoBien as ccustomerNoBien, users.customerNo as ucustomerNo,* from customers customers INNER JOIN users users on customers.userId=users.id left join countries countries on customers.countryId=countries.countryId where customers.userId=:customerId");
        $query->execute([
            'customerId'=>$customerid
        ]);

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public static function get_district_name(){
        global $db;
        $query = $db->prepare("SELECT districtName FROM districts");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_district_name_by_userid(){
        global $db;
        $query = $db->prepare("SELECT districts.districtName FROM customers customers INNER JOIN districts districts on districts.districtId=customers.countryId inner join users users on users.id=customers.userId where users.id=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_countries_name_by_userid(){
        global $db;
        $query = $db->prepare("SELECT countries.countryName FROM customers customers INNER JOIN countries countries on countries.countryId=customers.countryId inner join users users on users.id=customers.userId where users.id=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public static function get_districtid_by_name($countryname){
        global $db;
        $query = $db->prepare("SELECT countryId FROM countries WHERE countryName=:countryName");
        $query->execute([
            'countryName'=>$countryname
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_districtid_by_userid(){
        global $db;
        $query = $db->prepare("SELECT c.countryId FROM customers c INNER JOIN users u on u.id=c.userId WHERE u.id=:id");
        $query->execute([
            'id'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_sellerid_by_userid(){
        global $db;
        $query = $db->prepare("SELECT s.id FROM sellers s INNER JOIN users u on u.id=s.userId WHERE u.id=:id");
        $query->execute([
            'id'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public static function get_customers_by_seller_user_id(){
        global $db;
        $query = $db->prepare("SELECT customers.created_at,customers.UserId,customers.companyName,customers.address,users.phone,users.email,customers.taxNumber,customers.verified,customers.id FROM customers customers INNER JOIN countries_seller on customers.countryId=countries_seller.countryId inner join users users on customers.userId=users.id where countries_seller.userId=:userId order by customers.created_at DESC");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function customer_search($column){
        global $db;
        $query = $db->prepare("SELECT DISTINCT ".$column." FROM customers");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public static function get_userid_by_customer_id($customerid){
        global $db;
        $query = $db->prepare("SELECT userId FROM customers where id=:id ");
        $query->execute([
            'id'=>$customerid
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}

