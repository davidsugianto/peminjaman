<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('index.php/public/dasbor') ?>">SI Peminjaman</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php echo date('d M Y') ?> &nbsp; 

<a href="<?php echo base_url('index.php/public/dasbor/profile') ?>" class="btn btn-success square-btn-adjust"><i class="fa fa-user"></i><?php echo $this->session->userdata('NAMA_MAHASISWA');?></a> 

<a href="<?php echo base_url() ?>" class="btn btn-primary square-btn-adjust"><i class="fa fa-home"></i> Homepage </a> 

<a href="<?php echo base_url('index.php/login/logout') ?>" class="btn btn-danger square-btn-adjust" ><i class="fa fa-sign-out"></i> Logout </a> 
  </div>
</nav>   
           <!-- /. NAV TOP  -->
