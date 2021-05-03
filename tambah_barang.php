<?php

include('koneksi.php');
if (!$_SESSION['username']) header('Location: login.php');

if ($_POST) {
  $nama_barang = $_POST['nama'];
  $stok_barang = $_POST['stok'];
  $harga_satuan = $_POST['harga_satuan'];
  $harga_supplier = $_POST['harga_supplier'];

  $query_insert = "INSERT INTO barang (nama_barang, stok_barang, harga_satuan, harga_supplier) VALUES ('$nama_barang', '$stok_barang', '$harga_satuan', '$harga_supplier')";
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <title>Tempat Penyimpanan Barang | Tambah Barang</title>
</head>

<body style="background-image: url('bee.jpg'); background-size: 100%; background-position: center;">
  <?php include('navbar.php'); ?>
  <div class="container mt-5">
    <h1>Tambah Barang</h1>
    <div class="tambah-gudang mt-5 bg-dark px-4 py-4 text-white">
      <form action="tambah_barang.php" method="post">
        <div class="row">
          <div class="col-md-12">
            <?php if ($_POST) : ?>
              <?php if (mysqli_query($conn, $query_insert)) : ?>
                <div class="alert alert-success" role="alert">
                  Berhasil! Data berhasil ditambahkan.
                </div>
              <?php else : ?>
                <div class="alert alert-warning" role="alert">
                  Maaf! Data gagal ditambahkan.
                </div>
              <?php endif; ?>
            <?php endif; ?>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="nama_barang">Nama Barang</label>
              <input type="text" class="form-control" id="nama_barang" name="nama" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="stok_barang">Stok Barang</label>
              <input type="number" class="form-control" id="stok_barang" name="stok" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="harga_satuan">Harga Satuan</label>
              <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="harga_supplier">Harga Suplier</label>
              <input type="number" class="form-control" id="harga_supplier" name="harga_supplier" required>
            </div>
          </div>
          <div class="col-md-6">
            <a href="barang.php" class="btn btn-outline-info btn-block"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
          </div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-block">Tambah Barang</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>