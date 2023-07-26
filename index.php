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
<link rel="stylesheet" href="./styles/index.css">
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
          <a class="nav-link active" aria-current="page" href="#">Calon Peserta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/tambah-peserta.php">Daftar Siswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </header>
  <main class="container  py-5">
<h2 class="mt-3 mb-3">Selamat Datang Calon Peserta Digital Talent </h2>
      <p class="">Silahkan pilih Menu <strong>Daftar Baru</strong> untuk melakukan pendaftaran</p>
      <table class="table mt-5 table-striped">
        <thead>
          <tr class="table-primary">
            <th scope="col">No</th>
            <th scope="col">Nama Peserta</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Sekolah Asal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>John Doe</td>
            <td>Tangerang Selatan</td>
            <td>Laki-Laki</td>
            <td>Protestan</td>
            <td>SMPN 12 Tangerang Selatan</td>
            <td>
              <button class="btn btn-primary">
                <a href="./pages/edit-peserta.php" class="d-block text-white text-decoration-none ">Edit</a>
              </button>
              <button class="btn btn-danger">
                <a href="#" class="d-block text-white text-decoration-none">Hapus</a>
              </button>
            </td>
          </tr>

          <tr>
            <th scope="row">1</th>
            <td>Andrew Nayoo</td>
            <td>Bogor</td>
            <td>Laki-Laki</td>
            <td>Protestan</td>
            <td>SMP Bogor</td>
            <td>
              <button class="btn btn-primary">
                <a href="./pages/edit-peserta.php" class="d-block text-white text-decoration-none ">Edit</a>
              </button>
              <button class="btn btn-danger">
                <a href="#" class="d-block text-white text-decoration-none">Hapus</a>
              </button>
            </td>
          </tr>

          <tr>
            <th scope="row">1</th>
            <td>Itsuki miku</td>
            <td>Jakarta Timur</td>
            <td>Perempuan</td>
            <td>Konghucu</td>
            <td>SMP Klender</td>
            <td>
              <button class="btn btn-primary">
                <a href="./pages/edit-peserta.php" class="d-block text-white text-decoration-none ">Edit</a>
              </button>
              <button class="btn btn-danger">
                <a href="#" class="d-block text-white text-decoration-none">Hapus</a>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
  </main>
</body>
</html>