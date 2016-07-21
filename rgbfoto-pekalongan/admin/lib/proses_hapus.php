<?php
	include_once "function.php";
	$id_news = $_GET['kunci'];

	$con->hapusBerita($id_news);
	
	header("location:../index.php");
	
?>