<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <style>
        .inputan {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <p>Login System</p>
    <form method="post" action="konfirmasi.php">
        <label>Username</label>
        <input class="inputan" type="text" name="username">
        <label>Password</label>
        <input class="inputan" type="password" name="password">
        <label>Nama Depan</label>
        <input class="inputan" type="text" name="namaDepan">
        <label>Nama Belakang</label>
        <input class="inputan" type="text" name="namaBelakang">
        <label>email</label>
        <input class="inputan" type="text" name="email">
        <input type="submit" name="tombolSubmit" value="Daftar">
        
    </form>
</body>
</html>