<?php
	//nofikasi kala ada input error
	echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');
	//open form
	echo form_open(base_url('index.php/admin/user/edit/'.$user->NIM));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nim</label>
		<input type="text" name="NIM" class="form-control" placeholder="nim" value="<?php echo $user->NIM ?>" required>
	</div>

	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="NAMA_MAHASISWA" class="form-control" placeholder="nama" value="<?php echo $user->NAMA_MAHASISWA ?>" required readonly disabled>
	</div>

	<div class="form-group">
		<label>Program Studi</label>
		<input type="text" name="PRODI" class="form-control" placeholder="program studi" value="<?php echo $user->PRODI?>" required>
	</div>

	<div class="form-group">
		<label>Jurusan</label>
		<input type="text" name="JURUSAN" class="form-control" placeholder="jurusan" value="<?php echo $user->JURUSAN ?>" required>
	</div>

	<div class="form-group">
		<label>Password <span class="text-danger"><small>(Password minimal 5 karakter atau biarkan kosong)</small></span></label>
		<input type="password" name="PASSWORD" class="form-control" placeholder="password" value="<?php echo set_value('PASSWORD')?>">
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Level Hak akses</label>
		<select name="AKSES_LEVEL" class="form-control">
			<option value="Admin">Admin</option>
			<option value="User" <?php if($user->AKSES_LEVEL=="User"){ echo "selected"; } ?>>User</option>
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