<?php

	include_once "connection.php";

	class Fungsi extends connection
	{
		function authLogin($username,$password)
		{
			$stmt = $this->DBH->prepare('select * from user_login where username =?');
			$stmt->execute(array($username));
			$user = $stmt->fetch(PDO::FETCH_OBJ);

			if($user != null && md5($password) == $user->password)
			{
				header('location:index.php');
				setcookie('username', $user->username, time()+(3600));
				setcookie('nama', $user->nama, time()+(3600));
				setcookie('id', $user->id, time()+(3600));
			}
			else
			{
				header('location:login.php?err=incorrect');
			}
		}

		function inputBerita($judul, $fileName, $isi_berita, $penulis, $tanggal)
		{
			try {
				$stmt = $this->DBH->prepare('insert into berita values(null,?,?,?,?,?)');
				$stmt -> execute(array($judul, $fileName, $isi_berita, $penulis, $tanggal));				
				return true;
			}catch(PDOException $e){
				echo $e->getMessage();
			}

		}

		function inputGaleri($jns_gambar, $fileName, $tanggal)
		{
			$stmt = $this->DBH->prepare('insert into galeri values(null,?,?,?)');
			$stmt -> execute(array($jns_gambar, $fileName, $tanggal));	
		}

		function tampilGaleri()
		{
			$stmt = $this->DBH->query('select* from galeri');
			return $stmt;
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

		function editBerita($judul, $isi_berita, $id_berita)
		{
			$stmt = $this->DBH->prepare('update berita set judul=?, isi_berita=? where id_berita=?');
			$stmt -> execute(array($judul, $isi_berita, $id_berita));
		}

		function inputPesan($nama, $email, $pesan)
		{
			$stmt = $this->DBH->prepare('insert into feedback values(null,?,?,?)');
			$stmt -> execute(array($nama, $email, $pesan));	
		}

		function tampilPesan()
		{
			$stmt = $this->DBH->query('select * from feedback');
			return $stmt;
		}

		function hapusGaleri($id_galeri)
		{
			$stmt = $this->DBH->prepare('delete from galeri where id_galeri=?');
			$stmt->execute(array($id_galeri));
		}


	}
		$con = new Fungsi();

?>