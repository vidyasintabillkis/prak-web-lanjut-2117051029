<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?> 
    <?php if(session()->getFlashdata('errors')) : ?>
        <div class="row">
            <div class="alert">
                <?= session()->getFlashdata('errors') ?>
            </div>
        </div>
    <?php endif ?>
    <div class="login2">
        <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
            <h1>Profile</h1><br>
            <input type="text" name="nama" style="width: 220px;" placeholder="Nama" id="input" value="<?= old('nama') ?>"><br>
            <input type="text" name="npm" style="width: 220px;" placeholder="NPM" id="input" value="<?= old('npm') ?>"><br>
            <input type="file" name="foto" style="width: 220px;" placeholder="Foto" id="input"><br>
            <select name="kelas" style="width: 220px;" id="kelas" placeholder="Kelas">
                <option selected value="">Kelas</option>
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
            <input type="submit" name="submit" value="Simpan" id="submit"><br>
        </form>
    </div>
<?= $this->endSection() ?> 