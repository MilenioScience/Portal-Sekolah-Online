<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Buat Diskusi</h4>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="email-wrapper">
							<div class="mail-list-container">
								<form class="mail-compose" id="formdiskusi">
									<div class="row">
									 <div class="form-group col-2">
									  <label class="col-form-label">Hari</label>
									    <div>
										 <input class="form-control" type="text" name = "hari" id = "hari">
										</div>
									 </div>
									</div>
									<div class="row">
									 <div class="form-group col-8">
									  <label class="col-form-label">Masukkan diskusi</label>
									  <textarea class="form-control" rows="4" name="isian" id="isian"></textarea>
									 </div>
									</div>
									<div class="row">
									 <div class="form-group col-2">
									  <label class="col-form-label">Untuk kelas</label>
									    <div>
										 <input class="form-control" type="text" name = "kelas" id = "kelas">
										</div>
									 </div>
									</div>
									<div class="row">
									 <div class="form-group col-12">
									  <button type="submit" class="btn">Send</button>
									 </div>
									</div>
								</form>
							</div>
						</div>
					</div> 
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
				<!-- Your Profile Views Chart END-->
		</div>
	</main>
<script type="text/javascript">
$(document).ready(function(){
$("#formdiskusi").submit(function(e){
e.preventDefault(); 
$.ajax({
type : "GET",
url : "simpanisiandiskusi.php",  
data : $("#formdiskusi").serialize() 
})
.done(function(hasil){
	if (hasil != '')
	{
		bootbox.alert({
           title: "Diskusi berhasil dibuat",
		   message: hasil
		});
	}
	else 
	{
		bootbox.alert({
				title : 'Diskusi tidak berhasil dibuat',
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