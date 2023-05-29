<?php
 if (!isset($_POST["isian"]) || !isset($_POST["password"]))
 {
	 die("");
 }
 $isiannama = $_POST["isian"];
 $isianemail = $_POST["isian"];
 $passwordlogin = $_POST["password"];
 require("koneksisekolah.php");
 $querysiswa = "SELECT * FROM siswa WHERE nama='$isiannama' AND passwordsiswa='$passwordlogin'";
 $queryguru = "SELECT * FROM guru WHERE email='$isianemail' AND passwordguru='$passwordlogin'";
 $hasilsiswa = $mysqli->query($querysiswa) or die ("Error: ". $mysqli->error);
 $hasilguru = $mysqli->query($queryguru) or die ("Error: ". $mysqli->error);
 if ($hasilsiswa->num_rows > 0)
 {
	 $data = $hasilsiswa->fetch_row();
	 $nama = $data[0];
	 session_start();
	 $_SESSION['nama'] = $nama;
	 echo 'siswa';
 }
 if ($hasilguru->num_rows > 0)
 {
	 $data = $hasilguru->fetch_row();
	 $nama = $data[0];
	 session_start();
	 $_SESSION['nama'] = $nama;
	 echo 'guru';

 }
 else
 {
	 echo '';
 }
 $mysqli->close();
?>