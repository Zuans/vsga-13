
<div class="content">
  <div id="container-form">
    <div class="head-table">
      <div id="label-page">
        <h3>Tampil Data Anggota</h3>
      </div>
      <div class="head-btn-action">
        <p id="tombol-tambah-container">
          <a href="index.php?p=anggota-input" class="tombol">
            Tambah Anggota
          </a>
        </p>
        <a target="__blank" class="btn-cetak" href="pages/cetak.php">Cetak</a>
      </div>
    </div>
    <div>
        <form class="form-search" action="" method="POST">
          <input type="text" name="pencarian" placeholder="Cari disini" id="">
          <input type="submit" name="search" class="tombol" value="Cari">
      </form>
    </div>
  </div>
  <table id="tabel-tampil">
    <tr>
      <th id="label-tampil-no">No</th>
      <th>ID Anggota</th>
      <th>Nama</th>
      <th>Foto</th>
      <th>Jenis Kelamain</th>
      <th>Alamat</th>
      <th id="label-opsi">Opsi</th>
    </tr>
    <?php

    $batas = 5;
    extract($_GET);
    if(empty($hal)) {
      $posisi = 0;
      $hal = 1;
      $nomor = 1;
    } else {
      $posisi = ($hal - 1) * $batas;
      $nomor = $posisi + 1;
    }


    if($_SERVER['REQUEST_METHOD'] == "POST") {
      $pencarian = mysqli_real_escape_string($db, $_POST['pencarian']);
      if($pencarian != "") {
        $sql = "SELECT * FROM tbanggota WHERE nama LIKE '%$pencarian%'
          OR idanggota LIKE '%$pencarian%'
          OR jeniskelamin LIKE '%$pencarian%'
          OR alamat LIKE '%$pencarian%'
        ";
        $query = $sql;
        $queryJml = $sql;
      } else {
        $query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
        $queryJml = "SELECT * FROM tbanggota";
        $no = $posisi * 1;
      }
    } else {
        $query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
        $queryJml = "SELECT * FROM tbanggota";
        $no = $posisi * 1;
    }
    $q_tampil_anggota = mysqli_query($db, $query);
    if(mysqli_num_rows($q_tampil_anggota) > 0) {
      while($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
        if(empty($r_tampil_anggota['foto']) || $r_tampil_anggota['foto'] == '-') {
          $foto = "admin-no-photo.jpg";
        } else {
          $foto = $r_tampil_anggota['foto'];
    }
    ?>
    <tr>
      <td>
        <?php echo $nomor; ?>
      </td>
      <td>
        <?php echo $r_tampil_anggota["idanggota"]; ?>
      </td>
      <td>
        <?php echo $r_tampil_anggota["nama"]; ?>
      </td>
      <td>
        <img  src="<?php echo './images/'. $foto; ?>" alt="" class="user-img" style="height: 70px; width:70px; border-radius: 10px">
      </td>
      <td>
        <?php echo $r_tampil_anggota["jeniskelamin"]; ?>
      </td>
      <td>
        <?php echo $r_tampil_anggota["alamat"]; ?>
      </td>
      <td>
        <div class="tombol-opsi-container cetak">
          <a href="pages/cetak_kartu.php?id=<?php echo $r_tampil_anggota["idanggota"] ?>" class="tombol"   target="__blank">Cetak Kartu</a>
        </div>
        <div class="tombol-opsi-container edit">
          <a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota["idanggota"] ?>" class="tombol"   target="__blank">Edit</a>
        </div>
        <div class="tombol-opsi-container hapus">
          <a href="proses/anggota-hapus-proses.php?id=<?php echo $r_tampil_anggota["idanggota"] ?>" class="tombol" onclick="return_confirmation('Apakah Anda Yakin Akan Menghapus Data Ini?')"  target="__blank">Hapus</a>
        </div>
      </td>
    </tr>
    <?php $nomor++; }
    }
    else {
      echo "<tr><td colspan='6'>Data Tidak Ditemukan</td></tr>";
    }
    ?>
  </table>
  <?php
    if(isset($_POST['pencarian'])) {
      if($_POST['pencarian'] != '') {
        echo "<div class=''>";
        $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
        echo "Data Hasil Pencarian: <strong>$jml</strong> ";
        echo '</div>';
      }
    }
    else { ?>
      <div>
        <?php
          $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
          echo "Jumlah Data: <strong>$jml</strong>"
        ?>
      </div>
      <div class="pagination">
        <?php
          $jml_hal =ceil($jml/$batas);
          for($i =1; $i <= $jml_hal; $i++) {
            if($i != $hal) {
              echo "<a class='btn-pagination' href=\"?p=anggota&hal=$i\">$i</a>";
            } else {
              echo "<a class='btn-pagination active' href=\"active\">$i</a>";
            }
          }
          ?>
      </div>
      </div>
      <?php } ?>
</div>