<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800;900&display=swap"rel="stylesheet">
</head>
<body>
    <div class="login2">
        <form action="<?= base_url('/user/store') ?>" method="POST">
            <h1>Profile</h1><br>
            <input type="text" name="nama" placeholder="Nama" id="input"><br>
            <input type="text" name="npm" placeholder="NPM" id="input"><br>
            <input type="text" name="kelas" placeholder="Kelas" id="input"><br>
            <input type="submit" name="submit" value="Simpan" id="submit"><br>
        </form>
    </div>
</form>
</body>
</html>