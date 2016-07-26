<?php
	include_once "function.php";
	
	$nama = $_POST['nama'];
	$jadwal = $_POST['jadwal'];
	$id = $_POST['id'];
		
	$con->editJadwal($nama, $jadwal,$id);
	header("location:../jadwal.php");
?>