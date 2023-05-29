<?php
 session_start();
 $hari= $_GET['hari'];
 $kelas= $_GET['kelas'];
 $_SESSION['harijawaban'] = $hari;
 $_SESSION['kelasjawaban'] = $kelas;
 require("koneksisekolah.php");
 $sql = "SELECT * FROM jawabandiskusi WHERE hari='$hari' AND kelas='$kelas'";
 $hasil = $mysqli->query($sql) or die("Error: ". $mysqli->error);
 if ($hasil->num_rows == 0)
 {
	die("Data tidak ditemukan!");
 }
 $data = $hasil->fetch_row();
 $mysqli->close();
?>
<main class="ttr-wrapper">
 <div class="container-fluid">
  <div class="db-breadcrumb">
  <h4 class="breadcrumb-title">Jawaban Diskusi</h4>
  </div>	
  <div class="row">
   <div class="col-lg-12 m-b30">
    <div class="widget-box">
	 <div class="widget-inner">
      <div class = "box-body">
       <div class = "table-responsive">
        <table id = "tb1Anggota" class = "table table-striped table-bordered table-hover">
         <thead class = "thead-inverse">
	      <tr>
	      <th>ID</th>
		  <th>Nama Siswa</th>
	      <th>Jawaban</th>
		  <th>Action</th>
	      </tr>
	     </thead>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</main>
 <script type="text/javascript">
 $(document).ready(function()
 {
	 var dataTable = $('#tb1Anggota').DataTable( 
	 {
		 "processing": true,
		 "serverSide": true,
		 "bSort": false,
		 "ajax":
		 {
			 url : "ambiljawabandiskusiguru.php",
			 type : "post",
			 error : function()
			 {
				 $(".lookup-error").html("");
				 $("#tb1Anggota").append('<tbody class = "employee-grid-error"><tr><th colspan = "7"> Data Tidak Ditemukan</th></tr></tbody>');
				 $("#lookup_processing").css("display","none");
			 }
		 }
	 });
 });
</script>
