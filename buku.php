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
    <h1 class="">Table Perpustakaan</h1>
      <a href="tambahBuku.php" class="btn btn-primary">Tambah Data</a>
    
<div class="table-responsive">
  <table class="table table-hover table-bordered border-primary mt-3">
    

      <table class="table table-hover table-bordered border-primary mt-3">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">judul</th>
            <th scope="col">penerbit</th>
            <th scope="col">tahun terbit</th>
            <th scope="col">stok</th>
            <th scope="col">deskripsi</th>
            <th scope="col">aksi</th>
            
          </tr>
        </thead>
        <?php 
        $query = "SELECT * FROM tb_buku";
        $result = mysqli_query($con,$query);

        $no = 1;
        while  ($data = mysqli_fetch_assoc($result)) {
       ?>
        
        <tbody>
          <tr>
            <td scope="col"><?=$no++?></td>
            <td scope="col"><?=$data['judul']?></td>
            <td scope="col"><?=$data['penerbit']?></td>
            <td scope="col"><?=$data['tahun_terbit']?></td>
            <td scope="col"><?=$data['stok']?></td>
            <td scope="col"><?=$data['deskripsi']?></td>
            <td scope="col"><a class="btn btn-warning ms-3"href="editBuku.php?judul=<?= $data['judul'] ?>">Edit</a>
            <form class="d-inline"action="hapusBuku.php" method="post">
              <input type="hidden" name="id_buku" value="<?=$data['id_buku']?>">
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