<?php
	include_once "connection.php";

	class Fungsi extends Connection{
		function authLogin($username,$password){
			$stmt = $this->DBH->prepare('select * from user_login where username = ?');
			$stmt->execute(array($username));
			$user = $stmt->fetch(PDO::FETCH_OBJ);

			if($user != null && md5($password) == $user->password){
				header('location:index.php');
					setcookie('username',$user->username,time()+(3600));
					setcookie('nama',$user->nama, time()+(3600));
					setcookie('id', $user->id, time()+(3600));
			}else{
				header('location:login.php?err=incorrect');
			}
		}

		function addGallery($caption,$photo){
			$stmt = $this->DBH->prepare('insert into galeri values(NULL, :caption, :photo)');
			$stmt->execute(array(':caption'=>$caption, 
								 ':photo'=>$photo));
		}

		function getGallery(){
			/*$stmt = $this->DBH->prepare('select * from galeri');
			$stmt->execute();
			while($r = $stmt->fetch(PDO::FETCH_ASSOC)){
				$data[] = $r;
			}
			return $data;*/

			$stmt = $this->DBH->query('select * from galeri');
			return $stmt;
		}

		function hapusGaleri($id){
			$stmt = $this->DBH->prepare('delete from galeri where id=?');
			$stmt->execute(array($id));
		}

		function inputBerita($judul,$berita,$tanggal){
			$stmt = $this->DBH->prepare('insert into berita values(null,?,?,?)');
			$stmt->execute(array($judul,$berita,$tanggal));
		}

		function getBerita(){
			$stmt = $this->DBH->query('select * from berita');
			return $stmt;
		}

		function inputJadwal($nama,$jadwal){
			$stmt = $this->DBH->prepare('insert into dokter values(null,?,?)');
			$stmt->execute(array($nama,$jadwal));
		}

		function getJadwal(){
			$stmt = $this->DBH->query('select * from dokter');
			return $stmt;
		}

		function selectJadwal($id){
			$stmt = $this->DBH->prepare('select * from dokter where id=?');
			$stmt->execute(array($id));

			return $stmt->fetch();
		}

		function hapusJadwal($id){
			$stmt = $this->DBH->prepare('delete from dokter where id=?');
			$stmt->execute(array($id));
		}

		function editJadwal($nama,$jadwal,$id){
			$stmt = $this->DBH->prepare('update dokter set nama_dokter=?, jadwal=? where id=?');
			$stmt -> execute(array($nama,$jadwal,$id));
		}

		function inputKritik($nama,$email,$pesan){
			$stmt = $this->DBH->prepare('insert into kritik values(null,?,?,?)');
			$stmt->execute(array($nama,$email,$pesan));
		}

		function tampilKritik(){
			$stmt = $this->DBH->query('select * from kritik');
			return $stmt;
		}

		function inputProduk($nama_produk,$fileName,$keterangan){
			$stmt = $this->DBH->prepare('insert into produk values(null,?,?,?)');
			$stmt -> execute(array($nama_produk,$fileName,$keterangan));
		}

		function tampilProduk(){
			$stmt = $this->DBH->query('select * from produk');
			return $stmt;
		}

		function selectProduk($id){
			$stmt = $this->DBH->prepare('select * from produk where id=?');
			$stmt->execute(array($id));

			return $stmt->fetch();
		}

		function editProduk($nama_produk,$keterangan,$id){
			$stmt = $this->DBH->prepare('update produk set nama_produk=?, keterangan=? where id=?');
			$stmt -> execute(array($nama_produk,$keterangan,$id));
		}

		function hapusProduk($id){
			$stmt = $this->DBH->prepare('delete from produk where id=?');
			$stmt->execute(array($id));
		}

		function hapusKritik($id_keritik){
			$stmt = $this->DBH->prepare('delete from kritik where id_keritik=?');
			$stmt->execute(array($id_keritik));
		}

		
	}

	$con = new Fungsi();
?>