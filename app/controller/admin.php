<?php

if(!route(1)){
    $route[1] = 'index';
}

if(!file_exists(admin_controller(route(1)))){
    $route[0] = '404';
}

$admin_menu = [
    ['url' => 'products', 'title' => 'Ürünler', 'icon' => 'cubes'],
    ['url' => 'orders', 'title' => 'Siparişler', 'icon' => 'cart-plus'],
    ['url' => 'comments', 'title' => 'Yorumlar', 'icon' => 'comments'],
    ['url' => 'campaigns', 'title' => 'Kampanyalar', 'icon' => 'tags'],
    ['url' => 'messages', 'title' => 'Mesajlar', 'icon' => 'envelope'],
    ['url' => 'settings', 'title' => 'Ayarlar', 'icon' => 'cog'],

];


require admin_controller(route(1));