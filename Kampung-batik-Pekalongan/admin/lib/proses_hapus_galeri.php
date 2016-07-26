<?php
	include_once "function.php";
	
	$id_galeri = $_GET['kunci'];
	$con->hapusGaleri($id_galeri);

	header("location:../index.php");
?>
