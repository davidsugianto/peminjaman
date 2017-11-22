<p>
	<a href="<?php echo base_url('index.php/admin/user/tambah') ?>" class="btn btn-success"> 
		<i class="fa fa-plus"></i> Tambah </a>
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
            <th>NIM</th>
            <th>NAMA</th>
            <th>PROGRAM STUDI</th>
            <th>JURUSAN</th>
            <th>AKSES LEVEL</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
    <?php $i = 1; foreach ($user as $user) { ?>
    	<tr>
            <td><?php echo $i ?></td>
            <td><?php echo $user->NIM ?></td>
            <td><?php echo $user->NAMA_MAHASISWA ?></td>
            <td><?php echo $user->PRODI ?></td>
            <td><?php echo $user->JURUSAN ?></td>
            <td><?php echo $user->AKSES_LEVEL ?></td>
            <td>
            <a href="<?php echo base_url('index.php/admin/user/edit/'.$user->NIM) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>

            <?php include('delete.php'); ?>
            </td>
        </tr>
    <?php $i++; } ?>
    </tbody>
</table>