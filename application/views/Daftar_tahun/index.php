<div class="container ml-50">
   <div class="col-md-7 bg-">
        <h1 class="text-center">Daftar Tahun</h1>
        <a href="<?= site_url('Daftar_tahun/tambah_tahun') ?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a>
        <hr>
        <table class="table table-sm table-dark text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tahun</th>
      <th scope="col">Ket Tahun</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        <?php
            $i=1;
            foreach ($tahun as $row){

        ?>
    <tr>
      <td scope="row"><?= $i++; ?></td>
      <td><?= $row['tahun'] ?></td>
      <td><?= $row['ket_tahun'] ?></td>
      <td>
        <a href="" class="btn btn-info"><i class="fa fa-pen">Edit</i></a>
        <a href="<?= base_url() ?>daftar_tahun/hapus/<?= $row['id_tahun'] ?>" class="btn btn-danger"><i class="fa fa-pen">Hapus</i></a>
      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
    </div>
</div>