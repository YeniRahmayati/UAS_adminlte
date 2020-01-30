<div class="container">
   <div class="col-md-10">
        <h1 class="text-center">Daftar Sumber</h1>
        <a href="<?= site_url('Daftar_sumber/tambah_sumber') ?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a>
        <hr>
        <table class="table table-sm table-dark text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Sumber</th>
      <th scope="col">Ket Sumber</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php
$i=1;
foreach ($sumber as $row) {


?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $row['sumber'] ?></td>
      <td><?= $row['ket_sumber'] ?></td>
      <td>
        <a href="" class="btn btn-info"><i class="fa fa-pen">Edit</i></a>
        <a href="<?= base_url() ?>daftar_sumber/hapus/<?= $row['id_sumber']?>" class="btn btn-danger"><i class="fa fa-pen">Hapus</i></a>

      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
    </div>
</div>