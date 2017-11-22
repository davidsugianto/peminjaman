<?php
	//nofikasi kala ada input error
	echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');
	//open form
	echo form_open(base_url('index.php/admin/user/tambah'));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nim</label>
		<input type="text" name="NIM" class="form-control" placeholder="nim" value="<?php echo set_value('NIM')?>" required>
	</div>

	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="NAMA_MAHASISWA" class="form-control" placeholder="nama" value="<?php echo set_value('NAMA_MAHASISWA')?>" required>
	</div>

	<div class="form-group">
		<label>Program Studi</label>
		<input type="text" name="PRODI" class="form-control" placeholder="program studi" value="<?php echo set_value('PRODI')?>" required>
	</div>

	<div class="form-group">
		<label>Jurusan</label>
		<input type="text" name="JURUSAN" class="form-control" placeholder="jurusan" value="<?php echo set_value('JURUSAN')?>" required>
	</div>

	<div class="form-group">
		<label>Password</label>
		<input type="password" name="PASSWORD" class="form-control" placeholder="password" value="<?php echo set_value('PASSWORD')?>" required>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Level Hak akses</label>
		<select name="AKSES_LEVEL" class="form-control">
			<option value="Admin">Admin</option>
			<option value="User">User</option>
		</select>
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