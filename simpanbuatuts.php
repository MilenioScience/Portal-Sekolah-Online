<?php
session_start();
$hari=$_POST['hari'];
$namaguru=$_SESSION['namaguru'];
$matapelajaran=$_SESSION['isimapel'];
$kelas=$_POST['kelas'];
$soal=$_POST['soal'];
$pilihana=$_POST['pilihana'];
$pilihanb=$_POST['pilihanb'];
$pilihanc=$_POST['pilihanc'];
$pilihand=$_POST['pilihand'];
$kuncijawaban=$_POST['kuncijawaban'];
if (($hari == '') || ($kelas == '') || ($soal == '') || ($pilihana == '') || ($pilihanb == '') || ($pilihanc == '') || ($pilihand == '') || ($kuncijawaban == ''))
 {
	 die("");
 }
require("koneksisekolah.php");
$queryhitung = "SELECT count(*) FROM buatuts ";
$hasilhitung = $mysqli->query($queryhitung) or die("Error: ".$mysqli->error);
$data = $hasilhitung->fetch_row();
$totalData = $data[0];
$nomorid = $totalData + 1;
$query = "INSERT INTO buatuts VALUES ('$nomorid', '$hari', '$namaguru', '$matapelajaran', '$kelas', '$soal',
'$pilihana', '$pilihanb', '$pilihanc', '$pilihand', '$kuncijawaban')";
$hasil = $mysqli->query($query); 
if (!$hasil)
{ echo "Error: " . $mysqli->error; 
}
else
{ echo "Soal UTS Telah Dibuat";
}
$mysqli->close(); 
?>