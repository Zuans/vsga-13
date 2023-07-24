<?php

require_once "../koneksi.php";


// var_dump($db);

if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
  $sql = "DELETE FROM tb_buku WHERE id_buku = $id";
  $query = mysqli_query($db, $sql);

  header("Location: ../index.php?p=list-buku");
}

?>