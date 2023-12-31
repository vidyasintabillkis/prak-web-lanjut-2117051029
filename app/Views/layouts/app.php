<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800;900&display=swap"rel="stylesheet">
</head>
<body>
    <?= $this->renderSection('content') ?>
    <header>
        <a class="navbar-brand" href="#" style="font-size: 30px;">Maha<span>Siswa</span></a>
        <ul class="navbar">
            <li><a href="<?= base_url('/') ?>">Home</a></li>
            <li><a href="<?= base_url('/user') ?>">Data User</a></li>
            <li><a href="<?= base_url('/kelas') ?>">Data Kelas</a></li>
        </ul>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>