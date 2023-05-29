<?php
 $id = $_GET['id'];
 require("koneksisekolah.php");
 $sql = "SELECT * FROM jadwalpelajaran WHERE id='$id'";
 $hasil = $mysqli->query($sql) or die("Error: ". $mysqli->error);
 if ($hasil->num_rows == 0)
 {
	die("ID tidak ditemukan!");
 }
 $data = $hasil->fetch_row();
 $mysqli->close();
?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Edit Jadwal Pelajaran</h4>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Edit Jadwal Pelajaran</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" name = "formedit" id = "formedit">
							    <div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">ID</label>
										<div>
											<input class="form-control" type="text" name="id" id = "id" value="<?php echo $data[0] ?>" readonly>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Hari</label>
										<div>
											<input class="form-control" type="text" name = "hari" id = "hari" value="<?php echo $data[1] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-5">
										<label class="col-form-label">Nama Guru</label>
										<div>
											<input class="form-control" type="text" name = "namaguru" id = "namaguru" value="<?php echo $data[2] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-5">
										<label class="col-form-label">Mata Pelajaran</label>
										<div>
											<input class="form-control" type="text" name = "matapelajaran" id = "matapelajaran" value="<?php echo $data[3] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Waktu Pelajaran</label>
										<div>
											<input class="form-control" type="text" name = "waktupelajaran" id = "waktupelajaran" value="<?php echo $data[4] ?>">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-2">
										<label class="col-form-label">Kelas</label>
										<div>
											<input class="form-control" type="text" name = "kelas" id = "kelas" value="<?php echo $data[5] ?>">
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
$("#formedit").submit(function(e){
e.preventDefault(); 
$.ajax({
type : "POST",
url : "simpaneditjadwalpelajaran.php",  
data : $("#formedit").serialize() 
})
.done(function(hasil){
		bootbox.alert({
           title: "Hasil edit jadwal pelajaran",
		   message: hasil,
		   callback: function(result){
			   window.location.href = "dashboard-admin.php?kode=tampiljadwalpelajaran";
		   }
		});
})
fail(function(jqXHR, textStatus) {
		 alert( "Request gagal: " + textStatus);
	 });
});
});
</script>