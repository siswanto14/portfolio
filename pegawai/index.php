<?php
include "database.php";
$pegawai = new Koneksi();
$tampil = $pegawai->tampilData();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pegawai</title>
</head>
<body>
    
<div class="container">
<h3>Data Pegawai</h3>
<table class="table table-bordered table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tgl Lahir</th>
      <th scope="col">Telepon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $i = 1;
        foreach($tampil as $pg):
    ?>
    <tr>
      <td><?= $i++ ;?></td>
      <td><?= $pg['nama'];?></td>
      <td><?= $pg['jns_kelamin'];?></td>
      <td><?= $pg['tgl_lahir'];?></td>
      <td><?= $pg['telp'];?></td>
      <td><?= $pg['alamat'];?></td>
      <td><?= $pg['email'];?></td>
      <td><a href="" class="btn btn-warning btn-sm">edit</a> <a href="" class="btn btn-danger btn-sm">hapus</a></td>
    </tr>
    <?php
        endforeach;
    ?>
  </tbody>
</table>
<a href="" class="btn btn-primary btn-sm">Tambah Data</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>