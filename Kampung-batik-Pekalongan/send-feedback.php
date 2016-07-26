<?php 
	include_once "admin/lib/connection.php";
	include_once "admin/lib/function.php";

	if(isset($_POST['kirim'])){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pesan	= $_POST['pesan'];

	$con->kirimFeedback($nama, $email,$pesan);

	header("location:index.php");

	}

?>