<?php

global $db;
$query = $db->prepare('SELECT * FROM ecommerce.product');
$query->execute();
$count =  $query->rowCount();
$products = $query->fetchAll();
if (!$products) {
    $error = 'Hiç ürün bulunamadı';
}

require admin_view('products');