<?php
session_start();
$matapelajaran=$_SESSION['isimapel'];
$namasiswa=$_POST['namasiswa'];
$kelas=$_POST['kelas'];
$nilaitugas=$_POST['nilaiuh'];
$nilaiuh=$_POST['nilaiuh'];
$nilaiuts=$_POST['nilaiuts'];
$nilaiuas=$_POST['nilaiuas'];
if (($namasiswa == '') || ($kelas == '') || ($nilaitugas == '') || ($nilaiuh == '') || ($nilaiuts == '') || ($nilaiuas == ''))
 {
	 die("");
 }
require("koneksisekolah.php");
$queryhitung = "SELECT count(*) FROM rapor ";
$hasilhitung = $mysqli->query($queryhitung) or die("Error: ".$mysqli->error);
$data = $hasilhitung->fetch_row();
$totalData = $data[0];
$nomorid = $totalData + 1;
$nilaiakhir = (0.1*$nilaitugas) + (0.2*$nilaiuh) + (0.35*$nilaiuts) + (0.35*$nilaiuas);
$query = "INSERT INTO rapor VALUES ('$nomorid', '$namasiswa', '$kelas', '$matapelajaran', '$nilaitugas', '$nilaiuh', '$nilaiuts',
'$nilaiuas', '$nilaiakhir')";
$hasil = $mysqli->query($query); 
if (!$hasil)
{ echo "Error: " . $mysqli->error; 
}
else
{ echo "Rapor telah dibuat";
}
$mysqli->close(); 
?>