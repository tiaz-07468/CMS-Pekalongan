<?php
	include_once "function.php";
	$id_gal = $_GET['kunci'];

	$con->hapusGaleri($id_gal);
	
	header("location:../index.php?p=galeri");
	
?>