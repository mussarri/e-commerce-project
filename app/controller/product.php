<?php

global $db;
if (!route(1)){
    header('Location:'.site_url());
    exit;
}

$query = $db->prepare('SELECT * FROM ecommerce.product WHERE id=:id');
$query->execute([
    'id' => route(1)
]);
$row = $query->fetch(PDO::FETCH_ASSOC);

if(!$row){
    echo 'error';
    exit;
}

require view('product');