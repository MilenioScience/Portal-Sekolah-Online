<?php
$hari=$_GET['hari'];
$namaguru=$_GET['namaguru'];
$matapelajaran=$_GET['matapelajaran'];
$waktupelajaran=$_GET['waktupelajaran'];
$kelas=$_GET['kelas'];
if (($hari == '') || ($namaguru == '') || ($matapelajaran == '') || ($waktupelajaran == '') || ($kelas == ''))
 {
	 die("");
 }
require("koneksisekolah.php");
$queryhitung = "SELECT count(*) FROM jadwalpelajaran ";
$hasilhitung = $mysqli->query($queryhitung) or die("Error: ".$mysqli->error);
$data = $hasilhitung->fetch_row();
$totalData = $data[0];
$nomorid = $totalData + 1;
$query = "INSERT INTO jadwalpelajaran (id, hari, namaguru, matapelajaran, waktupelajaran, kelas) VALUES ('$nomorid', '$hari', '$namaguru', '$matapelajaran',
'$waktupelajaran', '$kelas')";
$hasil = $mysqli->query($query); 
if (!$hasil)
{ echo "Error: " . $mysqli->error; 
}
else
{ echo "<table width='100%' border='0'>";
echo "<tr><td>ID:</td><td>$nomorid</td></tr>";
echo "<tr><td>Hari:</td><td>$hari</td></tr>";
echo "<tr><td>Nama Guru:</td><td>$namaguru</td></tr>";
echo "<tr><td>Mata Pelajaran</td><td>$matapelajaran</td></tr>";
echo "<tr><td>Waktu Pelajaran:</td><td>$waktupelajaran</td></tr>";
echo "<tr><td>Kelas:</td><td>$kelas</td></tr>";
echo "</table>";
}
$mysqli->close(); 
?>