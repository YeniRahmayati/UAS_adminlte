<div class="container mx-auto">
    <div class="col-md-5  mx-auto bg-info">
  <small class="text-center">Create Data</small>
  
  <?php echo form_open_multipart('daftar_ruang/simpan');?>
  <div class="form-group">
    <label for="nama_ruang">Nama Ruang</label>
    <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" >
   </div>
  <div class="form-group">
    <label for="fungsi_ruang">Fungsi Ruang</label>
    <input type="text" class="form-control" name="fungsi_ruangan" id="fungsi_ruangan" >
  </div>
  <div class="form-group">
    <label for="luas">Luas</label>
    <input type="text" class="form-control" name="luas" id="luas" >
  </div>
  <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" id="gbr_ruangan" name="gbr_ruangan">
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
  <br>
</form>   
    </div>
</div>