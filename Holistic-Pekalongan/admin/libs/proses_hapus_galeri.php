<?php
	include_once "function.php";
	$id = $_GET['kunci'];
		
	$con->hapusGaleri($id);
	header("location:../portfolio.php");
?>