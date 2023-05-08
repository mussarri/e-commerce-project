<?php

function controller($controllerName){
    $controllerName = strtolower($controllerName);
    return PATH . '/app/controller/' . $controllerName . '.php';
}

function view($viewName){
    return PATH . '/app/view/' . $viewName . '.php';
}

function route($index){
    global $route;
    return $route[$index] ?? false;
}


function site_url($url = false)
{
    return URL . '/' . $url;
}

function public_url($url = false)
{
    return URL . '/public/' . $url;
}