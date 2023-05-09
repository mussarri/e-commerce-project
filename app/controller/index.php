<?php

global $db;
$query = $db->prepare('SELECT *FROM ecommerce.category');
$query->execute();
$categories = $query->fetchAll();

$query=$db->prepare('SELECT *, sub_category_1.id, sub_category_1.up_category_id  as category_name FROM ecommerce.product JOIN ecommerce.sub_category_1 ON ecommerce.product.category_id = ecommerce.sub_category_1.id');
$query->execute();
$products = $query->fetchAll();

require view('index');