
<?php
	include_once "connection.php";

	class Fungsi extends Connection{
			function authLogin($username,$password){
				$stmt = $this->DBH->prepare('select * from login where username =? ');
				$stmt->execute(array($username));
				$user = $stmt->fetch(PDO::FETCH_OBJ);

				if($user != null && md5($password) == $user->password){
					header('location:index.php');
						setcookie('username',$user->username, time()+(3600));
						setcookie('nama', $user->nama, time()+(3600));
						setcookie('id_login',$user->id_login, time()+(3600));
				}else{
					header('location:login.php?err=incorrect');
				}

			}

			function inputGaleri($judul,$caption,$fileName){
				$stmt = $this->DBH->prepare('insert into galeri values(null,?,?,?)');
				$stmt -> execute(array($judul,$caption,$fileName));
			}

			function tampilGaleri(){
				$stmt = $this->DBH->query('select * from galeri');
				return $stmt;
			}

			function hapusGaleri($id_galeri){
				$stmt = $this->DBH->prepare('delete from galeri where id_galeri=?');
				$stmt->execute(array($id_galeri));

			}


			function inputBerita($penyunting,$judul,$berita,$tanggal,$fileName,$foto){
				$stmt = $this->DBH->prepare('insert into berita_paym values(null,?,?,?,?,?)');
				$stmt -> execute(array($penyunting,$judul,$berita,$tanggal,$fileName));
			}

			function tampilBerita(){
				$stmt = $this->DBH->query('select * from berita_paym');
				return $stmt;
			}

			function selectBerita($id_berita){
				$stmt = $this->DBH-> prepare('select * from berita_paym where id_berita=?');
				$stmt->execute(array($id_berita));
				return $stmt->fetch();
			}

			function hapusBerita($id_berita){
				$stmt = $this->DBH->prepare('delete from berita_paym where id_berita=?');
				$stmt->execute(array($id_berita));

			}

			function editBerita($judul, $berita, $id_berita){
				$stmt = $this->DBH->prepare('update berita_paym set judul=?,berita=? where id_berita=?');
				$stmt->execute(array($judul,$berita,$id_berita));
			}

			function kirimFeedback($nama, $email, $pesan){
				try{
					$stmt = $this->DBH->prepare('insert into feedback values(null,?,?,?)');
					$stmt -> execute(array($nama, $email, $pesan));					
				}catch(PDOException $e){
					echo $e->getMessage();
				}
			}

			function tampilFeedback(){
				$stmt = $this->DBH->query('select * from feedback');
				return $stmt;
			}



			
	}
		$con = new Fungsi();


?>