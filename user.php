<!DOCTYPE html>
<?php 
include 'koneksi.php';
?>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body >
  <div class="container">
    <div class="col-10 m-auto">
    <h1 class="">Table siswa</h1>
      <a href="tambahSiswa.php" class="btn btn-primary">Tambah Data</a>
    
<div class="table-responsive">
  <table class="table table-hover table-bordered border-primary mt-3">
    

      <table class="table table-hover table-bordered border-primary mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">role</th>
            <th scope="col">nama</th>
            <th scope="col">kelas</th>
            <th scope="col">aksi</th>
            
          </tr>
        </thead>
        <?php 
        $query = "SELECT * FROM tb_user";
        $result = mysqli_query($con,$query);

        $no = 1;
        while  ($data = mysqli_fetch_assoc($result)) {
       ?>
        
        <tbody>
          <tr>
            <td scope="col"><?=$no++?></td>
            <td scope="col"><?=$data['email']?></td>
            <td scope="col"><?=$data['password']?></td>
            <td scope="col"><?=$data['role']?></td>
            <td scope="col"><?=$data['nama']?></td>
            <td scope="col"><?=$data['kelas']?></td>
            <td scope="col"><a class="btn btn-warning ms-3"href="editSiswa.php?email=<?= $data['email'] ?>">Edit</a>
            <form class="d-inline"action="hapusSiswa.php" method="post">
              <input type="hidden" name="id_user" value="<?=$data['id_user']?>">
              <button  class="btn btn-danger">hapus</button>
            </form>
            
            </td>
          
            
          </tr>
          
        </tbody>
        <?php } ?>
      </table>
  </div>
    </div>
  </div>
</body>
</html>