<?php
class Connection {
	function __construct (){
		$host='localhost';
		$data='website';
		$user='root';	
		$pass='';
		try{
			$this->DBH = new PDO ("mysql:dbname=$data; host=$host;",$user, $pass);
		}catch(PDOException $e){
			echo $e->getMessage();
		}


	}
}

?>