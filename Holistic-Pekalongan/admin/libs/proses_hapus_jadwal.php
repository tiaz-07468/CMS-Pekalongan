<?php
	include_once "function.php";
	$id = $_GET['kunci'];
		
	$con->hapusJadwal($id);
	header("location:../jadwal.php");
?>