<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Buat UAS</h4>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Buat UAS</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" name = "formbuattugas" id = "formbuattugas">
							    <div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Untuk Hari</label>
										<div>
											<input class="form-control" type="text" name = "hari" id = "hari">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Untuk Kelas</label>
										<div>
											<input class="form-control" type="text" name = "kelas" id = "kelas">
										</div>
									</div>
								</div>
								<div class="row">
									 <div class="form-group col-8">
									  <label class="col-form-label">Soal</label>
									  <textarea class="form-control" rows="4" name="soal" id="soal"></textarea>
									 </div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Pilihan A</label>
										<div>
											<input class="form-control" type="text" name = "pilihana" id = "pilihana">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Pilihan B</label>
										<div>
											<input class="form-control" type="text" name = "pilihanb" id = "pilihanb">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Pilihan C</label>
										<div>
											<input class="form-control" type="text" name = "pilihanc" id = "pilihanc">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Pilihan D</label>
										<div>
											<input class="form-control" type="text" name = "pilihand" id = "pilihand">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Kunci Jawaban</label>
										<div>
											<input class="form-control" type="text" name = "kuncijawaban" id = "kuncijawaban">
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
$("#formbuattugas").submit(function(e){
e.preventDefault(); 
$.ajax({
type : "POST",
url : "simpanbuatuas.php",  
data : $("#formbuattugas").serialize() 
})
.done(function(hasil){
	if (hasil != '')
	{
		bootbox.alert({
           title: "Hasil Buat Tugas",
		   message: hasil
		});
	}
	else 
	{
		bootbox.alert({
				title : 'Buat Tugas Tidak Berhasil',
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