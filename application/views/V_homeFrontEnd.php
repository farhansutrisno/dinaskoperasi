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
  
</head>
<body>
  <div  id="notifications"><?php echo $this->session->flashdata('pesan1'); ?></div>
  <div  id="notifications"><?php echo $this->session->flashdata('baru1'); ?></div>
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
                  <li class="active"><a href="<?php echo base_url() ?>C_frontEnd/lihatFrontEnd">Beranda</a></li>
                  <li><a href="#">Informasi</a>
                    <ul>
                      <li><a href="<?php echo base_url() ?>webbackend/C_datakoperasi/lihatDataKoperasi2">Data Koperasi</a></li>
                      <li><a href="<?php echo base_url() ?>C_frontEnd/lihatDaftarKoperasi">Data Pendaftar Koperasi</a></li>
                      <li><a href="<?php echo base_url() ?>webbackend/C_dataKoperasi/lihatGrafik" target="_blank">Grafik Koperasi</a></li>
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
  
  <!-- Slider Section Start -->
  <div class="slider">
    <div class="all-slide owl-item"> 

      <?php foreach ($berita as $key) { ?>
      <div class="single-slide" style="background-image:url(<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>);">
        <div class="slider-overlay"></div>
        <div class="slider-wrapper">
          <div class="slider-text">
            <div class="slider-caption">
              <h1><?php echo $key->judul; ?></h1>  
              <font color="#FFF5EE" ><p><?php echo word_limiter($key->narasi,20); ?></p></font>  
            </div>  
            <ul>
              <li><a href="<?php echo base_url().'C_frontEnd/detailBerita/'.$key->kdBerita?>">Baca Berita</a></li>          
              <li><a href="<?php echo base_url() ?>C_frontEnd/kirimPesan">Kontak</a></li>
            </ul>
          </div>
        </div>        
      </div>      
       <?php } ?>
      <!-- <div class="single-slide" style="background-image:url(<?php echo base_url() ?>frontend/img/slide2.jpg);">
        <div class="slider-overlay"></div>
        <div class="slider-wrapper">
          <div class="slider-text">
            <div class="slider-caption">
              <h1>grow your business Idea</h1>  
              <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec. Nam vel eu amet</p>  
            </div>  
            <ul>
              <li><a href="about.html">Baca Berita</a></li>          
              <li><a href="contact.html">Kontak </a></li>
            </ul>
          </div>
        </div>        
      </div> -->
                                            
    </div>
  </div>
  <!-- Slider Section End --> 
  <!-- Why Choose Us Start -->  
  <div class="why-choose-us-sec pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-title">
            <h1>Program Kerja Bidang Kelembagaan Koperasi</h1>
            <div class="border-shape"></div>
            
          </div>
        </div>
      </div> 

      <div class="row"> 
        <?php foreach ($program as $key) { ?>
        <div class="col-md-4 col-sm-4">       
          <div class="why-choose-inner">
            <div class="why-choose-thumb">
              <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="400px" height="350px" alt=""/>
            </div>
            <div class="why-choose-text">
              <h4><a href="#"><?php echo $key->program; ?></a></h4>
              <p><?php echo word_limiter($key->isiProgramKerja,7); ?></p>  
              <a href="<?php echo base_url().'C_frontEnd/detailProgram/'.$key->kdProgram?>" class="why-us-button">Detail Program <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>  
        <?php } ?>
      </div>  
      <?php echo $pag; ?>
    </div>  
  </div>  
  <!-- Why Choose Us End -->  
      
  <!-- About Us Section Start --> 
  <!-- <div class="about-us-sec pt-100 pb-100">
    <div class="container">
      <div class="row"> 
        <div class="col-md-7">        
          <div class="about-desc">
           
            <h1>Bidang Kelembagaan Koperasi</h1>
            <p>Menyelenggarakan urusan pemerintahan bidang Koperasi, Usaha Kecil dan Menengah aspek kelembagaan Koperasi meliputi badan hukum dan organisasi Koperasi, tatalaksana Koperasi, serta penyuluhan perkoperasian dan keanggotaan yang menjadi kewenangan provinsi.</p>
            <div class="row">
              <div class="col-md-5">
                <div class="company-ceo-thumb">
                  <img src="<?php echo base_url() ?>frontend/img/ceo.jpg" alt="">
                </div>
              </div>              
              <div class="col-md-7">
                <div class="company-ceo-info">
                  <h2>Dra.Hj.ELIS YATIMAH, MM</h2>
                  <span>Ka.Bidang Kelembagaan Koperasi</span>
                  <p>" kata kata mutiara yang diucapkan"</p>
                  
                </div>
              </div>
            </div>
          </div>        
        </div>
        <div class="col-md-5">
          <div class="vedio-inner">
            <img src="<?php echo base_url() ?>frontend/img/vedio_thumb.jpg" alt="">  
            <div class="vedio-overly">
              <div class="vedio-button">
                <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="mfp-iframe vedio-play"></a>
              </div>
            </div>
          </div>          
        </div>
      </div>  
    </div>  
  </div>   -->
  <!-- About Us Section End --> 
  <div class="gallery-v1-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-title">
            <h1>Agenda Kegiatan Bidang Kelembagaan Koperasi</h1>
            <div class="border-shape"></div>
          </div>
        </div>
      </div>    
    </div>  

    <div class="all-gallery">
      <?php foreach ($agenda as $key) { ?>
      <div class="single-gallery">
        <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->gambar ?>" width="300px" height="250px" alt=""/>
        <div class="single-gallery-overlay">
          <h2><a href="<?php echo base_url().'C_frontEnd/detailAgenda/'.$key->kdAgenda?>"><?php echo $key->agenda; ?></a></h2>
        </div>
      </div>        
      <?php } ?>
    </div>
  </div>
     
  <!-- Team Section Start -->   
  <div class="team-sec pt-100 pb-70"> 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-title">
            <h1>Struktur Bidang Kelembagaan Koperasi</h1>

          </div>
        </div>
      </div>        
      <div class="row"> 

        <?php foreach ($struktur as $key) { ?>
        <div class="col-md-3 col-sm-6">
          <div class="team-member">
            <div class="team-thumb">
              <img src="<?php echo base_url() ?>gambar_proyek/<?php echo $key->foto ?>" width="300px" height="250px" alt=""/>   
              <div class="team-overlay">
                <h2><?php echo $key->jabatan; ?></h2>
              </div>
            </div>  
            <div class="team-desc">
              <h1><?php echo $key->namaPegawai; ?></h1>
              <p><?php echo $key->bagian; ?><br>
            NIP.<?php echo $key->nip; ?></p>
                             
            </div>
          </div>
        </div>  
        <?php } ?>      

      </div>           
    </div>  
  </div>  
  <!-- Team Section End --> 

  <!-- Team Section Start -->   
  <div class="team-sec pt-100 pb-70"> 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-title">
            <h1>Hubungi kami</h1>
            <div class="border-shape"></div>
            
          </div>
        </div>
      </div>    

     <div class="col-md-8"> 
          <div class="contact-field">
            <form action="<?php echo base_url()?>webbackend/C_pesanMasuk/prosesKirimPesan" method="POST" name="kirimPesan">
            <div class="row">
              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input placeholder="Nama Lengkap" type="text" name="namaLengkap" value="<?php echo set_value('namaLengkap') ?>">
                  <?php echo form_error('namaLengkap'); ?>
                </div>
              </div>                      
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input placeholder="E-mail" type="email" name="email" value="<?php echo set_value('email') ?>">
                  <?php echo form_error('email'); ?>
                </div>
              </div>              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input placeholder="No Telepon" type="number" name="noTelepon" value="<?php echo set_value('noTelepon') ?>">
                  <?php echo form_error('noTelepon'); ?>
                </div>
              </div>   
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-input-field">
                  <input placeholder="Judul Pesan" type="text" name="judulPesan" value="<?php echo set_value('judulPesan') ?>">
                  <?php echo form_error('judulPesan'); ?>
                </div>
              </div>                   
              <div class="col-md-12 message-input">
                <div class="single-input-field">
                  <textarea placeholder="Isi Pesan" name="isiPesan"><?php echo set_value('isiPesan') ?></textarea>
                  <?php echo form_error('isiPesan'); ?>
                </div>
              </div>                                        
              <div class="col-md-12">
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
  <!-- Team Section End -->  
          
  <!-- Footer Section Start -->
  <footer class="footer"> 
    <!-- Footer Top Section Start -->
    <div class="footer-sec">
      <div class="container">
        <div class="row">       
          <div class="col-md-3 col-sm-6">
            <div class="footer-wedget-one">
              <a href="#"><img src="<?php echo base_url() ?>frontend/img/dinas.png" width="80px" height="20px" alt=""/></a>
              <p>Menyelenggarakan urusan pemerintahan bidang Koperasi, Usaha Kecil dan Menengah aspek kelembagaan Koperasi meliputi badan hukum dan organisasi Koperasi, tatalaksana Koperasi, serta penyuluhan perkoperasian dan keanggotaan yang menjadi kewenangan provinsi.</p>       
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
</body>

</html>