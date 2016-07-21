<?php
	include_once "function.php";
	$caption = $_POST['caption'];
	$tanggal = date("Y-m-d");
	$fileName = $_FILES['foto']['name'];
	$fileSize = $_FILES['foto']['size'];
	$fileError = $_FILES['foto']['error'];
	

	if($fileSize > 0 || $fileError==0)
	{
		$con->inputGaleri($caption, $tanggal, $fileName);
		$move = move_uploaded_file($_FILES['foto']['tmp_name'],'../../img/galeri/'.$fileName); 
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
	<?php	header("location:../index.php?p=galeri");
?>