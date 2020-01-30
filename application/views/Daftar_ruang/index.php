<div class="container">
   <div class="col-md-10">
        <h1 class="text-center">Daftar Ruang</h1>
        <a href="<?= site_url('Daftar_ruang/tambah_ruang') ?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a>
        <hr>
        <table class="table table-sm table-dark text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Ruang</th>
      <th scope="col">Fungsi Ruang</th>
      <th scope="col">Luas</th>
      <th scope="col">Gambar</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $i=1;
      foreach($ruang as $row){
  ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $row['nama_ruangan'] ?></td>
      <td><?= $row['fungsi_ruangan'] ?></td>
      <td><?= $row['luas'] ?></td>
      <td><img src="<?= base_url()?>img/<?= $row['gbr_ruangan']?>" style="width:50px;" class="rounded float-left"></td>
      <td>
<a href="" class="btn btn-info"><i class="fa fa-pen">Edit</i></a>
<a href="<?= base_url() ?>daftar_ruang/hapus/<?= $row["id_ruang"] ?>" class="btn btn-danger"><i class="fa fa-pen">Hapus</i></a>

      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
    </div>
</div>