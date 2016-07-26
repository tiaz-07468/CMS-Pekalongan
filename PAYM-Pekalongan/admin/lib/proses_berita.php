<?php
	include_once "function.php";
	print_r($_FILES);
	print_r($_POST);
	$penyunting=$_POST['penyunting'];
	$judul=$_POST['judul'];
	$berita=$_POST['berita'];
	$tanggal=date("Y-m-d");
	$fileName = $_FILES['foto']['name'];
	$fileSize = $_FILES['foto']['size'];
	$fileError = $_FILES['foto']['error'];

	if($fileSize > 0 || $fileError==0){
		$con->inputBerita($penyunting,$judul,$berita,$tanggal,$fileName);
		$move = move_uploaded_file($_FILES['foto']['tmp_name'], '../../images/berita/'.$fileName);	
	}else{
		echo "Gagal mengupload file: ".$fileError;
	}
	$status="Input Data";
	header("location:../index.php");
?>


