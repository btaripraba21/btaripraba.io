<?php

include('koneksi.php');
if (!$_SESSION['username']) header('Location: login.php');

if ($_POST) {
  $nama_karyawan = $_POST['nama'];
  $jabatan = $_POST['jabatan'];

  $query_insert = "INSERT INTO karyawan (nama_karyawan, jabatan_karyawan) VALUES ('$nama_karyawan', '$jabatan')";
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <title>Tempat Penyimpanan Barang | Tambah Karyawan</title>
</head>

<body style="background-image: url('beec1.jpg'); background-size: 100%; background-position: center;">
  <?php include('navbar.php'); ?>
  <div class="container mt-5">
    <h1>Tambah Karyawan</h1>
    <div class="tambah-gudang mt-5 bg-dark px-4 py-4 text-white">
      <form action="" method="post">
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
              <label for="nama_karyawan">Nama Karyawan</label>
              <input type="text" class="form-control" id="nama_karyawan" name="nama" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
          </div>
          <div class="col-md-6">
            <a href="karyawan.php" class="btn btn-outline-info btn-block"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
          </div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-block">Tambah Karyawan</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>