<?php
//views kısmında kullanılan fonksiyonlar
function site_url($url = false){
    return URL . '/' . $url ;
}
function customer_url($url = false){
    return URL . '/customer/' . $url;
}
function seller_url($url=false){
    return URL . '/seller/' . $url;
}
function operation_url($url=false){
    return URL . '/operation/' . $url;
}

function global_url($url=false){
    return URL . '/globalViews/' . $url;
}
function admin_url($url=false){
    return URL . '/admin/' . $url;
}
function public_url($url = false){
    return URL . '/public/' . $url;
}

function public_urlassets($url = false){
    return URL . '/public/user/assets/' . $url;

}

function error(){
    return isset($message['err']) ? $message['suc'] : false;
}
function success(){
    global $success;
    echo "<script>swal('Successful','$success','success')</script>";
}
function returned($message){

    if (isset($message['suc']))
    {
        $messages = $message['suc'];
        $redirect = site_url($message['redirects']);

        echo "<script>swal('Successful','$messages','success').then(function() {
                        window.location = '$redirect';
                    });</script>";
    }
    if (isset($message['err']))
    {
        $messages = $message['err'];
        $redirect = site_url($message['redirects']);

        echo "<script>swal('Failed','$messages','error').then(function() {
                        window.location = '$redirect';
                    });</script>";
    }
}
function damp($string){
    if (gettype($string) == "array"){
        print_r($string);
        exit();

    }else{
        echo $string;
        exit();
    }
}


