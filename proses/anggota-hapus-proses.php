<?php
require_once "../koneksi.php";

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM tbanggota WHERE idanggota = $id";
  $query =  mysqli_query($db,$sql);
  header("Location: ../index.php?p=anggota");
}
?>