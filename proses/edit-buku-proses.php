<?php

require_once '../koneksi.php';


var_dump($db);
  if(isset($_POST['edit-buku'])) {
    $idBuku = $_POST['id_buku'];
    $judulBuku = $_POST['judul_buku'];
    $kategori = $_POST['kategori'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql = "UPDATE tb_buku SET judul_buku = '$judulBuku', kategori = '$kategori', pengarang = '$pengarang', penerbit = '$penerbit' WHERE id_buku = $idBuku ";
    $query = mysqli_query($db, $sql);


    header("Location: ../index.php?p=list-buku");

  }
?>