<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?> 
    <div class="card">
        <img src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="belum muncul ya" class="img">
        <br><br><h3 class="name"><?= $user['nama'] ?></h3>
        <p class="npm"><?= $user['npm'] ?><br><?= $user['nama_kelas'] ?></p>
        <div class="desc">
            <p>
                "Aku emang suka gajelas, tapi kalo suka kamu itu udah jelas"
            </p>
        </div>
    </div>
<?= $this->endSection() ?> 