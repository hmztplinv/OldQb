<?php

function admin_controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/admin/controller/' . $controllerName .'.php';
}

function admin_view($viewName){
    return PATH . '/admin/views/' . $viewName . '.php';
}

function admin_public($publicName){
    return PATH . '/public/admin/'. $publicName;
}



