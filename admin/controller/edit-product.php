<?php

global $db;

if (!get('id')) {
    header('Location:' . admin_url());
    exit;
} else {
    $id = get('id');
    $query = $db->prepare('SELECT * from ecommerce.category');
    $query->execute();
    $categories = $query->fetchAll();

    $query = $db->prepare('SELECT * from ecommerce.product WHERE id=:id');
    $query->execute([
        'id' => $id
    ]);
    $product = $query->fetch(PDO::FETCH_ASSOC);
    if (!$product) {
        $error = 'Ürün bulunamadı';
    }
    if (post('submit')) {
        $error = null;
        foreach ($_POST as $key => $item) {
            if (post($key)) continue;
            if ($key != 'image' && !post($key)) {
                $error = true;
            }
        }
        if (!$error) {
            $query = $db->prepare('UPDATE ecommerce.product SET name=:name, description=:description, brand=:brand, category_id=:category, stock=:stock,  price=:price WHERE id=:id');
            $result = $query->execute([
                'brand' => post('brand'),
                'description' => htmlspecialchars(post('description')),
                'category' => 22,
                'name' => post('name'),
                'stock' => post('stock'),
                'price' => post('price'),
                'id' => get('id')
            ]);
            if ($result) {
                $success = 'Ürün başarı ile eklendi';
            } else {
                $error = 'Bir hata oluştu';
            }
            header('Location:'.admin_url('products'));
        } else {
            $error = 'Lütfen boş bırakmayınız';
        }

    }
}


require admin_view('edit-product');