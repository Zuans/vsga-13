<?php
  require_once '../class/Peminjaman.php';
  require_once '../koneksi.php';

  if(isset($_GET['id'])) {
      $infoTransaksi = getInfoTransaksi($_GET['id']);
      $peminjaman = new Peminjaman($infoTransaksi);
      $peminjaman->addPengembalian();
  }


  function getInfoTransaksi(int $id) {
    global $db;
    $sql = "SELECT * FROM tbpeminjaman WHERE id_transaksi = $id";
    $query = mysqli_query($db, $sql);
    if(mysqli_num_rows($query) > 0) {
      return mysqli_fetch_array($query);
    } else {
      return null;
    }
  }
?>