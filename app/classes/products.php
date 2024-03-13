<?php

class Products
{
    public static function get_products_by_api($veritabani){
        $url = 'http://212.175.89.13:40259/PriceListNew/List';
        $headers = array(
            'accept: application/json',
            'Database: '.$veritabani,
            'Language: T',
            'Company: 06',
            'username: caniasuserapi',
            'password: Z~pvK0Se'
        );

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

// $response değişkeni, API'den dönen veriyi içerir
        $response=json_decode($response,true);
        return $response;
    }
    public static function get_product_admin($page,$type,$selectpage,$origon="",$collection="",$size="",$name="",$cins="",$thickness="",$reclap="",$color="",$matParlak=""){
        global $db;
        if($page=="seller"){
            $customermarket=3;
            $customercurenncy="EUR";
        }else{
            $customer=Customer::get_customer_by_userid();
            $customermarket=$customer['marketType'];
            $customercurenncy=$customer['currency'];
        }
        if( $customermarket== 3){
            $string="SELECT * FROM products where pcUnit='M2' and product_origin in (1,2) and currency='".$customercurenncy."' ";
        }else{
            $string="SELECT * FROM products where pcUnit='M2' and product_origin=".$customermarket." and currency='".$customercurenncy."' ";
        }
        if($origon!=""){
            $string.=" and product_origin='".$origon."'";
        }
        if($collection!=""){
            $string.=" AND  collection='".$collection."'";
        }
        if($size!=""){
            $string.=" AND  size='".$size."'";
        }
        if($name!=""){
            $string.=" AND  name='".$name."'";
        }
        if($cins!=""){
            $string.=" AND  cins='".$cins."'";
        }
        if($thickness!=""){
            $string.=" AND  thickness='".$thickness."'";
        }
        if($reclap!=""){
            $string.=" AND  reclap='".$reclap."'";
        }
        if($matParlak!=""){
            $string.=" AND  matParlak='".$matParlak."'";
        }
        if($color!=""){
            $string.=" AND  color='".$color."'";
        }
        $string.=" order by id";
        if($type=="general"){
            if($selectpage==1){
                $string.=" OFFSET 0 ROWS FETCH NEXT 50 ROWS ONLY";
            }else{
                $string.=" OFFSET ".((($selectpage-1)*50)-1)." ROWS FETCH NEXT 40 ROWS ONLY";
            }
        }
        $query = $db->prepare($string);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function get_productname(){
        global $db;
        $query = $db->prepare("SELECT top 4000 * FROM products order by id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function get_box_info($id,$origin){
            if ($origin==1){
                $Database='HAYAL';
                $Company='06';
            }else{
                $Database='BIEN';
                $Company='03';
            }
            $url = "http://212.175.89.13:40259/Material/ById?material=" . urlencode($id);
            $headers = array(
                'accept: application/json',
                'Database: ' . $Database,
                'Language: T',
                'Company: ' . $Company,
                'username: caniasuserapi',
                'password: Z~pvK0Se'
            );

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);
            curl_close($ch);
            return json_decode($response, true);

    }
    public static function get_product($page,$type,$selectpage,$origon="",$collection="",$size="",$name="",$cins="",$thickness="",$reclap="",$color="",$matParlak=""){
        global $db;
        if($page=="seller"){
            $customermarket=3;
            $customercurenncy="EUR";
        }else{
            $customer=Customer::get_customer_by_userid();
            $customermarket=$customer['marketType'];
            $customercurenncy=$customer['currency'];
        }
        if( $customermarket== 3){
            $string="SELECT * FROM products where pcUnit='M2' and product_origin in (1,2) and currency='".$customercurenncy."' ";
        }else{
            $string="SELECT * FROM products where pcUnit='M2' and product_origin=".$customermarket." and currency='".$customercurenncy."' ";
        }
        if($origon!=""){
            $string.=" and product_origin='".$origon."'";
        }
        if($collection!=""){
            $string.=" AND  collection='".$collection."'";
        }
        if($size!=""){
            $string.=" AND  size='".$size."'";
        }
        if($name!=""){
            $string.=" AND  name='".$name."'";
        }
        if($cins!=""){
            $string.=" AND  cins='".$cins."'";
        }
        if($thickness!=""){
            $string.=" AND  thickness='".$thickness."'";
        }
        if($reclap!=""){
            $string.=" AND  reclap='".$reclap."'";
        }
        if($matParlak!=""){
            $string.=" AND  matParlak='".$matParlak."'";
        }
        if($color!=""){
            $string.=" AND  color='".$color."'";
        }
        $string.=" order by id";
        if($type=="general"){
            if($selectpage==1){
                $string.=" OFFSET 0 ROWS FETCH NEXT 18 ROWS ONLY";
            }else{
                $string.=" OFFSET ".((($selectpage-1)*18)-1)." ROWS FETCH NEXT 18 ROWS ONLY";
            }
        }
        $query = $db->prepare($string);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function get_product_detail($id,$currency,$origin){
        global $db;
        $query = $db->prepare("SELECT * FROM products where id='".$id."' and product_origin=".$origin." and currency='".$currency."'");
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function check_production_program_by_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM production_program where product_code=:id");
        $query->execute([
            'id'=>$id
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result=='' || $result==NULL){
            return 'No Production';
        }
        else{
            return $result['finish_date'];
        }
    }
    public static function is_file_exist($id,$type){
        global $db;
        $query = $db->prepare("SELECT * FROM files where productId=:id");
        $query->execute([
            'id'=>$id,
            'type'=>$type
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_product_by_id($id,$origin){
        global $db;
        $query = $db->prepare("SELECT * FROM products where id=:id AND product_origin=:origin");
        $query->execute([
            'id'=>$id,
            'origin'=>$origin
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_product_by_just_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM products where id=:id ");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function get_all_products($origin){
        global $db;
        $query = $db->prepare("SELECT distinct [id], [mtext] ,[pcUnit] ,[size] ,[name] , [thickness] ,[surface] ,[reclap] ,[color] ,[quality],[product_origin] FROM [dbo].[products]  where product_origin=:product_origin AND pcUnit='M2'");

        $query->execute([
            'product_origin'=>$origin
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_all_products2($page, $page_size, $origin){
        global $db;
        $offset = ($page - 1) * $page_size;

        $query = $db->prepare("SELECT *
FROM [dbo].[products]
WHERE product_origin=:product_origin AND pcUnit='M2'
ORDER BY [id] ASC
OFFSET :offset ROWS
FETCH NEXT :page_size ROWS ONLY;");

        $query->bindParam(':page_size', $page_size, PDO::PARAM_INT);
        $query->bindParam(':offset', $offset, PDO::PARAM_INT);
        $query->bindParam(':product_origin', $origin, PDO::PARAM_INT);

        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_filter($col){
        global $db;
        $string="SELECT DISTINCT ".$col." FROM products ";
        $query = $db->prepare($string);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function set_material($material){
        global $db;
        $query = $db->prepare("INSERT INTO [dbo].[products] ([id], [currency], [price], [shipping], [station], [stationFactor], [mtext], [collection], [pcUnit], [brutweight], [size], [name], [cins], [thickness], [surface], [reclap], [matParlak], [color], [quality], [totalStock], [reservestock], [fobStationFactor], [paletkodu], [pkstext], [squareinpack], [packamount], [totalquan], [product_origin]) 
                                                      VALUES (:material, :currency, :price, :shipping, :station, :stationFactor, :mtext, :collection, :pcUnit, :brutweight, :size, :name, :cins, :thickness, :surface, :reclap, :matParlak, :color, :quality, :totalStock, :reservestock, :fobStationFactor, :paletKodu, :pkstext, :squareinpack, :packamount, :totalquan, :product_origin)");
        $result=$query->execute($material);
        if ($result){
            return 1;
        }else{
            return 0;
        }
    }


}
