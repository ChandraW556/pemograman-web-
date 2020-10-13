<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <h2>Pilihan Mata Kuliah</h2>
        <form method="post" action="konfirmasi.php">
            <div class="form-group">
                <label>Kode</label>
                <input class="form-control" type="text" name="kode">
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input class="form-control" type="text" name="nama">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" type="text" name="kategori">
                    <option> MKMA </option>
                    <option> MKMI </option>
                    <option> MKPIL </option>
                </select>
            </div>
            <div class="form-group">
                <label>Sks</label>
                <input class="form-control" type="text" name="sks">
            </div>
            <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Submit">

    </div>
    </form>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>