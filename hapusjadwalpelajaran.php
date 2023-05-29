<?php
 $id=$_GET['id'];
 require("koneksisekolah.php");
 $sql = "SELECT * FROM jadwalpelajaran WHERE id='$id'";
 $hasil = $mysqli->query($sql) or die("Error: ". $mysqli->error);
 if ($hasil->num_rows == 0)
 {
	die("ID $id tidak ditemukan!");
 }
 $sqldel = "DELETE FROM jadwalpelajaran WHERE id='$id'";
 $hasildel = $mysqli->query($sqldel) or die("Error: ". $mysqli->error);
 if ($mysqli->affected_rows > 0)
 {
	 echo "ID $id berhasil dihapus";
 }
 else
 {
	 echo "ID $id gagal dihapus";
 }
 $mysqli->close();
?>