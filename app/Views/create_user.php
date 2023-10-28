<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?> 
    <div class="container">
        <?php if(session()->getFlashdata('errors')) : ?>
            <div class="col-sm-15">
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('errors') ?>
                </div>
            </div>
        <?php endif ?>
        <form method="POST" action="<?= base_url('/user/store') ?>" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="npm" class="col-sm-2 col-form-label">NPM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="npm" name="npm">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" name="foto" id="foto">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="kelas">
                            <option selected value="">Pilih Kelas</option>
                            <?php
                                foreach ($kelas as $item) {
                            ?>
                            <option value="<?= $item['id']?>">
                                <?= $item['nama_kelas'] ?>
                            </option>
                            <?php
                                }
                            ?> 
                        </select>
                    </div>
            </div>

            <button type="submit" name= "submit" value="submit" id="submit" class="btn btn-light btn-sm float-end">Simpan</button>
            <a href="<?= base_url('/user') ?>" type="button" class="btn btn-warning btn-sm float-end">Kembali</a>
        </form>
    </div>
<?= $this->endSection() ?> 

