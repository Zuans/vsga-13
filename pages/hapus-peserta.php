<?php

require_once '../class/Siswa.php';


if($_GET['id']) {
  $siswa = Siswa::deleteById($_GET['id']);
  if($siswa) {
    header("Location: ./index.php?success-hapus=true");
  }
}


?>