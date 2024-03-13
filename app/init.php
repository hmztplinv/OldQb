<?php
session_start();
ob_start();
error_reporting(E_ALL);

ini_set("display_errors",0);

//if (isset($_SESSION['email'])) {
//    if (time() - $_SESSION['time_stamp'] > 6000) {
//        session_destroy();
//        $error = "Oturum süreniz doldu. Lütfen tekrar giriş yapınız.";
//    }
//}             oturum süre sınırı


define('PATH', '.');
define('SUBFOLDER', true);      //subfolder varsa true kalması lazım
define('URL', 'https://www.qbdigitals.com');
define('_MPDF_TTFONTDATAPATH', sys_get_temp_dir()."/");



function loadClasses($className)
{
    require __DIR__ . '/classes/' . strtolower($className) . '.php';
}

$autoload = spl_autoload_register('loadClasses');   //classları autoload ediyor


date_default_timezone_set('Europe/Istanbul');

require __DIR__ . '/db.php';


foreach (glob(__DIR__ . '/helper/*.php') as $helperFile) {
    require $helperFile;    //helperları autoload ediyor
}
