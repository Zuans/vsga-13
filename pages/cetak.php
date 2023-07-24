<?php

require_once '../koneksi.php';
?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,900;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../styles/cetak.css">
<h3>Data Anggota</h3>
<div id="content">
  <table class="tampil-wrapper">
    <tr class="head">
      <th>No</th>
      <th>ID Anggota</th>
      <th>Nama</th>
      <th>Foto</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
    </tr>
    <?php
    $nomor = 1;
    $query = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
    $q_tampil_anggota = mysqli_query($db, $query);
    if(mysqli_num_rows($q_tampil_anggota) > 0) {
      while($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
        if(empty($r_tampil_anggota['foto'] || $r_tampil_anggota['foto'] === '-'))
        {
          $foto = 'admin-no-photo.jpg';
        } else {
          $foto = $r_tampil_anggota['foto'];
        }
    ?>
    <tr class="user-info">
      <td><?php echo $nomor ?></td>
      <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
      <td><?php echo $r_tampil_anggota['nama']; ?></td>
      <td><img src="<?php echo "../images/$foto"; ?>" alt="gambar-user" class="gambar-user"></td>
      <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
      <td><?php echo $r_tampil_anggota['alamat']; ?></td>
    </tr>
    <?php $nomor++; }
    }?>
  </table>
  <script>
    window.print();
  </script>
</div>
