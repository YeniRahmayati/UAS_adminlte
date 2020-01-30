<form method="post" action="<?= site_url('daftar_jenis/edit') ?>" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group row">
                <label for="kode" class="col-sm-4">Daftar Jenis Barang</label>
                <div class="col-sm-8">
                    <input type="text" name="kodaftar_jenisde" id="daftar_jenis" class="form-control-sm form-control" value="<?= $daftar_jenis->Jenis ?>">
                    <?= form_error('kode', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenisbrg" class="col-sm-4">Jenis Barang</label>
                <div class="col-sm-8">
                    <input type="text" name="jenisbrg" id="jenisbrg" class="form-control-sm form-control" value="<?= $daftar_jenis->ket_jenis ?>">
                    <?= form_error('ket_jenis', '<small class="text-danger">', '</small>') ?>
                </div>
            </div>
         </div>

            <a href="<?= site_url('daftar_jenis') ?>" class="btn btn-info">Kembali</a>
            <button type="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </div>
</form>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>