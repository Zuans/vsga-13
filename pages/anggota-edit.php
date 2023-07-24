<?php
$id_anggota = $_GET['id'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
if(empty($r_tampil_anggota['foto']) || ($r_tampil_anggota['foto'] == '-')) {
  $foto = "admin-no-photo.jpg";
} else {
  $foto = $r_tampil_anggota['foto'];
}

?>

<div class="label-page">
  <h3>Edit Data Anggota</h3>
</div>
<div class="content">
  <form action="proses/anggota-edit-proses.php" enctype="multipart/form-data" method="POST">
    <div class="form-group">
      <label for="foto">Foto</label>
      <img  src="<?php echo './images/'. $foto; ?>" alt="" class="user-img" style="height: 70px; width:70px; border-radius: 10px">
      <input type="file" name="foto" id="foto">
      <input type="hidden" name="foto_awal" value="<?php echo $r_tampil_anggota['foto']; ?>"  id="foto_awal">
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ;?>">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" value="<?php echo $r_tampil_anggota['nama'] ?>" required>
    </div>
    <div class="form-group radio">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <?php if($r_tampil_anggota['jeniskelamin'] === 'Pria') : ?>
        <input type="radio" name="jenis_kelamin" value="Pria" id="jenis_kelamin_pria" checked required>Pria
      <?php else : ?>
          <input type="radio" name="jenis_kelamin" value="Pria" id="jenis_kelamin_pria" required>Pria
      <?php endif; ?>

      <?php if($r_tampil_anggota['jeniskelamin'] === 'Pria') : ?>
        <input type="radio" name="jenis_kelamin" value="Wanita" id="jenis_kelamin_wanita" checked>Wanita
      <?php else : ?>
        <input type="radio" name="jenis_kelamin" value="Wanita" id="jenis_kelamin_wanita">Wanita
       <?php endif; ?>
      </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <textarea name="alamat" id="alamat"  cols="40" rows="2"><?php echo $r_tampil_anggota['alamat']; ?>
      </textarea>
    </div>
    <input type="submit" name="simpan" value="Simpan" class="btn-submit">
  </form>
</div>