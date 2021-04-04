<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <!-- Meta Tags -->  
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="Corponix - Corporate & Business Responsive Template">
  <meta name="keywords" content="corporate, agency, audit, broker, business, company, consulting, corporate, creative, portfolio, financial, responsive, startup">
  <meta name="author" content="Theme Garbage">
  <!-- Title -->
  <title>Bidang Koperasi</title>    
  <!-- Favicon Icon -->
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>frontend/img/dinas.png"> 
  <!-- Apple Touch Icons -->
  <link rel="apple-touch-icon" href="<?php echo base_url() ?>frontend/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>frontend/img/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>frontend/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>frontend/img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>frontend/img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>frontend/img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>frontend/img/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>frontend/img/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>frontend/img/apple-touch-icon-180x180.png">
  
  <!-- Stylesheets Start -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/main2.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/meanmenu.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>frontend/css/responsive.css"> 
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
  <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>
<body>
  <div  id="notifications"><?php echo $this->session->flashdata('pesan6'); ?></div>
  <div  id="notifications"><?php echo $this->session->flashdata('pesan7'); ?></div>
  <div  id="notifications"><?php echo $this->session->flashdata('baru2'); ?></div>
  <!-- Preloader Start -->
  <div id="preloader">
    <div id="preloader-status"></div>
  </div>
  <!-- Preloader End -->
  <!-- Header Start -->
  <header>
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-7">
            <div class="header-left">
              <ul>
                <li><i class="fa fa-envelope-o"></i>diskumkm@jabarprov.go.id</li>
                        <li><i class="fa fa-phone"></i>(022) 7302775 - (022) 7302771</li>
              </ul> 
            </div>
          </div>  
        </div>
      </div>
    </div>
    <!-- Header Start -->
    <div class="hd-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12 col-xs-8">
            <div class="logo">
              <a href="<?php echo base_url() ?>C_frontEnd/lihatFrontEnd"><img src="<?php echo base_url() ?>frontend/img/dinas.png" width="60px" height="20px" alt=""/></a><br>
              <span>Dinas Koperasi & Usaha Kecil Provinsi Jawa Barat</span>
            </div>
          </div>  
            <div class="mobile-nav-menu"></div> 
          <div class="col-md-8 col-sm-9"> 
            <div class="menu">
              <nav id="main-menu" class="main-menu">
                <ul>
                  <li ><a href="<?php echo base_url() ?>C_frontEnd/lihatFrontEnd">Beranda</a></li>
                  <li><a href="#">Informasi</a>
                    <ul>
                      <li><a href="<?php echo base_url() ?>webbackend/C_datakoperasi/lihatDataKoperasi2">Data Koperasi</a></li>
                      <li><a href="<?php echo base_url() ?>C_frontEnd/lihatDaftarKoperasi">Data Pendaftar Koperasi</a></li>
                      <li><a href="<?php echo base_url() ?>webbackend/C_dataKoperasi/lihatGrafik" target="_blank"">Grafik Koperasi</a></li>
                      <li><a href="<?php echo base_url() ?>C_frontEnd/lihatBerita">Berita Koperasi</a></li>
                      <li><a href="<?php echo base_url() ?>C_frontEnd/caraMendirikan">Cara Mendirikan Koperasi</a></li>
                    </ul>
                  </li>  
                  <li><a href="<?php echo base_url() ?>C_frontEnd/daftarKoperasi">Daftar Koperasi</a></li>
                  <li><a href="<?php echo base_url() ?>C_frontEnd/lihatProfil">Profil</a></li>
                  <li><a href="<?php echo base_url() ?>C_frontEnd/lihatGambar">Galeri</a></li>                        
                  <li><a href="<?php echo base_url() ?>C_frontEnd/kirimPesan">Kontak</a></li>
                </ul>
              </nav>
            </div>          
          </div>  
        </div>
      </div>
    </div>
    <!-- Header End -->
  </header>
  <!-- Header End --> 
  
  <!-- Page Heading Section Start --> 
  <div class="pagehding-sec">
    <div class="images-overlay"></div>    
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-heading">
            <h1>Daftar koperasi</h1>
          </div>
        </div>        
      </div>
    </div>
  </div>
  <!-- Page Heading Section End --> 
  
  <!-- Contact Page Section Start -->
  <div class="contact-page-sec pt-100 pb-70">
    <div class="container">
      <div class="row">    
        <div class="col-md-12">         
          <div class="contact-field">
            
            <form method="POST" action="<?php echo base_url()?>C_frontEnd/prosesDaftarKoperasi" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <h2>Data Pendaftar Koperasi</h2>
              </div>
              <div class="col-md-6">
                <div class="single-input-field">
                  <input placeholder="Nama Lengkap" type="text" name="namaLengkap" value="<?php echo set_value('namaLengkap') ?>" required>
                  <?php echo form_error('namaLengkap'); ?>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="single-input-field">
                  <input required placeholder="Nama Kelompok/Koperasi" type="text" name="namaKoperasi" value="<?php echo set_value('namaKoperasi') ?>">
                  <?php echo form_error('namaKoperasi'); ?>
                </div>
              </div>                
              <div class="col-md-6">
                <div class="single-input-field">
                  <input required placeholder="No WA/Telepon Pengurus" type="number" name="noTelepon" value="<?php echo set_value('noTelepon') ?>">
                  <?php echo form_error('noTelepon'); ?>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="single-input-field">
                  <input required placeholder="No WA/Telepon Kantor" type="number" name="noTelepon2" value="<?php echo set_value('noTelepon2') ?>">
                  <?php echo form_error('noTelepon2'); ?>
                </div>
              </div>           
              <div class="col-md-6">
                <div class="single-input-field">
                  <textarea required placeholder="Alamat Pendaftar/Kantor" name="alamat"><?php echo set_value('alamat') ?></textarea>
                  <?php echo form_error('alamat'); ?>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="single-input-field">
                  <textarea required placeholder="Tempat Penyuluhan" name="tempatPenyuluhan"><?php echo set_value('tempatPenyuluhan') ?></textarea>
                  <?php echo form_error('tempatPenyuluhan'); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single-input-field">
                  <input required placeholder="Tanggal Penyuluhan" class="form-control datepicker"   data-date-format="yyyy-mm-dd" type="text" name="tglPenyuluhan" value="<?php echo set_value('tglPenyuluhan') ?>"> 
                  <?php echo form_error('tglPenyuluhan'); ?>
                </div>
              </div> 
              <div class="col-md-6">
                <div class="single-input-field">
                  <input required placeholder="Jam Penyuluhan" type="text" name="jamPenyuluhan" value="<?php echo set_value('jamPenyuluhan') ?>">
                  <?php echo form_error('jamPenyuluhan'); ?>
                </div>
              </div>
               
              <div class="col-md-6">
                <div class="single-input-field">
                  <input class="form-control" type="file" name="userfile" required>
                  <span><i>Format file : PDF | Maksimal Upload : 20 Mb</i></span>
                </div>
                <span><b><?php echo anchor('assets/surat_pembentukan_koperasi.docx','DOWNLOAD FORMAT SURAT PERMOHONAN PENYULUHAN KOPERASI');?></b></span><br>
                
              </div>                                      
              <div class="col-md-10">
                <div class="single-input-fieldsbtn">
                  <input type="submit" name="submit" value="KIRIM"/>
                  
                </div>              
              </div>              
            </div>      
            </form>
          </div>        
        </div>   
      </div>
    </div>
  </div>
  <!-- Contact Page Section End --> 
      
  <!-- Footer Section Start -->
  <footer class="footer"> 
    <!-- Footer Top Section Start -->
    <div class="footer-sec">
      <div class="container">
        <div class="row">       
          <div class="col-md-3 col-sm-6">
            <div class="footer-wedget-one">
              <a href="#"><img src="<?php echo base_url() ?>frontend/img/dinas.png" width="80px" height="20px" alt=""/></a>
              <p>Menyelenggarakan urusan pemerintahan bidang Koperasi, Usaha Kecil dan Menengah aspek kelembagaan Koperasi meliputi badan hukum dan organisasi Koperasi, tatalaksana Koperasi, serta penyuluhan perkoperasian dan keanggotaan yang menjadi kewenangan provinsi</p>      
            </div>
          </div>            
          <div class="col-md-4 col-sm-6">
            <div class="footer-widget-menu">
              <h2>Link Terkait</h2>
              <ul>
                <li><a href="http://diskumkm.jabarprov.go.id/ " target="_blank">diskumkm.jabarprov</a></li>
                <li><a href="http://abcgmjabar.id/" target="_blank">ABCGM Jawa Barat</a></li>
                <li><a href="http://geraiumkm.com/" target="_blank">Gerai UMKM</a></li>
                <li><a href="http://www.jabarprov.go.id/" target="_blank">Pemprov Jawa Barat</a></li>
              </ul>
            </div>
          </div>  
        </div>
      </div>
    </div>
    <!-- Footer Top Section End -->
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <div class="copy-right">
              <p>Copyright &copy; Farhan Sutrisno 2019 All Rights Reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Bottom Section End -->
  </footer>
  <!-- Footer Section End -->
  <!-- Scripts Js Start -->
    <script src="<?php echo base_url() ?>frontend/js/jquery-2.2.4.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/owl.animate.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/jquery.scrollUp.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/jquery.counterup.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/modernizr.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/jquery.meanmenu.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>frontend/js/custom.js"></script>
  <!-- Scripts Js End --> 
  <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript">
     $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
        });
    </script>
</body>
</html>