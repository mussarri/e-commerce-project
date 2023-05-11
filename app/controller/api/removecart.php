<?php
global $db;

if (!post('product_id')) {
    if (!get('product_id')) {
        $json['error'] = 'Product id';
    } else {
        if (!get('remove')) {
            session_cart(get('product_id'), -1);
        } else {
            session_cart(get('product_id'), 1, true);
        }
        header('Location:' . site_url('cart'));
    }
} else {
    $json['error'] = 'error';
    echo 'error';

}
