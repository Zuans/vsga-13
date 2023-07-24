<div class="form-wrapper">
  <form action="proses/tambah-buku-proses.php" method="POST" >
    <div class="form-group">
        <label for="judul_buku">Judul Buku</label>
        <input type="text" name="judul_buku" id="judul_buku">
    </div>
    <div class="form-group">
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" id="kategori">
    </div>
    <div class="form-group">
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang">
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit">
    </div>
    <input type="submit" class="btn-submit" name="tambah-buku" value="Tambahkan">
  </form>
</div>