<?php require admin_view('static/header'); ?>
<div class="container-fluid" style="max-width: 600px; margin: 0">
    <h2 class="h3 mb-4 text-gray-800">Ayarlar</h2>
    <form action="" method="post">
        <div class="form-group row mb-4">
            <label class="col-sm-3" for="inputPassword" class="col-sm-2 col-form-label">Site Başlığı</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="settings[title]" placeholder="title"
                       value="<?=setting('title');?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-sm-3" for="inputPassword" class="col-sm-2 col-form-label">Mail</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="settings[email]" placeholder="email"
                       value="<?=setting('email');?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-sm-3" for="inputPassword" class="col-sm-2 col-form-label">Tel No.</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="settings[tel]" placeholder="tel"
                       value="<?=setting('tel');?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-sm-3" for="inputPassword" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="settings[address]" placeholder="address"
                       value="<?=setting('address');?>">
            </div>
        </div>

        <button type="submit" value="1" name="submit" class="btn btn-primary">Ayarları Kaydet</button>
    </form>

</div>

<?php require admin_view('static/footer'); ?>
