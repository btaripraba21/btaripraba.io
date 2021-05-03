<?php

include('koneksi.php');
if (!$_SESSION['username']) {
  header('Location: login.php');
} else {
  if ($_GET) {
    $id = $_GET['id'];
    $query_delete = "DELETE FROM karyawan WHERE kd_karyawan=$id";

    if (mysqli_query($conn, $query_delete)) {
      echo "<script>alert('Karyawan berhasil dihapus!');
      document.location.href = 'karyawan.php';
    </script>";
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
  }
}
