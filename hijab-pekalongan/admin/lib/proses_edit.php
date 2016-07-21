<?php
	include_once "function.php";

	$judul = $_POST['judul'];
	$isi_berita = $_POST['isi_berita'];
	$id_berita = $_POST['id_berita'];

	$con->editBerita($judul, $isi_berita, $id_berita);

	header("location:../index.php?p=data");

?>