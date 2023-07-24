<?php
require_once '../koneksi.php';


$errField = [];

if(isset($_POST['input-peminjaman'])) {
  $isAnggotaExist = getAnggota($_POST['id_anggota']);
  $isBukuExist = getBuku($_POST['id_buku']);

  if( $isAnggotaExist == false ) {
    $errField['idAnggota'] = 'ID Anggota tidak ditemukan';
  } else {
    $errField['idAnggota'] = null;
  }

   if( $isBukuExist == false ) {
    $errField['idBuku'] = 'ID Buku tidak ditemukan';
  } else {
    $errField['idBuku'] = null;
  }
  $isError = false;
    foreach($errField as $field ) {
      if($field !== null)  $isError = true;
    }
    if($isError) {
      $errUrl = "";

      foreach($errField as $key => $value) {
        $errUrl = $errUrl . " &$key=$value";
      }
    }

}

function getAnggota($id) {
  global $db;
  $sql = "SELECT * FROM tbanggota WHERE idanggota = $id";
  $query = mysqli_query($db, $sql);
  if( mysqli_num_rows($query) > 0  ) {
    return $query;
  } else {
    return false;
  }
}

function getBuku($id) {
    global $db;
  $sql = "SELECT * FROM tb_buku WHERE id_buku = $id";
  $query = mysqli_query($db, $sql);
  if( mysqli_num_rows($query) > 0  ) {
    return $query;
  } else {
    return false;
  }
}

?>