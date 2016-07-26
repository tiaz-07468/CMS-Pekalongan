<?php
	include_once "function.php";
	
	$nama_produk = $_POST['nama_produk'];
	$keterangan = $_POST['keterangan'];
	$id = $_POST['id'];
		
	$con->editProduk($nama_produk, $keterangan,$id);
	header("location:../produk.php");
?>