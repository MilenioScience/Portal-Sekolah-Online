<?php
 session_start();
 if (!isset($_SESSION['nama']))
 {
	 echo "<script>alert('Anda belum login, silahkan login lebih dulu!')</script>";
	 echo "<script>window.location.replace('login.php')</script>";
	 die();
 }
 session_destroy();
 echo "<script>alert('Berhasil Logout!')</script>";
 echo "<script>window.location.replace('login.php')</script>";
?>