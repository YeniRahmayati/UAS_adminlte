   <div class="container">
   <div class="col-md-10">
        <h1 class="text-center">Daftar Kondisi</h1>
        <a href="<?= site_url('Daftar_kondisi/tambah_kondisi') ?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a>
        <hr>
        <table class="table table-sm table-dark text-center">
  <thead>
     <tr>
      <th scope="col">No</th>
      <th scope="col">Kondisi </th>
      <th scope="col">Ket Kondisi</th>
    </tr>
   </thead>
  <tbody>
  <?php
    $i=1;
    foreach($kondisi as $row){
  ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $row['kondisi'] ?></td>
      <td><?= $row['ket_kondisi'] ?></td>
      <td>
<a href="<?= base_url() ?>daftar_kondisi/update/<?= $row['id_kondisi'] ?>" class="btn btn-info"><i class="fa fa-pen">Edit</i></a>
<a href="<?= base_url() ?>daftar_kondisi/hapus/<?= $row['id_kondisi'] ?>" class="btn btn-danger"><i class="fa fa-pen">Hapus</i></a>

      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
    </div>
</div>