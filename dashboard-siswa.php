<?php
  session_start();
    if ($_SESSION['statussiswa'] != 'siswa')
    {	
		 echo "<script>alert('Anda belum login, silahkan login lebih dulu!')</script>";
		 echo "<script>window.location.replace('login.php')</script>";
		 die();
    } 
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from educhamp.themetrades.com/demo/admin/teacher-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->
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
	<link rel="icon" href="../error-404.html" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="admin/assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Portal Sekolah Online </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="admin/assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="admin/assets/vendors/calendar/fullcalendar.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="admin/assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="admin/assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link href="admin/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="stylesheet" href="admin/sbadmin/vendor/datepicker/css/bootstrap-datepicker3.css" />
	<link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="admin/assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="admin/assets/css/color/color-1.css">
	<link rel="stylesheet" href="admin/sbadmin/vendor/datatables/dataTables.bootstrap4.min.css" />
	
	<!-- External JavaScripts -->
	<script src="admin/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/sbadmin/vendor/datepicker/js/bootstrap-datepicker.min.js"></script> 
    <script src="admin/sbadmin/vendor/bootbox/bootbox.min.js"></script>
	<script src="admin/assets/js/jquery.min.js"></script>
	<script src="admin/assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="admin/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="admin/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="admin/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="admin/assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="admin/assets/vendors/counter/waypoints-min.js"></script>
	<script src="admin/assets/vendors/counter/counterup.min.js"></script>
	<script src="admin/assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="admin/assets/vendors/masonry/masonry.js"></script>
	<script src="admin/assets/vendors/masonry/filter.js"></script>
	<script src="admin/assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src='admin/assets/vendors/scroll/scrollbar.min.js'></script>
	<script src="admin/assets/js/functions.js"></script>
	<script src="admin/assets/vendors/chart/chart.min.js"></script>
	<script src="admin/assets/js/admin.js"></script>
	<script src="admin/sbadmin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
	
</head>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<header class="ttr-header">
		<div class="ttr-header-wrapper">
			<!--sidebar menu toggler start -->
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<!--sidebar menu toggler end -->
			<!--logo start -->
			<!--logo end -->
			<div class="ttr-header-menu">
				<!-- header left menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="../index.html" class="ttr-material-button ttr-submenu-toggle">HOME</a>
					</li>
				</ul>
				<!-- header left menu end -->
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<!-- header right menu start -->
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><?php echo $_SESSION['namasiswa']; ?></a>
						<a href="#" class="ttr-material-button ttr-submenu-toggle">Kelas <?php echo $_SESSION['kelas']; ?></a>
				    </li>
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><img alt="" src="assets/images/testimonials/pic3.jpg" width="32" height="32"></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="logout-siswa.php">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<!-- header right menu end -->
			</div>
			<!--header search panel start -->
			<!--header search panel end -->
		</div>
	</header>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<div class="ttr-sidebar">
		<div class="ttr-sidebar-wrapper content-scroll">
			<!-- side menu logo start -->
			<!-- side menu logo end -->
			<!-- sidebar menu start -->
			<nav class="ttr-sidebar-navi">
				<ul>
					<li>
		              <a href="?kode=tampiljadwal" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-calendar"></i></span>
		                	<span class="ttr-label">Jadwal Pelajaran</span>
					  </a>
		            </li>
					<li>
						<a href="?kode=tampildiskusi" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-comments"></i></span>
		                	<span class="ttr-label">Ruang Diskusi</span>
		                </a>
		            </li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-book"></i></span>
		                	<span class="ttr-label">Tugas</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
						<ul>
		                	<li>
		                		<a href="?kode=ambilhasiltugas" class="ttr-material-button"><span class="ttr-label">Hasil Tugas</span></a>
		                	</li>
		                	<li>
		                		<a href="?kode=tampiltugas" class="ttr-material-button"><span class="ttr-label">Kerjakan Tugas</span></a>
		                	</li>
		                </ul>
		            </li>
					<li>
						<a href="#" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-bookmark-alt"></i></span>
		                	<span class="ttr-label">Ujian</span>
							<span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
		                </a>
						<ul>
		                	<li>
		                		<a href="?kode=tampilujianharian" class="ttr-material-button"><span class="ttr-label">Ujian Harian</span></a>
		                	</li>
		                	<li>
		                		<a href="?kode=tampiluts" class="ttr-material-button"><span class="ttr-label">UTS</span></a>
		                	</li>
							<li>
		                		<a href="?kode=tampiluas" class="ttr-material-button"><span class="ttr-label">UAS</span></a>
		                	</li>
		                </ul>
		            </li>
					<li>
						<a href="?kode=ambilrapor" class="ttr-material-button">
							<span class="ttr-icon"><i class="fa fa-book"></i></span>
		                	<span class="ttr-label">Rapor</span>
		                </a>
		            </li>
					<li>
						<a href="admin/user-profile.html" class="ttr-material-button">
							<span class="ttr-icon"><i class="ti-user"></i></span>
		                	<span class="ttr-label">Profilku</span>
		                </a>
		            </li>
		            <li class="ttr-seperate"></li>
				</ul>
				<!-- sidebar menu end -->
			</nav>
			<!-- sidebar menu end -->
		</div>
	</div>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
<?php
 if (isset($_GET['kode']))
 {
	 $kode = $_GET['kode'];
	 if ($kode == 'tampiljadwal')
	 {
		include('tampiljadwalpelajaransiswa.php'); 
	 }
	 else if ($kode == 'tampildiskusi')
	 {
		include('tampildiskusisiswa.php'); 
	 }
	 else if ($kode == 'jawabdiskusi')
	 {
		include('jawabdiskusi.php'); 
	 }
	 else if ($kode == 'ambilhasiltugas')
	 {
		include('tampilhasiltugas.php'); 
	 }
	 else if ($kode == 'tampiltugas')
	 {
		include('tampiltugassiswa.php'); 
	 }
	 else if ($kode == 'jawabtugas')
	 {
		include('jawabtugas.php'); 
	 }
	 else if ($kode == 'ambilrapor')
	 {
		include('raporsiswa.php'); 
	 }
 }
?>

<script src="admin/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="admin/sbadmin/js/sb-admin-2.min.js"></script>

</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/teacher-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:11:35 GMT -->
</html>