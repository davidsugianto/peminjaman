<?php
	//nofikasi kala ada input error
	echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');
	//open form
	echo form_open(base_url('index.php/admin/informasi/tambah_tugasakhir'));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Judul Tugas Akhir</label>
		<input type="text" name="JUDUL_TUGAS_AKHIR" class="form-control" placeholder="Judul Tugas Akhir" value="<?php echo set_value('JUDUL_TUGAS_AKHIR')?>" required>
	</div>

	<div class="form-group">
		<label>Penerbit</label>
		<input type="text" name="PENERBIT" class="form-control" placeholder="Penerbit" value="<?php echo set_value('PENERBIT')?>" required>
	</div>

	<div class="form-group">
		<label>Program Studi</label>
		<input type="text" name="PRODI" class="form-control" placeholder="Program Studi" value="<?php echo set_value('PRODI')?>" required>
	</div>

	<div class="form-group">
		<label>Jurusan</label>
		<input type="text" name="JURUSAN" class="form-control" placeholder="Jurusan" value="<?php echo set_value('JURUSAN')?>" required>
	</div>
	<div class="form-group">
		<label>Tahun</label>
		<input type="text" name="TAHUN" class="form-control" placeholder="Tahun" value="<?php echo set_value('TAHUN')?>" required>
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