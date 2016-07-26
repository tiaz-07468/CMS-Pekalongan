<?php
	include_once "function.php";
	$fileName = $_FILES['gmbr']['name'];
	$fileSize = $_FILES['gmbr']['size'];
	$fileError = $_FILES['gmbr']['error'];
	$judul=$_POST['judul'];
	$penyunting=$_POST['penyunting'];
	$caption=$_POST['caption'];
	$tanggal=date("Y-m-d");

	if($fileSize > 0 || $fileError==0){
		$con->inputGaleri($judul,$penyunting,$fileName,$caption,$tanggal);
		$move = move_uploaded_file($_FILES['gmbr']['tmp_name'], '../../images/galeri/'.$fileName);	
	}else{
		echo "Gagal mengupload file: ".$fileError;
	}
		$status="Input Data";
		header("location:../index.php");
	?>
			<div class="row">
				<div class="col-lg-12">
					<div class="form-group">
						<h2>Berhasil <?php echo $status; ?> </h2>
					</div>
				</div>
			</div>

