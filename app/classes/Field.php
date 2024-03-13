<?php

class Field
{
public static function get_banks(){
    global $db;
    $query = $db->query("SELECT * FROM banks");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
}