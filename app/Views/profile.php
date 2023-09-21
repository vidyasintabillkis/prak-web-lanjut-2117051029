<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800;900&display=swap"rel="stylesheet">
</head>
</head>
<body>
    <div class="card">
        <img src="<?php echo base_url('assets/img/pidi.jpg'); ?>" alt="pidi" class="img">
        <br><br><h3 class="name"><?= $nama ?></h3>
        <p class="npm"><?= $npm ?><br><?= $kelas ?></p>
        <!-- <p class="kelas"><?= $kelas ?></p> -->
        <div class="desc">
            <p>
                "Aku emang suka gajelas, tapi kalo suka kamu itu udah jelas"
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>