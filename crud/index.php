<?php
require 'functions.php';
$sdr = query("SELECT * FROM sederhana");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>biodata</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <!--  -->
    <nav class="navbar navbar-expand-lg btn btn-dark "> 
  <div class="container-fluid">
    <a class="navbar-brand  btn btn-outline-danger  text-white" >CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link btn btn-outline-danger text-white"  href="home.php">HOME</a>
        <a class="nav-link btn btn-outline-danger   text-white "  href="https://getbootstrap.com/">Halaman Bootstrap</a>
      </div>
    </div>
  </div>
</nav>

<form action="" method="post" style="padding: 0 20px">
  <input class="mt-4"  type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.."
  autocomlete="off" id="keyword" >
  <button type=" submit " name="tombol-cari">Cari!</button>
</form>

  <div class="card mt-4">
      <div class="card-header bg-dark text-white">
          Biodata
      </div>
      <div class="mt-3">   
          <a href="tambah.php" class="btn btn-danger">Tambah data</a>
      </div>
        <div class="card-body">
          <div id="container">
      <table class="table table-borderet table-striped table-hover">
      <thead>
      <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
          </tr>
          <?php $i = 1; 
          $nomor_urut = 1;
          ?>

          <?php foreach($sdr as $row) : ?>
          <tr>
          <td><?= $nomor_urut++ ?></td>
          <td><?= $row["nama"]?></td>
          <td><?= $row["kelas"]?></td>
          <td><?= $row["jurusan"]?></td>
          <td><?= $row["alamat"]?></td>
          <td>
          <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-danger">update</a> |
          <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
          return confirm('yakin?');" class="btn btn-warning" >delete</a>    

          </td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
          </tbody>
      </table>
      </div>
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="script.js">  </script>
  </body>
</html>