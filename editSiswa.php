<?php
include 'koneksi.php';
$email= $_GET['email'];
$result = mysqli_query($con, "SELECT * FROM tb_user WHERE email = '$email'");
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

      <form action="prosesTambahSiswa.php" method="post">
    <p>
      <label for="email">email</label><br>
      <input type="email" value="<?= $data['email']?>"id="email" name="email" required>
    </p>

    <p>
      <label for="password">password</label><br>
      <input type="text" value="<?= $data['password'] ?> "id="password" name="password" required>
    </p>

    <p>
    <input  type="radio" id="role" value="admin" name="role value="<?= $data['role']?>"
    <label for="role" class="form-label">admin</label>
    <input name="role" id="role" value="anggota" value="<?= $data['role'] ?> "type="radio" >
    <label for="role" class="form-label">anggota</label>
    </p>

    <p>
            <label for="nama">nama</label><br>
      <input type="text" value="<?= $data['nama'] ?>"id="nama" name="nama" required>
    </p>

    <p>
            <label for="kelas">kelas</label><br>
      <input type="text" value="<?= $data['kelas'] ?> "id="kelas" name="kelas" required>
    </p>

    <button class="btn btn-primary" type="submit">Submit</button>
      </form>
</body>
</html>