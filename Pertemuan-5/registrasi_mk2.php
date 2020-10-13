<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Mata Kuliah</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <?php
    if (isset($_POST['tombolSubmit'])) {
        include_once "koneksi.php";
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $kategori = $_POST['kategori'];
        $sks = $_POST['sks'];
    }
    ?>
    <div class="container">
        <h2>Pendaftaran Mata Kuliah versi 2 (dg Modal)</h2>
        <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pendaftaran</h4>
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
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ini end modal -->
        <form method="post" action="registrasi_mk2.php">
            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input id="kodemk" class="form-control" type="text" name="kode">
            </div>
            <div class="form-group">
                <label>Nama Mata Kuliah</label>
                <input id="namamk" class="form-control" type="text" name="nama>
            </div>
            <div class=" form-group">
                <label>Kategori Mata Kuliah</label>
                <select id="kategori" name="kategori" class="form-control">
                    <option value="pilih">Pilih</option>
                    <option value="MKMA">Mata Kuliah Major</option>
                    <option value="MKMI">Mata Kuliah Minor</option>
                    <option value="MKPIL">Mata Kuliah Pilihan</option>
                </select>
            </div>
            <div class="form-group">
                <label>SKS</label>
                <input id="sks" class="form-control" type="text" name="sks">
            </div>
            <input class="btn btn-primary" type="button" id="tombol" value="Simpan">
        </form>

    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#tombol').click(function() {
                //ambil data dari form
                const kode = $('#kodemk').val();
                const nama = $('#namamk').val();
                const kategori = $('#kategori').val();
                const sks = $('#sks').val();

                $('#kdmk').text(kode);
                $('#nmmk').text(nama);
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