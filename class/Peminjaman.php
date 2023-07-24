<?php

class Peminjaman {

  private $buku;
  private $anggota;
  private int $idTransaksi;
  private $timestamp;
  public $myDB;

  public function __construct($rowPeminjam) {
    global $db;
    $this->myDB = $db;
    $this->buku = $this->getInfoBuku($rowPeminjam['id_buku']);
    $this->anggota = $this->getInfoAnggota($rowPeminjam['id_anggota']);
    $this->timestamp = $rowPeminjam['tanggal_peminjaman'];
    $this->idTransaksi = $rowPeminjam['id_transaksi'];
  }


  public function getInfoAnggota(int $id) {
    $sql = "SELECT * FROM tbanggota WHERE idanggota = $id";
    $query = mysqli_query($this->myDB, $sql);
    if( mysqli_num_rows($query) > 0) {
      return mysqli_fetch_array($query);
    } else {
      return null;
    }
  }


  public function getInfoBuku(int $id) {
    $sql = "SELECT * FROM tb_buku WHERE id_buku = $id";
    $query = mysqli_query($this->myDB, $sql);
    if( mysqli_num_rows($query) > 0) {
      return mysqli_fetch_array($query);
    } else {
      return null;
    }
  }

  public function getPeminjaman() {
    return [
      'idTransaksi' => $this->idTransaksi  ,
      'timestamp' => $this->timestamp  ,
      'namaPeminjam' => isset($this->anggota['nama']) ? $this->anggota['nama'] : 'Anggota Telah Dihapus',
      'judulBuku' => isset($this->buku['judul_buku']) ? $this->buku['judul_buku'] : 'Buku Tidak Tersedia',
      'namaPengarang' => isset($this->buku['pengarang']) ? $this->buku['pengarang'] : 'Tidak Tersedia',
    ];
  }

  public function addPengembalian() {
    $sql = "INSERT INTO tbpengembalian (id_buku, id_anggota) VALUES({$this->buku['id_buku']},{$this->anggota['idanggota']})";
    $query = mysqli_query($this->myDB, $sql);
    if($query) {
        $this->removePeminjaman($this->idTransaksi);
    } else {
      // err insert
    }
  }

  public function removePeminjaman(int $id) {
    $sql = "DELETE FROM tbpeminjaman WHERE id_transaksi = $id";
    $query = mysqli_query($this->myDB, $sql);
    if($query) {
        header("Location: ../index.php?p=transaksi-pengembalian");
    } else {
      //  Kalo gagal
    }
  }

}

?>