<?php
include 'koneksi.php';
$judul= $_GET['judul'];
$result = mysqli_query($con, "SELECT * FROM tb_buku WHERE judul = '$judul'");
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Siswa</title>
</head>
<body>
  <h1>Edit Data Siswa</h1>

    <form action="prosesTambahBuku.php" method="post">
    <p>
      <label for="judul">Judul</label><br>
      <input type="text" value="<?= $data['judul'] ?>" id="judul"  name="judul" required>
    </p>

    <p>
      <label for="penerbit">Penerbit</label><br>
      <input type="text" id="penerbit" value="<?= $data['penerbit'] ?>" name="penerbit" required>
    </p>

    <p>
      <label for="tahun_terbit">tahun terbit</label><br>
      <input type="date" id="tahun_terbit" value="<?= $data['tahun_terbit'] ?>" name="tahun_terbit" required>
    </p>

    <p>
      <label for="stok">stok</label><br>
      <input type="text" value="<?= $data['stok'] ?>" id="stok" name="stok" required>
    </p>

    <p>
        <label for="deskripsi">deskripsi</label><br>
  <input id="deskripsi" value="<?= $data['deskripsi'] ?>" name="deskripsi"
    </p>

    <button type="submit">Simpan perubahan</button>
    </form>
</body>
</html>