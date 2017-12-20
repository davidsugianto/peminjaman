<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Homepage</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/public/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/public/lib/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/public/lib/animate-css/animate.min.css');?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/public/css/style.css');?>" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/logo.png" alt="">
        </div>

        <h1>Selamat Datang di LAB Sistem Komputer dan Kontrol</h1>
        <div class="actions">
          <a href="#about" class="btn-get-started">Beranda</a>
          <a href="#services" class="btn-services">Fasilitas</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Beranda</a></li>
          <li><a href="#about">Sejarah</a></li>
          <li><a href="#services">Fasilitas LAB</a></li>
          <li><a href="#testimonials">Struktur Organisasi</a></li>
          <li><a href="#portfolio">Daftar Alat</a></li>
          <li><a href="#team">Daftar Tugas Akhir</a></li>
          <li><a href="<?php echo base_url('index.php/login');?>">Masuk</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  Sejarah Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">LABORATORIUM SISTEM KOMPUTER DAN KONTROL</h3>
              <div class="section-title-divider"></div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="col-lg-12">
        <div class="col-md-6">
            <br>
            <br>
            <br>
            <br>
            <br>
          <img src="<?php echo base_url('assets\public\img\about-img.png');?>" width="100%" height="100%" alt="">
        </div>
          <div class="col-md-6">
          <h2 class="about-title">Sejarah Laboratorium Sistem Komputer dan Kontrol</h2>
          <p class="about-text">
            Laboratorium Sistem Komputer dan Kontrol berdiri sejak tahun 2007. Pada awalnya adalah sebagai fasilitas untuk ketersediaan bagi mahasiswa teknik komputer dalam melakukan kegiatan praktikum dan penelitian dibidang kontroldan robotika. Laboratorium Sistem Komputer dan Kontrolyang lebih dikenal oleh mahasiswa Politeknik Negeri Jember dengan nama Lab SKK adalah salah satu laboratorium dibawah kelola di Jurusan Teknologi Informasi Politeknik Negeri Jember.
          </p>
          <p class="about-text">
            Saat ini laboratorium ini melayani praktikum mahasiswa untuk program studi Teknik Komputer, Manajemen Informatika, dan Teknik Informatika. Laboratorium Sistem komputer dan Kontrol juga sebagai fasilitas untuk melakukan kegiatan penelitian baik bagi dosen maupun mahasiswa.Selain itu beberapa pelatihan singkat terkait bidang keilmuan sistem komputer maupun sistem kontrol atas permintaan/kebutuhan masyarakat/industri dapat dilakukan di laboratorium ini.
          </p>
          <p class="about-text">
            
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Fasilitas Laboratorium Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Fasilitas Laboratorium</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a href="">Programmable Logic Controller (PLC)</a></h4>
          <p class="service-description">sebuah rangkaian elektronik yang dapat mengerjakan berbagai fungsi-fungsi kontrol pada level-level yang kompleks</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">Mikrokontroler</a></h4>
          <p class="service-description">Lebih memahami CPU, ALU dan membedakan antara mikrokontroler dan mikrokomputer</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="">Elektronika Dasar</a></h4>
          <p class="service-description">Dapat mempelajari dasar komponen, rangkaian, tegangan, karakteristik yang harus terlebih dahulu dipahami dalam membangun sebuah peralatan elektronika </p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-photo"></i></div>
          <h4 class="service-title"><a href="">Rangkaian Digital</a></h4>
          <p class="service-description">Rangkaian yang hanya menangani suatu sinyal yang tinggi dan rendah, dengan kata lain dapat diartikan suatu elektronika digital merupakan dunia dari suatu logika 1 </p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-road"></i></div>
          <h4 class="service-title"><a href="">Pemograman</a></h4>
          <p class="service-description">Menulis, menguji dan memperbaiki (debug), dan memelihara kode yang membangun sebuah program komputer</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="service-title"><a href="">Perancangan Elektronika</a></h4>
          <p class="service-description">Bisa mempelajari skema rangkaian elektronika, layout PCB, komponen elektronika dan perlatan elektronika</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Daftar Section
  ============================-->
  <section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-8">
          <h3 class="subscribe-title">Daftar Segera!</h3>
          <p class="subscribe-text">Bergabung untuk Dapat Meminjam Alat dan Referensi Tugas Akhir di LAB SKK</p>
        </div>
        <div class="col-md-4 subscribe-btn-container">
          <a class="subscribe-btn" href="<?php echo base_url('index.php/register');?> ">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Struktur Organisasi Lab
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Struktur Organisasi LAB SKK</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Susunan dan hubungan antara tiap bagian serta posisi yang ada pada suatu organisasi </p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="<?php echo base_url('assets\public\img\pakbeni.png');?>" width="100%" height="100%" alt=""></div>
            <h4>Beni Widiawan, S.ST. MT</h4>
            <span>Kepala Laboratorium</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Selalu lihat masalah dari 3 sudut pandang, dari caraku menghadapi itu sebagai orang pertama, dari lawanku sebagai orang kedua dan dari cara mereka melihat "kami" sebagai orang ketiga.  <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="<?php echo base_url('assets\public\img\aryana.png');?>" width="100%" height="100%" alt=""></div>
            <h4>Ariyana, A.Md</h4>
            <span>Teknisi</span>
          </div>
        </div>
      </div>

        <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="<?php echo base_url('assets\public\img\teguh.png');?>" width="100%" height="100%" alt=""></div>
            <h4>Teguh Erlian, A.Md</h4>
            <span>Teknisi</span>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>
        
        <div class="row">
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae. <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
        <div class="col-md-3">
          <div class="profile">
            <div class="pic"><img src="<?php echo base_url('assets\public\img\cahyo.png');?>" width="100%" height="100%" alt=""></div>
            <h4>Tri Cahyo Wiharto, A.Md</h4>
            <span>Teknisi</span>
          </div>
        </div>
      </div>
    </div>
  </section>

      <!--==========================
  Daftar ALat
  ============================-->
  <?php
	if ($this->session->flashdata('sukses')) 
	{
		echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
		echo $this->session->flashdata('sukses');
		echo '</div>';
	}
  ?>
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Daftar Alat</h3>
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	<thead>
	    <tr>
	        <th>No</th>
	        <th>NAMA ALAT</th>
	        <th>JENIS ALAT</th>
	        <th>JUMLAH ALAT</th>
	        <th>KETERANGAN ALAT</th>
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
					</tr>
		<?php $i++; } ?>
	</tbody>
</table> 
      <div>
  </section>
            <!--==========================
  Daftar ALat
  ============================-->
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Daftar Tugas Akhir</h3>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr>
						<th>No</th>
						<th>JUDUL TUGAS AKHIR</th>
						<th>PENERBIT</th>
						<th>PROGRAM STUDY</th>
						<th>JURUSAN</th>
						<th>TAHUN</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; foreach ($TA as $TA) { ?>
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $TA->JUDUL_TUGAS_AKHIR ?></td>
						<td><?php echo $TA->PENERBIT ?></td>
						<td><?php echo $TA->PRODI ?></td>
						<td><?php echo $TA->JURUSAN ?></td>
                        <td><?php echo $TA->TAHUN ?></td>
                        
					</tr>
		<?php $i++; } ?>
				</tbody>
			</table>
          
      <div>
  </section>
  
  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy;  <strong>LABORATORIUM SISTEM dan KONTROL</strong>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="<?php echo base_url('assets/public/lib/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('assets/public/lib/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/public/lib/superfish/hoverIntent.js');?>"></script>
  <script src="<?php echo base_url('assets/public/lib/superfish/superfish.min.js');?>"></script>
  <script src="<?php echo base_url('assets/public/lib/morphext/morphext.min.js');?>"></script>
  <script src="<?php echo base_url('assets/public/lib/wow/wow.min.js');?>"></script>
  <script src="<?php echo base_url('assets/public/lib/stickyjs/sticky.js');?>"></script>
  <script src="<?php echo base_url('assets/public/lib/easing/easing.js');?>"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="<?php echo base_url('assets/public/js/custom.js');?>"></script>

  <script src="<?php echo base_url('assets/public/contactform/contactform.js');?>"></script>


</body>

</html>
