<?php
 $idsoal = $_GET['idsoal'];
 require("koneksisekolah.php");
 $sql = "SELECT * FROM buatsoal WHERE idsoal='$idsoal'";
 $hasil = $mysqli->query($sql) or die("Error: ". $mysqli->error);
 if ($hasil->num_rows == 0)
 {
	die("ID Soal tidak ditemukan!");
 }
 $data = $hasil->fetch_row();
 $mysqli->close();
?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Jawab</h4>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="email-wrapper">
							<div class="mail-list-container">
								<form class="mail-compose" id="formjawabtugas">
									<div class="row">
									 <div class="form-group col-2">
									  <label class="col-form-label">ID Soal</label>
										<div>
											<input class="form-control" type="text" name = "idsoal" id = "idsoal" value="<?php echo $data[0] ?>" readonly>
										</div>
									 </div>
								    </div>
									<div class="row">
									 <div class="form-group col-2">
									  <label class="col-form-label">Jawaban</label>
										<div>
											<input class="form-control" type="text" name = "isian" id = "isian">
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
$("#formjawabtugas").submit(function(e){
e.preventDefault(); 
$.ajax({
type : "GET",
url : "simpanjawabtugas.php",  
data : $("#formjawabtugas").serialize() 
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