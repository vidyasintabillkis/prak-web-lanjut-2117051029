<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800;900&display=swap"rel="stylesheet">
</head>
<body>
    <?php if(session()->getFlashdata('errors')) : ?>
        <div class="row">
            <div class="alert">
                <?= session()->getFlashdata('errors') ?>
            </div>
        </div>
    <?php endif ?>
    <div class="login2">
        <form action="<?= base_url('/user/store') ?>" method="POST">
            <h1>Profile</h1><br>
            <input type="text" name="nama" placeholder="Nama" id="input" value="<?= old('nama') ?>"><br>
            <input type="text" name="npm" placeholder="NPM" id="input" value="<?= old('npm') ?>"><br>
            <select name="kelas" id="kelas" placeholder="Kelas">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>