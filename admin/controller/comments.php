<?php

global $db;
$query= $db->prepare('SELECT * from ecommerce.comments');
$query->execute();
$comments = $query->fetchAll();

if(!$comments){
    $error = 'Hiç yorum yok';
}


require admin_view('comments');