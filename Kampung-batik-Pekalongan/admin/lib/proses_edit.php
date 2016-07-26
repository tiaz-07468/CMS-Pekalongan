<?php
	include_once "function.php";

	print_r($_POST);	
	$judul_berita = $_POST['judul'];
	$isi_berita = $_POST['berita'];
	$id_berita = $_POST['id_berita'];

	$con->editBerita($judul_berita,$isi_berita,$id_berita);
	header("location:../index.php");



?>