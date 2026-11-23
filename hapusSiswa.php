<?php
include 'koneksi.php';

$id_user=$_POST['id_user'];

$query =  "DELETE FROM tb_user WHERE id_user = '$id_user'";
$result = mysqli_query($con,$query);

if ($result) {
  header ('location: user.php');
  
} else {
  echo 'data gagal di hapus';
}

?>