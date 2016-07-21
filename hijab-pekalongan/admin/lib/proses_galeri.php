<?php
	include_once "function.php";
	$fileName = $_FILES['gmbr']['name'];
	$fileSize = $_FILES['gmbr']['size'];
	$fileError = $_FILES['gmbr']['error'];
	$jns_gambar = $_POST['jns_gambar'];
	$tanggal = date("Y-m-d");

	if($fileSize > 0 || $fileError==0)
	{
		$con->inputGaleri($jns_gambar, $fileName, $tanggal);
		$move = move_uploaded_file($_FILES['gmbr']['tmp_name'],'../../images/'.$fileName); 
	}else
	{
		echo "Gagal mengupload file : ".$fileError;
	}
		$status = "Input Data";
	?>

		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<h2>Berhasil <? $status; ?> </h2>
				</div>
			</div>
		</div>
	<?php	header("location:../index.php");
?>