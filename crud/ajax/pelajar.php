<?php
require '../functions.php';  // Contoh jika file berada satu tingkat di atas
$value = $_GET['keyword'];

if(!empty($value)){
    $sdr = query("SELECT * FROM sederhana WHERE nama LIKE '%".$value."%'");
} else {
    $sdr = query("SELECT * FROM sederhana");
}


?>
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