<?php
	require_once "../Namer/Traits.php";
	require_once "../Namer/Interfaces.php";
	
	class UserRegistry implements Register{
		use DatabaseConnection;
		
		private array $userData;		
		function __construct(string $nome, string $email, string $senha){
			$this->userData = [$nome, $email, $senha];
		}
		function registryHe() :bool{
			$query = $this->conn->prepare("insert into 'usuarios'(Name, Email, Password) values (?,?,?)");
			if($query->execute($this->userData) == 1) return true;
			return false;
		}
	}
?>