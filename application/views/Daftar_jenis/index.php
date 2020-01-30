<div class="container ">
    <div class="col-md-10">
        <h1 class="text-center">Daftar Jenis Barang</h1>
        <a href="<?= site_url('Daftar_jenis/tambah_jenis') ?>" class="btn btn-primary"><i class="fa fa-plus"> Tambah Data</i></a>
        <hr>
        <table class="table table-sm table-dark text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Ket Jenis</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i=1;
foreach ($jenis as $row){

  ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $row['jenis'] ?></td>
      <td><?= $row['ket_jenis'] ?></td>
      <td>
<a href="<?= base_url()?>daftar_jenis/edit" class="btn btn-warning"><i class="fa fa-pen">Edit</i></a>
<a href="<?= base_url()?>daftar_jenis/hapus/<?= $row["id_jenis"]?>" class="btn btn-danger"><i class="fa fa-pen">Delete</i></a>

      </td>
    </tr>
    <?php
      }   
    ?>
  </tbody>
</table>
    </div>
</div>