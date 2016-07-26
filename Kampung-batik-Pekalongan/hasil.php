<?php
	include_once "admin/lib/function.php";
	$data = $con -> selectBerita($_POST['id']);
	echo '<img src=images/berita/'.$data['foto'].' />';
	echo $data['judul']."<br />";
	echo $data['berita']."<br />";
?>