<?php	
	trait DatabaseConnection{		
		private PDO $conn;
		private function connec(){
			$this->conn =  new PDO("mysql:dbname=etica;host=localhost;charset=UTF8",'root','');			
		}	
	}	
?>