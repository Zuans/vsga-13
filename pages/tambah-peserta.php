<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,900;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles/index.css">
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">DIGITAL TALENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="../index.php">Calon Peserta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Daftar Siswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </header>
  <main class="container  py-5">
<div class="form-wrapper">
<h2 class="mb-5 fw-semibold">Form Tambah Peserta</h2>
<form action="" method="POST">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" id="input-nama" aria-describedby="input-nama">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea>
  </div>
  <div>
      <label class="mb-2 d-block" for="">Jenis Kelamin</label>
      <input class="form-check-input" type="radio" name="jenis_kelamin"  value="L" id="jenis_kelamin">
      <label class="form-check-label" for="jenis_kelamin">
        Laki-Laki
      </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin2">
        <label class="form-check-label" for="jenis_kelamin2">
          Perempuan
        </label>
      </div>
  <div class="mt-4">
    <label class="mb-2" for="">Agama</label>
    <select class="form-select" name="agama" aria-label="Default select example">
      <option selected>Pilih Salah Satu</option>
      <option value="islam">Islam</option>
      <option value="protestan">Protestan</option>
      <option value="katolik">Katolik</option>
      <option value="hindu">Hindu</option>
      <option value="buddha">Buddha</option>
      <option value="konghucu">Konghucu</option>
    </select>
  </div>
  <div class="mt-3 mb-3">
    <label for="sekolah-asal" class="form-label">Sekolah Asal</label>
    <input type="text" class="form-control" name="sekolah_asal" id="sekolah-asal" aria-describedby="sekolah-asal">
  </div>
  <div class="d-flex">
    <button type="submit" name="daftar" class="btn btn-primary fw-semibold mt-5 me-3">Daftar Sekarang</button>
    <button  class="btn btn-secondary fw-semibold mt-5 me-3">Reset</button>
    <button  class="btn btn-success fw-semibold mt-5 me-3">Kembali</button>
  </div>
</form>
</div>
  </main>
</body>
</html>

