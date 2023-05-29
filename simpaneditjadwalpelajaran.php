<?php
$id=$_POST['id'];
$hari=$_POST['hari'];
$namaguru=$_POST['namaguru'];
$matapelajaran=$_POST['matapelajaran'];
$waktupelajaran=$_POST['waktupelajaran'];
$kelas=$_POST['kelas'];
require("koneksisekolah.php"); 
$query = "UPDATE jadwalpelajaran SET hari='$hari', namaguru='$namaguru', matapelajaran='$matapelajaran', waktupelajaran='$waktupelajaran', kelas='$kelas' WHERE id='$id'";
$hasil = $mysqli->query($query); 
if (!$hasil)
{ echo "Error: " . $mysqli->error; 
}
else if ($mysqli->affected_rows == 0)
{
	echo "Data tidak berubah";
}
else
{ echo "<table width='100%' border='0'>";
echo "<tr><td>Hari:</td><td>$hari</td></tr>";
echo "<tr><td>Nama Guru:</td><td>$namaguru</td></tr>";
echo "<tr><td>Mata Pelajaran</td><td>$matapelajaran</td></tr>";
echo "<tr><td>Waktu Pelajaran:</td><td>$waktupelajaran</td></tr>";
echo "<tr><td>Kelas:</td><td>$kelas</td></tr>";
echo "</table>";
}
$mysqli->close(); 
?>