<div class="container mx-auto ">
    <div class="col-md-5  mx-auto bg-info">
  <small class="text-center">Tambah Jenis</small>
    <form action="<?= base_url() ?>daftar_jenis/simpan" method="post">
  <div class="form-group">
    <label for="jenis">Jenis</label>
    <input type="text" class="form-control" name="jenis" id="jenis">
   </div>
  <div class="form-group">
    <label for="ket_jenis">Ket Jenis</label>
    <textarea cols="30" rows="10" type="text" class="form-control" name="ket_jenis" id="ket_jenis"></textarea>
  </div>
  <button type="submit" class="btn btn-primary mb-5">Submit</button>
  <br>
</form>   
    </div>
</div>