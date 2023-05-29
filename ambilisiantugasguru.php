<?php
 session_start();
 require 'koneksisekolah.php';
 $requestData = $_REQUEST; // dapatkan semua parameter pencarian
 
 // dapatkan banyaknya semua record
 $namaguru = $_SESSION['namaguru'];
 $mapel = $_SESSION['isimapel'];
 $sql = "SELECT count(*) FROM buatsoal ";
 $hasil = $mysqli->query($sql) or die("Error: ".$mysqli->error);
 $data = $hasil->fetch_row();
 $totalData = $data[0];
 $totalFilter = $totalData;
 
 $parameter = $requestData['search']['value']; // isi search box
 $start = $requestData['start']; // berisi nomor awal baris
 $length = $requestData['length']; //berisi limit pencarian
 
 if(empty($parameter)) // jika search box kosong
 {
	 $sql = "SELECT hari, kelas, soal, pilihana, pilihanb, pilihanc, pilihand ";
	 $sql .= "FROM buatsoal ";
	 $sql .= "WHERE namaguru='$namaguru' AND mapel='$mapel' ";
	 $sql .= "LIMIT $start, $length ";
	 $hasil = $mysqli->query($sql) or die("Error: ".$mysqli->error);
 }
 else // jika ada isi dalam search box
 {
	 $sql = "SELECT hari, kelas, soal, pilihana, pilihanb, pilihanc, pilihand ";
	 $sql .= "FROM buatsoal ";
	 $sql .= "WHERE namaguru='$namaguru' AND mapel='$mapel' ";
	 $hasil = $mysqli->query($sql) or die("Error: ".$mysqli->error); // eksekusi query tanpa limit
	 
	 $totalFilter = $hasil->num_rows; // bila ada parameter pencarian
	 
	 $sql .= " LIMIT $start, $length ";
	 $hasil = $mysqli->query($sql) or die("Error: ".$mysqli->error); // eksekusi query dengan limit
 }
 
 $data = array(); // array penampung data per table
 WHILE($row = $hasil->fetch_row())
 {
	 $nestedData = array(); // siapkan array penampung untuk per baris
	 $nestedData[] = $row[0];
	 $nestedData[] = $row[1];
	 $nestedData[] = $row[2];
	 $nestedData[] = $row[3];
	 $nestedData[] = $row[4];
	 $nestedData[] = $row[5];
	 $nestedData[] = $row[6];
	 $nestedData[] = '<a href="?kode=lihattugas"<button type="button" class="btn btn-primary">Lihat</button></a>';
	 $data[] = $nestedData;
 }
 
 $jsondata = array(
 "draw" => intval($requestData['draw']), // suatu angka yang dikirim method DataTable(), dan dikembalikan lagi ke DataTable()
 "recordsTotal" => intval($totalData), // banyaknya record di tabel
 "recordsFiltered" => intval($totalFilter), // banyaknya record hasil pencarian, jika tidak ada pencarian  maka $totalfilter = $totaldata
 "data" => $data // array berisi data yang ditemukan
 );
 echo json_encode($jsondata); // kirim data dalam format json
?>