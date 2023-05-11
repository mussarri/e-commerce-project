<?php

global $db;
if (!session('id')){
    $error = 'lütfen giriş yapınız';
}elseif(!get('id')){
    $error = 'Bir hata oluştu';
}else{
    $product_id = get('id');
    $query=$db->prepare('SELECT id from ecommerce.wishlist WHERE user_id=:user_id');
    $query->execute([
        'user_id' => session('id'),
    ]);
    $wishlist_id = $query->fetch(PDO::FETCH_ASSOC)['id'];

    $query=$db->prepare('DELETE FROM ecommerce.wishlist_products WHERE ecommerce.wishlist_products.product_id=:product_id and ecommerce.wishlist_products.wishlist_id=:wishlist_id');
    $result = $query->execute([
        'product_id' => $product_id,
        'wishlist_id' => $wishlist_id
    ]);
    header('Location:'.site_url('wishlist'));

}
