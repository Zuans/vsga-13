<?php
  session_start();
  if(!isset($_SESSION['id_admin'])) {
    header("Location: login.php?notlogin=true");
  }
  require_once './koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Perpus</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,900;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./styles/index.css">
<link rel="stylesheet" href="./styles/anggota.css">
<link rel="stylesheet" href="./styles/anggota-input.css">
<link rel="stylesheet" href="./styles/tabel.css">
</head>
<body>
  <nav>
    <?php if(isset($_GET['p'])) :?>
    <p class="user-info">Hi, admin</p>
    <div class="nav-group">
      <h3 class="nav-title">Beranda</h3>
      <a href="#" class="nav-item">Data Master</a>
      <a href="?p=anggota" class="nav-item <?php echo $_GET['p'] == 'anggota' ? 'active' : '' ?>">Data Anggota</a>
      <a href="?p=list-buku" class="nav-item  <?php echo $_GET['p'] == 'list-buku' ? 'active' : '' ?>">Data Buku</a>
    </div>
    <div class="nav-group">
      <h3 class="nav-title">Data Transaksi</h3>
      <a href="?p=transaksi-peminjaman" class="nav-item  <?php echo $_GET['p'] == 'transaksi-peminjaman' ? 'active' : '' ?>">Transaksi Peminjaman</a>
      <a href="?p=transaksi-pengembalian" class="nav-item  <?php echo $_GET['p'] == 'transaksi-pengembalian' ? 'active' : '' ?>">Transaksi Pengembalian</a>
    </div>
    <div class="nav-group">
      <h3 class="nav-title">Layanan Transaksi</h3>
      <a href="proses/logout-proses.php" class="nav-item">Logout</a>
    </div>
    <?php else: ?>
      <p class="user-info">Hi, admin</p>
    <div class="nav-group">
      <h3 class="nav-title">Beranda</h3>
      <a href="#" class="nav-item">Data Master</a>
      <a href="?p=anggota" class="nav-item">Data Anggota</a>
      <a href="?p=list-buku" class="nav-item  ">Data Buku</a>
    </div>
    <div class="nav-group">
      <h3 class="nav-title">Data Transaksi</h3>
      <a href="?p=transaksi-peminjaman" class="nav-item  ">Transaksi Peminjaman</a>
      <a href="?p=transaksi-pengembalian" class="nav-item  ">Transaksi Pengembalian</a>
    </div>
    <div class="nav-group">
      <h3 class="nav-title">Layanan Transaksi</h3>
      <a href="#" class="nav-item">Logout</a>
    </div>
    <?php endif;?>
  </nav>
  <main>
    <header>
      <h2 class="header-title">Perpustakaan Umum</h2>
      <p class="alamat">Jl.Lembah Abang No.11 telp: 021-4213-5322</p>
    </header>
    <div class="main-wrapper">
      <div class="breadcrumb">
        <p>Beranda</p>
      </div>
      <div class="content">
        <p class="greet">Selamat Datang di sistem informasi perpustakaan</p>
        <?php if(isset($_GET['p']) && $_GET['p'] == 'anggota') {
          include "./pages/anggota.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'anggota-input') {
          include "./pages/anggota-input.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'anggota-edit') {
          include "./pages/anggota-edit.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'transaksi-peminjaman') {
          include "./pages/transaksi-peminjaman.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'edit-transaksi-peminjaman') {
          include "./pages/edit-transaksi-peminjaman.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'transaksi-pengembalian') {
          include "./pages/transaksi-pengembalian.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'list-buku') {
          include "./pages/list-buku.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'tambah-buku') {
          include "./pages/tambah-buku.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'edit-buku') {
          include "./pages/edit-buku.php";
        } else if(isset($_GET['p']) && $_GET['p'] == 'input-peminjaman') {
          include "./pages/input-peminjaman.php";
        }

         else {
           echo '<h2>Membaca Adalah wawasan dunia</h2>';
        }
        ?>
      </div>
    </div>
  </main>

  <footer>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sunt distinctio quibusdam eius error eos commodi modi minima vel magnam.</p>
  </footer>
</body>
</html>