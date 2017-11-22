<?php
	//nofikasi kala ada input error
	echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning">','</div>');
	//open form
	echo form_open(base_url('index.php/admin/register_view'));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" placeholder="nama" value="<?php echo set_value('nama')?>" required>
	</div>
</div>

<?php
	//close form
	echo form_close();
?>