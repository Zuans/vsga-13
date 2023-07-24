<div id="label-page">
  <h3>Input Data Anggota
  </h3>
</div>
<div class="content">
  <form action="proses/anggota-input-proses.php" enctype="multipart/form-data" method="POST">
    <div class="form-group">
      <label for="foto">Foto</label>
      <input type="file" name="foto" id="foto">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" required>
    </div>
    <div class="form-group radio">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <input type="radio" name="jenis_kelamin" value="Pria" id="jenis_kelamin_pria">Pria
      <input type="radio" name="jenis_kelamin" value="Wanita" id="jenis_kelamin_wanita">Wanita
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <textarea name="alamat" id="alamat" cols="40" rows="2"></textarea>
    </div>
    <input type="submit" name="simpan" value="Simpan" class="btn-submit">
  </form>
</div>