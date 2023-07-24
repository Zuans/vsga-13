<?php

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
  if(!$isError) {
    $buku = $_POST['id_buku'];
      $anggota = $_POST['id_anggota'];
      $sql = "INSERT INTO tbpeminjaman (id_anggota, id_buku) VALUES ($anggota, $buku) ";
      $query = mysqli_query($db, $sql);
      if($query) {
        header("Location: ?p=transaksi-peminjaman");
      } else {
        echo "<script>alert('Gagal menambahkan')</script>";
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

<div class="form-wrapper">

  <?php if(isset($_POST['input-peminjaman'])) : ?>
    <?php if($isError) : ?>
      <form action="" method="POST" >
          <div class="form-group">
              <label for="id_anggota">ID Anggota</label>
              <input type="number" name="id_anggota" id="id_anggota">
          <p class="err-text"><?php echo $errField['idAnggota'] !== false ? $errField['idAnggota'] : "" ; ?></p>
          </div>
          <div class="form-group">
              <label for="id_buku">ID Buku</label>
              <input type="text" name="id_buku" id="id_buku">
            <p class="err-text"><?php echo $errField['idBuku'] !== false ? $errField['idBuku'] : "" ; ?></p>
          </div>
          <input type="submit" class="btn-submit" name="input-peminjaman" value="Tambahkan">
        </form>
      <?php endif;?>
    <?php else:?>
      <form action="" method="POST" >
          <div class="form-group">
              <label for="id_anggota">ID Anggota</label>
              <input type="number" name="id_anggota" id="id_anggota">
          </div>
          <div class="form-group">
              <label for="id_buku">ID Buku</label>
              <input type="text" name="id_buku" id="id_buku">
          </div>
          <input type="submit" class="btn-submit" name="input-peminjaman" value="Tambahkan">
        </form>
    <?php endif;?>
</div>