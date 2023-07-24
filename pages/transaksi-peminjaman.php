<?php

require_once './class/Peminjaman.php';

$semuaPeminjaman = getAllPeminjaman();


function getAllPeminjaman() {
  global $db;
  $sql = "SELECT * FROM tbpeminjaman";
  $query = mysqli_query($db, $sql);
  $allPeminjaman = [];
  if( mysqli_num_rows($query) > 0) {
    while($rowPeminjaman = mysqli_fetch_array($query)) {
      $peminjaman = new Peminjaman($rowPeminjaman);
      $allPeminjaman[] = $peminjaman->getPeminjaman();
    }
    return $allPeminjaman;
  } else {
    return null;
  }
}


?>

<div class="tambah-wrapper">
  <a href="?p=input-peminjaman">Tambah Peminjaman</a>
</div>
<?php if($semuaPeminjaman == null ) :?>
  <div class="kosong">
    <h3>Tidak ada data buku ditemukan</h3>
  </div>
  <?php else:?>
  <div class="tabel">
  <div class="head">
      <p>ID Transaksi</p>
      <p>Nama Peminjam</p>
      <p>Nama Buku</p>
      <p>Nama Penulis</p>
      <p>Tanggal Peminjaman</p>
      <p>Aksi</p>
    </div>
  <?php if(isset($semuaPeminjaman)):?>
    <?php foreach($semuaPeminjaman as $peminjaman) { ?>
    <div class="content">
        <p><?php echo $peminjaman['idTransaksi']?></p>
        <p><?php echo $peminjaman['namaPeminjam']?></p>
        <p><?php echo $peminjaman['judulBuku']?></p>
        <p><?php echo $peminjaman['namaPengarang']?></p>
        <p><?php echo $peminjaman['timestamp']?></p>
        <div class="tombol-wrapper">
          <a href="proses/peminjaman-hapus-proses.php?id=<?php echo $peminjaman['idTransaksi']?>" class="btn-hapus">Hapus</a>
          <a href="index.php?p=edit-transaksi-peminjaman&id=<?php echo $peminjaman['idTransaksi']?>" class="btn-edit">Edit</a>
          <a href="proses/pengembalian-proses.php?id=<?php echo $peminjaman['idTransaksi']?>" class="btn-pengembalian">Pengembalian</a>
        </div>
    </div>
    <?php }?>
  <?php else:?>
    <p>Data Kosong</p>
  <?php endif?>
</div>
<?php endif;?>