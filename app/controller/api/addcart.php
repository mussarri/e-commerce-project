<?php

global $db;

if (!post('product_id')) {
    if (!get('product_id')) {
        $json['error'] = 'Product id';
    } else {
        session_cart(get('product_id'), 1);
        header('Location:' . site_url('cart'));
    }
} elseif (!post('quantity')) {
    $json['error'] = 'Quantity';
} else {
    $quantity = post('quantity');
    $product_id = post('product_id');
    session_cart($product_id, $quantity);
    $json['success'] = 'Ürün sepete eklendi';
}


