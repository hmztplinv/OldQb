<?php
$config = require 'config.php';

try{
    $db = new PDO('sqlsrv:Server=' . $config['db']['host'] . ';Database=' . $config['db']['name'], $config['db']['user'], $config['db']['pass']);
    $db->exec("set names utf8");

}catch (PDOException $e){
    echo $e;
}
