<div class="container mx-auto">
    <div class="col-md-5  mx-auto bg-info">
  <small class="text-center">Tambah Sumber</small>
    <form action="<?= base_url() ?>daftar_sumber/simpan" method="post">
  <div class="form-group">
    <label for="sumber">Sumber</label>
    <input type="text" class="form-control" name="sumber" id="sumber"  >
   </div>
  <div class="form-group">
    <label for="ket_sumber">Ket Sumber</label>
    <input type="text" class="form-control" name="ket_sumber" id="ket_sumber">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
  <br>
</form>   
    </div>
</div>