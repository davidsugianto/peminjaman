<p>
	<a href="<?php echo base_url('index.php/admin/informasi/tambah_tugasakhir') ?>" class="btn btn-success"> 
		<i class="fa fa-plus"></i> Tambah Tugas Akhir </a>
</p>

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
	        <th>JUDUL TUGAS AKHIR</th>
	        <th>PENERBIT</th>
	        <th>PROGRAM STUDI</th>
	        <th>JURUSAN</th>
	        <th>TAHUN</th>
	        <th>ACTION</th>
	    </tr>
	</thead>
	<tbody>
	<?php $i = 1; foreach ($ta as $ta) { ?>
		<tr>
	        <td><?php echo $i ?></td>
	        <td><?php echo $ta->JUDUL_TUGAS_AKHIR ?></td>
	        <td><?php echo $ta->PENERBIT ?></td>
	        <td><?php echo $ta->PRODI ?></td>
	        <td><?php echo $ta->JURUSAN ?></td>
	        <td><?php echo $ta->TAHUN ?></td>
	        <td>
	        <a href="<?php echo base_url('index.php/admin/informasi/edit_tugasakhir/'.$ta->PENERBIT) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

	        <?php include('delete_tugasakhir.php'); ?>
	        </td>
	    </tr>
	<?php $i++; } ?>
	</tbody>
</table>