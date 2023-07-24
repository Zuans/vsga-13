<?php

  require_once '../koneksi.php';
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
  $status = 'Tidak Meminjam';


  if(isset($_POST['simpan'])) {
    extract($_POST);
    $name_file = $_FILES['foto']['name'];
    if(!empty($name_file)) {
      $lokasi_file = $_FILES['foto']['tmp_name'];
      $tipe_file = pathinfo($name_file, PATHINFO_EXTENSION);
      $file_foto = $nama . date("h:i:sa") .  "." . $tipe_file;

      $folder = "../images/$file_foto";
      move_uploaded_file($lokasi_file, $folder);
    } else {
      $file_foto = '-';
    }

    $sql = "INSERT INTO tbanggota (nama, jeniskelamin, alamat, status, foto)  VALUES('$nama', '$jenis_kelamin', '$alamat', '$status', '$file_foto')";
  $query = mysqli_query($db, $sql);
    header("Location: ../index.php?p=anggota");
  }
?>