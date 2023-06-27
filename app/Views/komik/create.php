<?=$this->extend('layout/template') ; ?>

<?=$this->section('content') ; ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Komik</h2>

            <form action="/komik/save" method="post">
                <?=csrf_field() ; ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="judul" name="judul" autofocus
                            value="<?=old('judul') ; ?>">
                        <?php if (session()->getFlashdata('_ci_validation_errors')) : ?>
                        <div class="form-control is-invalid">
                            <ul>
                                <?php foreach (session()->getFlashdata('_ci_validation_errors') as $error) : ?>
                                <li><?= $error ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis"
                            value="<?=old('penulis') ; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit"
                            value="<?=old('penerbit') ; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul" value="<?=old('sampul') ; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>



<?=$this->endSection() ; ?>