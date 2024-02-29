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
    <a class="navbar-brand btn btn-outline-danger  text-white" href="index.php" >CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link btn btn-outline-danger text-white"  href="#">HOME</a>
        <a class="nav-link btn btn-outline-danger  text-white "  href="https://getbootstrap.com/">Halaman Bootstrap</a>
      </div>
    </div>
  </div>
</nav>


<div class="container">
  <div class="row">
    <div class="col-md-6 mt-4">
      <img src="mdzz.jpg" alt="" style="width: 14rem;" class="rounded-circle float-left" >
    </div>
    <div class="col-md-6">
      <h1 class="display-4">Nama Website</h1>
      <p class="lead">Ini adalah halaman beranda website saya.</p>
      <p>Saya adalah seorang <strong>web developer</strong> yang berspesialisasi dalam <strong>Bootstrap</strong>. Saya suka membuat website yang <strong>keren</strong> dan <strong>responsif</strong>.</p>
      <a href="#" class="btn btn-primary">Pelajari lebih lanjut</a>
    </div>
  </div>
</div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>