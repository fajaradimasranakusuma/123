<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
  $nama_pemesan=$_POST['nama_pemesan'];
 $q=mysqli_query($con,"INSERT INTO `barang` (`nama`,`harga`,`nama_pemesan`) VALUES ('$nama','$harga','$nama_pemesan')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>