<?php
include 'koneksi.php';

$id = $_POST['id'];

$query  = "DELETE FROM tb_buku WHERE id = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
  header('location: buku.php');
} else {
  echo 'data gagal di hapus: ' . mysqli_error($con);
}
?>