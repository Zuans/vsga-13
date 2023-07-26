<?php


?>
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
        <?php $index = 1;?>
        <?php while($siswa = mysqli_fetch_array($allSiswa)) {?>
          <tr>
            <th scope="row"><?php echo $index; ?></th>
            <td><?php echo $siswa['nama_siswa']; ?></td>
            <td><?php echo $siswa['alamat']; ?></td>
            <td><?php echo $siswa['jenis_kelamin']; ?></td>
            <td><?php echo $siswa['agama']; ?></td>
            <td><?php echo $siswa['sekolah_asal']; ?></td>
            <td>
            <button class="btn btn-primary">
              <a href="?p=edit-peserta&id=<?php echo $siswa['id_siswa']?>" class="d-block text-white text-decoration-none ">Edit</a>
            </button>
            <button class="btn btn-danger">
              <a href="pages/hapus-peserta.php?id=<?php echo $siswa['id_siswa']?>" class="d-block text-white text-decoration-none">Hapus</a>
            </button>
          </td>
          </tr>
          <?php $index++; }?>
        </tbody>
      </table>
