<?php


if(!isset($db)) {
  require_once '../koneksi.php';
}

class Siswa {
  static public $tableName =  'siswa';
  public $nama;
  public $alamat;
  public $jenisKelamin;
  public $agama;
  public $sekolahAsal;

  public function __construct($dataSiwa) {
    $this->nama = $dataSiwa['nama'];
    $this->alamat = $dataSiwa['alamat'];
    $this->jenisKelamin = $dataSiwa['jenis_kelamin'];
    $this->agama = $dataSiwa['agama'];
    $this->sekolahAsal = $dataSiwa['sekolah_asal'];
  }

  static public function getAll() {
    global $db;
    $tableName = self::$tableName;
    $sql = "SELECT * FROM $tableName";
    $query = mysqli_query($db, $sql);
    if(mysqli_num_rows($query)) {
      return $query;
    } else {
      return null;
    }
  }

  static function getById(int $id) {
    global $db;
    $tableName = self::$tableName;
    $sql  = "SELECT * FROM $tableName WHERE id_siswa = $id";
    $query = mysqli_query($db, $sql);
    if(mysqli_num_rows($query)) {
      return $query;
    } else {
      // Kosong
    }
  }

  static public function deleteById(int $id) {
    global $db;
    $tableName = self::$tableName;
    $sql  = "DELETE FROM $tableName WHERE id_siswa = $id";
    var_dump($db);

    $query = mysqli_query($db, $sql);
    if($query) {
      header("Location: ../index.php?success-delete=true");
    } else {
      // Gagal Delete
      header("Location: ../index.php?success-delete=false");
    }
  }

  public function insert() {
    global $db;
    $tableName = self::$tableName;
    $sql = "INSERT INTO $tableName (nama_siswa, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('{$this->nama}', '{$this->alamat}', '{$this->jenisKelamin}', '{$this->agama}', '{$this->sekolahAsal}' )";
    $query = mysqli_query($db, $sql);
    if($query) {
      header("Location: ./index.php?success-daftar=true");
    } else {
      // gagal
    }
  }

  public function update($id) {
    global $db;
    $tableName = self::$tableName;
    $sql = "UPDATE $tableName SET nama_siswa = '{$this->nama}', alamat = '{$this->alamat}', jenis_kelamin = '{$this->jenisKelamin}', agama = '{$this->agama}', sekolah_asal = '{$this->sekolahAsal}' WHERE id_siswa = $id";
    echo $sql;
    $query = mysqli_query($db, $sql);
    if($query) {
      header("Location: ./index.php?success-edit=true");
    } else {
      // gagal
    }
  }
}

?>