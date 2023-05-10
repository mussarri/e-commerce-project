<?php
global $db, $categories;

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
                         <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                          <?php require view('template-parts/sidebar-categories') ?>
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
                            <img src="<?= public_url() ?>images/home/shipping.jpg" alt="">
                        </div><!--/shipping-->

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>

                        <?php

                        $page = $_GET['pageno'] ?? 1;
                        $query = $db->prepare('SELECT * FROM ecommerce.product');
                        $query->execute();
                        $total_rows = $query->rowCount();

                        $per_page = 1;
                        $offset = ($page - 1) * $per_page;
                        $total_pages = ceil($total_rows / $per_page);

                        $sql = 'SELECT * FROM ecommerce.product WHERE category_id  LIMIT ' . $offset . ',' . $per_page;

                        $query = $db->prepare($sql);
                        $query->execute();
                        $products = $query->fetchAll();
                        foreach ($products as $product) {
                            require view('template-parts/feature-products');
                        } ?>
                        <div class="col-sm-12 text-center">
                            <ul class="pagination">
                                <?php
                                if ($page > 1):
                                    ?>
                                    <li class=""><a href="?pageno=<?= $page - 1 ?>"><i class="fa fa-sm
                                    fa-angle-left"></i></a>
                                    </li>
                                    <li class=""><a href="?pageno=<?= $page - 1 ?>"><?= $page - 1 ?></a>
                                    </li>
                                <?php endif; ?>
                                <li class="active"><a href="?pageno=<?= $page ?>"><?= $page ?></a>
                                </li>
                                <?php if ($page < $total_pages): ?>
                                    <li class=""><a href="?pageno=<?= $page + 1 ?>"><?= $page + 1 ?></a>
                                    </li>
                                    <li class=""><a href="?pageno=<?= $page + 1 ?>"> <i class="fa fa-sm
                                    fa-angle-right"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>


<?php require view('static/footer'); ?>