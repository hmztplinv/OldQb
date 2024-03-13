<?php

class Log
{
public static function createLog($id,$table,$process){
    $data=[
        'userid' => $id,
        'message' => "Process:".$process."/Table:".$table,
        'time' => date('d/m/Y H:i:s',time())
    ];
    global $db;
    $query = $db->prepare("INSERT INTO logs (userId,message,time) VALUES (:userid,:message,:time)");
    $query->execute($data);
}
}

