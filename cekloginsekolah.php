<?php
 if (!isset($_GET["isian"]) || !isset($_GET["password"]))
 {
	 die("");
 }
 $isiannama = $_GET["isian"];
 $isianemail = $_GET["isian"];
 $passwordlogin = $_GET["password"];
 require("koneksisekolah.php");
 $querysiswa = "SELECT * FROM siswa WHERE nama='$isiannama' AND passwordsiswa='$passwordlogin'";
 $queryguru = "SELECT * FROM guru WHERE email='$isianemail' AND passwordguru='$passwordlogin'";
 $hasilsiswa = $mysqli->query($querysiswa) or die ("Error: ". $mysqli->error);
 $hasilguru = $mysqli->query($queryguru) or die ("Error: ". $mysqli->error);
 if ($hasilsiswa->num_rows > 0)
 {
	 $data = $hasilsiswa->fetch_row();
	 $id = $data[0];
	 $nama = $data[1];
	 $kelas = $data[2];
	 session_start();
	 $_SESSION['idsiswa'] = $id;
	 $_SESSION['namasiswa'] = $nama;
	 $_SESSION['kelas'] = $kelas;
	 $_SESSION['statussiswa'] = 'siswa';
	 echo 'siswa';
 }
 if ($hasilguru->num_rows > 0)
 {
	 $data = $hasilguru->fetch_row();
	 $id = $data[0];
	 $nama = $data[1];
	 $isimapel = $data[3];
	 session_start();
	 $_SESSION['idguru'] = $id;
	 $_SESSION['namaguru'] = $nama;
	 $_SESSION['isimapel'] = $isimapel;
	 $_SESSION['statusguru'] = 'guru';
	 echo 'guru';
 }
 if (($isiannama == 'admin') and ($isiannama == 'admin'))
 {
	 session_start();
	 $_SESSION['statusadmin'] = 'admin';
	 echo 'admin';
 }
 else
 {
	 echo '';
 }
 $mysqli->close();
?>