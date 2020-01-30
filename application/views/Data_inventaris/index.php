<div class="container ml-50">
   <div class="col-md-10 bg-">
        <h1 class="text-center">Daftar Inventaris</h1>
        <a href="<?= base_url() ?>Data_inventaris/tambah_inventaris" class="btn btn-primary"><i class="fa fa-plus"> Create Data</i></a>
        <hr>
        <table class="table table-sm table-dark text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Kode Inventaris</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Merek</th>
      <th scope="col">Seri</th>
      <th scope="col">Nilai Wajar</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
      $i=1;
      foreach($data_inventaris as $row){
  ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $row['tanggal'] ?></td>
      <td><?= $row['kode_inv'] ?></td>
      <td><?= $row['nama_barang'] ?></td>
      <td><?= $row['merek'] ?></td>
      <td><?= $row['seri'] ?></td>
      <td><?= $row['nilai_wajar'] ?></td>
      <td><img src="<?= base_url()?>application/img/<?= $row['gambar']?>" style="width:50px;" class="rounded float-left"></td>
      <td></td>
      <td>
<a href="" class="btn btn-info"><i class="fa fa-pen">Edit</i></a>
<a href="<?= base_url() ?>data_inventaris/hapus/<?= $row["id_inv"] ?>" class="btn btn-danger"><i class="fa fa-pen">Hapus</i></a>

      </td>
    </tr>
    <?php
      }
    ?>
  </tbody>
</table>
    </div>
</div>