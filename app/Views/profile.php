<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?> 
    <div class="card">
        <img src="<?php echo base_url('assets/img/pidi.jpg'); ?>" alt="pidi" class="img">
        <br><br><h3 class="name"><?= $nama ?></h3>
        <p class="npm"><?= $npm ?><br><?= $id_kelas ?></p>
        <div class="desc">
            <p>
                "Aku emang suka gajelas, tapi kalo suka kamu itu udah jelas"
            </p>
        </div>
    </div>
<?= $this->endSection() ?> 