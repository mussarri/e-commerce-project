<?php

global $db;

if (!session('id')) {
    $error = 'Lütfen giriş yapınız';
    header('Location:' . site_url());
} else {
    $id = session('id');
    $query = $db->prepare('SELECT id FROM ecommerce.wishlist WHERE user_id=:user_id');
    $query->execute([
        'user_id' => $id
    ]);
    $wishlist_id=$query->fetch(PDO::FETCH_ASSOC)['id'];
    $query=$db->prepare('SELECT product_id, ecommerce.product.* FROM ecommerce.wishlist_products INNER JOIN ecommerce.product ON ecommerce.wishlist_products.product_id=ecommerce.product.id WHERE wishlist_id=:wishlist_id');
    $query->execute([
        'wishlist_id' => $wishlist_id
    ]);
    $products = $query->fetchAll();
    if (!$products){
        $error = 'Favori ürününüz bulunmamaktadır.';
    }

}


require view('wishlist');