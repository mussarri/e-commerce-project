<?php

global $db;
if (!route(1)) {
    header('Location:' . site_url());
    exit;
}

$query = $db->prepare('SELECT * FROM ecommerce.product WHERE id=:id');
$query->execute([
    'id' => route(1)
]);
$row = $query->fetch(PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT * FROM ecommerce.comments WHERE comment_post_id=:id');
$query->execute([
    'id' => $row['id']
]);
$comment_count=$query->rowCount();
$comments = $query->fetchAll();


if (!$row) {
    echo 'error';
    header('Location:' . site_url());
}

require view('product');