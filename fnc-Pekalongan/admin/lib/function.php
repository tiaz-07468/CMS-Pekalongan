<?php

	include_once "connection.php";

	class Fungsi extends connection
	{
		function authLogin($username,$password)
		{
			$stmt = $this->DBH->prepare('select * from login where username =?');
			$stmt->execute(array($username));
			$user = $stmt->fetch(PDO::FETCH_OBJ);

			if($user != null && md5($password) == $user->password)
			{
				header('location:index.php');
				setcookie('username', $user->username, time()+(3600));
				setcookie('email', $user->email, time()+(3600));
				setcookie('id_login', $user->id_login, time()+(3600));
			}
			else
			{
				header('location:login.php?err=incorrect');
			}
		}

		function inputPesan($nama, $email, $pesan)
		{
			$stmt = $this->DBH->prepare('insert into pesan values(null,?,?,?)');
			$stmt -> execute(array($nama, $email, $pesan));	
		}

		function tampilPesan()
		{
			$stmt = $this->DBH->query('select * from pesan');
			return $stmt;
		}

		function inputGaleri($judul, $tanggal, $fileName)
		{
			$stmt = $this->DBH->prepare('insert into galeri values(null,?,?,?)');
			$stmt -> execute(array($judul, $tanggal, $fileName));	
		}

		function tampilGaleri()
		{
			$stmt = $this->DBH->query('select * from galeri');
			return $stmt;
		}

		function hapusGaleri($id_galeri)
		{
			$stmt = $this->DBH->prepare('delete from galeri where id_galeri=?');
			$stmt->execute(array($id_galeri));
		}

		function inputBerita($jdl_berita, $isi_berita, $penulis, $tgl_berita, $fileName)
		{
				$stmt = $this->DBH->prepare('insert into berita values(null,?,?,?,?,?)');
				$stmt -> execute(array($jdl_berita, $isi_berita, $penulis, $tgl_berita, $fileName));				
		}

		

		function tampilBerita()
		{
			$stmt = $this->DBH->query('select * from berita');
			return $stmt;
		}

		function selectBerita($id_berita){
				$stmt = $this->DBH->prepare('select * from berita where id_berita=?');
				$stmt->execute(array($id_berita));				
				return $stmt->fetch();	
		}

		

		function hapusBerita($id_berita)
		{
			$stmt = $this->DBH->prepare('delete from berita where id_berita=?');
			$stmt->execute(array($id_berita));
		}

		function editBerita($jdl_berita, $isi_berita, $id_berita)
		{
			$stmt = $this->DBH->prepare('update berita set jdl_berita=?, isi_berita=? where id_berita=?');
			$stmt -> execute(array($jdl_berita, $isi_berita, $id_berita));
		}
		
		


	}
		$con = new Fungsi();

?>