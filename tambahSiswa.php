<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Siswa</title>
</head>
<body>
  
  <?php

    include 'koneksi.php';

?>
  <h1>Tambah Data Siswa</h1>

  <form action="prosesTambahSiswa.php" method="post">
    <p>
      <label for="email">email</label><br>
      <input type="email" id="email" name="email" required>
    </p>

    <p>
      <label for="password">password</label><br>
      <input type="text" id="password" name="password" required>
    </p>

    <p>
    <input name="role" type="radio" id="role" value="admin">
    <label for="role" class="form-label">admin</label>
    <input name="role" type="radio" id="role" value="anggota">
    <label for="role" class="form-label">anggota</label>
    </p>

    <p>
            <label for="nama">nama</label><br>
      <input type="text" id="nama" name="nama" required>
    </p>

    <p>
            <label for="kelas">kelas</label><br>
      <input type="text" id="kelas" name="kelas" required>
    </p>

    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
</body>
</html>