<?php
session_start();
$hari=$_GET['hari'];
$isian=$_GET['isian'];
$kelas=$_GET['kelas'];
$namaguru = $_SESSION['namaguru'];
$namamapel = $_SESSION['isimapel'];
if (($hari == '') || ($isian == '') || ($kelas == ''))
 {
	 die("");
 }
require("koneksisekolah.php");
$querysimpan = "SELECT count(*) FROM buatdiskusi ";
$hasilsimpan = $mysqli->query($querysimpan) or die("Error: ".$mysqli->error);
$data = $hasilsimpan->fetch_row();
$totalData = $data[0];
$nomorid = $totalData + 1;
$query = "INSERT INTO buatdiskusi VALUES ('$nomorid', '$hari', '$namaguru', '$namamapel', '$isian', '$kelas')";
$hasil = $mysqli->query($query); 
if (!$hasil)
{ echo "Error: " . $mysqli->error; 
}
else
{ echo "sukses";
}
$mysqli->close(); 