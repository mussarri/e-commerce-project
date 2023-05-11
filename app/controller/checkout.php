<?php
global $db;
if (!session('cart')) {
    $error = 'Sepetinizde ürün yok';
} else {
    $productInf = [];
    foreach (session('cart') as $key => $quantity) {
        $query = $db->prepare('SELECT * FROM ecommerce.product WHERE id=:id');
        $query->execute([
            'id' => $key
        ]);
        $productInf[] = array_merge($query->fetch(PDO::FETCH_ASSOC), ['quantity' => $quantity]);
    }
}


require view('checkout');