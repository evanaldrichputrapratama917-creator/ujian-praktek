<?php
include 'koneksi.php';

$judul_lama = $_POST['judul_lama'];
$penerbit    = $_POST['penerbit'];
$tahun_terbit  = $_POST['tahun_terbit'];
$stok  = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($con, "UPDATE tb_buku SET judul='$judul', penerbit='$penerbit', tahun_terbit='$tahun_terbit', stok='$stok',deskripsi='$deskripsi' WHERE judul='$judul_lama'");

header("Location: buku.php");
?>