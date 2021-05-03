<?php

include('koneksi.php');
if (!$_SESSION['username']) {
  header('Location: login.php');
} else {
  if ($_GET) {
    $id = $_GET['id'];
    $query_delete = "DELETE FROM barang WHERE kd_barang=$id";

    if (mysqli_query($conn, $query_delete)) {
      echo "<script>alert('Barang berhasil dihapus!');
        document.location.href = 'barang.php';
      </script>";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
}
