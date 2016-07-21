<?php
	include_once "admin/lib/function.php";
	$data = $con-> selectBerita($_POST['id']);
	echo '<img src=img/berita/>'.$data['foto'].'/>';
	echo $data['jdl_news']."<br />";
	echo $data['isi_berita']."<br />";
?>