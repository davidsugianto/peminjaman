<?php
	//nofikasi kala ada input error
	echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');
	//open form
	echo form_open(base_url('index.php/admin/informasi/tambah_alat'));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama Alat</label>
		<input type="text" name="NAMA_ALAT" class="form-control" placeholder="Nama Alat" value="<?php echo set_value('NAMA_ALAT')?>" required>
	</div>

	<div class="form-group">
		<label>Jenis Alat</label>
		<input type="text" name="JENIS_ALAT" class="form-control" placeholder="Jenis Alat" value="<?php echo set_value('JENIS_ALAT')?>" required>
	</div>

	<div class="form-group">
		<label>Jumlah Alat</label>
		<input type="text" name="JUMLAH_ALAT" class="form-control" placeholder="Jumlah Alat" value="<?php echo set_value('JUMLAH_ALAT')?>" required>
	</div>

	<div class="form-group">
		<label>Keterangan</label>
		<input type="text" name="KETERANGAN_ALAT" class="form-control" placeholder="Keterangan" value="<?php echo set_value('KETERANGAN_ALAT')?>" required>
	</div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
		<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset ">
	</div>	
</div>

<?php
	//close form
	echo form_close();
?>