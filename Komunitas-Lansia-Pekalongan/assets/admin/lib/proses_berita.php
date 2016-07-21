<?php
	include_once "function.php";
	$judul=$_POST['judul'];
	$berita=$_POST['berita'];
	$penulis=$_POST['penulis'];
	$tanggal=date("Y-m-d");

	$con->inputBerita($judul,$berita,$penulis,$tanggal);

	header("location:../index.php");
?>