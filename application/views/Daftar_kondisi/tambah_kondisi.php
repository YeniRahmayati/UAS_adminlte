<div class="container mx-auto">
    <div class="col-md-5  mx-auto bg-info">
  <small class="text-center">Tambah Kondisi</small>
    <form action="<?= base_url() ?>daftar_kondisi/simpan" method="post">
  <div class="form-group">
    <label for="kondisi">Kondisi</label>
    <input type="text" class="form-control" name="kondisi" id="kondisi" >
   </div>
  <div class="form-group">
    <label for="ket_kondisi">Ket Kondisi</label>
    <input type="text" class="form-control" name="ket_kondisi" id="ket_kondisi">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
  <br>
</form>   
    </div>
</div>