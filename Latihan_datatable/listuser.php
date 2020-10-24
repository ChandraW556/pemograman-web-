<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>

<body>
  <?php
  include_once "header.php";
  include "koneksi.php";
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">List Username Mahasiswa</h2>
      </div>
    </div>

    <!--Input table Sederhana !-->
    <div class="row">
      <div class="col-md-12">
        <table id="listtable" class="table table-striped">
          <div class="row mb-3 mt-3">
            <div class="col-md-12">
              <a href="registrasi_mhs.php" class="btn btn-primary">Input Registrasi</a>
            </div>

            <thead>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Password</th>
                <th>Update Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              //buat sql
              $strSQL = "SELECT * FROM user_akses";
              $runStrSQL = mysqli_query($conn, $strSQL);
              $jmlRowData = mysqli_num_rows($runStrSQL);
              if ($jmlRowData < 0) {
                echo "<tr><td colspan='4'>Data Tidak Terdaftar Dalam Database</td></tr>";
              } else {
                while ($row = mysqli_fetch_assoc($runStrSQL)) {
              ?>
                  <tr>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['prodi'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td>
                      <a href="#" class="btn btn-info"><i class="fa fa-edit"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
              <?php
                }
              }
              ?>


            </tbody>
          </div>

          <!-- JS, Popper.js, and jQuery -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
          <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
          <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
          <script>
            $(document).ready(function() {
              $('#listtable').DataTable();
            });
          </script>
</body>

</html>