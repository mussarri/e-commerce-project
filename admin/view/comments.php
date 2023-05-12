<?php global $comments, $error;
require admin_view('static/header'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Yorumlar</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
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
                    <thead>
                    <tr>
                        <th>Status</th>
                        <th>Kullanıcı</th>
                        <th>Yorum</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th></th>
                    </tr>

                    </thead>

                    <tbody>
                    <?php foreach ($comments as $comment): ; ?>
                        <tr>
                            <?php if ($comment['status'] == 2): ?>
                                <td class="alert-success">Onaylandı</td>
                            <?php elseif ($comment['status'] == 1): ?>
                                <td class="alert-warning">Onay Bekliyor</td>
                            <?php else: ?>
                                <td class="alert-danger">Silindi</td>
                            <?php endif; ?>
                            <td>Kullanıcı</td>
                            <td>Yorum</td>
                            <td>Product</td>
                            <td>Date</td>
                            <td>
                                <button class="btn btn-danger"><i class="fa fa-close"></i></button>
                                <button class="btn
                        btn-success"><i class="fa
                        fa-check"></i></button>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>

<?php require admin_view('static/footer'); ?>
