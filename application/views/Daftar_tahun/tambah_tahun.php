<div class="container mx-auto">
    <div class="col-md-5  mx-auto bg-info">
  <small class="text-center">Tambah Tahun</small>
    <form action="<?= base_url() ?>daftar_tahun/simpan" method="post">
  <div class="form-group">
    <label for="tahun">Tahun</label>
    <input type="text" class="form-control" name="tahun" id="tahun"  >
   </div>
  <div class="form-group">
    <label for="ket_tahun">Ket Tahun</label>
    <input type="text" class="form-control" name="ket_tahun" id="ket_tahun" >
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
  <br>
</form>   
    </div>
</div>