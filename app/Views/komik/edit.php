<?=$this->extend('layout/template') ; ?>

<?=$this->section('content') ; ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Komik</h2>

            <form action="/komik/update/<?=$komik['id'] ; ?>" method="post">
                <?=csrf_field() ; ?>
                <input type="hidden" name="slug" value="<?=$komik['slug'] ; ?>">
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="judul" name="judul" autofocus
                            value="<?= (old('judul'))? old('judul') :$komik['judul'] ; ?>">
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
                            value="<?= (old('penulis'))? old('penulis') :$komik['penulis'] ; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit"
                            value="<?= (old('penerbit'))? old('penerbit') :$komik['penerbit'] ; ?>">
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="sampul" name="sampul"
                            value="<?= (old('sampul'))? old('sampul') :$komik['sampul'] ; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>



<?=$this->endSection() ; ?>