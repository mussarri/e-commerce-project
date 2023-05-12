<?php global $categories, $product, $error, $success;
require admin_view('static/header'); ?>

<div class="container container-fluid" style="max-width: 600px; margin: 0">
    <h2 class="h3 mb-4 text-gray-800">Ürün Ekle</h2>

    <?php if ($error): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif; ?>
    <?php if ($success): ?>
        <div class="alert alert-success">
            <?= $success ?>
        </div>
    <?php endif; ?>


    <form action="" method="post">
        <div class="row row-cols-2">
            <div class="form-outline col">
                <label class="form-label" >Name</label>
                <input type="text" name="name" class="form-control"
                       value="<?= $product['name'] ?>"/>
            </div>
            <div class="form-outline col">
                <label class="form-label" >Marka</label>
                <input type="text"  name="brand" class="form-control"
                       value="<?= $product['brand'] ?>"/>
            </div>
            <div class="form-outline col">
                <label class="form-label" >Stok</label>
                <input type="text" name="stock" class="form-control"
                       value="<?= $product['stock'] ?>"/>
            </div>
            <div class="form-outline col">

                <label class="form-label" >Kategori</label>
                <select name="category"  style="display: block; padding: 5px 10px">
                    <?php foreach ($categories as $category): ?>
                        <option <?= $product['category_id'] == $category['id'] ? 'selected' : '' ?> value="<?=
                        $category['url']
                        ?>"><?=
                            $category['name']
                            ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-outline col">
                <label class="form-label" >Fiyat</label>
                <input type="text" name="price" class="form-control"
                       value="<?= $product['price'] ?>"/>
            </div>
            <div class="form-outline col">
                <label class="form-label" >Resim</label>
                <input type="file" name="image" class="form-control"
                       value="<?= $product['image_url'] ?>"/>
            </div>
            <div class="form-outline col-12">
                <label class="form-label" for="form10Example7"></label>
                <textarea id="tiny" class="form-label"
                          name="description"><?= htmlspecialchars_decode($product['description']) ?></textarea>
            </div>
        </div>
        <div class="pt-3 text-right">
            <button type="submit" class="btn btn-primary" name="submit" value="1">Ürünü Kaydet</button>
        </div>
    </form>
</div>

<?php require admin_view('static/footer'); ?>
