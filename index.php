<?php

include('koneksi.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <title>Gudang Bajuuuuu</title>
</head>

<body style="background-image: url('bbb.jpg'); background-size: 100%; background-position: center;">
  <?php include('navbar.php'); ?>
  <div class="container mt-5">
    <div class="jumbotron font-weight-bold" style="opacity: 0.8; background-color: white;">
      <h1 class="display-4">Btari Clothes</h1>
      <p class="lead">Btari Clothes adalah gudang untuk semua pakaian yang anda inginkan. Kami menyediakan pakaian dengan berbagai jenis model dan pilihan, kami juga memberikan harga yang terbaik, harga yang ditawarkan ada untuk reseller juga.</p>
      <hr class="my-2">
      <p>Satuan? Grosir? Semua ada disinii ...</p>
    </div>
    <h1>List Tabel Gudang Btari Clothes</h1>
    <table class="table table-dark" style="opacity: 0.9;">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <th>Barang</th>
          <th><a href="barang.php" class="btn btn-outline-warning">List Barang</a></th>
        </tr>
        <tr>
          <th>2</th>
          <th>Karyawan</th>
          <th><a href="karyawan.php" class="btn btn-outline-warning">List Karyawan</a></th>
        </tr>
        <tr>
          <th>3</th>
          <th>Pembeli</th>
          <th><a href="pembeli.php" class="btn btn-outline-warning">List Pembeli</a></th>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>