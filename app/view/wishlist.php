<?php global $products, $error;
require view('static/header');
?>

<div class="container" style="margin: 50px auto 100px auto">
    <div class="row">
        <div class="features_items"><!--features_items-->
            <?php if ($error): ?>
                 <div class="alert alert-warning">
                     <?=$error?>
                 </div>
            <?php else: ?>
                <h2 class="title text-center">Favorites</h2>
                <?php foreach ($products as $product): ?>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?= $product['image_url'] ?>" alt="" height="250">
                                    <h2>$<?= $product['price'] ?></h2>
                                    <p><?= $product['name'] ?></p>
                                    <a href="<?= site_url('api') . '/addcart?product_id=' . $product['id'] ?>" class="btn btn-default
                            add-to-cart"><i class="fa
                            fa-shopping-cart"></i>Add to
                                        cart</a>
                                </div>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="<?=site_url('remove-wishlist').'?id='.$product['id']?>"><i class="fa
                                    fa-minus-square"></i>Remove
                                            from
                                            wishlist</a></li>
                                    <li><a href="<?= site_url('product') . '/' . $product['id'] ?>"><i class="fa
                            fa-plus-square"></i>View
                                            details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</div>


<?php require view('static/footer'); ?>
