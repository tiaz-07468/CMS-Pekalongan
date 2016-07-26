<?php
	include_once "function.php";
	$nama = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];

	$fileName = $_FILES['gmbr']['name'];
	$fileSize = $_FILES['gmbr']['size'];
	$fileError = $_FILES['gmbr']['error'];

	if($fileSize > 0 || $fileError == 0){
		$con->inputProduk($nama, $fileName, $keterangan);
		$move = move_uploaded_file($_FILES['gmbr']['tmp_name'],'../produk/'.$fileName);
	}else{
		echo "Gagal Upload : ".$fileError;
	}
		$status = "Input Data";
	?>

	<div class='row'>
		<div class="col-lg-12">
			<div class="form-group">
				<h2>Berhasil <? $status; ?></h2>
			</div>
		</div>
	</div>
	<?php header("location:../produk.php");
?>
