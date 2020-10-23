<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body>
    <?php
    include_once "header.php";
    include_once "koneksi.php";
    if (!isset($_GET['id'])) {
        header('Location: listmatakuliah.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $strsql = "SELECT * FROM matakuliah WHERE id=$id";
    $runSQL = mysqli_query($conn, $strsql);
    $row = mysqli_fetch_assoc($runSQL);

    // jika data yang di-edit tidak ditemukan
    if (mysqli_num_rows($runSQL) < 1) {
        die("data tidak ditemukan...");
    }
    ?>
    <div class="container">
        <h2 class="text-center">Pengeditan Mata Kuliah versi 2 (dg Modal)</h2>
        <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pengeditan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>Kode Mata Kuliah</b></div>
                                <div class="col-6"><span id="kdmk"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Mata Kuliah</b></div>
                                <div class="col-6"><span id="nmmk"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Kategori</b></div>
                                <div class="col-6"><span id="kat"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>SKS</b></div>
                                <div class="col-6"><span id="sksmk"></span> sks</div>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ini end modal -->

        <div class="container">

            <form id="myform" method="POST" action="proses_edit.php">

                <fieldset>

                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />

                    <div class="form-group">
                        <label for="kodemk">Kode Mata Kuliah</label>
                        <input type="text" id="kodemk" name="kodemk" class="form-control" placeholder="Kode Mata Kuliah" value="<?php echo $row['kodemk'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="namamk">Nama Mata Kuliah</label>
                        <input type="text" id="namamk" name="namamk" class="form-control" placeholder="Nama Mata Kuliah" value="<?php echo $row['namamk'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori Mata Kuliah</label>
                        <?php $kategori = $row['kategori']; ?>
                        <select id="kategori" name="kategori" class="form-control">
                            <option value="MKMA" <?php echo ($kategori == 'MKMA') ? "selected" : "" ?>>Mata Kuliah Major</option>
                            <option value="MKMI" <?php echo ($kategori == 'MKMI') ? "selected" : "" ?>>Mata Kuliah Minor</option>
                            <option value="MKPIL" <?php echo ($kategori == 'MKPIL') ? "selected" : "" ?>>Mata Kuliah Pilihan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input id="sks" type="number" name="sks" class="form-control" placeholder="Satuan Kredit Semester" value="<?php echo $row['sks'] ?>">
                    </div>
                    <button type="button" id="tombol" class="btn btn-success btn-block"> Save
                    </button>
                    </input>
                    <br>
                    <a class="btn btn-danger btn-block" href="listmatakuliah.php"> Cancel</a>
                    <br>
                </fieldset>


            </form>
        </diV>


    </div>
    <?php
    include_once "footer.php";
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#proses').click(function() {
                $('#myform').submit();
            });
            $('#tombol').click(function() {
                //ambil data dari form
                const kodemk = $('#kodemk').val();
                const namamk = $('#namamk').val();
                const kategori = $('#kategori').val();
                const sks = $('#sks').val();

                $('#kdmk').text(kodemk);
                $('#nmmk').text(namamk);
                $('#kat').text(kategori);
                $('#sksmk').text(sks);

                //buka modal
                $('#pesan').modal({
                    show: true
                });
            });
        });
    </script>
</body>

</html>
