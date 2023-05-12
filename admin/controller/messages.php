<?php

global $db;
$query= $db->prepare('SELECT * from ecommerce.messages');
$query->execute();
$messages = $query->fetchAll();

if(!$messages){
    $error = 'Hiç mesaj yok';
}


require admin_view('messages');