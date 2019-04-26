<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $harga=$_POST['harga'];
  $nama_pemesan=$_POST['nama_pemesan'];
 $q=mysqli_query($con,"UPDATE `barang` SET `nama`='$nama',`harga`='$harga',`nama_pemesan`='$nama_pemesan' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>