<div class="container">
   <div class="col-md-10">
        <h1 class="text-center">Daftar Satuan</h1>
        <a href="<?= site_url('Daftar_satuan/tambah_satuan') ?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a>
        <hr>
        <table class="table table-sm table-dark text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Satuan</th>
      <th scope="col">Ket Satuan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $i=1;
        foreach ($satuan as $row){
    ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $row['satuan'] ?></td>
      <td><?= $row['ket_satuan'] ?></td>
      <td>
          <a href="" class="btn btn-info"><i class="fa fa-pen">Edit</i></a>
          <a href="<?= base_url() ?>daftar_satuan/hapus/<?= $row['id_satuan']?>" class="btn btn-danger"><i class="fa fa-pen">Hapus</i></a>
      </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
    </div>
</div>