<?php
 session_start();
 $_SESSION['statusguru'] = '';
 echo "<script>alert('Berhasil Logout!')</script>";
 echo "<script>window.location.replace('login.php')</script>";
?>