<?php
 $isian=$_POST['isian'];
 require("koneksisekolah.php"); 
 $query = "INSERT INTO isianemail VALUES ('$isian')";
 $hasil = $mysqli->query($query); 
 if (!$hasil)
 { echo "Error: " . $mysqli->error; 
 }
 else
 {
	 echo $isian;
 }
 $mysqli->close();
?>