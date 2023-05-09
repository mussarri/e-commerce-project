<?php
global $db;

if (!route(0) == 'category'){
    exit;
}elseif(!route(1)){
    require view('all-categories');
}else{
    if(!route(2)){
        $query = $db->prepare('SELECT * FROM ecommerce.category WHERE url=:url');
        $query->execute([
            'url' => route(1),
        ]);
        $categories = $query->fetchAll();
        $mainCategory = $categories[0]['id'];
        require view('category');
    }elseif(route(2)){
        $subCategory = route(2);
        require view('sub-category');
    }
}


