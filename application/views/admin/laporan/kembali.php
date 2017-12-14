<?php if($peminjaman->STATUS_PEMINJAMAN == "Sudah") { ?>
    <button class="btn btn-success btn-xs disabled" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i> Kembali </button>
<?php } else { ?>
<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-check"></i> Kembali </button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Pengembalian Alat</h4>
            </div>
            <div class="modal-body">
               <p class="alert alert-success"><i class="fa fa-check"></i> Yakin Alat Sudah dikembalikan ?</p>
            </div>
            <div class="modal-footer">

                <a href="<?php echo base_url('index.php/admin/laporan/kembali/'.$peminjaman->ID_PEMINJAMAN) ?>" class="btn btn-success"><i class="fa fa-check"></i> Ya, Alat Sudah dikembalikan</a>
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<?php } ?>
