<?php

class Operation
{
    public static function get_countries($userid){

        global $db;
        $query = $db->prepare("SELECT DISTINCT countryId
FROM countries_executive
WHERE userId =:userid;
");
        $query->execute([
            'userid'=>$userid
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function get_customers_by_userid($countr) {
        global $db;

        // Virgülle ayrılmış stringi diziye çevir
        $countryIds = explode(',', $countr['country']);

        // IN ifadesi için parametreleri oluştur
        $placeholders = implode(',', array_fill(0, count($countryIds), '?'));

        // SQL sorgusunu oluştur
        $sql = "SELECT * 
        FROM customers
        INNER JOIN countries ON customers.countryId = countries.countryId
        WHERE customers.countryId IN ($placeholders)
        ORDER BY customers.userId DESC";

        $query = $db->prepare($sql);

        // Parametreleri bind et
        foreach ($countryIds as $key => $value) {
            $query->bindValue(($key + 1), $value, PDO::PARAM_INT);
        }

        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /*
    public static function get_customers_by_userid(){
        global $db;
        $query = $db->prepare("select * from customers_by_userid WHERE userId=:userId");
        $query->execute([
                'userId' => session('user_id')
            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
   */
    public static function get_all_orders_by_operation_user_id(){
        global $db;
        $query = $db->prepare("SELECT
    orders.id AS OrderId,
    *
FROM
    orders
INNER JOIN
    countries_executive ON orders.countryId = countries_executive.countryId
INNER JOIN
    products ON orders.productId = products.id
WHERE
    countries_executive.userId = :userId
ORDER BY
    orders.id DESC; -- orders.id'ye göre büyükten küçüğe sıralama
");
        $query->execute([
                'userId' => session('user_id')
            ]
        );
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_navluns($operationExecutiveId){
        global $db;
        $query = $db->prepare("SELECT * FROM navlun WHERE field_manager_id=:operationExecutiveId");
        $query->execute([
            'operationExecutiveId'=>$operationExecutiveId
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function navluns_search($column){
    global $db;
    $query = $db->prepare("SELECT DISTINCT ".$column." FROM navlun");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;

}
    public static function get_operation_executive_id_by_userid(){
        global $db;
        $query = $db->prepare("SELECT operationExecutiveId FROM countries_executive where userId=:userId");
        $query->execute([
            'userId'=>session('user_id')
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_todo($id){
        global $db;
        $query = $db->prepare("SELECT * FROM todolist where id=:id");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_all_todo_by_type($type){
        global $db;
        $query = $db->prepare("SELECT todolist.*,users.uname FROM todolist todolist INNER JOIN users users on todolist.lastChangedUserId=users.id where todolistType=:type and status!=0 order by lastChangedDate DESC");
        $query->execute([
            'type'=>$type
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function add_todo($todo)
    {
        global $db;
        $query = $db->prepare("INSERT INTO todolist(todoName,todolistType, productPlaning, customerNotification, customsInstruction, updatedPriceListShare, informCustomer, circulationDocumentation, customerInvoice, reservationConfirmation, loadingDocumentationSharingWithCustomer, doesProformaTook, doesShipmentInfoShared, ydgProcess, payment, factoryNotification, container, productionNotification, billOfLading, paymentInAccount, warehouseControl, status, lastChangedUserId, lastChangedDate) VALUES(:todoName,:todotype,:productPlaning,:customerNotification,:customsInstruction,:updatedPriceListShare,:informCustomer,:circulationDocumentation,:customerInvoice,:reservationConfirmation,:loadingDocumentationSharingWithCustomer,:doesProformaTook,:doesShipmentInfoShared,:ydgProcess,:payment,:factoryNotification,:container,:productionNotification,:billOfLading,:paymentInAccount,:warehouseControl,:status,:lastChangedUserId,:lastChangedDate)");
       $result= $query->execute($todo);
       return $result;
        Log::createLog(session('user_id'), "todolist", "insert.todolist");
    }
    public static function update_todo($todo)
    {
        global $db;
        $query = $db->prepare("UPDATE todolist set todoName=:todoName,productPlaning=:productPlaning, customerNotification=:customerNotification, customsInstruction=:customsInstruction, updatedPriceListShare=:updatedPriceListShare, informCustomer=:informCustomer, circulationDocumentation=:circulationDocumentation, customerInvoice=:customerInvoice, reservationConfirmation=:reservationConfirmation, loadingDocumentationSharingWithCustomer=:loadingDocumentationSharingWithCustomer, doesProformaTook=:doesProformaTook, doesShipmentInfoShared=:doesShipmentInfoShared, ydgProcess=:ydgProcess, payment=:payment, factoryNotification=:factoryNotification, container=:container, productionNotification=:productionNotification, billOfLading=:billOfLading, paymentInAccount=:paymentInAccount, warehouseControl=:warehouseControl, status=:status, lastChangedUserId=:lastChangedUserId, lastChangedDate=:lastChangedDate where id=:id");
       $result= $query->execute($todo);
       return $result;
        Log::createLog(session('user_id'), "todolist", "update.todolist");
    }
    public static function delete_todo($id)
    {
        global $db;
        $query = $db->prepare("UPDATE todolist set status=0 where id=:id");
      $result=  $query->execute([
            'id'=>$id
        ]);
      return $result;
        Log::createLog(session('user_id'), "todolist", "update.status");
    }

    //Tablo kullanılmıyor diye loglama yapılmadı
    public  static function add_freight($freightadd){
        global $db;
        $query = $db->prepare("INSERT INTO navlun(field_manager_name,real_firm,companyName,booking_no,container_quantity,shipping_method,navlun,amount_sold_customer,total_profitability,currency_unit) VALUES(:fieldManagerName,:realFirm,:companyName:,:bookingNo,:containerQuantity,:shippingMethod,:Navlun,:amountSoldCustomer,:amountSoldCustomer,:currencyUnit");
        $query->execute($freightadd);
    }

}
