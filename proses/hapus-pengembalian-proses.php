<?php

require_once '../koneksi.php';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM tbpengembalian WHERE id_transaksi = $id";

  $query = mysqli_query($db, $sql);
  if($query) {
    header("Location: ../index.php?p=transaksi-pengembalian");
  } else {
    // klo gagal
  }
}

?>