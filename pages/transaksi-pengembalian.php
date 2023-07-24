<?php

require_once './class/Pengembalian.php';
$allPengembalian = getAllPengembalian();



function getAllPengembalian() {
  $allPengembalian = [];
  global $db;
  $sql = "SELECT * FROM tbpengembalian";
  $query = mysqli_query($db, $sql);
  if(mysqli_num_rows($query) > 0) {
    while($rowPengembalian = mysqli_fetch_array($query)) {
      $pengembalian = new Pengembalian($rowPengembalian);
      $allPengembalian[] = $pengembalian->getPengembalian();
    }
    return $allPengembalian;
  } else {
    return null;
  }
}


?>

<div class="tabel">
  <div class="head">
      <p>ID Transaksi</p>
      <p>Nama Peminjam</p>
      <p>Nama Buku</p>
      <p>Nama Penulis</p>
      <p>Tanggal Peminjaman</p>
      <p>Aksi</p>
    </div>
  <?php if($allPengembalian == null) :?>
    <div class="kosong">
    <h3>Tidak ada data buku ditemukan</h3>
  </div>
  <?php else: ?>
    <?php foreach($allPengembalian as $pengembalian) {?>
      <div class="content">
        <p><?php echo $pengembalian['id']?></p>
          <p><?php echo $pengembalian['peminjam']?></p>
          <p><?php echo $pengembalian['judul']?></p>
          <p><?php echo $pengembalian['pengarang']?></p>
          <p><?php echo $pengembalian['timestamp']?></p>
          <div class="tombol-wrapper">
            <a href="proses/hapus-pengembalian-proses.php?id=<?php echo $pengembalian['id']?>" class="btn-hapus">Hapus</a>
          </div>
      </div>
    <?php }?>
  <?php endif;?>
</div>