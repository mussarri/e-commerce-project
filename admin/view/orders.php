<?php global $error, $count;
require admin_view('static/header'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Siparişler</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Siparişler (<?= $count; ?>)
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <?php if ($error): ?>
                        <div class="alert-warning p-3">
                            <?= $error ?>
                        </div>
                    <?php else: ?>
                        <thead class="text-dark">
                        <tr>
                            <th>Name</th>
                            <th>Comments</th>
                            <th>Category</th>
                            <th>Stok</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th></th>
                        </tr>


                        </thead>

                        <tbody>
                        <?php if ($orders) foreach ($orders as $order): ?>
                            <tr>
                                <th class="line-2"><a href=""><?= $order['name'] ?></a></th>
                                <th><a href="<?= admin_url('comments') . '?id=' . $order['id'] ?>"
                                       class="text-dark">Comments</a></th>
                                <th><?= $order['category_id'] ?></th>
                                <th><?= $order['stock'] ?></th>
                                <th><?= $order['created_at'] ?></th>
                                <th>$<?= $order['price'] ?></th>
                                <th><a class="btn btn-warning" href="<?= admin_url('edit-order')
                                    . '?id=' . $order['id'] ?>"><i class="fa fa-sm fa-pen"></i></a></th>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    <?php endif; ?>

                </table>
            </div>
        </div>
    </div>

</div>

<?php require admin_view('static/footer'); ?>
