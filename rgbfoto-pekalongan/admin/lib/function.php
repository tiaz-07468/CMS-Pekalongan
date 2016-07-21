<?php

	include_once "connection.php";

	class Fungsi extends connection
	{
		function authLogin($username,$password)
		{
			$stmt = $this->DBH->prepare('select * from t_login where username =?');
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

		function inputBerita($jdl_news, $isi_berita, $penulis, $tgl_news, $fileName)
		{
			try {
				$stmt = $this->DBH->prepare('insert into news values(null,?,?,?,?,?)');
				$stmt -> execute(array($jdl_news, $isi_berita, $penulis, $tgl_news,$fileName));				
				return true;
			}catch(PDOException $e){
				echo $e->getMessage();
			}

		}

		function inputGaleri($caption, $tanggal, $fileName)
		{
			$stmt = $this->DBH->prepare('insert into gal_rgb values(null,?,?,?)');
			$stmt -> execute(array($caption, $tanggal, $fileName));	
		}

		function tampilGaleri()
		{
			$stmt = $this->DBH->query('select * from gal_rgb');
			return $stmt;
		}

		function tampilBerita()
		{
			$stmt = $this->DBH->query('select * from news');
			return $stmt;
		}

		function selectBerita($id_news){
				$stmt = $this->DBH->prepare('select * from news where id_news=?');
				$stmt->execute(array($id_news));				
				return $stmt->fetch();	
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

		function hapusBerita($id_news)
		{
			$stmt = $this->DBH->prepare('delete from news where id_news=?');
			$stmt->execute(array($id_news));
		}

		function editBerita($jdl_news, $isi_berita, $id_news)
		{
			$stmt = $this->DBH->prepare('update news set jdl_news=?, isi_berita=? where id_news=?');
			$stmt -> execute(array($jdl_news, $isi_berita, $id_news));
		}
		
		function hapusGaleri($id_gal)
		{
			$stmt = $this->DBH->prepare('delete from gal_rgb where id_gal=?');
			$stmt->execute(array($id_gal));
		}


	}
		$con = new Fungsi();

?>