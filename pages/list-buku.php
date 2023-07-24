<?php


$sql = "SELECT * FROM tb_buku";
$query = mysqli_query($db, $sql);

?>

<div class="tambah-wrapper">
  <a href="?p=tambah-buku">Tambah Buku</a>
</div>

<?php if(mysqli_num_rows($query) > 0) :  ?>
<div class="tabel">
  <div class="head">
      <p>ID Buku</p>
      <p>Judul Buku</p>
      <p>Kategori</p>
      <p>Pengarang</p>
      <p>Penerbit </p>
      <p>Aksi</p>
    </div>
  <?php while($rowBuku = mysqli_fetch_array($query)) { ?>
    <div class="content">
        <p><?php echo $rowBuku['id_buku']?></p>
        <p><?php echo $rowBuku['judul_buku']?></p>
        <p><?php echo $rowBuku['kategori']?></p>
        <p><?php echo $rowBuku['pengarang']?></p>
        <p><?php echo $rowBuku['penerbit']?></p>
        <div class="tombol-wrapper">
          <a href="proses/buku-hapus-proses.php?id=<?php echo $rowBuku['id_buku']?>" class="btn-hapus">Hapus</a>
          <a href="index.php?p=edit-buku&id_buku=<?php echo $rowBuku['id_buku']?>" class="btn-edit">Edit</a>
        </div>
    </div>

  <?php };?>
</div>
<?php else:?>
  <div class="kosong">
    <h3>Tidak ada data buku ditemukan</h3>
  </div>
<?php endif;?>