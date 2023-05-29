<?php
session_start();
$namasiswa = $_SESSION['namasiswa'];
$kelas = $_SESSION['kelas'];
$hari=$_GET['hari'];
$isian=$_GET['isian'];
if ($isian == '')
 {
	 die("");
 }
require("koneksisekolah.php");
$queryhitung = "SELECT count(*) FROM jawabandiskusi ";
$hasilhitung = $mysqli->query($queryhitung) or die("Error: ".$mysqli->error);
$data = $hasilhitung->fetch_row();
$totalData = $data[0];
$nomorid = $totalData + 1;
$query = "INSERT INTO jawabandiskusi VALUES ('$nomorid', '$hari', '$namasiswa', '$isian', '$kelas')";
$hasil = $mysqli->query($query); 
if (!$hasil)
{ echo "Error: " . $mysqli->error; 
}
else
{ echo "sukses";
}
$mysqli->close(); 