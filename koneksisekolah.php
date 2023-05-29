<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "sekolah"; // pilih database sesuai dengan nama database
 
 // perintah buat koneksi
 $mysqli = new mysqli($server, $user, $password, $database); // variabel dengan nama $mysqli hanya sebuah penamaan, nama variabel ini dapat diubah sesuai keinginan
 
 // perintah periksa koneksi
 if ($mysqli->connect_error)
 {
	 die("Koneksi Gagal: ". $mysqli->connect_error);
 }
?>