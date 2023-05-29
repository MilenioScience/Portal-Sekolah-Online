<?php
session_start();
$idsiswa = $_SESSION['idsiswa'];
$namasiswa = $_SESSION['namasiswa'];
$kelas = $_SESSION['kelas'];
$idsoal=$_GET['idsoal'];
$isian=$_GET['isian'];
if ($isian == '')
 {
	 die("");
 }
require("koneksisekolah.php");
$queryhitung = "SELECT count(*) FROM jawabansiswa ";
$hasilhitung = $mysqli->query($queryhitung) or die("Error: ".$mysqli->error);
$data = $hasilhitung->fetch_row();
$totalData = $data[0];
$nomorid = $totalData + 1;
$query = "INSERT INTO jawabansiswa VALUES ('$nomorid', '$idsiswa', '$idsoal', '$isian')";
$hasil = $mysqli->query($query); 
if (!$hasil)
{ echo "Error: " . $mysqli->error; 
}
else
{ echo "sukses";
}
$mysqli->close(); 