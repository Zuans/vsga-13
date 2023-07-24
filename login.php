<?php
  session_start();
  $_SESSION['sesi'] = null;

  require_once './koneksi.php';

  if( isset($_POST['submit'])) {
    $user  = isset($_POST['username']) ? $_POST['username'] : "";
    $pass  = isset($_POST['password']) ? $_POST['password'] : "";
    $qry = mysqli_query($db, "SELECT * FROM tbadmin WHERE username = '$user' AND password = '$pass'");
    $sesi = mysqli_num_rows($qry);

    if( $sesi == 1 ) {
      $data_admin = mysqli_fetch_array($qry);
      $_SESSION['id_admin'] = $data_admin['id_admin'];
      $_SESSION['sesi'] = $data_admin['nm_admin'];

      echo "<script> alert('Anda berhasil login');</script>";
      echo "<meta http-equiv='refresh' content='0; url=index.php?user=$sesi' >";
    } else {

      echo "<meta http-equiv='refresh' content='0; url=login.php' >";
      echo "<script> alert('Anda Gagal login');</script>";

    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,900;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./styles/login.css">
</head>
<body>
  <main class="container">
    <div class="img-overlay">
      <img src="./images/perpus_wall.jpg" alt="gambar-wallpaper">
    </div>
    <div class="content">
      <h1 class="title-page">Admin Perpustakaan</h1>
        <?php if(isset($_GET['notlogin']) && $_GET['notlogin'] == true): ?>
          <div class="notlogin-wrapper">
            <p>Eitssss Kamu belum login, yuk login dulu..</p>
          </div>
          <?php endif;?>
        <div class="form-wrapper">
          <h2 class="title-form">Login</h1>
          <form action="" method="POST">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username"  placeholder="Masukkan username"  id="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password"  placeholder="Masukkan password"  id="password">
            </div>
            <input type="submit" name="submit" value="Login">
          </form>
        </div>
    </div>
  </main>
</body>
</html>
