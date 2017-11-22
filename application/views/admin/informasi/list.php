<p>
	<a href="<?php echo base_url('index.php/admin/informasi/tambah_alat') ?>" class="btn btn-success"> 
		<i class="fa fa-plus"></i> Tambah Alat </a>
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
	        <th>NAMA ALAT</th>
	        <th>JENIS ALAT</th>
	        <th>JUMLAH ALAT</th>
	        <th>KETERANGAN ALAT</th>
	        <th>ACTION</th>
	    </tr>
	</thead>
	<tbody>
	<?php $i = 1; foreach ($alat as $alat) { ?>
		<tr>
	        <td><?php echo $i ?></td>
	        <td><?php echo $alat->NAMA_ALAT ?></td>
	        <td><?php echo $alat->JENIS_ALAT ?></td>
	        <td><?php echo $alat->JUMLAH_ALAT ?></td>
	        <td><?php echo $alat->KETERANGAN_ALAT ?></td>
	        <td>
	        <a href="<?php echo base_url('index.php/admin/informasi/edit_alat/'.$alat->NAMA_ALAT) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

	        <?php include('delete_alat.php'); ?>
	        </td>
	    </tr>
	<?php $i++; } ?>
	</tbody>
</table>