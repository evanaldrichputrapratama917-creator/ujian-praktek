<?php
include 'koneksi.php';

$email_lama = $_POST['email_lama'];
$password   = $_POST['password'];
$role  = $_POST['role'];
$nama  = $_POST['nama'];
$deskripsi = $_POST['kelas'];


mysqli_query($con, "UPDATE tb_user SET email='$email', password='$password', role='$role', nama='$nama',kelas='$kelas' WHERE email='$email_lama'");


header("Location: user.php");
?>