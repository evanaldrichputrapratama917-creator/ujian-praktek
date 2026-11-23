<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Siswa</title>
</head>
<body>
  <?php
  include'koneksi.php';
  ?>
  <h1>Tambah Data Buku</h1>

  <form action="prosesTambahBuku.php" method="post">
    <p>
      <label for="judul">Judul</label><br>
      <input type="text" id="judul" name="judul" required>
    </p>

    <p>
      <label for="penerbit">Penerbit</label><br>
      <input type="text" id="penerbit" name="penerbit" required>
    </p>

    <p>
      <label for="tahun_terbit">tahun terbit</label><br>
      <input type="date" id="tahun_terbit" name="tahun_terbit" required>
    </p>

    <p>
      <label for="stok">stok</label><br>
      <input type="text" id="stok" name="stok" required>
    </p>

    <p>
        <label for="deskripsi">deskripsi</label><br>
  <input id="deskripsi" name="deskripsi" type="text">
    </p>

    <button type="submit">Submit</button>
  </form>
</body>
</html>