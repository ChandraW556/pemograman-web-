
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <?php
        $status = 2;
        include_once "koneksi.php";
        include_once "header.php";

        if (isset($_POST["kode"])) {
        $kode = $_POST["kode"];
        $nama = $_POST["nama"];
        $kategori = $_POST["kategori"];
        $sks = $_POST["sks"];
        
        $sql = "INSERT INTO matakuliah (kode, nama, kategori, sks)
        VALUES ('$kode', '$nama', '$kategori', '$sks')";

        $runSQL = mysqli_query($conn, $sql);
        if ($runSQL) {
            $status = 1; //Sukses
        }
        else {
            $status = 0; //Tidak Suskes
        }
    }
    ?>
    
    <div id='sukses' class='alert alert-success alert-dismissible fade show'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        Data berhasil diinput kedalam database.
    </div>

    <div id='gagal' class='alert alert-danger alert-dismissible fade show'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        Data gagal diinput kedalam database.
    </div>

    <div class="container">
        <H1>Pendaftaran Mata Kuliah versi 2 (dg Modal)</H1>
    
    <!-- Ini Untuk Modal -->
    <div class="modal" id="pesan">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Pendaftaran</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">Kode Mata Kuliah</div>
                        <div class="col-6"><span id="kdmk"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-6">Nama Mata Kuliah</div>
                        <div class="col-6"><span id="namamk"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-6">Kategori Mata Kuliah</div>
                        <div class="col-6"><span id="kat"></span></div>
                    </div>
                    <div class="row">
                        <div class="col-6">SKS Mata Kuliah</div>
                        <div class="col-6"><span id="sksmk"></span></div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="simpan">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>

        <form method="post" id="daftarmatkul">
            <div class="form-group">
                <label>Kode Mata Kuliah</label><br>
                <input id="kode" class="form-control" type="text" name="kode" required><br>
            </div>

            <div class="form-group">
                <label>Nama Mata Kuliah</label><br>
                <input id="nama" class="form-control" type="text" name="nama" required><br>
            </div>

            <div class="form-group">
                <label>Kategori</label><br>
                <select id="kategori" class="form-control" name="kategori"> required
                    <option value="default" disabled selected="selected">Pilih Mata Kuliah</option>
                    <option value="MKMA">Mata Kuliah Major</option>
                    <option value="MKMI">Mata Kuliah Minor</option>
                    <option value="MKPIL">Mata Kuliah Pilihan</option>
                </select>
            </div>

            <div class="form-group">
                <label>SKS</label><br>
                <input id="sks" class="form-control" type="text" name="sks" required><br>
            </div>
            <input class="btn btn-primary" type="button" value="Simpan" id="tombol">
            <br>
        </form>
    </div>
    <?php
        include_once 'footer.php'
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function() {
            $('#sukses').hide();
            $('#gagal').hide();
            $('#tombol').click(function(){
                //ambil data dari form
                const kode = $('#kode').val();
                const nama = $('#nama').val();
                const kategori = $('#kategori').val();
                const sks = $('#sks').val();

                $('#kdmk').text(kode);
                $('#namamk').text(nama);
                $('#kat').text(kategori);
                $('#sksmk').text(sks);
                console.log(kode);
                    $("#pesan").modal({show: true});
            })

            $('#simpan').click(function(){
                var data = $('#daftarmatkul').serialize();
                $.ajax({
                    type: 'POST',
                    url: "matkulpakhen2.php",
                    data: data,
                    success: function() {
                        $("#pesan").modal('hide');
                        document.getElementById("daftarmatkul").reset();
                        $('#sukses').show();
                    }
                });
            })
        });
    </script>
</body>
</html>