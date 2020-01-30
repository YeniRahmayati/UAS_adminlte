<h1>Form Edit </h1>
<form action="<?php echo $action;?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_kondisi" value="<?php echo $id_kondisi?>">
        kondisi:<input type="teks" name="kondisi" value="<?php echo $kondisi; ?>"
        <?php echo form_error('kondisi', '<div class="invalid-feedback">', '</div>');?>><br>
        ket_kondisi : <input type="teks" name="ket_kondisi" value="<?php echo $ket_kondisi;?>"
        <?php echo form_error('ket_kondisi', '<div class="invalid-feedback">', '</div>');?>><br>
<button type="submit"><?php echo $tombol;?></button>
</form>