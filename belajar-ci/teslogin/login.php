<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php 
        $email = "";
        $pwd = "";
        $rememberme = "";
        if (isset($_COOKIE['cookieemail'])) {
            $email = $_COOKIE['cookieemail'];
            $pwd = $_COOKIE['cookiepwd'];
           if ($_COOKIE['cookierememberme'] == 1) {
               $rememberme = "checked";
           }
        } 
    ?>
    <div class="container">
        <div class="col-12">
            <h2>Sign In</h2>
            <form method="POST" action="authentication.php">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email" id="email" value="<?= $email ?>">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="pwd" id="pwd" value="<?= $pwd ?>">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="rememberme" value="1" <?= $rememberme ?>> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" name="tombol">Submit</button>
            </form>
        </div>
    </div>
    
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>