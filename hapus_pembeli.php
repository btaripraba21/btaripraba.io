<?php

include('koneksi.php');
if (!$_SESSION['username']) {
  header('Location: login.php');
} else {
  if ($_GET) {
    $id = $_GET['id'];
    $query_delete = "DELETE FROM pembeli WHERE kd_pembeli=$id";

    if (mysqli_query($conn, $query_delete)) {
      echo "<script>alert('Pembeli berhasil dihapus!');
        document.location.href = 'pembeli.php';
      </script>";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
}
