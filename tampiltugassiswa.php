<main class="ttr-wrapper">
 <div class="container-fluid">
  <div class="db-breadcrumb">
  <h4 class="breadcrumb-title">Tugas</h4>
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
	      <th>Hari</th>
		  <th>Nama Guru</th>
		  <th>Mata Pelajaran</th>
		  <th>ID Soal</th>
		  <th>Soal</th>
	      <th>Pilihan A</th>
		  <th>Pilihan B</th>
		  <th>Pilihan C</th>
		  <th>Pilihan D</th>
		  <th>Action</th>
	      </tr>
	     </thead>
        </table>
       </div>
      </div>
	   <input type="submit" class="btn" name="submit" id="submit"></button>
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
			 url : "ambilisiantugassiswa.php",
			 type : "post",
			 error : function()
			 {
				 $(".lookup-error").html("");
				 $("#tb1Anggota").append('<tbody class = "employee-grid-error"><tr><th colspan = "7"> Data Tidak Ditemukan</th></tr></tbody>');
				 $("#lookup_processing").css("display","none");
			 }
		 }
	 });
	 $("#submit").click(function(){
	 $.ajax({
	 type : "GET",
	 url : "proseskoreksitugas.php",   
	 })
	 .done(function(hasil){
		if (hasil != '')
		{
		 bootbox.alert({
            title: "Jawaban telah dikirimkan",
			message: hasil
		 });
		}
	 else 
	 {
		bootbox.alert({
				title : 'Jawaban tidak berhasil dikirimkan',
				message : 'Isian tidak boleh kosong!'
			});	
	 }
	})
	.fail(function(jqXHR, textStatus) {
		 alert( "Request gagal: " + textStatus);
	});
  });
 });
</script>
