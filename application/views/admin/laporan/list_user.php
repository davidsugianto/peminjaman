<p class="alert alert-success">
    <i class="fa fa-warning"></i> Cari nama mahasiswa di kolom <strong>Search</strong>, kemudian Klik tombol <strong><i class="fa fa-plus"></i> Peminjaman Alat</strong>
</p>

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
            <a href="<?php echo base_url('index.php/admin/laporan/add/'.$user->NIM) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Pinjam Alat</a>
            </td>
        </tr>
    <?php $i++; } ?>
    </tbody>
</table>