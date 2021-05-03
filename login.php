<?php

include('koneksi.php');

if (isset($_SESSION['username'])) header('Location: index.php');

$pesan_error = "";
if ($_POST) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (!$username || !$password) $pesan_error = "Username dan password salah atau tidak ditemukan.";

  $query_get = "SELECT * FROM pengguna WHERE nama_pengguna='$username' AND kata_sandi='$password'";
  if (mysqli_query($conn, $query_get)) {
    $result_data = mysqli_query($conn, $query_get);

    if (mysqli_num_rows($result_data) > 0) {
      while ($row = mysqli_fetch_assoc($result_data)) {
        $_SESSION['username'] = $row['nama_pengguna'];
        header('Location: index.php');
      }
    } else {
      $pesan_error = "Username dan Kata Sandi salah atau tidak ditemukan.";
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <title>Halaman Login</title>
</head>

<body style="background-image: url('bbb.jpg'); background-size: 100%; background-repeat: no-repeat;">
<?php include('navbar.php'); ?>
  <div class="container justify-content-center text-center mt-5">
    <div class="card" style="border-radius: 40px;">
      <div class="card-body my-4 mx-4">
        <div class="card-title">
          <h1>Halaman Login</h1>
        </div>
        <?php if ($_POST && $pesan_error !== "") : ?>
          <div class="alert alert-danger" role="alert">
            <?= $pesan_error; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php endif; ?>
        <form method="post">
          <div class="form-group text-left">
            <label for="username">Nama Pengguna</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>
          <div class="form-group text-left">
            <label for="password">Kata Sandi</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>