<div class="container mx-auto">
    <div class="col-md-5  mx-auto bg-info">
  <small class="text-center">Tambah Satuan</small>
    <form action="<?= base_url() ?>Daftar_satuan/simpan" method="post">
  <div class="form-group">
    <label for="satuan">Satuan</label>
    <input type="text" class="form-control" name="satuan" id="satuan"  >
  </div>
  <div class="form-group">
    <label for="ket_satuan">Ket Satuan</label>
    <input type="text" class="form-control" name="ket_satuan" id="ket_satuan">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
  <br>
</form>   
    </div>
</div>