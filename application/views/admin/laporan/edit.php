 <!--start tambah -->
                <script>
                    // Set default datepicker options     
                $.datepicker.setDefaults({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'yy-mm-dd',
                    defaultDate: +2,
                    minDate: 0,
                    maxDate: '+2y',
                    numberOfMonths: 2,
                    showAnim: 'fadeIn',
                    showButtonPanel: true
                });

                function splitDepartureDate(dateText) {
                    var depSplit = dateText.split("-", 3);
                    $('#alt-TANGGAL_PENGEMBALIAN-d').val(depSplit[0]);
                    $('#alt-TANGGAL_PENGEMBALIAN-m').val(depSplit[1]);
                    $('#alt-TANGGAL_PENGEMBALIAN-y').val(depSplit[2]);
                }


                // Set arrival datepicker options       
                $(function() {
                    $('#TANGGAL_PEMINJAMAN').datepicker({
                        onSelect: function(dateText, instance) {

                            // Split arrival date in 3 input fields                        
                            var arrSplit = dateText.split("-");
                            $('#alt-TANGGAL_PEMINJAMAN-d').val(arrSplit[0]);
                            $('#alt-TANGGAL_PEMINJAMAN-m').val(arrSplit[1]);
                            $('#alt-TANGGAL_PEMINJAMAN-y').val(arrSplit[2]);

                            // Populate departure date field 
                            var nextDayDate = $('#TANGGAL_PEMINJAMAN').datepicker('getDate', '+3d');
                            nextDayDate.setDate(nextDayDate.getDate() + <?php echo $konfigurasi->MAX_HARI_PINJAM ?>);
                            $('#TANGGAL_PENGEMBALIAN').datepicker('setDate', nextDayDate);
                            splitDepartureDate($("#TANGGAL_PENGEMBALIAN").val());
                        },
                        onClose: function() {
                            $("#TANGGAL_PENGEMBALIAN").datepicker("show");
                        }
                    });
                });


                // Set departure datepicker options        
                $(function() {
                    $('#TANGGAL_PENGEMBALIAN').datepicker({

                        // Prevent selecting departure date before arrival:
                        beforeShow: customRange,
                        onSelect: splitDepartureDate
                    });
                });


                // Prevent selecting departure date before arrival


                function customRange(a) {
                    var b = new Date();
                    var c = new Date(b.getFullYear(), b.getMonth(), b.getDate());
                    if (a.id == 'TANGGAL_PENGEMBALIAN') {
                        if ($('#TANGGAL_PEMINJAMAN').datepicker('getDate') != null) {
                            c = $('#TANGGAL_PEMINJAMAN').datepicker('getDate');
                        }
                    }
                    return {
                        minDate: c
                    }
                }



                // CREATE REQUEST URL   
                $('#fbooking').submit(function() {
                    var baseURL = $('#fbooking').attr("action");
                    var checkAvl = $(this).serialize();
                    alert(baseURL + checkAvl)
                    return false;
                });
                </script>

                <?php 
                //error
                echo validation_errors('<div class="alert alert-warning">','</div');
                //form open
                echo form_open(base_url('index.php/admin/laporan/edit/'.$peminjaman->NIM));
                ?>

                <div class="row">
                    
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Alat yang akan di pinjam</label>
                        <br>
                        <select name="ID_ALAT" class="form-control js-example-basic-single" style="width: 100%; padding: 10px 20px !important">
                            <option value="">Pilih Alat</option>
                            <?php foreach ($alat as $alat) { ?>
                            <option value="<?php echo $alat->ID_ALAT ?>" <?php if($alat->ID_ALAT==$peminjaman->ID_ALAT) { echo "selected"; } ?>>
                                <?php echo $alat->NAMA_ALAT ?> - (<?php echo $alat->JENIS_ALAT ?>)
                            </option>
                            <?php } ?>
                        </select>               
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nama Peminjam</label>
                        <input type="text" name="NAMA_MAHASISWA" class="form-control" value="<?php echo $user->NAMA_MAHASISWA ?>" readonly disabled>
                    </div>
                    <div class="form-group">
                        <label>Status Peminjaman</label>
                        <select name="STATUS_PEMINJAMAN" class="form-control">
                            <option value="Belum">Belum Kembali</option>
                            <option value="Sudah">Sudah Dikembalikan</option>
                            <option value="Hilang">Hilang</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Peminjaman</label>
                                <input type="text" name="TANGGAL_PEMINJAMAN" class="form-control" value="<?php echo $peminjaman->TANGGAL_PEMINJAMAN ?>" placeholder="YYYY-MM-DD" id="TANGGAL_PEMINJAMAN" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Pengembalian</label>
                                <input type="text" name="TANGGAL_PENGEMBALIAN" class="form-control" value="<?php echo $peminjaman->TANGGAL_PENGEMBALIAN ?>" placeholder="YYYY-MM-DD" id="TANGGAL_PENGEMBALIAN" required>
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="KETERANGAN_DENDA" class="form-control" value="<?php echo $peminjaman->KETERANGAN_DENDA ?>" placeholder="Keterangan Alat">
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-save"></i> Simpan Data Peminjaman
                        </button>
                        <button type="reset" name="reset" class="btn btn-default btn-lg">
                            <i class="fa fa-times"></i> Reset
                        </button>
                        <a href="<?php echo base_url('index.php/admin/laporan') ?>" class="btn btn-danger btn-lg">
                            <i class="fa fa-backward"></i> Kembali
                        </a>
                    </div>
                </div>


                <!--</div> -->
                <?php
                //form close
                echo form_close();
                ?>

                <!-- end tambah -->
<script>
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
