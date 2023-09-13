<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <br><br><br><h1><center>Profile Diri</center></h1><br>
    <div style="text-align:center;">
        <img src="<?php echo base_url('pidi.jpg'); ?>" alt="pidi" style="height: 200px; width: 200px; border-radius: 50%; object-fit: cover;" ><br><br><br>
        <button type="button" class="btn btn-warning" style="width: 225px;"><?= $nama ?></button><br><br>
        <button type="button" class="btn btn-warning" style="width: 225px;"><?= $kelas ?></button><br><br>
        <button type="button" class="btn btn-warning" style="width: 225px;"><?= $npm ?></button><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>