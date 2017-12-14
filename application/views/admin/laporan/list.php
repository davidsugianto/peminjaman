<?php if ($this->uri->segment(4) == "") { ?>
<p>
	<a href="<?php echo base_url('index.php/admin/laporan/tambah') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah </a>
</p>
<?php } ?>
<?php
	if ($this->session->flashdata('sukses')) 
	{
		echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
		echo $this->session->flashdata('sukses');
		echo '</div>';
	}
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
	    <tr>
	        <th>No</th>
	        <th>NAMA PEMINJAM</th>
	        <th>NAMA ALAT</th>
	        <th>TGL PINJAM</th>
	        <th>TGL KEMBALI</th>
	        <th>STATUS PEMINJAMAN</th>
	        <th width="25%">ACTION</th>
	    </tr>
	</thead>
	<tbody>
	<?php $i = 1; foreach ($peminjaman as $peminjaman) { ?>
		<tr>
	        <td><?php echo $i ?></td>
	        <td>
	        	<a href="<?php echo base_url('index.php/admin/laporan/add/'.$peminjaman->NIM) ?>">
	        	<?php echo $peminjaman->NAMA_MAHASISWA ?> <sup><i class="fa fa-link"></i></sup>
	        	</a>	
	        </td>
	        <td><?php echo $peminjaman->NAMA_ALAT ?></td>
	        <td><?php echo date('d m Y', strtotime($peminjaman->TANGGAL_PEMINJAMAN)) ?></td>
	        <td><?php echo date('d m Y', strtotime($peminjaman->TANGGAL_PENGEMBALIAN)) ?></td>
	        <td><?php echo $peminjaman->STATUS_PEMINJAMAN ?></td>
	        <td> 
	        <?php include('kembali.php'); ?>

	        <a href="<?php echo base_url('index.php/admin/laporan/edit/'.$peminjaman->NIM) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

	        <?php include('delete.php'); ?>
	        </td>
	    </tr>
	<?php $i++; } ?>
	</tbody>
</table>