<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Rapor</h4>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Rapor</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" name = "formbuatrapor" id = "formbuatrapor">
							    <div class="row">
									<div class="form-group col-6">
										<label class="col-form-label">Nama Siswa</label>
										<div>
											<input class="form-control" type="text" name = "namasiswa" id = "namasiswa">
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
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Nilai Tugas</label>
										<div>
											<input class="form-control" type="text" name = "nilaitugas" id = "nilaitugas">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Nilai Ulangan Harian</label>
										<div>
											<input class="form-control" type="text" name = "nilaiuh" id = "nilaiuh">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Nilai UTS</label>
										<div>
											<input class="form-control" type="text" name = "nilaiuts" id = "nilaiuts">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Nilai UAS</label>
										<div>
											<input class="form-control" type="text" name = "nilaiuas" id = "nilaiuas">
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
$("#formbuatrapor").submit(function(e){
e.preventDefault(); 
$.ajax({
type : "POST",
url : "simpanbuatrapor.php",  
data : $("#formbuatrapor").serialize() 
})
.done(function(hasil){
	if (hasil != '')
	{
		bootbox.alert({
           title: "Hasil Buat Rapor",
		   message: hasil
		});
	}
	else 
	{
		bootbox.alert({
				title : 'Rapor Tidak Berhasil Dibuat',
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