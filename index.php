<?php


error_reporting(E_ALL);
ini_set('disable_errors', 1);
//TODO: active

require __DIR__ . '/app/init.php';

$routeExplode = explode('?', $_SERVER['REQUEST_URI']);   //gelen request_urı'yı '?' ile kesiyor
$route = array_filter(explode('/', $routeExplode[0]));   // ilk url'i alıp array'i sıfırlıyor.



//require_once('vendor/autoload.php');     google api autoload

if (SUBFOLDER === false) {
    array_shift($route);
}

if (!route(1)) {
    $route[1] = 'index';
}



if (file_exists(controller(route(1))) || file_exists(controllerDir(route(1)))) {


    if ($route[1] == "customer"){

        if (isset($_SESSION['user_email'])){
            if (!route(1)){
                $route[1] = "index";
            }
            if(isset($_SESSION['is_customer_verify'])){
                if($_SESSION['is_customer_verify']==1){
                    require customerController('customer_detail');
                    exit();
                }
            }
            if (session('role') == 0){
                require customerController(route(2));
            }elseif(session('role') == 1){
                header("Location:".seller_url('index'));
            }
            elseif(session('role') == 2){
                header("Location:".operation_url('index'));
            }
            elseif(session('role') == 5){
                header("Location:".admin_url('index'));
            }
        }else{
            header("Location:".site_url('login'));
        }


    }elseif ($route[1] == "seller"){
        if (isset($_SESSION['user_email'])){
            if (!route(1)){
                $route[1] = "index";
            }

            if (session('role') == 1){

                require sellerController(route(2));
            }else{
                header("Location:".customer_url('index'));
            }
        }else{
            header("Location:".site_url('login'));
        }
    }elseif ($route[1] == "operation"){
        if (isset($_SESSION['user_email'])){
            if (!route(1)){
                $route[1] = "index";
            }

            if (session('role') == 2){

                require operationController(route(2));
            }else{
                header("Location:".operation_url('index'));
            }
        }else{
            header("Location:".site_url('login'));
        }
    }elseif ($route[1] == "admin"){
        if (isset($_SESSION['user_email'])){
            if (!route(1)){
                $route[1] = "index";
            }

            if (session('role') == 5){

                require adminController(route(2));
            }else{
                header("Location:".admin_url('index'));
            }
        }else{
            header("Location:".site_url('login'));
        }
    }

    else{
        require controller(route(1));
    }


}else{
    $route[1] = "404";

    require controller(route(1));
}


