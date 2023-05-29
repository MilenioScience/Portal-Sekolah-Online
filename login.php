<!DOCTYPE html>
<html lang="en">


<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Portal Sekolah Online </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/portfolio/image_7.jpg);">
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Login</h2>
					<p>Belum punya akun? <a href="registersiswa.php">Daftar Disini</a></p>
				</div>	
				<form class="contact-bx" method = "GET" name = "formlogin" id="formlogin">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Masukkan Nama/Email Anda</label>
									<input type="text" id="isian" name="isian" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Masukkan Password Anda</label>
									<input type="password" id="password" name="password" class="form-control" >
								</div>
							</div>
						</div>

						<div class="col-lg-12 m-b30">
							<button type="submit"class="btn button-md">Login</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src="admin/sbadmin/vendor/bootbox/bootbox.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
	$("#formlogin").submit(function(e){
	 e.preventDefault();
	 $.ajax({
		 type: "GET",
		 url : "cekloginsekolah.php",
		 data : $("#formlogin").serialize()
	 })
	 .done(function(hasilProses) {
		 if (hasilProses != '') 
		 {
			 if (hasilProses != 'siswa')
			 {
			  if (hasilProses != 'guru')
		      {
			  bootbox.alert({
				  title : 'Login Berhasil',
				  message : hasilProses,
				  callback : function(result){
					  window.location.href = "dashboard-admin.php";
				  }
			   });
		      }
			  else
			  {
			  bootbox.alert({
				  title : 'Login Berhasil',
				  message : hasilProses,
				  callback : function(result){
					  window.location.href = "dashboard-guru.php";
				  }
			    });
			  }
			 }
			 else if (hasilProses = 'siswa')
		     {
			 bootbox.alert({
				 title : 'Login Berhasil',
				 message : hasilProses,
				 callback : function(result){
					 window.location.href = "dashboard-siswa.php";
				 }
			  });
		     }
		 }
		 else 
		 {
			bootbox.alert({
				title : 'Login Salah',
				message : 'Isikan username dan password dengan benar!'
			});				
		 }
	 })
	 .fail(function(jqXHR, textStatus) {
		 alert( "Request gagal: " + textStatus);
	 });
	});
  });
  </script>
</body>

</html>
