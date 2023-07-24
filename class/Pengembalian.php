<?php

class Pengembalian {
  private $buku;
  private $anggota;
  private int $idTransaksi;
  private $timestamp;
  public $myDB;

  public function __construct($rowPengembalian) {
    global $db;
    $this->myDB = $db;
    $this->timestamp = $rowPengembalian['tanggal_pengembalian'];
    $this->idTransaksi = $rowPengembalian['id_transaksi'];
    $this->buku = $this->getInfoBuku($rowPengembalian['id_buku']);
    $this->anggota = $this->getInfoAnggota($rowPengembalian['id_anggota']);
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

  public function getInfoAnggota(int $id) {
    $sql = "SELECT * FROM tbanggota WHERE idanggota = $id";
    $query = mysqli_query($this->myDB, $sql);
    if( mysqli_num_rows($query) > 0) {
      return mysqli_fetch_array($query);
    } else {
      return null;
    }
  }

  public function getPengembalian() {
    return [
      'id' => $this->idTransaksi,
      'peminjam' => isset($this->anggota['nama']) ? $this->anggota['nama'] : 'Anggota Telah Dihapus',
      'judul' => isset($this->buku['judul_buku']) ? $this->buku['judul_buku'] : 'Buku Tidak Tersedia',
      'pengarang' => isset($this->buku['pengarang']) ? $this->buku['pengarang'] : 'Tidak Tersedia',
      'timestamp' => $this->timestamp,

    ];
    return [
      'idTransaksi' => $this->idTransaksi  ,
      'timestamp' => $this->timestamp  ,
    ];
  }
}


?>