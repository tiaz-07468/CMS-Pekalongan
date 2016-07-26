<?php
	include_once "function.php";
	$idkritik = $_GET['kunci'];
		
	$con->hapusKritik($idkritik);
	header("location:../index.php");
?>