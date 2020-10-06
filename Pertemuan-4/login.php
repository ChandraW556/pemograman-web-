<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
        .inputan {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }       
        .tombol {
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
    <form method="post" action="ceklogin.php">
        <label>Username</label>
        <input class="inputan" type="text" name="username">
        <label>Password</label>
        <input class="inputan" type="password" name="password">
        <input class="tombol" type="submit" name="tombolSubmit" value="Login">
        <a href="registrasi.php" class="tombol">Registrasi</a>
        
    </form>
</body>
</html>

