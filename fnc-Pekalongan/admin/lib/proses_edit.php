<?php
	include_once "function.php";

	$jdl_berita = $_POST['jdl_berita'];
	$isi_berita = $_POST['isi_berita'];
	$id_berita = $_POST['id_berita'];

	$con->editBerita($jdl_berita, $isi_berita, $id_berita);

	header("location:../index.php?p=data");

?>