<?php
include 'koneksi.php';

$id_buku=$_POST['id_buku'];

$query =  "DELETE FROM tb_buku WHERE id_buku = '$id_buku'";
$result = mysqli_query($con,$query);

if ($result) {
  header ('location: buku.php');
  
} else {
  echo 'data gagal di hapus';
}

?>