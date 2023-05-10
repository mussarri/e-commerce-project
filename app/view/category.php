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
                    <?php require view('template-parts/sidebar-categories') ?>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>

                        <?php
                        if (isset($_GET['pageno'])) {
                            $page = $_GET['pageno'];
                        } else {
                            $page = 1;
                        }
                        $query = $db->prepare('SELECT * FROM ecommerce.product');
                        $query->execute();
                        $total_rows = $query->rowCount();

                        $per_page = 2;
                        $offset = ($page - 1) * $per_page;
                        $total_pages = ceil($total_rows / $per_page);

                        $sql = 'SELECT * FROM ecommerce.product WHERE category_id LIKE "' . $mainCategory . '%"' . ' LIMIT ' . $offset . ',' . $per_page;

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