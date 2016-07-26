<?php
	include_once "libs/function.php";
	$nama=$_POST['nama'];
	$jadwal=$_POST['jadwal'];

	$con->inputJadwal($nama,$jadwal);

	header("location:jadwal.php");
?>