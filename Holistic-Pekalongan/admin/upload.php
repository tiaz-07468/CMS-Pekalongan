<?php
require "libs/function.php";
$target_dir="gallery/";
$target_file=$target_dir.basename($_FILES["photo"]["name"]);
$uploadOk=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
$source=$_FILES['photo']['tmp_name'];

if(isset($_POST["submit"])){
	if($imageFileType == "jpg" || $imageFileType == "JPG" || $imageFileType == "png" || $imageFileType == "jpeg"){
		move_uploaded_file($source, $target_file);
		$uploadOk=1;
	}else{
		echo "File not an image.";
		$uploadOk=0;
	}
	if($uploadOk==1){
		extract($_POST);
		print_r($_FILES);
		$func = new Fungsi();
		if($func->addGallery($caption,$target_file)){
			$msg = "Berhasil Upload!";
			header("location:portfolio.php");
		}else {
			$msg = "Gagal";
			header("location:portfolio.php");
		}
		echo $msg;
	}
}

?>