<?php
     if (!isset($_GET["nama"]) || !isset($_GET["email"]) || !isset($_GET["isimapel"]) || !isset($_GET["password"])|| !isset($_GET["kodeunikguru"]))
 {
	 die("");
 }
	 $nama = $_GET['nama'];
	 $email = $_GET['email'];
	 $isimapel = $_GET['isimapel'];
     $passwordguru = $_GET['password'];
	 $kodeunikguru = $_GET['kodeunikguru'];
	 require("koneksisekolah.php");
	 $queryhitung = "SELECT count(*) FROM guru ";
	 $hasilhitung = $mysqli->query($queryhitung) or die("Error: ".$mysqli->error);
	 $data = $hasilhitung->fetch_row();
	 $totalData = $data[0];
	 $nomorid = $totalData + 1;
	 $query = "SELECT * FROM cekkode WHERE kodeguru='$kodeunikguru'";
	 $hasil = $mysqli->query($query) or die ("Error: ". $mysqli->error);
	 if ($hasil->num_rows > 0)
     {
	    $queryi = "INSERT INTO guru VALUES('$nomorid', '$nama', '$email', '$isimapel', '$passwordguru', '$kodeunikguru')";
	    $hasilq = $mysqli->query($queryi);
		if (!$hasilq)
		{
		  echo $mysqli->error."<a href='javascript:window.history.back()'>Kembali</a>";
		}
		else
		{
		  echo '<script type="text/javascript">alert("Penyimpanan Berhasil"); window.location.href="registerguru.php";</script>';
		} 
     }
	 else 
	 {
	   echo '';
	 }
	 $mysqli->close();
?>