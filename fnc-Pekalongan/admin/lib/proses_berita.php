<?php
	include_once "function.php";
	$jdl_berita = $_POST['jdl_berita'];
	$isi_berita = $_POST['isi_berita'];
	$penulis = "admin";
	$tanggal = date("Y-m-d");
	$fileName = $_FILES['foto']['name'];
	$fileSize = $_FILES['foto']['size'];
	$fileError = $_FILES['foto']['error'];
	
	if($fileSize > 0 || $fileError==0)
	{
		$con->inputBerita($jdl_berita,$isi_berita,$penulis,$tanggal,$fileName);
		$move = move_uploaded_file($_FILES['foto']['tmp_name'],'../../images/berita/'.$fileName); 
	}else
	{
		echo "Gagal mengupload file : ".$fileError;
	}
		$status = "Input Data";
	?>

		<div class="row">
			<div class="col-lg-12">
				<div class="form-group">
					<h2>Berhasil <?php echo $status; ?> </h2>
				</div>
			</div>
		</div>
	<?php	
	header("location:../index.php?p=berita");
?>