<?php
	//notifikasi
	if ($this->session->flashdata('sukses')) {
		echo '<div class= "alert alert-success">';
		echo $this->session->flashdata('sukses');
		echo '</div>';
	}
	//errors
	echo validation_errors('<div class="alert alert-warning">','</div>');
	//open form
	echo form_open(base_url('index.php/admin/konfigurasi'));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>NAMA WEBSITE</label>
		<input type="text" name="NAMA_WEB" class="form-control" placeholder="Nama laboratorium" value="<?php echo $konfigurasi->NAMA_WEB ?>" required>
	</div>	

<div class="alert alert-success">
<h2>Setting Peminjaman Alat</h2>
<hr>

	<div class="form-group">
		<label>Maksimal hari peminjaman</label>
		<input type="number" name="MAX_HARI_PINJAM" class="form-control" placeholder="maksimal hari untuk pinjam alat" value="<?php echo $konfigurasi->MAX_HARI_PINJAM ?>" required>
	</div>

	<div class="form-group">
		<label>Jumlah maksimal meminjam alat</label>
		<input type="number" name="MAX_JUMLAH_PINJAM" class="form-control" placeholder="maksimal alat" value="<?php echo $konfigurasi->MAX_JUMLAH_PINJAM ?>" required>
	</div>

	<div class="form-group">
		<label>Denda keterlambatan pengembalian </label>
		<input type="number" name="DENDA_PERHARI" class="form-control" placeholder="Denda keterlambatan pengembalian" value="<?php echo $konfigurasi->DENDA_PERHARI ?>" required>
	</div>
</div>

	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-success btn-lg">
			<i class="fa fa-save"></i> Simpan Konfigurasi
		</button>

		<button type="reset" name="reset" class="btn btn-times btn-lg">
			<i class="fa fa-times"></i> Reset
		</button>
	</div>

</div>



<?php
	echo form_close();
	
?>