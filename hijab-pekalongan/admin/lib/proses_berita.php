<?php
	include_once "function.php";
	$judul = $_POST['judul'];
	$fileName = $_FILES['foto']['name'];
	$fileSize = $_FILES['foto']['size'];
	$fileError = $_FILES['foto']['error'];
	$isi_berita = $_POST['isi_berita'];
	$penulis = $_POST['penulis'];
	$tanggal = date("Y-m-d");

	if($fileSize > 0 || $fileError==0)
	{
		$con->inputBerita($judul,$fileName,$isi_berita,$penulis,$tanggal);
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
	header("location:../index.php");
?>