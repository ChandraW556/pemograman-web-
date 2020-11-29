<?php
error_reporting(0);
 include "koneksi.php";
 if (isset($_POST['delete'])) {
     $pid = $_POST["delete"];

     $sql = "DELETE from matakuliah where id='".$pid."'";
     if (mysqli_query($conn, $sql)) {
			echo "<h3><span class='text-success'>Data Berhasil dihapus ! </span></h3>";
		}else{
      echo "<span class='text-primary'> Terjadi Kesalahan Coba lagi yah! </span>";
      }
}
?>