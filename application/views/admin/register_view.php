<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $title ?></title>
<!-- BOOTSTRAP STYLES-->
  <link href="<?php echo base_url() ?>assets/admin/assets/css/bootstrap.css" rel="stylesheet" />
   <!-- FONTAWESOME STYLES-->
  <link href="<?php echo base_url() ?>assets/admin/assets/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLES-->
  <link href="<?php echo base_url() ?>assets/admin/assets/css/custom.css" rel="stylesheet" />
   <!-- GOOGLE FONTS-->
 <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<div class="container">
<div class="row text-center ">
  <div class="col-md-12">
	  <br /><br />
	  <h2>Sistem Informasi Peminjaman Alat Laboratorium Sistem Komputer dan Kontrol</h2>
		   <br />
  </div>
</div>
<div class="row ">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
	<strong>   Masukkan Data diri</strong>
	</div>
	<div class="panel-body">
	<form role="form" method="post" action="<?php echo base_url('index.php/register/register');?>">
		
	<div class="form-groups">
	<label>Nim</label>
	<input type="text" name="NIM" class="form-control" placeholder="nim" autofocus required>
	</div>
	<br>

	<div class="form-group">
	<label>Nama</label>
	<input type="text" name="NAMA_MAHASISWA" class="form-control" placeholder="nama" required>
	</div>
	<br>

	<div class="form-group">
	<label>Program Studi</label>
	<input type="text" name="PRODI" class="form-control" placeholder="program studi" required>
	</div>
	<br>
		
	<div class="form-group">
	<label>Jurusan</label>
	<input type="text" name="JURUSAN" class="form-control" placeholder="jurusan" required>
	</div>
	<br>
	
	<div class="form-group">
	<label>Password</label>
	<input type="password" name="PASSWORD" class="form-control" placeholder="password" required>
	</div>
	<br>

	<div class="form-group">
	<label>Level Hak akses</label>
	<select name="AKSES_LEVEL" class="form-control">
		<option value="Admin">Admin</option>
		<option value="User">User</option>
		</select>
	</div>
	<br>
		
	<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan Data">
	<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset ">
	</diqv>
	</div>
</div>
</div>


   <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="<?php echo base_url() ?>assets/admin/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
  <script src="<?php echo base_url() ?>assets/admin/assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="<?php echo base_url() ?>assets/admin/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
  <script src="<?php echo base_url() ?>assets/admin/assets/js/custom.js"></script>
 
</body>
</html>
	