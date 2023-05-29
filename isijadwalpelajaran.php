<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Entry Jadwal Pelajaran</h4>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Entry Jadwal Pelajaran</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method = "GET" name = "formisi" id = "formisi">
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Hari</label>
										<div>
											<input class="form-control" type="text" name = "hari" id = "hari">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-5">
										<label class="col-form-label">Nama Guru</label>
										<div>
											<input class="form-control" type="text" name = "namaguru" id = "namaguru">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-5">
										<label class="col-form-label">Mata Pelajaran</label>
										<div>
											<input class="form-control" type="text" name = "matapelajaran" id = "matapelajaran">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Waktu Pelajaran</label>
										<div>
											<input class="form-control" type="text" name = "waktupelajaran" id = "waktupelajaran">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Kelas</label>
										<div>
											<input class="form-control" type="text" name = "kelas" id = "kelas">
										</div>
									</div>
								</div>
								<div class = "row">
									<div class="col-12">
										<button type="submit" class="btn">Submit</button>
										<button type="reset" class="btn-secondry">Reset</button>
									</div>
								</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
<script type="text/javascript">
$(document).ready(function(){
$("#formisi").submit(function(e){
e.preventDefault(); 
$.ajax({
type : "GET",
url : "simpanjadwalpelajaran.php",  
data : $("#formisi").serialize() 
})
.done(function(hasil){
	if (hasil != '')
	{
		bootbox.alert({
           title: "Hasil entry jadwal pelajaran",
		   message: hasil
		});
	}
	else 
	{
		bootbox.alert({
				title : 'Entry Tidak Berhasil',
				message : 'Isikan semua isian dengan benar!'
			});	
	}
})
.fail(function(jqXHR, textStatus) {
		 alert( "Request gagal: " + textStatus);
	 });
});
});
</script>