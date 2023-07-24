<?php

require_once '../koneksi.php';

var_dump($_POST);

if(isset($_POST['tambah-buku'])) {

  $judulBuku = $_POST['judul_buku'];
  $kategori = $_POST['kategori'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];

  $sql = "INSERT INTO tb_buku (judul_buku, kategori, pengarang, penerbit) VALUES('$judulBuku', '$kategori', '$pengarang', '$penerbit')";
  $query = mysqli_query($db, $sql);

  header("Location: ../index.php?p=list-buku");

}

?>