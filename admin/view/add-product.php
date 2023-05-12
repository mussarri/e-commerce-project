<?php global $categories;
require admin_view('static/header'); ?>

<div class="container container-fluid" style="max-width: 600px; margin: 0">
    <h2 class="h3 mb-4 text-gray-800">Ürün Ekle</h2>


    <form action="" method="post">
        <div class="row row-cols-2">
            <div class="form-outline col">
                <label class="form-label" for="form10Example1">Name</label>
                <input type="text" id="form10Example1" name="name" class="form-control"/>
            </div>
            <div class="form-outline col">
                <label class="form-label" for="form10Example3">Marka</label>
                <input type="text" id="form10Example2" name="category" class="form-control"/>
            </div>
            <div class="form-outline col">
                <label class="form-label" for="form10Example4">Stok</label>

                <input type="text" id="form10Example3" name="brand" class="form-control"/>
            </div>
            <div class="form-outline col">
                <label class="form-label" for="form10Example2">Kategori</label>
                <select name="category" id="form10Example4" style="display: block; padding: 5px 10px">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-outline col">
                <label class="form-label" for="form10Example5">Fiyat</label>
                <input type="text" name="price" id="form10Example5" class="form-control"/>
            </div>
            <div class="form-outline col">
                <label class="form-label" for="form10Example6">Resim</label>
                <input type="file" name="image" class="form-control"/>
            </div>
            <div class="form-outline col-12">
                <label class="form-label" for="form10Example7"></label>
                <textarea id="tiny" class="form-label" name="description">Ürün Açıklama</textarea>
            </div>
        </div>
        <div class="pt-3 text-right">
            <button type="submit" class="btn btn-primary" name="submit" value="1">Ürünü Kaydet</button>
        </div>
    </form>
</div>

<?php require admin_view('static/footer'); ?>
