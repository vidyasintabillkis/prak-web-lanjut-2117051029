<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
<form action="<?= base_url('/user/store') ?>" method="POST">
    <label for="fname">Nama : </label>
    <input type="text" name="nama"><br><br>
    <label for="lname">NPM : </label>
    <input type="text" name="npm"><br><br>
    <label for="lname">Kelas : </label>
    <input type="text" name="kelas"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>