<?php
global $db, $categories, $mainCategory;
require view('static/header');
?>

    <section id="advertisement">
        <div class="container">
            <img src="<?= public_url() ?>images/shop/advertisement.jpg" alt="">
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <?php
                            $query = $db->prepare('SELECT * FROM ecommerce.category');
                            $query->execute();
                            $allCategories = $query->fetchAll();
                            foreach ($allCategories as $category): ?>
                                <div class="panel panel-default">
                                    <div class="panel-heading<?=$category['id'] == $mainCategory ? ' active' : ''?>">
                                        <h4 class="panel-title">
                                            <a class="title">
                                                <button class="badge pull-right" style="border:none;"><i class="fa
                                                fa-plus"></i></button>
                                                <a href="<?= site_url('category/') . permalink($category['name']) ?>"><?= $category['name']
                                                    ?></a>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse<?= $category['name'] == $categories[0]['name']
                                        ? ' show' : null ?>">
                                        <div class="panel-body">
                                            <ul>
                                                <?php
                                                $query = $db->prepare('SELECT * FROM ecommerce.sub_category_1 WHERE up_category_id=' . $category['id']);
                                                $query->execute();
                                                $subcategories = $query->fetchAll();
                                                foreach ($subcategories as $subcategory):
                                                    ?>
                                                    <li>
                                                        <a href="<?= site_url('category/') . permalink($category['name']) . '/'
                                                        . $subcategory['id']
                                                        ?>"><?= $subcategory['name'] ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div><!--/category-productsr-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <?php
                                    $query = $db->prepare('SELECT COUNT(*), brand FROM ecommerce.product GROUP BY brand');
                                    $query->execute();
                                    $results = $query->fetchAll();
                                    foreach ($results as $result):
                                        ?>
                                        <li><a href="<?= site_url('brand/') . permalink($result['brand']) ?>"> <span
                                                    class="pull-right">(<?= $result[0] ?>)
                                    </span><?= $result['brand'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div><!--/brands_products-->

                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well">
                                <div class="slider slider-horizontal" style="width: 156px;">
                                    <div class="slider-track">
                                        <div class="slider-selection" style="left: 41.6667%; width: 33.3333%;"></div>
                                        <div class="slider-handle round left-round" style="left: 41.6667%;"></div>
                                        <div class="slider-handle round" style="left: 75%;"></div>
                                    </div>
                                    <div class="tooltip top" style="top: -30px; left: 58px;">
                                        <div class="tooltip-arrow"></div>
                                        <div class="tooltip-inner">250 : 450</div>
                                    </div>
                                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600"
                                           data-slider-step="5" data-slider-value="[250,450]" id="sl2" style=""></div>
                                <br>
                                <b>$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->

                        <div class="shipping text-center"><!--shipping-->
                            <img src="<?=public_url()?>images/home/shipping.jpg" alt="">
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>

                        <?php
                        $query = $db->prepare('SELECT * FROM ecommerce.product WHERE category_id LIKE "'.$mainCategory.'%"');
                        $query->execute();
                        $products = $query->fetchAll();
                        foreach ($products as $product) {
                            require view('template-parts/feature-products');
                        } ?>

                        <ul class="pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">»</a></li>
                        </ul>
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>


<?php require view('static/footer'); ?>