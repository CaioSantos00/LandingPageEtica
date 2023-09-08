<?php
	trait DatabaseConnection{
		private $dbName = "etica";
		private PDO $conn = new PDO('mysql:dbname={$this->dbName};host=localhost;charset=UTF8','root','');
	}
?>