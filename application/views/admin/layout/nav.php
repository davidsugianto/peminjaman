<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="main-menu">
    <!-- Dashboard -->
		
        <li>
            <a  href="<?php echo base_url('index.php/admin/dasbor') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
    <!-- Menu User -->	
		                   
        <li>
            <a href="#"><i class="fa fa-user"></i> User / Admin<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url('index.php/admin/user') ?>">Data User</a>
                    <a href="<?php echo base_url('index.php/admin/user/tambah') ?>">Tambah User</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-table"></i> Informasi<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url('index.php/admin/informasi') ?>">Data Alat</a>
                    <a href="<?php echo base_url('index.php/admin/informasi/tambah_alat') ?>">Tambah Alat</a>
                    <a href="<?php echo base_url('index.php/admin/informasi/tugasakhir') ?>">Data Tugas Akhir</a>
                    <a href="<?php echo base_url('index.php/admin/informasi/tambah_tugasakhir') ?>">Tambah Tugas Akhir</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-area-chart"></i> Peminjaman<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="<?php echo base_url('index.php/admin/laporan') ?>">Data Peminjaman Alat</a>
                    <a href="<?php echo base_url('index.php/admin/laporan/tambah') ?>">Peminjaman alat</a>
                </li>
            </ul>
        </li>
        <li>
            <a  href="<?php echo base_url('index.php/admin/konfigurasi') ?>"><i class="fa fa-wrench"></i> Konfigurasi Website</a>
        </li> 
        <!---<li>
            <a href="<?php echo base_url('index.php/admin/laporan') ?>"><i class="fa fa-area-chart"></i> Laporan</a>
        </li> -->	
</ul>
</div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
         <h2><?php echo $title; ?></h2> 
        </div>
    </div>
     <!-- /. ROW  -->
     <hr />
   
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 <?php echo $title; ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
