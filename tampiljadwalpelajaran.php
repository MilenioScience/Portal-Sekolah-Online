<main class="ttr-wrapper">
 <div class="container-fluid">
  <div class="db-breadcrumb">
  <h4 class="breadcrumb-title">Jadwal Pelajaran</h4>
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
	      <th>Hari</th>
	      <th>Nama Guru</th>
	      <th>Mata Pelajaran</th>
	      <th>Waktu Pelajaran</th>
	      <th>Kelas</th>
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
 function KonfirmasiHapus(x)
 {
	 bootbox.confirm({
		 title: "Konfirmasi",
		 message: "ID " + x + " dihapus?",
		 callback: function(result){
			 if (result == true)
			 {
				 $.ajax({
					 type: "GET",
					 url: "hapusjadwalpelajaran.php",
					 data: { "id" : x },
				 })
				 .done(function(hasilProses) {
					 bootbox.alert({
						 title: "Hasil Penghapusan",
						 message: hasilProses,
						 callback: function(result){
							 window.location.href = "dashboard-admin.php?kode=tampiljadwalpelajaran";
						 }
					 });
				 })
				 .fail(function(jqXHR, textStatus) {
					 alert("Request gagal: " + textStatus);
				 });
			 }
		 }
	 });
 }
 $(document).ready(function()
 {
	 var dataTable = $('#tb1Anggota').DataTable( 
	 {
		 "processing": true,
		 "serverSide": true,
		 "bSort": false,
		 "ajax":
		 {
			 url : "ambiljadwalpelajaran.php",
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
