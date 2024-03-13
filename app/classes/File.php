<?php

class File // File management
{
    public static function get_document_by_product_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM files where productId=:id and fileType=2");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function check_document_existence_by_product_id($id){
        global $db;
        $query = $db->prepare("SELECT COUNT(*) as count FROM files WHERE productId = :id AND fileType = 2");
        $query->execute([
            'id' => $id
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['count'];
    }
    public static function check_pictures_existence_by_product_id($id){
        global $db;
        $query = $db->prepare("SELECT COUNT(*) as count FROM files WHERE productId = :id AND fileType = 1");
        $query->execute([
            'id' => $id
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0 ? 1 : 0;
    }
    public static function docs_upload($productid,$images,$route){
        global $db;
        $count = count($images['name']);
        $hash_name = [];
        for ($i = 0;$i<$count;$i++){
            $image_name = explode('.', $images['name'][$i]);
            $hash='';

            if ($images['type'][$i] ==  'image/png' ){
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.png';
            }elseif ($images['type'][$i] == 'image/jpeg'){
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.jpeg';
            }elseif($images['type'][$i] == 'image/webp') {
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.webp';
            }elseif($images['type'][$i] == 'video/mp4') {
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.mp4';
            }elseif($images['type'][$i] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.xlsx';
            }elseif($images['type'][$i] == 'application/vnd.ms-excel') {
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.xls';
            }elseif($images['type'][$i] == 'application/pdf') {
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.pdf';
            }
            $hash_name[$i] = str_replace('/','a',$hash);

        }

        $rrs=self::get_document_by_product_id($productid);
        if (empty($rrs)){
            foreach ($hash_name as $hash){
                $sor = $db->prepare('INSERT INTO [dbo].[files] ([fileName],[fileType],[productId]) VALUES (:fileName,2,:productId)');
                $result = $sor->execute([
                    'productId' => $productid,
                    'fileName' => $hash,
                ]);
            }
        }
        else{
            foreach ($hash_name as $hash){
                $sor = $db->prepare('UPDATE files SET [fileName]=:fileName WHERE productId=:productId AND fileType=2');
                $result = $sor->execute([
                    'productId' => $productid,
                    'fileName' => $hash,
                ]);
            }
        }



        $hash_name = json_encode($hash_name);
        if ($result){
            $hash_name = json_decode($hash_name,true);
            for ($i=0;$i<$count;$i++){
                move_uploaded_file($images['tmp_name'][$i],$route.$hash_name[$i]);
            }
        }
    }
    public static function files_upload($productid,$images,$route){
        global $db;
        $count = count($images['name']);
        $hash_name = [];
        for ($i = 0;$i<$count;$i++){
            $image_name = explode('.', $images['name'][$i]);
            $hash='';

            if ($images['type'][$i] ==  'image/png' ){
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.png';
            }elseif ($images['type'][$i] == 'image/jpeg'){
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.jpeg';
            }elseif ($images['type'][$i] == 'image/jpg'){
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.jpg';
            }elseif($images['type'][$i] == 'image/webp') {
                $hash = password_hash($image_name[0],PASSWORD_DEFAULT) . '.webp';
            }
            $hash_name[$i] = str_replace('/','a',$hash);

        }

        foreach ($hash_name as $hash){
            $sor = $db->prepare('INSERT INTO [dbo].[files] ([fileName],[fileType],[productId]) VALUES (:fileName,1,:productId)');
            $result = $sor->execute([
                'productId' => $productid,
                'fileName' => $hash,
            ]);
        }

        $hash_name = json_encode($hash_name);
        if ($result){
            $hash_name = json_decode($hash_name,true);
            for ($i=0;$i<$count;$i++){
               move_uploaded_file($images['tmp_name'][$i],$route.$hash_name[$i]);
            }
        }
    }

    public static function get_images_by_product_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM files where productId=:id and fileType=1 and isDeleted=1");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_docs_by_product_id($id){
        global $db;
        $query = $db->prepare("SELECT * FROM files where productId=:id and fileType=2");
        $query->execute([
            'id'=>$id
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function delete_images_by_id($id){
        global $db;
        $query = $db->prepare("UPDATE files SET isDeleted=0 WHERE  id=:id");
        $query->execute([
            'id'=>$id
        ]);
    }




}
