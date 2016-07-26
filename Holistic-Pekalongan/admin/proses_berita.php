<?php
	include_once "libs/function.php";
	$judul=$_POST['judul'];
	$berita=$_POST['berita'];
	$tanggal=date("Y-m-d");

	$con->inputBerita($judul,$berita,$tanggal);

	header("location:berita.html");
?>