<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="<?=$product['image_url']?>" alt="" height="250">
                <h2>$<?=$product['price']?></h2>
                <p class="line-2"><?=$product['name']?></p>
                <a href="#" class="btn btn-default add-to-cart"><i
                        class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>$<?=$product['price']?></h2>
                    <p><?=$product['name']?><p/>
                    <a href="#" class="btn btn-default add-to-cart"><i
                            class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="<?=site_url()?>add-wishlist?id=<?=$product['id']?>"><i
                            class="fa
                                            fa-plus-square"></i>Add to
                        wishlist</a></li>
                <li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>