<?php
	include_once "connection.php";

	class Fungsi extends Connection {
		function authLogin($username,$password){
			$stmt = $this->DBH->prepare('select * from user_login where username = ?');
			$stmt->execute(array($username));
			$user = $stmt->fetch(PDO::FETCH_OBJ);		

			if($user != null && md5($password) == $user->password){
			    header('location:index.php');
			        setcookie('username', $user->username, time()+(3600));
			        setcookie('nama', $user->nama, time()+(3600));
			        setcookie('id', $user->id, time()+(3600));
			} else {
			    header('location:login.php?err=incorrect');
			}
		}

		function inputBerita($judul,$berita,$penulis,$tanggal){
			$stmt = $this->DBH->prepare('insert into berita_terkini values(null,?,?,?,?)');
			$stmt->execute(array($judul,$berita,$penulis,$tanggal));

		}
		function inputGaleri($judul,$caption,$penulis,$lokasi,$tanggal){
			$stmt = $this->DBH->prepare('insert into galeri values(null,?,?,?,?,?)');
			$stmt->execute(array($judul,$caption,$penulis,$lokasi,$tanggal));

		}
		function getBerita($id){
			$stmt = $this->DBH->prepare('select * from berita_terkini where id_berita = ?');
			$stmt->execute(array($id));
			return $stmt->fetch();

		}
		function tampilGaleri(){
			$stmt = $this->DBH->query('select * from galeri');
			return $stmt;
		}

	}

	$con = new Fungsi();
?>