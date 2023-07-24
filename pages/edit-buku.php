<?php

  $idBuku =  $_GET['id_buku'];
  $sql= "SELECT * FROM tb_buku WHERE id_buku = $idBuku";
  $query = mysqli_query($db, $sql);


?>

<div class="form-wrapper">
  <form action="proses/edit-buku-proses.php" method="POST" >
    <?php while($buku = mysqli_fetch_array($query)) { ?>
      <input type="hidden" name="id_buku" value="<?php echo $_GET['id_buku'] ?>"  >
    <div class="form-group">
        <label for="judul_buku">Judul Buku</label>
        <input type="text" name="judul_buku" value="<?php echo (isset($buku['judul_buku']) ? $buku['judul_buku'] : '');  ?>" id="judul_buku">
    </div>
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" value="<?php echo(isset($buku['kategori']) ? $buku['kategori'] : '') ;  ?>" id="kategori">
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" value="<?php echo(isset($buku['pengarang']) ? $buku['pengarang'] : '');  ?>" id="pengarang">
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" value="<?php echo(isset($buku['penerbit']) ? $buku['penerbit'] : '');  ?>"  id="penerbit">
    </div>
    <input type="submit" class="btn-submit" name="edit-buku" value="Edit Buku">
    <?php }?>
  </form>
</div>