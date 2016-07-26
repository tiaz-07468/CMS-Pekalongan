<?php
	include_once "function.php";
	$id = $_GET['kunci'];
		
	$con->hapusProduk($id);
	header("location:../produk.php");
?>