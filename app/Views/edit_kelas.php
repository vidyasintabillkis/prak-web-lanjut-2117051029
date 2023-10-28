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
        <form method="POST" action="<?= base_url('/kelas/' . $kelas['id']) ?>" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field() ?>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
                </div>
            </div>

            <button type="submit" name= "submit" value="submit" id="submit" class="btn btn-light btn-sm float-end">Simpan</button>
            <a href="<?= base_url('/kelas') ?>" type="button" class="btn btn-warning btn-sm float-end">Kembali</a>
        </form>
    </div>
<?= $this->endSection() ?> 