<?php

    include 'koneksi.php';

    $judul        = $_POST['judul'];
    $penerbit   = $_POST['penerbit'];
    $tahun_terbit   = $_POST['tahun_terbit'];
    $stok         = $_POST['stok'];
    $deskripsi   = $_POST['$deskripsi'];
    

    $query = "INSERT INTO tb_buku (judul,penerbit,tahun_terbit,stok,deskripsi) VALUES ('$judul','$penerbit','$tahun_terbit','$stok','$deskripsi')";

    $result =   mysqli_query($con,$query);

    if ($result) {
        header('location: buku.php');
    } else{
        echo "data gagal ditambahkan";
    }
?>