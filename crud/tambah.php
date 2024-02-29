<?php
// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "biodata");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($_POST["nama"]);
    $nama = strip_tags($nama);

    $kelas = htmlspecialchars($_POST["kelas"]);
    $kelas = strip_tags($kelas);

    $jurusan = htmlspecialchars($_POST["jurusan"]);
    $jurusan = strip_tags($jurusan);

    $alamat = htmlspecialchars($_POST["alamat"]);
    $alamat = strip_tags($alamat);

    // query insert data
    $query = "INSERT INTO sederhana (nama, kelas, jurusan, alamat) 
           VALUES ('$nama', '$kelas', '$jurusan', '$alamat')";
    mysqli_query($conn, $query);

    // cek apakah data berhasil ditambahkan atau tidak
   
if (mysqli_affected_rows($conn) > 0) {
  echo "
    <script>
      alert('data berhasil ditambahkan!');
      window.location.href = 'index.php';
    </script>
  ";
} else {
  echo "
    <script>
      alert('data gagal ditambahkan!');
      window.location.href = 'index.php';
    </script>
  ";
}

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   
  <h1 class="text-center">Tambah data</h1>
  <div class="card">
  <h5 class="card-header bg-success text-white">tambah</h5>
  <div class="card-body">
  <form action="" method="post">
        <tr>
            <th>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </th>
            <th>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas">
            </th>
            <th>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </th>
            <th>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat">
            </th>
            <th>
                <button  type="submit" name="submit" type="button" class="btn btn-danger">Tambah Data!</button>
            </th>
            |
            <th>
              <a href="index.php"  class="btn btn-warning">Kembali</a>
            </th>
        </tr>
    </form>
  </div>
</div>
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>