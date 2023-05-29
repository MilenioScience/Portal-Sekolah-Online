<?php
	 $nama = $_GET['nama'];
	 $kelas = $_GET['kelas'];
     $passwordsiswa = $_GET['password'];
	 if (($nama == '') || ($kelas == '') || ($passwordsiswa == ''))
	 {
		 die("");
	 }
	 require("koneksisekolah.php");
	 $queryhitung = "SELECT count(*) FROM siswa ";
	 $hasilhitung = $mysqli->query($queryhitung) or die("Error: ".$mysqli->error);
	 $data = $hasilhitung->fetch_row();
	 $totalData = $data[0];
	 $nomorid = $totalData + 1;
	 $query = "INSERT INTO siswa VALUES('$nomorid', '$nama', '$kelas', '$passwordsiswa')";
	 $hasil = $mysqli->query($query);
	 if (!$hasil)
	 {
	  echo $mysqli->error."<a href='javascript:window.history.back()'>Kembali</a>";
	 }
	 else
	 {
	  echo '<script type="text/javascript">alert("Penyimpanan Berhasil"); window.location.href="registersiswa.php";</script>';
	 }
	 $mysqli->close();
?>