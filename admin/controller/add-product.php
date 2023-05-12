<?php

global $db;
$query = $db->prepare('SELECT * from ecommerce.category');
$query->execute();
$categories = $query->fetchAll();

if (post('submit')) {
    $error = null;
    foreach ($_POST as $key => $item) {
        if (post($key)) continue;
        if ($key != 'image' && !post($key)) {
            $error = true;
        }
        if (!$error) {
            $query = $db->prepare('INSERT into ecommerce.product SET name=:name, description=:description, brand=:brand, category_id=:category, stock=:stock,  price=:price');
            $result = $query->execute([
                'brand' => post('brand'),
                'description' => htmlspecialchars(post('description')),
                'category' => 22,
                'name' => post('name'),
                'stock' => post('stock'),
                'price' => 200,
            ]);
            if ($result) {
                $success = 'Ürün başarı ile eklendi';
            } else {
                $error = 'Bir hata oluştu';
            }
            header('Location:' . admin_url('products'));

        }
    }
}


require admin_view('add-product');