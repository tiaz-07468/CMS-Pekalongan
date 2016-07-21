<?php
	include_once "function.php";
	$id_berita = $_GET['kunci'];

	$con->hapusBerita($id_berita);
	
	header("location:../index.php");
	
?>