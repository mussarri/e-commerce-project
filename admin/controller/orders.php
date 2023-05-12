<?php

global $db;
$query = $db->prepare('SELECT * FROM ecommerce.order');
$query->execute();
$count =  $query->rowCount();
$orders = $query->fetchAll();
if (!$orders) {
    $error = 'Hiç sipariş yok';
}

require admin_view('orders');